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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad;

/**
 * This method retrieves Promoted Listings ads that are associated with listings created with either the <a href="/Devzone/XML/docs/Reference/eBay/index.html" title="Trading API Reference" target="_blank">Trading API</a> or the <a href="/api-docs/sell/inventory/resources/methods" title="Inventory API Reference" target="_blank">Inventory API</a>. <p>The method retrieves ads related to the specified campaign. Specify the Promoted Listings campaign to target with the <b>campaign_id</b> path parameter.</p>  <p>Because of the large number of possible results, you can use query parameters to paginate the result set by specifying a <b>limit</b>, which dictates how many ads to return on each page of the response. You can also specify how many ads to skip in the result set before returning the first result using the <b>offset</b> path parameter.</p><p>To retrieve video ads preference information for each ad, set the <b>fieldgroups</b> query parameter to <code>VIDEO</code>.</p> <p>Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> to retrieve the current campaign IDs for the seller.</p>
*/
class AdRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("ad_group_ids")
     * @var string|null $adGroupIds A comma-separated list of ad group IDs. The results will be filtered to only include active ads for these ad groups.<br><br>Use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-getadgroups">getAdGroups</a> method to retrieve the ad group ID for the ad group.<br /><br /><span class="tablenote"><b>Note:</b> This field only applies to the Cost Per Click (CPC) funding model; it does not apply to the Cost Per Sale (CPS) funding model.</span>
    */
    public ?string $adGroupIds = null;
    
    /**
     * @QueryParameter("ad_status")
     * @var GetAd_statusQueryParameterType|null $adStatus A comma-separated list of ad statuses. The results will be filtered to only include the given statuses of the ad. If none are provided, all ads are returned.<br><br>See <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad-getads.adstatusenum">AdStatusEnum</a> for supported values.
    */
    public ?GetAd_statusQueryParameterType $adStatus = null;
    
    /**
     * @var GetFieldgroupsQueryParameterType|null $fieldgroups A comma-separated list of values that controls what is returned in the response. If not provided, standard ad fields are returned. <ul><li><b>DEFAULT</b>: Returns the standard ad fields. The <b>videoAdsPreferences</b> container is not included in the response.</li><li><b>VIDEO</b>: Adds the <b>videoAdsPreferences</b> container to the response, including video ads preferences for each ad.</li></ul>
    */
    public ?GetFieldgroupsQueryParameterType $fieldgroups = null;
    
    /**
     * @var string|null $limit Specifies the maximum number of ads to return on a page in the paginated response.<br><br><b>Default: </b>10 <br><br><b>Maximum:</b> 500
    */
    public ?string $limit = null;
    
    /**
     * @QueryParameter("listing_ids")
     * @var string|null $listingIds A comma-separated list of listing IDs. <br><br><span class="tablenote"><b>Note:</b> The response includes only active ads. The results do not include listing IDs that are excluded by other conditions.</span>
    */
    public ?string $listingIds = null;
    
    /**
     * @var string|null $offset Specifies the number of ads to skip in the result set before returning the first ad in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
    */
    public ?string $offset = null;
    
    /**
     * Instantiates a new AdRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $ad_group_ids A comma-separated list of ad group IDs. The results will be filtered to only include active ads for these ad groups.<br><br>Use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-getadgroups">getAdGroups</a> method to retrieve the ad group ID for the ad group.<br /><br /><span class="tablenote"><b>Note:</b> This field only applies to the Cost Per Click (CPC) funding model; it does not apply to the Cost Per Sale (CPS) funding model.</span>
     * @param GetAd_statusQueryParameterType|null $ad_status A comma-separated list of ad statuses. The results will be filtered to only include the given statuses of the ad. If none are provided, all ads are returned.<br><br>See <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad-getads.adstatusenum">AdStatusEnum</a> for supported values.
     * @param GetFieldgroupsQueryParameterType|null $fieldgroups A comma-separated list of values that controls what is returned in the response. If not provided, standard ad fields are returned. <ul><li><b>DEFAULT</b>: Returns the standard ad fields. The <b>videoAdsPreferences</b> container is not included in the response.</li><li><b>VIDEO</b>: Adds the <b>videoAdsPreferences</b> container to the response, including video ads preferences for each ad.</li></ul>
     * @param string|null $limit Specifies the maximum number of ads to return on a page in the paginated response.<br><br><b>Default: </b>10 <br><br><b>Maximum:</b> 500
     * @param string|null $listing_ids A comma-separated list of listing IDs. <br><br><span class="tablenote"><b>Note:</b> The response includes only active ads. The results do not include listing IDs that are excluded by other conditions.</span>
     * @param string|null $offset Specifies the number of ads to skip in the result set before returning the first ad in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
    */
    public function __construct(?string $ad_group_ids = null, ?GetAd_statusQueryParameterType $ad_status = null, ?GetFieldgroupsQueryParameterType $fieldgroups = null, ?string $limit = null, ?string $listing_ids = null, ?string $offset = null) {
        $this->adGroupIds = $ad_group_ids;
        $this->adStatus = $ad_status;
        $this->fieldgroups = $fieldgroups;
        $this->limit = $limit;
        $this->listingIds = $listing_ids;
        $this->offset = $offset;
    }

}
