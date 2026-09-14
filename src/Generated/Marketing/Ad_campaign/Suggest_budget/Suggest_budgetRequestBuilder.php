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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Suggest_budget;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\Error;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ErrorDetailV3;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\SuggestBudgetResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign/suggest_budget
*/
class Suggest_budgetRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Suggest_budgetRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign/suggest_budget');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <span class="tablenote"><b>Note:</b> This method is only supported for Promoted Offsite campaigns. Sellers can use the <a href="/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility" target="_blank ">getAdvertisingEligibility</a> method of the <a href="/api-docs/sell/account/overview.html" target="_blank ">Account API v1</a> to determine if they are eligible for offsite campaigns.</span><br>This method allows sellers to retrieve the suggested budget for an offsite campaign.
     * @param Suggest_budgetRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SuggestBudgetResponse|null>
     * @throws Exception
    */
    public function get(?Suggest_budgetRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SuggestBudgetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * <span class="tablenote"><b>Note:</b> This method is only supported for Promoted Offsite campaigns. Sellers can use the <a href="/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility" target="_blank ">getAdvertisingEligibility</a> method of the <a href="/api-docs/sell/account/overview.html" target="_blank ">Account API v1</a> to determine if they are eligible for offsite campaigns.</span><br>This method allows sellers to retrieve the suggested budget for an offsite campaign.
     * @param Suggest_budgetRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Suggest_budgetRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Suggest_budgetRequestBuilder
    */
    public function withUrl(string $rawUrl): Suggest_budgetRequestBuilder {
        return new Suggest_budgetRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
