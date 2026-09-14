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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\Item;

use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\Item\Suggest_bids\Suggest_bidsRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\Item\Suggest_keywords\Suggest_keywordsRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\AdGroup;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Error;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateAdGroupRequest;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign/{campaign_id}/ad_group/{ad_group_id}
*/
class WithAd_group_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The suggest_bids property
    */
    public function suggest_bids(): Suggest_bidsRequestBuilder {
        return new Suggest_bidsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The suggest_keywords property
    */
    public function suggest_keywords(): Suggest_keywordsRequestBuilder {
        return new Suggest_keywordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithAd_group_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign/{campaign_id}/ad_group/{ad_group_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves the details of a specified ad group, such as the ad group’s default bid and status.<br /><br />In the request, specify the <b>campaign_id</b> and <b>ad_group_id</b> as path parameters.<br /><br />Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> to retrieve a list of the current campaign IDs for a seller and call <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-getadgroups">getAdGroups</a> for the ad group ID of the ad group you wish to retrieve.
     * @param WithAd_group_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdGroup|null>
     * @throws Exception
    */
    public function get(?WithAd_group_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdGroup::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method updates the ad group associated with a campaign.<br /><br />With this method, you can modify the <b>default bid</b> for the ad group, change the state of the ad group, or change the name of the ad group. Pass the <b>ad_group_id</b> you want to update as a URI parameter, and configure the <b>adGroupStatus</b> and <b>defaultBid</b> in the request payload.<br /><br />Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-getadgroup">getAdGroup</a> to retrieve the current default bid and status of the ad group that you would like to update.
     * @param UpdateAdGroupRequest $body This type defines the fields for the <b>UpdateAdGroup</b> request.
     * @param WithAd_group_ItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function put(UpdateAdGroupRequest $body, ?WithAd_group_ItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * This method retrieves the details of a specified ad group, such as the ad group’s default bid and status.<br /><br />In the request, specify the <b>campaign_id</b> and <b>ad_group_id</b> as path parameters.<br /><br />Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> to retrieve a list of the current campaign IDs for a seller and call <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-getadgroups">getAdGroups</a> for the ad group ID of the ad group you wish to retrieve.
     * @param WithAd_group_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithAd_group_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * This method updates the ad group associated with a campaign.<br /><br />With this method, you can modify the <b>default bid</b> for the ad group, change the state of the ad group, or change the name of the ad group. Pass the <b>ad_group_id</b> you want to update as a URI parameter, and configure the <b>adGroupStatus</b> and <b>defaultBid</b> in the request payload.<br /><br />Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-getadgroup">getAdGroup</a> to retrieve the current default bid and status of the ad group that you would like to update.
     * @param UpdateAdGroupRequest $body This type defines the fields for the <b>UpdateAdGroup</b> request.
     * @param WithAd_group_ItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(UpdateAdGroupRequest $body, ?WithAd_group_ItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
     * @return WithAd_group_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithAd_group_ItemRequestBuilder {
        return new WithAd_group_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
