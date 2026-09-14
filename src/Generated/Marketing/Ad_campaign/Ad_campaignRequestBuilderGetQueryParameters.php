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

/**
 * This method retrieves the details for all of the seller's defined campaigns. Request parameters can be used to retrieve a specific campaign, such as the campaign's name, the start and end date, the channel, the status, and the funding model (i.e., Cost Per Sale (CPS) or Cost Per Click (CPC)). <p>You can filter the result set by a campaign name, end date range, start date range, campaign channel, or campaign status. You can also paginate the records returned from the result set using the <b>limit</b> query parameter, and control which records to return using the  <b>offset</b> parameter.</p>
*/
class Ad_campaignRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("campaign_name")
     * @var string|null $campaignName This query parameter specifies the name of the campaign being retrieved. The results are filtered to include only the campaign by the specified name.<br><br> Use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> method to retrieve a list of a seller's campaign names.<br /><br /><b>Note: </b>The results might be null if other filters exclude the campaign with this name. <br /><br /><b>Maximum: </b> 1 campaign name
    */
    public ?string $campaignName = null;
    
    /**
     * @QueryParameter("campaign_status")
     * @var GetCampaign_statusQueryParameterType|null $campaignStatus This query parameter specifies the status of the campaign(s) being retrieved.<br><br><span class="tablenote"><b>Note:</b> The results might not include all the campaigns with this status if other filters exclude them.</span><br><b>Valid values:</b> See <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns.campaignstatusenum">CampaignStatusEnum</a> <br /><br /><b>Maximum: </b> 1 status
    */
    public ?GetCampaign_statusQueryParameterType $campaignStatus = null;
    
    /**
     * @QueryParameter("campaign_targeting_types")
     * @var GetCampaign_targeting_typesQueryParameterType|null $campaignTargetingTypes This query parameter specifies the targeting type of the campaign(s) to be retrieved.<br><br>The results will be filtered to only include campaigns with the specified targeting type. If not specified, all campaigns matching other filter parameters will be returned. The results might not include these campaigns if other search conditions exclude them.<br><br><b>Valid values:</b> See <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns.campaigntargetingtypeenum">CampaignTargetingTypeEnum</a>
    */
    public ?GetCampaign_targeting_typesQueryParameterType $campaignTargetingTypes = null;
    
    /**
     * @var GetChannelsQueryParameterType|null $channels This query parameter specifies the channel for the campaign(s) being retrieved.<br><br>The results will be filtered to only include campaigns with the specified channel. If not specified, all campaigns matching other filter parameters will be returned. The results might not include these campaigns if other search conditions exclude them.<br /><br /><b>Valid Values:</b> See <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns.channelenum">ChannelEnum</a>
    */
    public ?GetChannelsQueryParameterType $channels = null;
    
    /**
     * @QueryParameter("end_date_range")
     * @var string|null $endDateRange This query parameter specifies the range of a campaign's end date. The results are filtered to include only campaigns with an end date that is within specified range. <br><br><b>Valid format (UTC)</b>: <ul><li><code> yyyy-MM-ddThh:mm:ssZ..yyyy-MM-ddThh:mm:ssZ </code>  (campaign ends within this range)</li><li><code>yyyy-MM-ddThh:mm:ssZ..</code> (campaign ends on or after this date)</li><li><code>..yyyy-MM-ddThh:mm:ssZ </code> (campaign ends on or before this date)</li><li><code>2016-09-08T00:00.00.000Z..2016-09-09T00:00:00Z</code> (campaign ends on September 08, 2016)</li></ul><br><span class="tablenote"><b>Note:</b>The results might not include all the campaigns ending on this date if other filters exclude them.</span>
    */
    public ?string $endDateRange = null;
    
    /**
     * @QueryParameter("funding_strategy")
     * @var GetFunding_strategyQueryParameterType|null $fundingStrategy This query parameter specifies the funding strategy for the campaign(s) being retrieved.<br /><br />The results will be filtered to only include campaigns with the specified funding model. If not specified, all campaigns matching the other filter parameters will be returned. The results might not include these campaigns if other search conditions exclude them.<br /><br /><b>Valid Values:</b> See <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_report_task-getreporttasks.fundingmodelenum">FundingModelEnum</a>
    */
    public ?GetFunding_strategyQueryParameterType $fundingStrategy = null;
    
    /**
     * @var string|null $limit <p>This query parameter specifies the maximum number of campaigns to return on a page in the paginated response.</p>  <b>Default: </b>10<br><br><b>Maximum: </b> 500
    */
    public ?string $limit = null;
    
    /**
     * @QueryParameter("marketplace_id")
     * @var string|null $marketplaceId This parameter specifies the eBay marketplace ID of the site for which you want to retrieve campaigns.<br><br>See <a href="/develop/api/sell/request_headers#marketplace-id-values" target="_blank">Marketplace ID values</a> for supported Marketplace ID values.
    */
    public ?string $marketplaceId = null;
    
    /**
     * @var string|null $offset This query parameter specifies the number of campaigns to skip in the result set before returning the first report in the paginated response.<br><br>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.<br><br> <b>Default:</b> 0
    */
    public ?string $offset = null;
    
    /**
     * @QueryParameter("start_date_range")
     * @var string|null $startDateRange This query parameter specifies the range of a campaign's start date in which to filter the results. The results are filtered to include only campaigns with a start date that is equal to this date or is within specified range.<br><br><b>Valid format (UTC): </b> <ul><li><code>yyyy-MM-ddThh:mm:ssZ..yyyy-MM-ddThh:mm:ssZ</code> (starts within this range)</li><li><code>yyyy-MM-ddThh:mm:ssZ</code> (campaign starts on or after this date)</li><li><code>..yyyy-MM-ddThh:mm:ssZ </code>(campaign starts on or before this date)</li><li><code>2016-09-08T00:00.00.000Z..2016-09-09T00:00:00Z</code> (campaign starts on September 08, 2016)</li></ul><br><span class="tablenote"><b>Note:</b> The results might not include all the campaigns with this start date if other filters exclude them.</span>
    */
    public ?string $startDateRange = null;
    
    /**
     * Instantiates a new Ad_campaignRequestBuilderGetQueryParameters and sets the default values.
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
    */
    public function __construct(?string $campaign_name = null, ?GetCampaign_statusQueryParameterType $campaign_status = null, ?GetCampaign_targeting_typesQueryParameterType $campaign_targeting_types = null, ?GetChannelsQueryParameterType $channels = null, ?string $end_date_range = null, ?GetFunding_strategyQueryParameterType $funding_strategy = null, ?string $limit = null, ?string $marketplace_id = null, ?string $offset = null, ?string $start_date_range = null) {
        $this->campaignName = $campaign_name;
        $this->campaignStatus = $campaign_status;
        $this->campaignTargetingTypes = $campaign_targeting_types;
        $this->channels = $channels;
        $this->endDateRange = $end_date_range;
        $this->fundingStrategy = $funding_strategy;
        $this->limit = $limit;
        $this->marketplaceId = $marketplace_id;
        $this->offset = $offset;
        $this->startDateRange = $start_date_range;
    }

}
