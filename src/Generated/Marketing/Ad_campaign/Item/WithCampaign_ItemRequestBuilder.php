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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item;

use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\Ad_groupRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\AdRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_create_ads_by_inventory_reference\Bulk_create_ads_by_inventory_referenceRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_create_ads_by_listing_id\Bulk_create_ads_by_listing_idRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_create_keyword\Bulk_create_keywordRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_delete_ads_by_inventory_reference\Bulk_delete_ads_by_inventory_referenceRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_delete_ads_by_listing_id\Bulk_delete_ads_by_listing_idRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_update_ads_bid_by_inventory_reference\Bulk_update_ads_bid_by_inventory_referenceRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_update_ads_bid_by_listing_id\Bulk_update_ads_bid_by_listing_idRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_update_ads_status_by_listing_id\Bulk_update_ads_status_by_listing_idRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_update_ads_status\Bulk_update_ads_statusRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_update_keyword\Bulk_update_keywordRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_upsert_video_ads_preferences\Bulk_upsert_video_ads_preferencesRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Create_ads_by_inventory_reference\Create_ads_by_inventory_referenceRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Delete_ads_by_inventory_reference\Delete_ads_by_inventory_referenceRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\End\EndRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\EscapedClone\CloneRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Get_ads_by_inventory_reference\Get_ads_by_inventory_referenceRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Keyword\KeywordRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Pause\PauseRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Resume\ResumeRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Suggest_items\Suggest_itemsRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Update_ad_rate_strategy\Update_ad_rate_strategyRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Update_bidding_strategy\Update_bidding_strategyRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Update_campaign_budget\Update_campaign_budgetRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Update_campaign_identification\Update_campaign_identificationRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Upsert_video_ads_preferences\Upsert_video_ads_preferencesRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Campaign;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Error;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ErrorDetailV3;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign/{campaign_id}
*/
class WithCampaign_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The ad property
    */
    public function ad(): AdRequestBuilder {
        return new AdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The ad_group property
    */
    public function ad_group(): Ad_groupRequestBuilder {
        return new Ad_groupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_create_ads_by_inventory_reference property
    */
    public function bulk_create_ads_by_inventory_reference(): Bulk_create_ads_by_inventory_referenceRequestBuilder {
        return new Bulk_create_ads_by_inventory_referenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_create_ads_by_listing_id property
    */
    public function bulk_create_ads_by_listing_id(): Bulk_create_ads_by_listing_idRequestBuilder {
        return new Bulk_create_ads_by_listing_idRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_create_keyword property
    */
    public function bulk_create_keyword(): Bulk_create_keywordRequestBuilder {
        return new Bulk_create_keywordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_delete_ads_by_inventory_reference property
    */
    public function bulk_delete_ads_by_inventory_reference(): Bulk_delete_ads_by_inventory_referenceRequestBuilder {
        return new Bulk_delete_ads_by_inventory_referenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_delete_ads_by_listing_id property
    */
    public function bulk_delete_ads_by_listing_id(): Bulk_delete_ads_by_listing_idRequestBuilder {
        return new Bulk_delete_ads_by_listing_idRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_update_ads_bid_by_inventory_reference property
    */
    public function bulk_update_ads_bid_by_inventory_reference(): Bulk_update_ads_bid_by_inventory_referenceRequestBuilder {
        return new Bulk_update_ads_bid_by_inventory_referenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_update_ads_bid_by_listing_id property
    */
    public function bulk_update_ads_bid_by_listing_id(): Bulk_update_ads_bid_by_listing_idRequestBuilder {
        return new Bulk_update_ads_bid_by_listing_idRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_update_ads_status property
    */
    public function bulk_update_ads_status(): Bulk_update_ads_statusRequestBuilder {
        return new Bulk_update_ads_statusRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_update_ads_status_by_listing_id property
    */
    public function bulk_update_ads_status_by_listing_id(): Bulk_update_ads_status_by_listing_idRequestBuilder {
        return new Bulk_update_ads_status_by_listing_idRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_update_keyword property
    */
    public function bulk_update_keyword(): Bulk_update_keywordRequestBuilder {
        return new Bulk_update_keywordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The bulk_upsert_video_ads_preferences property
    */
    public function bulk_upsert_video_ads_preferences(): Bulk_upsert_video_ads_preferencesRequestBuilder {
        return new Bulk_upsert_video_ads_preferencesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The create_ads_by_inventory_reference property
    */
    public function create_ads_by_inventory_reference(): Create_ads_by_inventory_referenceRequestBuilder {
        return new Create_ads_by_inventory_referenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The delete_ads_by_inventory_reference property
    */
    public function delete_ads_by_inventory_reference(): Delete_ads_by_inventory_referenceRequestBuilder {
        return new Delete_ads_by_inventory_referenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The end property
    */
    public function end(): EndRequestBuilder {
        return new EndRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The clone property
    */
    public function escapedClone(): CloneRequestBuilder {
        return new CloneRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_ads_by_inventory_reference property
    */
    public function get_ads_by_inventory_reference(): Get_ads_by_inventory_referenceRequestBuilder {
        return new Get_ads_by_inventory_referenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The keyword property
    */
    public function keyword(): KeywordRequestBuilder {
        return new KeywordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The pause property
    */
    public function pause(): PauseRequestBuilder {
        return new PauseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The resume property
    */
    public function resume(): ResumeRequestBuilder {
        return new ResumeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The suggest_items property
    */
    public function suggest_items(): Suggest_itemsRequestBuilder {
        return new Suggest_itemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The update_ad_rate_strategy property
    */
    public function update_ad_rate_strategy(): Update_ad_rate_strategyRequestBuilder {
        return new Update_ad_rate_strategyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The update_bidding_strategy property
    */
    public function update_bidding_strategy(): Update_bidding_strategyRequestBuilder {
        return new Update_bidding_strategyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The update_campaign_budget property
    */
    public function update_campaign_budget(): Update_campaign_budgetRequestBuilder {
        return new Update_campaign_budgetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The update_campaign_identification property
    */
    public function update_campaign_identification(): Update_campaign_identificationRequestBuilder {
        return new Update_campaign_identificationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The upsert_video_ads_preferences property
    */
    public function upsert_video_ads_preferences(): Upsert_video_ads_preferencesRequestBuilder {
        return new Upsert_video_ads_preferencesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithCampaign_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign/{campaign_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method deletes the campaign specified by the <code>campaign_id</code> query parameter.<br /><br /><span class="tablenote"><b>Note: </b> You can only delete campaigns that have ended.</span><br />Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> to retrieve the <b>campaign_id</b> and the campaign status (<code>RUNNING</code>, <code>PAUSED</code>, <code>ENDED</code>, and so on) for all the seller's campaigns.
     * @param WithCampaign_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WithCampaign_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '409' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * This method retrieves the details of a single campaign, as specified with the <b>campaign_id</b> query parameter.  <p>This method returns all the details of a campaign (including the campaign's the selection rules), except the for the listing IDs or inventory reference IDs included in the campaign. These IDs are returned by <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad-getads">getAds</a>.</p>  <p>Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> to retrieve a list of the seller's campaign IDs.</p>
     * @param WithCampaign_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Campaign|null>
     * @throws Exception
    */
    public function get(?WithCampaign_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Campaign::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method deletes the campaign specified by the <code>campaign_id</code> query parameter.<br /><br /><span class="tablenote"><b>Note: </b> You can only delete campaigns that have ended.</span><br />Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> to retrieve the <b>campaign_id</b> and the campaign status (<code>RUNNING</code>, <code>PAUSED</code>, <code>ENDED</code>, and so on) for all the seller's campaigns.
     * @param WithCampaign_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithCampaign_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * This method retrieves the details of a single campaign, as specified with the <b>campaign_id</b> query parameter.  <p>This method returns all the details of a campaign (including the campaign's the selection rules), except the for the listing IDs or inventory reference IDs included in the campaign. These IDs are returned by <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad-getads">getAds</a>.</p>  <p>Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> to retrieve a list of the seller's campaign IDs.</p>
     * @param WithCampaign_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithCampaign_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithCampaign_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithCampaign_ItemRequestBuilder {
        return new WithCampaign_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
