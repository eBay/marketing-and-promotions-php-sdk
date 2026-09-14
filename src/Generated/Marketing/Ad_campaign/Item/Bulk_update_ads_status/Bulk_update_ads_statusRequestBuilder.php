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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_update_ads_status;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkAdUpdateStatusResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpdateAdStatusRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ErrorDetailV3;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign/{campaign_id}/bulk_update_ads_status
*/
class Bulk_update_ads_statusRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Bulk_update_ads_statusRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign/{campaign_id}/bulk_update_ads_status');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method works with listings created with either the <a href= "/Devzone/XML/docs/Reference/eBay/index.html">Trading API</a> or the <a href="/api-docs/sell/inventory/resources/methods" target="_blank">Inventory API</a>.<br /><br />This method updates the status of ads in bulk.<br /><br />Specify the <b>campaign_id</b> you want to update as a URI parameter, and configure the <b>adGroupStatus</b> in the request payload.
     * @param BulkUpdateAdStatusRequest $body The bulk request to update the ads.
     * @param Bulk_update_ads_statusRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BulkAdUpdateStatusResponse|null>
     * @throws Exception
    */
    public function post(BulkUpdateAdStatusRequest $body, ?Bulk_update_ads_statusRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '404' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '409' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BulkAdUpdateStatusResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method works with listings created with either the <a href= "/Devzone/XML/docs/Reference/eBay/index.html">Trading API</a> or the <a href="/api-docs/sell/inventory/resources/methods" target="_blank">Inventory API</a>.<br /><br />This method updates the status of ads in bulk.<br /><br />Specify the <b>campaign_id</b> you want to update as a URI parameter, and configure the <b>adGroupStatus</b> in the request payload.
     * @param BulkUpdateAdStatusRequest $body The bulk request to update the ads.
     * @param Bulk_update_ads_statusRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BulkUpdateAdStatusRequest $body, ?Bulk_update_ads_statusRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Bulk_update_ads_statusRequestBuilder
    */
    public function withUrl(string $rawUrl): Bulk_update_ads_statusRequestBuilder {
        return new Bulk_update_ads_statusRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
