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
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions?->headers ?? []
        );
    }

    public function findListingRecommendations(
        FindListingRecommendationRequest $body,
        ?string $filter = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null
    ): ?PagedListingRecommendationCollection {
        return TokenContext::runWith($accessToken, fn() => $this->kiota->find()->post($body, new FindRequestBuilderPostRequestConfiguration(
            headers: $this->mergedHeaders($requestOptions),
            queryParameters: FindRequestBuilderPostRequestConfiguration::createQueryParameters(
                filter: $filter,
                limit: $limit,
                offset: $offset,
            )
        ))->wait());
    }
}
