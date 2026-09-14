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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Delete_ads_by_inventory_reference;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\AdIds;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\DeleteAdsByInventoryReferenceRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ErrorDetailV3;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign/{campaign_id}/delete_ads_by_inventory_reference
*/
class Delete_ads_by_inventory_referenceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Delete_ads_by_inventory_referenceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign/{campaign_id}/delete_ads_by_inventory_reference');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method works with listings that are managed with the <a href="/api-docs/sell/inventory/resources/methods" title="Inventory API Reference" target="_blank">Inventory API</a>.  <p>The method deletes ads using a list of seller-defined inventory reference IDs, used with the Inventory API, that are associated with the specified campaign ID.</p> <p>Specify the campaign ID (as a path parameter) and a list of <b>inventoryReferenceId</b> and <b>inventoryReferenceType</b> pairs to be deleted.</p>  <p>Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> to get a list of the seller's current campaign IDs.</p><span class="tablenote"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href="/api-docs/sell/static/marketing/pl-overview.html#funding-model" target="_blank">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span><br />When using the CPC funding model, use the bulkUpdateAdsStatusByInventoryReference method to change the status of ads to <code>ARCHIVED</code>.
     * @param DeleteAdsByInventoryReferenceRequest $body This request object defines the fields for the <b>deleteAdsByInventoryReference</b> request.
     * @param Delete_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdIds|null>
     * @throws Exception
    */
    public function post(DeleteAdsByInventoryReferenceRequest $body, ?Delete_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '404' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '409' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdIds::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method works with listings that are managed with the <a href="/api-docs/sell/inventory/resources/methods" title="Inventory API Reference" target="_blank">Inventory API</a>.  <p>The method deletes ads using a list of seller-defined inventory reference IDs, used with the Inventory API, that are associated with the specified campaign ID.</p> <p>Specify the campaign ID (as a path parameter) and a list of <b>inventoryReferenceId</b> and <b>inventoryReferenceType</b> pairs to be deleted.</p>  <p>Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> to get a list of the seller's current campaign IDs.</p><span class="tablenote"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href="/api-docs/sell/static/marketing/pl-overview.html#funding-model" target="_blank">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span><br />When using the CPC funding model, use the bulkUpdateAdsStatusByInventoryReference method to change the status of ads to <code>ARCHIVED</code>.
     * @param DeleteAdsByInventoryReferenceRequest $body This request object defines the fields for the <b>deleteAdsByInventoryReference</b> request.
     * @param Delete_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeleteAdsByInventoryReferenceRequest $body, ?Delete_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Delete_ads_by_inventory_referenceRequestBuilder
    */
    public function withUrl(string $rawUrl): Delete_ads_by_inventory_referenceRequestBuilder {
        return new Delete_ads_by_inventory_referenceRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
