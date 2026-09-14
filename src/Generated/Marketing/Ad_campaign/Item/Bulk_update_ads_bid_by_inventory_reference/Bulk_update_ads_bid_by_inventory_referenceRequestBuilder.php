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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_update_ads_bid_by_inventory_reference;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateAdsByInventoryReferenceRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpdateAdsByInventoryReferenceResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ErrorDetailV3;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign/{campaign_id}/bulk_update_ads_bid_by_inventory_reference
*/
class Bulk_update_ads_bid_by_inventory_referenceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Bulk_update_ads_bid_by_inventory_referenceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign/{campaign_id}/bulk_update_ads_bid_by_inventory_reference');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method works with listings created with either the <a href="/Devzone/XML/docs/Reference/eBay/index.html" title="Trading API Reference" target="_blank">Trading API</a> or the <a href="/api-docs/sell/inventory/resources/methods" title="Inventory API Reference" target="_blank">Inventory API</a>.  <p>The method updates the <b>bidPercentage</b> values for a set of ads associated with the specified campaign.</p>  <p>Specify the <b>campaign_id</b> as a path parameter and supply a set of listing IDs with their associated updated <b>bidPercentage</b> values in the request body. An eBay listing ID is generated when a listing is created with the Trading API.</p>  <p>Get the campaign IDs for a seller by calling <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> and call <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad-getads">getAds</a> to get a list of the seller's inventory reference IDs.</p><span class="tablenote"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href="/api-docs/sell/static/marketing/pl-overview.html#funding-model" target="_blank">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>
     * @param BulkCreateAdsByInventoryReferenceRequest $body This request object defines the fields for the <b>BulkCreateAdsByInventoryReference</b> request.
     * @param Bulk_update_ads_bid_by_inventory_referenceRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BulkUpdateAdsByInventoryReferenceResponse|null>
     * @throws Exception
    */
    public function post(BulkCreateAdsByInventoryReferenceRequest $body, ?Bulk_update_ads_bid_by_inventory_referenceRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '404' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '409' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BulkUpdateAdsByInventoryReferenceResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method works with listings created with either the <a href="/Devzone/XML/docs/Reference/eBay/index.html" title="Trading API Reference" target="_blank">Trading API</a> or the <a href="/api-docs/sell/inventory/resources/methods" title="Inventory API Reference" target="_blank">Inventory API</a>.  <p>The method updates the <b>bidPercentage</b> values for a set of ads associated with the specified campaign.</p>  <p>Specify the <b>campaign_id</b> as a path parameter and supply a set of listing IDs with their associated updated <b>bidPercentage</b> values in the request body. An eBay listing ID is generated when a listing is created with the Trading API.</p>  <p>Get the campaign IDs for a seller by calling <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> and call <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad-getads">getAds</a> to get a list of the seller's inventory reference IDs.</p><span class="tablenote"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href="/api-docs/sell/static/marketing/pl-overview.html#funding-model" target="_blank">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>
     * @param BulkCreateAdsByInventoryReferenceRequest $body This request object defines the fields for the <b>BulkCreateAdsByInventoryReference</b> request.
     * @param Bulk_update_ads_bid_by_inventory_referenceRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BulkCreateAdsByInventoryReferenceRequest $body, ?Bulk_update_ads_bid_by_inventory_referenceRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Bulk_update_ads_bid_by_inventory_referenceRequestBuilder
    */
    public function withUrl(string $rawUrl): Bulk_update_ads_bid_by_inventory_referenceRequestBuilder {
        return new Bulk_update_ads_bid_by_inventory_referenceRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
