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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Get_campaign_by_name;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Get_campaign_by_nameRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Get_campaign_by_nameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Get_campaign_by_nameRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Get_campaign_by_nameRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Get_campaign_by_nameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Get_campaign_by_nameRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Get_campaign_by_nameRequestBuilderGetQueryParameters.
     * @param string|null $campaign_name This query parameter specifies name of the campaign being retrieved.<br><br> Use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> method to retrieve a list of a seller's campaign names.
     * @return Get_campaign_by_nameRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $campaign_name = null): Get_campaign_by_nameRequestBuilderGetQueryParameters {
        return new Get_campaign_by_nameRequestBuilderGetQueryParameters($campaign_name);
    }

}
