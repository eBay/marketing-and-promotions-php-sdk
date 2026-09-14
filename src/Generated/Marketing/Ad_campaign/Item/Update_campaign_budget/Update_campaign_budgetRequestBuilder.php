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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Update_campaign_budget;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\Error;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateCampaignBudgetRequest;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign/{campaign_id}/update_campaign_budget
*/
class Update_campaign_budgetRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Update_campaign_budgetRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign/{campaign_id}/update_campaign_budget');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method updates the daily budget for a priority strategy campaign that uses the Cost Per Click (CPC) funding model.<br /><br />A click occurs when an eBay user finds and clicks on the seller’s listing (within the search results) after using a keyword that the seller has created for the campaign. For each ad in an ad group in the campaign, each click triggers a cost, which gets subtracted from the campaign’s daily budget. If the cost of the clicks exceeds the daily budget, the Promoted Listings campaign will be paused until the next day.<br /><br />Specify the <b>campaign_id</b> as a path parameter. You can retrieve the campaign IDs for a seller by calling the <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> method.<br><br><span class="tablenote"><b>Note:</b> The daily budget for a campaign can only be updated 15 times per day. If this limit is exceeded, an error will occur and you will be blocked from updating the  budget until the next day.</span>
     * @param UpdateCampaignBudgetRequest $body This type defines the request fields for the budget details that shall be updated.
     * @param Update_campaign_budgetRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Update_campaign_budgetPostResponse|null>
     * @throws Exception
    */
    public function post(UpdateCampaignBudgetRequest $body, ?Update_campaign_budgetRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Update_campaign_budgetPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method updates the daily budget for a priority strategy campaign that uses the Cost Per Click (CPC) funding model.<br /><br />A click occurs when an eBay user finds and clicks on the seller’s listing (within the search results) after using a keyword that the seller has created for the campaign. For each ad in an ad group in the campaign, each click triggers a cost, which gets subtracted from the campaign’s daily budget. If the cost of the clicks exceeds the daily budget, the Promoted Listings campaign will be paused until the next day.<br /><br />Specify the <b>campaign_id</b> as a path parameter. You can retrieve the campaign IDs for a seller by calling the <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> method.<br><br><span class="tablenote"><b>Note:</b> The daily budget for a campaign can only be updated 15 times per day. If this limit is exceeded, an error will occur and you will be blocked from updating the  budget until the next day.</span>
     * @param UpdateCampaignBudgetRequest $body This type defines the request fields for the budget details that shall be updated.
     * @param Update_campaign_budgetRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UpdateCampaignBudgetRequest $body, ?Update_campaign_budgetRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Update_campaign_budgetRequestBuilder
    */
    public function withUrl(string $rawUrl): Update_campaign_budgetRequestBuilder {
        return new Update_campaign_budgetRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
