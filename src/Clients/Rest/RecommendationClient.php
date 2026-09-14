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

declare(strict_types=1);

namespace EBay\MarketingAndPromotions\Clients\Rest;

use EBay\MarketingAndPromotions\Configuration\KiotaAuthProvider;
use EBay\MarketingAndPromotions\Configuration\MarketingAndPromotionsConfiguration;
use EBay\MarketingAndPromotions\Configuration\RequestOptions;
use EBay\MarketingAndPromotions\Generated\Recommendation\RecommendationApiClient;
use EBay\MarketingAndPromotions\Generated\Recommendation\Models\FindListingRecommendationRequest;
use EBay\MarketingAndPromotions\Generated\Recommendation\Find\FindRequestBuilderPostRequestConfiguration;
use GuzzleHttp\Client as GuzzleClient;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;

final class RecommendationClient
{
    public function __construct(
        private readonly GuzzleClient $guzzle,
        private readonly MarketingAndPromotionsConfiguration $config,
    ) {}

    /** @return array<string, string> */
    private function mergedHeaders(?RequestOptions $requestOptions): array
    {
        return array_merge(
            $this->config->defaultRequestOptions->headers,
            $requestOptions !== null ? $requestOptions->headers : []
        );
    }

    public function findListingRecommendations(
        FindListingRecommendationRequest $body,
        ?string $filter = null,
        ?string $limit = null,
        ?string $offset = null,
        ?string $xEBAYCMARKETPLACEID = null,
        ?string $accessToken = null,
        ?RequestOptions $requestOptions = null,
    ): void
    {
        $headers = $this->mergedHeaders($requestOptions);
        if ($xEBAYCMARKETPLACEID !== null) {
            $headers["X-EBAY-C-MARKETPLACE-ID"] = $xEBAYCMARKETPLACEID;
        }
        $this->call($accessToken, fn($api) =>
            $api->find()->post(
                $body,
                new FindRequestBuilderPostRequestConfiguration(
                    headers: $headers,
                    queryParameters: FindRequestBuilderPostRequestConfiguration::createQueryParameters(
                        filter: $filter,
                        limit: $limit,
                        offset: $offset,
                    ),
                )
            )->wait()
        );
    }

    private function call(?string $accessToken, callable $op): mixed
    {
        $token = ($accessToken ?? $this->config->accessToken)
            ?: throw new \RuntimeException('No access token. Pass $accessToken per-call or set MarketingAndPromotionsConfiguration::$accessToken.');
        return $op($this->buildApiClient($token));
    }

    private function buildApiClient(string $token): RecommendationApiClient
    {
        $auth = new BaseBearerTokenAuthenticationProvider(
            new KiotaAuthProvider($token, $this->config->getAllowedHosts())
        );
        $adapter = new GuzzleRequestAdapter($auth, guzzleClient: $this->guzzle);
        $adapter->setBaseUrl($this->config->recommendationBaseUrl);
        return new RecommendationApiClient($adapter);
    }
}
