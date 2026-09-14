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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Upsert_video_ads_preferences;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\ErrorDetailV3;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpsertVideoAdsPreferencesRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpsertVideoAdsPreferencesResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign/{campaign_id}/upsert_video_ads_preferences
*/
class Upsert_video_ads_preferencesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Upsert_video_ads_preferencesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign/{campaign_id}/upsert_video_ads_preferences');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Call this method to create or update video ads preferences for a single listing in an ad campaign. This operation accepts one <b>listingId</b> and one <b>videoAdsPreferences</b> object and updates the seller's video ads preference for a single listing. A video ad is served only when the video is available and approved. If the video is unavailable or not approved, the ad may fall back to the static listing image.<br><br>Use <b>upsertVideoAdsPreferences</b> when your application is handling one listing at a time and you want a simple way to enable or disable video ads for that listing. Setting <b>videoAdsEnabled</b> to <code>true</code> enables video ads for any ads associated with the specified listing ID within the campaign, while <code>false</code> opts any ads associated with that listing ID within the campaign out of video ads. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Use this operation only for listings in Promoted Listings priority campaigns that use the Cost Per Click (CPC) funding model and already have a video attached to the listing. Video ads preferences are managed at the campaign level, not the ad group level. When a listing ID is opted into video ads for a given campaign, all ads associated with that listing ID within the campaign are opted into video ads.</span></span></p><p>To confirm the updated state, retrieve the affected ad or ads with the <b>fieldgroups</b> query parameter set to <code>VIDEO</code> so <b>videoAdsPreferences</b> is included in the response.</p>
     * @param UpsertVideoAdsPreferencesRequest $body This request type defines the video ads preference create or update settings for a single listing in a campaign that uses the CPC funding model. It is used both for each listing item in the <b>bulkUpsertVideoAdsPreferences</b> request and as the request body for <b>upsertVideoAdsPreferences</b>.
     * @param Upsert_video_ads_preferencesRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UpsertVideoAdsPreferencesResponse|null>
     * @throws Exception
    */
    public function put(UpsertVideoAdsPreferencesRequest $body, ?Upsert_video_ads_preferencesRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '404' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '409' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UpsertVideoAdsPreferencesResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Call this method to create or update video ads preferences for a single listing in an ad campaign. This operation accepts one <b>listingId</b> and one <b>videoAdsPreferences</b> object and updates the seller's video ads preference for a single listing. A video ad is served only when the video is available and approved. If the video is unavailable or not approved, the ad may fall back to the static listing image.<br><br>Use <b>upsertVideoAdsPreferences</b> when your application is handling one listing at a time and you want a simple way to enable or disable video ads for that listing. Setting <b>videoAdsEnabled</b> to <code>true</code> enables video ads for any ads associated with the specified listing ID within the campaign, while <code>false</code> opts any ads associated with that listing ID within the campaign out of video ads. <p><span class="tablenote"><span style="color:#004680"><strong>Note: </strong>Use this operation only for listings in Promoted Listings priority campaigns that use the Cost Per Click (CPC) funding model and already have a video attached to the listing. Video ads preferences are managed at the campaign level, not the ad group level. When a listing ID is opted into video ads for a given campaign, all ads associated with that listing ID within the campaign are opted into video ads.</span></span></p><p>To confirm the updated state, retrieve the affected ad or ads with the <b>fieldgroups</b> query parameter set to <code>VIDEO</code> so <b>videoAdsPreferences</b> is included in the response.</p>
     * @param UpsertVideoAdsPreferencesRequest $body This request type defines the video ads preference create or update settings for a single listing in a campaign that uses the CPC funding model. It is used both for each listing item in the <b>bulkUpsertVideoAdsPreferences</b> request and as the request body for <b>upsertVideoAdsPreferences</b>.
     * @param Upsert_video_ads_preferencesRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(UpsertVideoAdsPreferencesRequest $body, ?Upsert_video_ads_preferencesRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
     * @return Upsert_video_ads_preferencesRequestBuilder
    */
    public function withUrl(string $rawUrl): Upsert_video_ads_preferencesRequestBuilder {
        return new Upsert_video_ads_preferencesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
