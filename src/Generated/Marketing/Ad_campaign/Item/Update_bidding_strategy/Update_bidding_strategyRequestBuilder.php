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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Update_bidding_strategy;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateBiddingStrategyRequest;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign/{campaign_id}/update_bidding_strategy
*/
class Update_bidding_strategyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Update_bidding_strategyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign/{campaign_id}/update_bidding_strategy');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method allows sellers to change the bidding strategy for a specified Cost Per Click (CPC) campaign that uses manual targeting. Available bidding strategies are:<ul><li><code>FIXED</code><br><br>When using a fixed bidding strategy, sellers manually assign and adjust keyword bids for the CPC campaign.</li><li><code>DYNAMIC</code><br><br>When using a dynamic bidding strategy, eBay will manage a campaign's keyword bids and automatically update them daily to the suggested bid.<br><br><span class="tablenote"><b>Note:</b> For a CPC campaign using dynamic bidding, sellers can continue to manually add keywords for the campaign, but they are no longer able to manually adjust their associated bid values. In order to manually adjust bid values, sellers must use the <code>FIXED</code> bidding strategy.</span></li></ul>In addition, this method allows sellers to modify the <b>maxCPC</b> value of a smart targeting campaign.<br><span class="tablenote"><b>Note:</b> This method only applies to the Cost Per Click (CPC) funding model; it does not apply to the Cost Per Sale (CPS) funding model. Refer to <a href="/api-docs/sell/static/marketing/pl-overview.html#funding-model">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>
     * @param UpdateBiddingStrategyRequest $body This type defines the fields used in the <b>updatedBiddingStrategy</b> request.
     * @param Update_bidding_strategyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(UpdateBiddingStrategyRequest $body, ?Update_bidding_strategyRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * This method allows sellers to change the bidding strategy for a specified Cost Per Click (CPC) campaign that uses manual targeting. Available bidding strategies are:<ul><li><code>FIXED</code><br><br>When using a fixed bidding strategy, sellers manually assign and adjust keyword bids for the CPC campaign.</li><li><code>DYNAMIC</code><br><br>When using a dynamic bidding strategy, eBay will manage a campaign's keyword bids and automatically update them daily to the suggested bid.<br><br><span class="tablenote"><b>Note:</b> For a CPC campaign using dynamic bidding, sellers can continue to manually add keywords for the campaign, but they are no longer able to manually adjust their associated bid values. In order to manually adjust bid values, sellers must use the <code>FIXED</code> bidding strategy.</span></li></ul>In addition, this method allows sellers to modify the <b>maxCPC</b> value of a smart targeting campaign.<br><span class="tablenote"><b>Note:</b> This method only applies to the Cost Per Click (CPC) funding model; it does not apply to the Cost Per Sale (CPS) funding model. Refer to <a href="/api-docs/sell/static/marketing/pl-overview.html#funding-model">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>
     * @param UpdateBiddingStrategyRequest $body This type defines the fields used in the <b>updatedBiddingStrategy</b> request.
     * @param Update_bidding_strategyRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UpdateBiddingStrategyRequest $body, ?Update_bidding_strategyRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Update_bidding_strategyRequestBuilder
    */
    public function withUrl(string $rawUrl): Update_bidding_strategyRequestBuilder {
        return new Update_bidding_strategyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
