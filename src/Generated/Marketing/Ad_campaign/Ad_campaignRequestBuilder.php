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

use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Find_campaign_by_ad_reference\Find_campaign_by_ad_referenceRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Get_campaign_by_name\Get_campaign_by_nameRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\WithCampaign_ItemRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Suggest_budget\Suggest_budgetRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Suggest_max_cpc\Suggest_max_cpcRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CampaignPagedCollectionResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateCampaignRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Error;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign
*/
class Ad_campaignRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The find_campaign_by_ad_reference property
    */
    public function find_campaign_by_ad_reference(): Find_campaign_by_ad_referenceRequestBuilder {
        return new Find_campaign_by_ad_referenceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The get_campaign_by_name property
    */
    public function get_campaign_by_name(): Get_campaign_by_nameRequestBuilder {
        return new Get_campaign_by_nameRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The suggest_budget property
    */
    public function suggest_budget(): Suggest_budgetRequestBuilder {
        return new Suggest_budgetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The suggest_max_cpc property
    */
    public function suggest_max_cpc(): Suggest_max_cpcRequestBuilder {
        return new Suggest_max_cpcRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the EBay/MarketingAndPromotions/Generated/Marketing.ad_campaign.item collection
     * @param string $campaign_id This path parameter specifies the unique eBay-assigned identifier of the ad campaign being retrieved.<br><br> Use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> method to retrieve campaign IDs.
     * @return WithCampaign_ItemRequestBuilder
    */
    public function byCampaign_id(string $campaign_id): WithCampaign_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['campaign_id'] = $campaign_id;
        return new WithCampaign_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Ad_campaignRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign{?campaign_name*,campaign_status*,campaign_targeting_types*,channels*,end_date_range*,funding_strategy*,limit*,offset*,start_date_range*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves the details for all of the seller's defined campaigns. Request parameters can be used to retrieve a specific campaign, such as the campaign's name, the start and end date, the channel, the status, and the funding model (i.e., Cost Per Sale (CPS) or Cost Per Click (CPC)). <p>You can filter the result set by a campaign name, end date range, start date range, campaign channel, or campaign status. You can also paginate the records returned from the result set using the <b>limit</b> query parameter, and control which records to return using the  <b>offset</b> parameter.</p>
     * @param Ad_campaignRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CampaignPagedCollectionResponse|null>
     * @throws Exception
    */
    public function get(?Ad_campaignRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CampaignPagedCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method can be used to create a Promoted Listings general, priority, or offsite campaign.<br><br>A Promoted Listings <i>campaign</i> is the structure in which you place the ads or ad group for the listings you wish to promote.<br><br><span class="tablenote"><b>Note:</b> Campaigns can only contain ads for a maximum of 50,000 items.</span><br>General strategy campaigns utilize a Cost Per Sale (CPS) funding model. Sellers can set the ad rate and bidding strategies that are right for their business through the <b>adRateStrategy</b>, <b>biddingStrategy</b>, <b>bidPercentage</b> fields. For more information on general strategy campaigns, see <a href="/api-docs/sell/static/marketing/pl-campaign-flow-pls.html" target="_blank ">Promoted Listings general strategy campaign flow</a>.<br><br>Priority strategy campaigns utilize a Cost per Click (CPC) funding model. Sellers can create a daily budget through the <b>budget</b> container and choose what <b>channel</b> that their ads appear on. In addition, priority strategy campaigns give sellers the ability to create ad groups and specify keywords to ensure their ads reach their intended audience. For more information on priority strategy campaigns, see <a href="/api-docs/sell/static/marketing/pl-campaign-flow-pla.html" target="_blank ">Promoted listings priority strategy campaign flow</a>.<br><br>Promoted Offsite campaigns give sellers the ability to create their own advertising campaign and promote their eBay listing in leading external search channels. For more information on Promoted Offsite campaigns, see <a href="/api-docs/sell/static/marketing/offsite-ads.html" target="_blank ">Promoted Offsite</a>.<br><br><span class="tablenote"><b>Note:</b> Sellers can use the <a href="/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility" target="_blank ">getAdvertisingEligibility</a> method of the <a href="/api-docs/sell/account/overview.html" target="_blank ">Account API v1</a> to determine their eligibility status for eBay advertising programs.</span><br>To create a basic campaign, supply: <ul><li>The user-defined campaign name</li> <li>The start date (and optionally the end date) of the campaign</li> <li>The eBay marketplace on which the campaign is hosted</li> <li>Details on the campaign funding model</li></ul>For details on creating Promoted Listings campaigns and how to select the items to be included in your campaigns, see <a href="/api-docs/sell/static/marketing/pl-create-campaign.html" target="_blank">Promoted Listings campaign creation</a>.
     * @param CreateCampaignRequest $body This type defines the fields for the create campaign request.
     * @param Ad_campaignRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Ad_campaignPostResponse|null>
     * @throws Exception
    */
    public function post(CreateCampaignRequest $body, ?Ad_campaignRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Ad_campaignPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method retrieves the details for all of the seller's defined campaigns. Request parameters can be used to retrieve a specific campaign, such as the campaign's name, the start and end date, the channel, the status, and the funding model (i.e., Cost Per Sale (CPS) or Cost Per Click (CPC)). <p>You can filter the result set by a campaign name, end date range, start date range, campaign channel, or campaign status. You can also paginate the records returned from the result set using the <b>limit</b> query parameter, and control which records to return using the  <b>offset</b> parameter.</p>
     * @param Ad_campaignRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Ad_campaignRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * This method can be used to create a Promoted Listings general, priority, or offsite campaign.<br><br>A Promoted Listings <i>campaign</i> is the structure in which you place the ads or ad group for the listings you wish to promote.<br><br><span class="tablenote"><b>Note:</b> Campaigns can only contain ads for a maximum of 50,000 items.</span><br>General strategy campaigns utilize a Cost Per Sale (CPS) funding model. Sellers can set the ad rate and bidding strategies that are right for their business through the <b>adRateStrategy</b>, <b>biddingStrategy</b>, <b>bidPercentage</b> fields. For more information on general strategy campaigns, see <a href="/api-docs/sell/static/marketing/pl-campaign-flow-pls.html" target="_blank ">Promoted Listings general strategy campaign flow</a>.<br><br>Priority strategy campaigns utilize a Cost per Click (CPC) funding model. Sellers can create a daily budget through the <b>budget</b> container and choose what <b>channel</b> that their ads appear on. In addition, priority strategy campaigns give sellers the ability to create ad groups and specify keywords to ensure their ads reach their intended audience. For more information on priority strategy campaigns, see <a href="/api-docs/sell/static/marketing/pl-campaign-flow-pla.html" target="_blank ">Promoted listings priority strategy campaign flow</a>.<br><br>Promoted Offsite campaigns give sellers the ability to create their own advertising campaign and promote their eBay listing in leading external search channels. For more information on Promoted Offsite campaigns, see <a href="/api-docs/sell/static/marketing/offsite-ads.html" target="_blank ">Promoted Offsite</a>.<br><br><span class="tablenote"><b>Note:</b> Sellers can use the <a href="/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility" target="_blank ">getAdvertisingEligibility</a> method of the <a href="/api-docs/sell/account/overview.html" target="_blank ">Account API v1</a> to determine their eligibility status for eBay advertising programs.</span><br>To create a basic campaign, supply: <ul><li>The user-defined campaign name</li> <li>The start date (and optionally the end date) of the campaign</li> <li>The eBay marketplace on which the campaign is hosted</li> <li>Details on the campaign funding model</li></ul>For details on creating Promoted Listings campaigns and how to select the items to be included in your campaigns, see <a href="/api-docs/sell/static/marketing/pl-create-campaign.html" target="_blank">Promoted Listings campaign creation</a>.
     * @param CreateCampaignRequest $body This type defines the fields for the create campaign request.
     * @param Ad_campaignRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateCampaignRequest $body, ?Ad_campaignRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Ad_campaignRequestBuilder
    */
    public function withUrl(string $rawUrl): Ad_campaignRequestBuilder {
        return new Ad_campaignRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
