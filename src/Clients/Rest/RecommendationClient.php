<?php

namespace EBay\MarketingAndPromotions\Clients\Rest;

use EBay\MarketingAndPromotions\Configuration\HeadersContext;
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

    /**
     * Merge default + per-call headers and publish them to HeadersContext so the
     * Guzzle middleware (installed in the facade) can inject them on the wire.
     */
    private function applyHeaders(?RequestOptions $requestOptions): void
    {
        $merged = $this->config->defaultRequestOptions->headers;
        if ($requestOptions !== null) {
            foreach ($requestOptions->headers as $key => $value) {
                if (!array_key_exists($key, $merged)) {
                    $merged[$key] = $value;
                }
            }
        }
        HeadersContext::set($merged);
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
        $this->applyHeaders($requestOptions);
        $config = new FindRequestBuilderPostRequestConfiguration(
            queryParameters: FindRequestBuilderPostRequestConfiguration::createQueryParameters(
                filter: $filter,
                limit: $limit,
                offset: $offset,
            )
        );
        return $this->kiota->find()->post($body, $config)->wait();
    }
}
