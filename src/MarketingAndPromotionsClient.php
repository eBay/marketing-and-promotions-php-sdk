<?php

namespace EBay\MarketingAndPromotions;

use EBay\MarketingAndPromotions\Clients\Rest\MarketingClient;
use EBay\MarketingAndPromotions\Clients\Rest\RecommendationClient;
use EBay\MarketingAndPromotions\Configuration\HeadersContext;
use EBay\MarketingAndPromotions\Configuration\KiotaAuthProvider;
use EBay\MarketingAndPromotions\Configuration\MarketingAndPromotionsConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\MarketingApiClient;
use EBay\MarketingAndPromotions\Generated\Recommendation\RecommendationApiClient;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware as GuzzleMiddleware;
use GuzzleHttp\Utils;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;
use Microsoft\Kiota\Http\KiotaClientFactory;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

final class MarketingAndPromotionsClient
{
    public readonly MarketingClient $marketing;
    public readonly RecommendationClient $recommendation;

    public function __construct(
        MarketingAndPromotionsConfiguration $config,
        ?GuzzleClient $guzzle = null
    ) {
        $guzzle ??= self::buildGuzzleClient($config);

        $auth = new BaseBearerTokenAuthenticationProvider(new KiotaAuthProvider($config));

        $marketingAdapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $marketingAdapter->setBaseUrl($config->marketingBaseUrl);
        $this->marketing = new MarketingClient(new MarketingApiClient($marketingAdapter), $config);

        $recommendationAdapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $recommendationAdapter->setBaseUrl($config->recommendationBaseUrl);
        $this->recommendation = new RecommendationClient(new RecommendationApiClient($recommendationAdapter), $config);
    }

    /**
     * Build the shared Guzzle client, adding:
     *  - A headers-injection middleware that reads from HeadersContext on every request.
     *  - An optional diagnostic middleware that logs non-2xx responses to STDERR.
     */
    private static function buildGuzzleClient(MarketingAndPromotionsConfiguration $config): GuzzleClient
    {
        $stack = KiotaClientFactory::getDefaultHandlerStack();

        // Inject per-request custom headers from HeadersContext (set by the REST clients).
        $stack->push(GuzzleMiddleware::mapRequest(static function (RequestInterface $request): RequestInterface {
            foreach (HeadersContext::get() as $name => $value) {
                if (!$request->hasHeader($name)) {
                    $request = $request->withHeader($name, $value);
                }
            }
            HeadersContext::clear();
            return $request;
        }), 'ebay_custom_headers');

        if ($config->diagnosticLogging) {
            $stack->push(static function (callable $handler): callable {
                return static function (RequestInterface $request, array $options) use ($handler): mixed {
                    $promise = $handler($request, $options);
                    return $promise->then(static function (ResponseInterface $response) use ($request): ResponseInterface {
                        $status = $response->getStatusCode();
                        if ($status < 200 || $status >= 300) {
                            $method = $request->getMethod();
                            $uri    = (string) $request->getUri();
                            fwrite(STDERR, sprintf(
                                "[MarketingAndPromotions] %s %s => HTTP %d\n",
                                $method,
                                $uri,
                                $status
                            ));
                        }
                        return $response;
                    });
                };
            }, 'ebay_diagnostic_logging');
        }

        return new GuzzleClient([
            'handler'         => $stack,
            'timeout'         => 30,
            'connect_timeout' => 5,
        ]);
    }
}
