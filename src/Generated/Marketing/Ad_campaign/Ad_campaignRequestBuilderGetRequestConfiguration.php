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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Ad_campaignRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Ad_campaignRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Ad_campaignRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Ad_campaignRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Ad_campaignRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Ad_campaignRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Ad_campaignRequestBuilderGetQueryParameters.
     * @param string|null $campaign_name This query parameter specifies the name of the campaign being retrieved. The results are filtered to include only the campaign by the specified name.<br><br> Use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> method to retrieve a list of a seller's campaign names.<br /><br /><b>Note: </b>The results might be null if other filters exclude the campaign with this name. <br /><br /><b>Maximum: </b> 1 campaign name
     * @param GetCampaign_statusQueryParameterType|null $campaign_status This query parameter specifies the status of the campaign(s) being retrieved.<br><br><span class="tablenote"><b>Note:</b> The results might not include all the campaigns with this status if other filters exclude them.</span><br><b>Valid values:</b> See <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns.campaignstatusenum">CampaignStatusEnum</a> <br /><br /><b>Maximum: </b> 1 status
     * @param GetCampaign_targeting_typesQueryParameterType|null $campaign_targeting_types This query parameter specifies the targeting type of the campaign(s) to be retrieved.<br><br>The results will be filtered to only include campaigns with the specified targeting type. If not specified, all campaigns matching other filter parameters will be returned. The results might not include these campaigns if other search conditions exclude them.<br><br><b>Valid values:</b> See <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns.campaigntargetingtypeenum">CampaignTargetingTypeEnum</a>
     * @param GetChannelsQueryParameterType|null $channels This query parameter specifies the channel for the campaign(s) being retrieved.<br><br>The results will be filtered to only include campaigns with the specified channel. If not specified, all campaigns matching other filter parameters will be returned. The results might not include these campaigns if other search conditions exclude them.<br /><br /><b>Valid Values:</b> See <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns.channelenum">ChannelEnum</a>
     * @param string|null $end_date_range This query parameter specifies the range of a campaign's end date. The results are filtered to include only campaigns with an end date that is within specified range. <br><br><b>Valid format (UTC)</b>: <ul><li><code> yyyy-MM-ddThh:mm:ssZ..yyyy-MM-ddThh:mm:ssZ </code>  (campaign ends within this range)</li><li><code>yyyy-MM-ddThh:mm:ssZ..</code> (campaign ends on or after this date)</li><li><code>..yyyy-MM-ddThh:mm:ssZ </code> (campaign ends on or before this date)</li><li><code>2016-09-08T00:00.00.000Z..2016-09-09T00:00:00Z</code> (campaign ends on September 08, 2016)</li></ul><br><span class="tablenote"><b>Note:</b>The results might not include all the campaigns ending on this date if other filters exclude them.</span>
     * @param GetFunding_strategyQueryParameterType|null $funding_strategy This query parameter specifies the funding strategy for the campaign(s) being retrieved.<br /><br />The results will be filtered to only include campaigns with the specified funding model. If not specified, all campaigns matching the other filter parameters will be returned. The results might not include these campaigns if other search conditions exclude them.<br /><br /><b>Valid Values:</b> See <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_report_task-getreporttasks.fundingmodelenum">FundingModelEnum</a>
     * @param string|null $limit <p>This query parameter specifies the maximum number of campaigns to return on a page in the paginated response.</p>  <b>Default: </b>10<br><br><b>Maximum: </b> 500
     * @param string|null $marketplace_id This parameter specifies the eBay marketplace ID of the site for which you want to retrieve campaigns.<br><br>See <a href="/develop/api/sell/request_headers#marketplace-id-values" target="_blank">Marketplace ID values</a> for supported Marketplace ID values.
     * @param string|null $offset This query parameter specifies the number of campaigns to skip in the result set before returning the first report in the paginated response.<br><br>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.<br><br> <b>Default:</b> 0
     * @param string|null $start_date_range This query parameter specifies the range of a campaign's start date in which to filter the results. The results are filtered to include only campaigns with a start date that is equal to this date or is within specified range.<br><br><b>Valid format (UTC): </b> <ul><li><code>yyyy-MM-ddThh:mm:ssZ..yyyy-MM-ddThh:mm:ssZ</code> (starts within this range)</li><li><code>yyyy-MM-ddThh:mm:ssZ</code> (campaign starts on or after this date)</li><li><code>..yyyy-MM-ddThh:mm:ssZ </code>(campaign starts on or before this date)</li><li><code>2016-09-08T00:00.00.000Z..2016-09-09T00:00:00Z</code> (campaign starts on September 08, 2016)</li></ul><br><span class="tablenote"><b>Note:</b> The results might not include all the campaigns with this start date if other filters exclude them.</span>
     * @return Ad_campaignRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $campaign_name = null, ?GetCampaign_statusQueryParameterType $campaign_status = null, ?GetCampaign_targeting_typesQueryParameterType $campaign_targeting_types = null, ?GetChannelsQueryParameterType $channels = null, ?string $end_date_range = null, ?GetFunding_strategyQueryParameterType $funding_strategy = null, ?string $limit = null, ?string $marketplace_id = null, ?string $offset = null, ?string $start_date_range = null): Ad_campaignRequestBuilderGetQueryParameters {
        return new Ad_campaignRequestBuilderGetQueryParameters($campaign_name, $campaign_status, $campaign_targeting_types, $channels, $end_date_range, $funding_strategy, $limit, $marketplace_id, $offset, $start_date_range);
    }

}
