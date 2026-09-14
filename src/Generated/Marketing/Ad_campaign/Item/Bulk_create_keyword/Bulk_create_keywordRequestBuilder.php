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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_create_keyword;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateKeywordResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ErrorDetailV3;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign/{campaign_id}/bulk_create_keyword
*/
class Bulk_create_keywordRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Bulk_create_keywordRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign/{campaign_id}/bulk_create_keyword');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method adds keywords, in bulk, to an existing priority strategy ad group in a campaign that uses manual targeting.<br><br>This method also sets the CPC rate for each keyword, depending on the selected bidding strategy, as follows:<br><br><ul><li><code>FIXED</code>: If the seller provides a keyword bid, that bid value will be used.<br>If no bid is provided, the adgroup's default bid value will be used.</li><li><code>DYNAMIC</code>: The eBay suggested bid will be used.<br>If the seller passes in a value, a warning will be returned.</li></ul><br>In the request, supply the <b>campaign_id</b> as a path parameter.<br /><br />Call the <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> method to retrieve a list of current campaign IDs for a specified seller.
     * @param BulkCreateKeywordRequest $body A type that defines the fields for the bulk request to create keywords.
     * @param Bulk_create_keywordRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BulkCreateKeywordResponse|null>
     * @throws Exception
    */
    public function post(BulkCreateKeywordRequest $body, ?Bulk_create_keywordRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '404' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '409' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BulkCreateKeywordResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method adds keywords, in bulk, to an existing priority strategy ad group in a campaign that uses manual targeting.<br><br>This method also sets the CPC rate for each keyword, depending on the selected bidding strategy, as follows:<br><br><ul><li><code>FIXED</code>: If the seller provides a keyword bid, that bid value will be used.<br>If no bid is provided, the adgroup's default bid value will be used.</li><li><code>DYNAMIC</code>: The eBay suggested bid will be used.<br>If the seller passes in a value, a warning will be returned.</li></ul><br>In the request, supply the <b>campaign_id</b> as a path parameter.<br /><br />Call the <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> method to retrieve a list of current campaign IDs for a specified seller.
     * @param BulkCreateKeywordRequest $body A type that defines the fields for the bulk request to create keywords.
     * @param Bulk_create_keywordRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BulkCreateKeywordRequest $body, ?Bulk_create_keywordRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Bulk_create_keywordRequestBuilder
    */
    public function withUrl(string $rawUrl): Bulk_create_keywordRequestBuilder {
        return new Bulk_create_keywordRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
