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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Negative_keyword;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateNegativeKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Error;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ErrorDetailV3;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\NegativeKeywordPagedCollectionResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Negative_keyword\Item\WithNegative_keyword_ItemRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /negative_keyword
*/
class Negative_keywordRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/MarketingAndPromotions/Generated/Marketing.negative_keyword.item collection
     * @param string $negative_keyword_id This path parameter specifies the unique identifier for the negative keyword being retrieved.<br /><br />Use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-negative_keyword-getnegativekeywords">getNegativeKeywords</a> method to retrieve negative keyword IDs.
     * @return WithNegative_keyword_ItemRequestBuilder
    */
    public function byNegative_keyword_id(string $negative_keyword_id): WithNegative_keyword_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['negative_keyword_id'] = $negative_keyword_id;
        return new WithNegative_keyword_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Negative_keywordRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/negative_keyword{?campaign_ids*,limit*,negative_keyword_status*,offset*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method can be used to retrieve all of the negative keywords for ad groups in priority strategy campaigns that use the Cost Per Click (CPC) funding model.<br /><br />The results can be filtered using the <b>campaign_ids</b>, <b>ad_group_ids</b>, and <b>negative_keyword_status</b> query parameters.<br /><br />Call the <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> method to retrieve a list of current campaign IDs for a seller.
     * @param Negative_keywordRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<NegativeKeywordPagedCollectionResponse|null>
     * @throws Exception
    */
    public function get(?Negative_keywordRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '403' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [NegativeKeywordPagedCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method adds a negative keyword to an existing ad group in a priority strategy campaign that uses manual targeting.<br /><br />Specify the <b>campaignId</b> and <b>adGroupId</b> in the request body, along with the <b>negativeKeywordText</b> and <b>negativeKeywordMatchType</b>.<br /><br />Call the <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> method to retrieve a list of current campaign IDs for a specified seller.
     * @param CreateNegativeKeywordRequest $body A type that defines the fields for the request to create a negative keyword.
     * @param Negative_keywordRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Negative_keywordPostResponse|null>
     * @throws Exception
    */
    public function post(CreateNegativeKeywordRequest $body, ?Negative_keywordRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '403' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '409' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
                '500' => [ErrorDetailV3::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Negative_keywordPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method can be used to retrieve all of the negative keywords for ad groups in priority strategy campaigns that use the Cost Per Click (CPC) funding model.<br /><br />The results can be filtered using the <b>campaign_ids</b>, <b>ad_group_ids</b>, and <b>negative_keyword_status</b> query parameters.<br /><br />Call the <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> method to retrieve a list of current campaign IDs for a seller.
     * @param Negative_keywordRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Negative_keywordRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/negative_keyword?ad_group_ids={ad_group_ids}{&campaign_ids*,limit*,negative_keyword_status*,offset*}';
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
     * This method adds a negative keyword to an existing ad group in a priority strategy campaign that uses manual targeting.<br /><br />Specify the <b>campaignId</b> and <b>adGroupId</b> in the request body, along with the <b>negativeKeywordText</b> and <b>negativeKeywordMatchType</b>.<br /><br />Call the <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> method to retrieve a list of current campaign IDs for a specified seller.
     * @param CreateNegativeKeywordRequest $body A type that defines the fields for the request to create a negative keyword.
     * @param Negative_keywordRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateNegativeKeywordRequest $body, ?Negative_keywordRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Negative_keywordRequestBuilder
    */
    public function withUrl(string $rawUrl): Negative_keywordRequestBuilder {
        return new Negative_keywordRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
