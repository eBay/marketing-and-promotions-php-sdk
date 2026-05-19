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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Ad_groupRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Ad_groupRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Ad_groupRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Ad_groupRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Ad_groupRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Ad_groupRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Ad_groupRequestBuilderGetQueryParameters.
     * @param string|null $ad_group_status A comma-separated list of ad group statuses. The results will be filtered to only include the given statuses of the ad group.<br><br> See <a href="/api-docs/sell/marketing/types/pls:AdGroupStatusEnum" target="_blank">AdGroupStatusEnum</a> for supported values.
     * @param string|null $limit The number of results, from the current result set, to be returned in a single page.
     * @param string|null $offset The number of results that will be skipped in the result set. This is used with the <b>limit</b> field to control the pagination of the output.<br /><br />For example, if the <b>offset</b> is set to <code>0</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 1 through 10 from the list of items returned. If the <b>offset</b> is set to <code>10</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 11 through 20 from the list of items returned.<br><br><b>Default</b>: <code>0</code>
     * @return Ad_groupRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $ad_group_status = null, ?string $limit = null, ?string $offset = null): Ad_groupRequestBuilderGetQueryParameters {
        return new Ad_groupRequestBuilderGetQueryParameters($ad_group_status, $limit, $offset);
    }

}
