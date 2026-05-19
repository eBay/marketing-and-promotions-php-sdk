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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_metadata\Item;

/**
 * This call retrieves metadata that details the fields used by a specific Promoted Listings report type. Use the <b>report_type</b> path parameter to indicate metadata to retrieve.<br/><br/>This method does not use a request payload.<br/><br/><span class="tablenote"><b>Note:</b> The reporting of some data related to sales and ad-fees may require a 72-hour (<b>maximum</b>) adjustment period which is often referred to as the <i>Reconciliation Period</i>. Such adjustment periods should, on average, be minimal. However, at any given time, the <b>payments</b> tab may be used to view those amounts that have actually been charged.</span>
*/
class WithReport_typeItemRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $channel The channel used in the report. The channel must be compatible with the report type specified in the path parameter. Refer to the <a href="/api-docs/sell/marketing/types/pls:ChannelEnum">ChannelEnum</a> type for supported values. <br><br><span class="tablenote"><b>Note:</b> The channel parameter is only applicable for COST_PER_CLICK funding model.</span>
    */
    public ?string $channel = null;
    
    /**
     * @QueryParameter("funding_model")
     * @var string|null $fundingModel The funding model used in the report. The funding model must be compatible with the report type specified in the path parameter. Refer to the <a href="/api-docs/sell/marketing/types/pls:FundingModelEnum">FundingModelEnum</a> type for supported values.
    */
    public ?string $fundingModel = null;
    
    /**
     * Instantiates a new WithReport_typeItemRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $channel The channel used in the report. The channel must be compatible with the report type specified in the path parameter. Refer to the <a href="/api-docs/sell/marketing/types/pls:ChannelEnum">ChannelEnum</a> type for supported values. <br><br><span class="tablenote"><b>Note:</b> The channel parameter is only applicable for COST_PER_CLICK funding model.</span>
     * @param string|null $funding_model The funding model used in the report. The funding model must be compatible with the report type specified in the path parameter. Refer to the <a href="/api-docs/sell/marketing/types/pls:FundingModelEnum">FundingModelEnum</a> type for supported values.
    */
    public function __construct(?string $channel = null, ?string $funding_model = null) {
        $this->channel = $channel;
        $this->fundingModel = $funding_model;
    }

}
