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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Suggest_max_cpc;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\SuggestMaxCpcRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\SuggestMaxCpcResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign/suggest_max_cpc
*/
class Suggest_max_cpcRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Suggest_max_cpcRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign/suggest_max_cpc');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <span class="tablenote"><b>Note:</b> This method is only supported for smart targeting priority strategy campaigns. Sellers can use the <a href="/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility " target="_blank ">getAdvertisingEligibility</a> method of the Account API v1 to determine if they are eligible for a priority strategy campaign.</span><br />This method allows sellers to retrieve the suggested maximum cost-per-click value for a smart targeting campaign. This value is required when creating a smart targeting campaign and indicates the maximum amount for which the eBay suggested bid can be adjusted.
     * @param SuggestMaxCpcRequest $body This type defines the fields used in the <b>suggestMaxCpc</b> request. To retrieve the suggested <b>maxCpc</b> value for a smart targeting campaign, a seller must specify the listings associated with the campaign, as well as the marketplace on which the campaign is hosted.
     * @param Suggest_max_cpcRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SuggestMaxCpcResponse|null>
     * @throws Exception
    */
    public function post(SuggestMaxCpcRequest $body, ?Suggest_max_cpcRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [SuggestMaxCpcResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <span class="tablenote"><b>Note:</b> This method is only supported for smart targeting priority strategy campaigns. Sellers can use the <a href="/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility " target="_blank ">getAdvertisingEligibility</a> method of the Account API v1 to determine if they are eligible for a priority strategy campaign.</span><br />This method allows sellers to retrieve the suggested maximum cost-per-click value for a smart targeting campaign. This value is required when creating a smart targeting campaign and indicates the maximum amount for which the eBay suggested bid can be adjusted.
     * @param SuggestMaxCpcRequest $body This type defines the fields used in the <b>suggestMaxCpc</b> request. To retrieve the suggested <b>maxCpc</b> value for a smart targeting campaign, a seller must specify the listings associated with the campaign, as well as the marketplace on which the campaign is hosted.
     * @param Suggest_max_cpcRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SuggestMaxCpcRequest $body, ?Suggest_max_cpcRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Suggest_max_cpcRequestBuilder
    */
    public function withUrl(string $rawUrl): Suggest_max_cpcRequestBuilder {
        return new Suggest_max_cpcRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
