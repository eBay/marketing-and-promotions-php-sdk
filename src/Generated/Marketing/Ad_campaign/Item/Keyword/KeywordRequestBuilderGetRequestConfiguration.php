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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Keyword;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class KeywordRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var KeywordRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?KeywordRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new KeywordRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param KeywordRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?KeywordRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new KeywordRequestBuilderGetQueryParameters.
     * @param string|null $ad_group_ids A comma-separated list of ad group IDs. This query parameter is used if the seller wants to retrieve keywords from one or more specific ad groups. If this query parameter is not used, all keywords that are part of the CPC campaign are returned.<br><br>Use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-getadgroups">getAdGroups</a>  method to retrieve the ad group IDs for a seller.
     * @param string|null $keyword_status A comma-separated list of keyword statuses. The results will be filtered to only include the given statuses of the keyword. If none are provided, all keywords are returned.<br><br>See <a href="/develop/api/sell/marketing_api#sell-marketing_api-keyword-getkeywords.keywordstatusenum">KeywordStatusEnum</a> for supported values.
     * @param string|null $limit <p>Specifies the maximum number of results to return on a page in the paginated response.</p>  <b>Default: </b>10 <br><b>Maximum: </b> 500
     * @param string|null $offset Specifies the number of results to skip in the result set before returning the first report in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
     * @return KeywordRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $ad_group_ids = null, ?string $keyword_status = null, ?string $limit = null, ?string $offset = null): KeywordRequestBuilderGetQueryParameters {
        return new KeywordRequestBuilderGetQueryParameters($ad_group_ids, $keyword_status, $limit, $offset);
    }

}
