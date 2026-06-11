<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace EBay\MarketingAndPromotions;

use EBay\MarketingAndPromotions\Clients\Rest\MarketingClient;
use EBay\MarketingAndPromotions\Clients\Rest\RecommendationClient;
use EBay\MarketingAndPromotions\Configuration\MarketingAndPromotionsConfiguration;
use GuzzleHttp\Client as GuzzleClient;
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

        $this->marketing = new MarketingClient($guzzle, $config);
        $this->recommendation = new RecommendationClient($guzzle, $config);
    }

    /**
     * Build the shared Guzzle client, adding an optional diagnostic middleware
     * that logs non-2xx responses to STDERR.
     */
    private static function buildGuzzleClient(MarketingAndPromotionsConfiguration $config): GuzzleClient
    {
        $stack = KiotaClientFactory::getDefaultHandlerStack();

        if ($config->diagnosticLogging) {
            $stack->push(static function (callable $handler): callable {
                return static function (RequestInterface $request, array $options) use ($handler): mixed {
                    $promise = $handler($request, $options);
                    return $promise->then(static function (ResponseInterface $response) use ($request): ResponseInterface {
                        $status = $response->getStatusCode();
                        if ($status < 200 || $status >= 300) {
                            $method = $request->getMethod();
                            $uri    = str_replace(["\r", "\n"], ' ', (string) $request->getUri());
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
