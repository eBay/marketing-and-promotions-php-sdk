<?php

namespace EBay\MarketingAndPromotions\Clients\Rest;

use EBay\MarketingAndPromotions\Configuration\TokenContext;
use EBay\MarketingAndPromotions\Generated\Recommendation\RecommendationApiClient;
use EBay\MarketingAndPromotions\Generated\Recommendation\Models\FindListingRecommendationRequest;
use EBay\MarketingAndPromotions\Generated\Recommendation\Models\PagedListingRecommendationCollection;

final class RecommendationClient
{
    public function __construct(private readonly RecommendationApiClient $kiota) {}

    public function findListingRecommendations(
        FindListingRecommendationRequest $body,
        ?string $accessToken = null
    ): ?PagedListingRecommendationCollection {
        TokenContext::set($accessToken);
        return $this->kiota->find()->post($body)->wait();
    }
}
