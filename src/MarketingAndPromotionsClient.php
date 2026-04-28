<?php

namespace EBay\MarketingAndPromotions;

use EBay\MarketingAndPromotions\Clients\Rest\MarketingClient;
use EBay\MarketingAndPromotions\Clients\Rest\RecommendationClient;
use EBay\MarketingAndPromotions\Configuration\KiotaAuthProvider;
use EBay\MarketingAndPromotions\Configuration\MarketingAndPromotionsConfiguration;
use EBay\MarketingAndPromotions\Generated\Marketing\MarketingApiClient;
use EBay\MarketingAndPromotions\Generated\Recommendation\RecommendationApiClient;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class MarketingAndPromotionsClient
{
    public readonly MarketingClient $marketing;
    public readonly RecommendationClient $recommendation;

    public function __construct(
        MarketingAndPromotionsConfiguration $config,
        ?GuzzleClient $guzzle = null
    ) {
        $guzzle ??= new GuzzleClient([
            'timeout'         => 30,
            'connect_timeout' => 5,
        ]);

        $auth = new BaseBearerTokenAuthenticationProvider(new KiotaAuthProvider($config));

        $marketingAdapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $marketingAdapter->setBaseUrl($config->marketingBaseUrl);
        $this->marketing = new MarketingClient(new MarketingApiClient($marketingAdapter));

        $recommendationAdapter = new GuzzleRequestAdapter($auth, guzzleClient: $guzzle);
        $recommendationAdapter->setBaseUrl($config->recommendationBaseUrl);
        $this->recommendation = new RecommendationClient(new RecommendationApiClient($recommendationAdapter));
    }
}
