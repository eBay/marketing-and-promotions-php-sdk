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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group;

use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad_group\Item\WithAd_group_ItemRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\AdGroupPagedCollectionResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateAdGroupRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Error;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign/{campaign_id}/ad_group
*/
class Ad_groupRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/MarketingAndPromotions/Generated/Marketing.ad_campaign.item.ad_group.item collection
     * @param string $ad_group_id This path parameter specifies the unique identifier of the ad group being retrieved.<br><br> Use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-getadgroups">getAdGroups</a> method to retrieve ad group IDs.
     * @return WithAd_group_ItemRequestBuilder
    */
    public function byAd_group_id(string $ad_group_id): WithAd_group_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['ad_group_id'] = $ad_group_id;
        return new WithAd_group_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Ad_groupRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign/{campaign_id}/ad_group{?ad_group_status*,limit*,offset*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves ad groups for the specified campaign.<br /><br />Each campaign can only have <b>one</b> ad group.<br /><br />In the request, supply the <b>campaign_id</b> as the path parameter.<br /><br />Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> to retrieve a list of the current campaign IDs for a seller.
     * @param Ad_groupRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdGroupPagedCollectionResponse|null>
     * @throws Exception
    */
    public function get(?Ad_groupRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AdGroupPagedCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method adds an ad group to an existing priority strategy campaign that uses manual targeting.<br /><br />To create an ad group for a campaign, specify the <b>defaultBid</b> for the ad group in the payload of the request. Then specify the campaign to which the ad group should be associated using the <b>campaign_id</b> path parameter.<br /><br />Each campaign can have one or more associated ad groups.
     * @param CreateAdGroupRequest $body This type defines the fields for the <b>createAdGroup</b> request.
     * @param Ad_groupRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Ad_groupPostResponse|null>
     * @throws Exception
    */
    public function post(CreateAdGroupRequest $body, ?Ad_groupRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Ad_groupPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method retrieves ad groups for the specified campaign.<br /><br />Each campaign can only have <b>one</b> ad group.<br /><br />In the request, supply the <b>campaign_id</b> as the path parameter.<br /><br />Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> to retrieve a list of the current campaign IDs for a seller.
     * @param Ad_groupRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Ad_groupRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * This method adds an ad group to an existing priority strategy campaign that uses manual targeting.<br /><br />To create an ad group for a campaign, specify the <b>defaultBid</b> for the ad group in the payload of the request. Then specify the campaign to which the ad group should be associated using the <b>campaign_id</b> path parameter.<br /><br />Each campaign can have one or more associated ad groups.
     * @param CreateAdGroupRequest $body This type defines the fields for the <b>createAdGroup</b> request.
     * @param Ad_groupRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateAdGroupRequest $body, ?Ad_groupRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Ad_groupRequestBuilder
    */
    public function withUrl(string $rawUrl): Ad_groupRequestBuilder {
        return new Ad_groupRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
