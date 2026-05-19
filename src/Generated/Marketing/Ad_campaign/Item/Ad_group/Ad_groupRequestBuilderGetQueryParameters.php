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

/**
 * <span class="tablenote"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href="/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests " target="_blank "> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href="/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility " target="_blank ">getAdvertisingEligibility</a> method in Account API.</span><br />This method retrieves ad groups for the specified campaigns.<br /><br />Each campaign can only have <b>one</b> ad group.<br /><br />In the request, supply the <b>campaign_ids</b> as path parameters.<br /><br />Call <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a> to retrieve a list of the current campaign IDs for a seller.
*/
class Ad_groupRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("ad_group_status")
     * @var string|null $adGroupStatus A comma-separated list of ad group statuses. The results will be filtered to only include the given statuses of the ad group.<br><br> See <a href="/api-docs/sell/marketing/types/pls:AdGroupStatusEnum" target="_blank">AdGroupStatusEnum</a> for supported values.
    */
    public ?string $adGroupStatus = null;
    
    /**
     * @var string|null $limit The number of results, from the current result set, to be returned in a single page.
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $offset The number of results that will be skipped in the result set. This is used with the <b>limit</b> field to control the pagination of the output.<br /><br />For example, if the <b>offset</b> is set to <code>0</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 1 through 10 from the list of items returned. If the <b>offset</b> is set to <code>10</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 11 through 20 from the list of items returned.<br><br><b>Default</b>: <code>0</code>
    */
    public ?string $offset = null;
    
    /**
     * Instantiates a new Ad_groupRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $ad_group_status A comma-separated list of ad group statuses. The results will be filtered to only include the given statuses of the ad group.<br><br> See <a href="/api-docs/sell/marketing/types/pls:AdGroupStatusEnum" target="_blank">AdGroupStatusEnum</a> for supported values.
     * @param string|null $limit The number of results, from the current result set, to be returned in a single page.
     * @param string|null $offset The number of results that will be skipped in the result set. This is used with the <b>limit</b> field to control the pagination of the output.<br /><br />For example, if the <b>offset</b> is set to <code>0</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 1 through 10 from the list of items returned. If the <b>offset</b> is set to <code>10</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 11 through 20 from the list of items returned.<br><br><b>Default</b>: <code>0</code>
    */
    public function __construct(?string $ad_group_status = null, ?string $limit = null, ?string $offset = null) {
        $this->adGroupStatus = $ad_group_status;
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
