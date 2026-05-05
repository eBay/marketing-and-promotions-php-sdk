<?php

namespace EBay\MarketingAndPromotions\Clients\Rest;

use EBay\MarketingAndPromotions\Configuration\MarketingAndPromotionsConfiguration;
use EBay\MarketingAndPromotions\Configuration\RequestOptions;
use EBay\MarketingAndPromotions\Configuration\TokenContext;
use EBay\MarketingAndPromotions\Generated\Recommendation\RecommendationApiClient;
use EBay\MarketingAndPromotions\Generated\Recommendation\Models\FindListingRecommendationRequest;
use EBay\MarketingAndPromotions\Generated\Recommendation\Models\PagedListingRecommendationCollection;
use EBay\MarketingAndPromotions\Generated\Recommendation\Find\FindRequestBuilderPostRequestConfiguration;

final class RecommendationClient
{
    public function __construct(
        private readonly RecommendationApiClient $kiota,
        private readonly MarketingAndPromotionsConfiguration $config
    ) {}

    /** @return array<string,string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        $headers = $this->config->defaultRequestOptions->headers;
        foreach ($requestOptions?->headers ?? [] as $key => $value) {
            if (!array_key_exists($key, $headers)) {
                $headers[$key] = $value;
            }
        }
        return $headers;
    }

    public function findListingRecommendations(
        FindListingRecommendationRequest $body,
        ?string $filter = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?PagedListingRecommendationCollection {
        TokenContext::set($accessToken);
        $config = new FindRequestBuilderPostRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: FindRequestBuilderPostRequestConfiguration::createQueryParameters(
                filter: $filter,
                limit: $limit,
                offset: $offset,
            )
        );
        return $this->kiota->find()->post($body, $config)->wait();
    }
}
