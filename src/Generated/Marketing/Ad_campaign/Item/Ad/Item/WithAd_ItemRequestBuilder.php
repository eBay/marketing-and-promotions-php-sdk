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

use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\Item\Update_bid\Update_bidRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Ad;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Error;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ErrorDetailV3;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign/{campaign_id}/ad/{ad_id}
*/
class WithAd_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The update_bid property
    */
    public function update_bid(): Update_bidRequestBuilder {
        return new Update_bidRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithAd_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign/{campaign_id}/ad/{ad_id}{?fieldgroups*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method removes the specified ad from the specified campaign.<br /><br />Pass the ID of the ad to delete with the ID of the campaign associated with the ad as path parameters to the call.<br /><br />Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> to get the current list of the seller's campaign IDs.<br /><br /><span class="tablenote"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href="/api-docs/sell/static/marketing/pl-overview.html#funding-model" target="_blank">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span><br />When using the CPC funding model, use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad-bulkupdateadsstatusbylistingid">bulkUpdateAdsStatusByListingId</a> method to change the status of ads to <code>ARCHIVED</code>.
     * @param WithAd_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WithAd_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '404' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '409' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * This method retrieves the specified ad from the specified campaign.  <p>In the request, supply the <b>campaign_id</b> and <b>ad_id</b> as path parameters.</p><p>To retrieve video ads preference information for the ad, set the <b>fieldgroups</b> query parameter to <code>VIDEO</code>.</p> <p>Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> to retrieve a list of the seller's current campaign IDs and call <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad-getads">getAds</a> to retrieve their current ad IDs.</p>
     * @param WithAd_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Ad|null>
     * @throws Exception
    */
    public function get(?WithAd_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '404' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Ad::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method removes the specified ad from the specified campaign.<br /><br />Pass the ID of the ad to delete with the ID of the campaign associated with the ad as path parameters to the call.<br /><br />Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> to get the current list of the seller's campaign IDs.<br /><br /><span class="tablenote"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href="/api-docs/sell/static/marketing/pl-overview.html#funding-model" target="_blank">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span><br />When using the CPC funding model, use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad-bulkupdateadsstatusbylistingid">bulkUpdateAdsStatusByListingId</a> method to change the status of ads to <code>ARCHIVED</code>.
     * @param WithAd_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithAd_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * This method retrieves the specified ad from the specified campaign.  <p>In the request, supply the <b>campaign_id</b> and <b>ad_id</b> as path parameters.</p><p>To retrieve video ads preference information for the ad, set the <b>fieldgroups</b> query parameter to <code>VIDEO</code>.</p> <p>Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> to retrieve a list of the seller's current campaign IDs and call <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad-getads">getAds</a> to retrieve their current ad IDs.</p>
     * @param WithAd_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithAd_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithAd_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithAd_ItemRequestBuilder {
        return new WithAd_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
