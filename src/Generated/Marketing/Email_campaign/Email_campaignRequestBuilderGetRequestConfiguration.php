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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Email_campaignRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Email_campaignRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Email_campaignRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Email_campaignRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Email_campaignRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Email_campaignRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Email_campaignRequestBuilderGetQueryParameters.
     * @param string|null $limit The maximum number of email campaigns returned in a page.<br><br><b>Min value</b>: 1<br><br><b>Max value</b>: 200
     * @param string|null $offset The number of results to skip in a pagination query. This value cannot be less than zero.<br><br><b>Default value</b>: 0
     * @param string|null $q This field contains filter criteria for the results returned. Filter by <a href="/api-docs/sell/marketing/types/api:CampaignTypeEnum">email campaign type</a>, <a href="/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum">email campaign status</a>, and <a href="/api-docs/sell/marketing/types/ba:MarketplaceIdEnum">marketplace ID</a>.<br><br>For example, setting <code>q=campaignType:WELCOME,ITEM_SHOWCASE</code> will return only Welcome and Item Showcase email campaigns.<br><br><span class="tablenote"><b>Note:</b> At least one <code>campaignType</code> value must be set through the <code>q</code> query parameter. If no other filters are set, all email campaigns for the specified campaign type(s) will be returned in the results set.</span>
     * @param string|null $sort The criteria for sorting email campaign results. See <a href="/api-docs/sell/marketing/types/api:ItemSortEnum" target="_blank">ItemSortEnum</a> for sorting options and their enum values.<br><br><b>Default</b>: <code>NEWLY_LISTED</code>
     * @return Email_campaignRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $limit = null, ?string $offset = null, ?string $q = null, ?string $sort = null): Email_campaignRequestBuilderGetQueryParameters {
        return new Email_campaignRequestBuilderGetQueryParameters($limit, $offset, $q, $sort);
    }

}
