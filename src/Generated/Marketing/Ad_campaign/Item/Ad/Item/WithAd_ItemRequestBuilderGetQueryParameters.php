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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\Item;

/**
 * This method retrieves the specified ad from the specified campaign.  <p>In the request, supply the <b>campaign_id</b> and <b>ad_id</b> as path parameters.</p><p>To retrieve video ads preference information for the ad, set the <b>fieldgroups</b> query parameter to <code>VIDEO</code>.</p> <p>Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> to retrieve a list of the seller's current campaign IDs and call <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad-getads">getAds</a> to retrieve their current ad IDs.</p>
*/
class WithAd_ItemRequestBuilderGetQueryParameters 
{
    /**
     * @var GetFieldgroupsQueryParameterType|null $fieldgroups A comma-separated list of values that controls what is returned in the response. If not provided, standard ad fields are returned. <ul><li><b>DEFAULT</b>: Returns the standard ad fields. The <b>videoAdsPreferences</b> container is not included in the response.</li><li><b>VIDEO</b>: Adds the <b>videoAdsPreferences</b> container to the response, including video ads preferences for each ad.</li></ul>
    */
    public ?GetFieldgroupsQueryParameterType $fieldgroups = null;
    
    /**
     * Instantiates a new WithAd_ItemRequestBuilderGetQueryParameters and sets the default values.
     * @param GetFieldgroupsQueryParameterType|null $fieldgroups A comma-separated list of values that controls what is returned in the response. If not provided, standard ad fields are returned. <ul><li><b>DEFAULT</b>: Returns the standard ad fields. The <b>videoAdsPreferences</b> container is not included in the response.</li><li><b>VIDEO</b>: Adds the <b>videoAdsPreferences</b> container to the response, including video ads preferences for each ad.</li></ul>
    */
    public function __construct(?GetFieldgroupsQueryParameterType $fieldgroups = null) {
        $this->fieldgroups = $fieldgroups;
    }

}
