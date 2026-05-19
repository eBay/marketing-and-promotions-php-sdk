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

/**
 * <span class="tablenote"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href="/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests " target="_blank "> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href="/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility " target="_blank ">getAdvertisingEligibility</a> method in Account API.</span><br />This method can be used to retrieve all of the keywords for ad groups in priority strategy campaigns that use the Cost Per Click (CPC) funding model.<br /><br />In the request, specify the <b>campaign_id</b> as a path parameter. If one or more <b>ad_group_ids</b> are passed in the request body, the keywords for those ad groups will be returned. If <b>ad_group_ids</b> are not passed in the response body, the call will return all the keywords in the campaign.<br /><br />Call the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a> method to retrieve a list of current campaign IDs for a seller.
*/
class KeywordRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("ad_group_ids")
     * @var string|null $adGroupIds A comma-separated list of ad group IDs. This query parameter is used if the seller wants to retrieve keywords from one or more specific ad groups. If this query parameter is not used, all keywords that are part of the CPC campaign are returned.<br><br>Use the <a href="/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups" target="_blank">getAdGroups</a>  method to retrieve the ad group IDs for a seller.
    */
    public ?string $adGroupIds = null;
    
    /**
     * @QueryParameter("keyword_status")
     * @var string|null $keywordStatus A comma-separated list of keyword statuses. The results will be filtered to only include the given statuses of the keyword. If none are provided, all keywords are returned.<br><br>See <a href="/api-docs/sell/marketing/types/pls:KeywordStatusEnum" target="_blank">KeywordStatusEnum</a> for supported values.
    */
    public ?string $keywordStatus = null;
    
    /**
     * @var string|null $limit <p>Specifies the maximum number of results to return on a page in the paginated response.</p>  <b>Default: </b>10 <br><b>Maximum: </b> 500
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $offset Specifies the number of results to skip in the result set before returning the first report in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
    */
    public ?string $offset = null;
    
    /**
     * Instantiates a new KeywordRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $ad_group_ids A comma-separated list of ad group IDs. This query parameter is used if the seller wants to retrieve keywords from one or more specific ad groups. If this query parameter is not used, all keywords that are part of the CPC campaign are returned.<br><br>Use the <a href="/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups" target="_blank">getAdGroups</a>  method to retrieve the ad group IDs for a seller.
     * @param string|null $keyword_status A comma-separated list of keyword statuses. The results will be filtered to only include the given statuses of the keyword. If none are provided, all keywords are returned.<br><br>See <a href="/api-docs/sell/marketing/types/pls:KeywordStatusEnum" target="_blank">KeywordStatusEnum</a> for supported values.
     * @param string|null $limit <p>Specifies the maximum number of results to return on a page in the paginated response.</p>  <b>Default: </b>10 <br><b>Maximum: </b> 500
     * @param string|null $offset Specifies the number of results to skip in the result set before returning the first report in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
    */
    public function __construct(?string $ad_group_ids = null, ?string $keyword_status = null, ?string $limit = null, ?string $offset = null) {
        $this->adGroupIds = $ad_group_ids;
        $this->keywordStatus = $keyword_status;
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
