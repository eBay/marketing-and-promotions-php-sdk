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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_update_ads_status_by_listing_id;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkAdUpdateStatusByListingIdResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkUpdateAdStatusByListingIdRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Error;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign/{campaign_id}/bulk_update_ads_status_by_listing_id
*/
class Bulk_update_ads_status_by_listing_idRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Bulk_update_ads_status_by_listing_idRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign/{campaign_id}/bulk_update_ads_status_by_listing_id');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The method updates the status of ads in bulk, based on listing ID values.<br /><br />Specify the <b>campaign_id</b> as a path parameter and supply a set of listing IDs with their updated <b>adStatus</b> values in the request body. An eBay listing ID is generated when a listing is created with the Trading API.<br /><br />Get the campaign IDs for a seller by calling <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> and call <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad-getads">getAds</a> to retrieve a list of seller inventory reference IDs.
     * @param BulkUpdateAdStatusByListingIdRequest $body The bulk request to update ads.
     * @param Bulk_update_ads_status_by_listing_idRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BulkAdUpdateStatusByListingIdResponse|null>
     * @throws Exception
    */
    public function post(BulkUpdateAdStatusByListingIdRequest $body, ?Bulk_update_ads_status_by_listing_idRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [BulkAdUpdateStatusByListingIdResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The method updates the status of ads in bulk, based on listing ID values.<br /><br />Specify the <b>campaign_id</b> as a path parameter and supply a set of listing IDs with their updated <b>adStatus</b> values in the request body. An eBay listing ID is generated when a listing is created with the Trading API.<br /><br />Get the campaign IDs for a seller by calling <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> and call <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad-getads">getAds</a> to retrieve a list of seller inventory reference IDs.
     * @param BulkUpdateAdStatusByListingIdRequest $body The bulk request to update ads.
     * @param Bulk_update_ads_status_by_listing_idRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BulkUpdateAdStatusByListingIdRequest $body, ?Bulk_update_ads_status_by_listing_idRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Bulk_update_ads_status_by_listing_idRequestBuilder
    */
    public function withUrl(string $rawUrl): Bulk_update_ads_status_by_listing_idRequestBuilder {
        return new Bulk_update_ads_status_by_listing_idRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
