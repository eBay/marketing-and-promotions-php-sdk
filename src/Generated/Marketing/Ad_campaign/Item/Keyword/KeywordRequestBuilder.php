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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Keyword;

use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Keyword\Item\WithKeyword_ItemRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Error;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\KeywordPagedCollectionResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign/{campaign_id}/keyword
*/
class KeywordRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/MarketingAndPromotions/Generated/Marketing.ad_campaign.item.keyword.item collection
     * @param string $keyword_id This path parameter specifies the unique identifier of the keyword being retrieved.<br><br> Use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-keyword-getkeywords">getKeywords</a> method to retrieve keyword IDs.
     * @return WithKeyword_ItemRequestBuilder
    */
    public function byKeyword_id(string $keyword_id): WithKeyword_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['keyword_id'] = $keyword_id;
        return new WithKeyword_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new KeywordRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign/{campaign_id}/keyword{?ad_group_ids*,keyword_status*,limit*,offset*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method can be used to retrieve all of the keywords for ad groups in priority strategy campaigns that use the Cost Per Click (CPC) funding model.<br /><br />In the request, specify the <b>campaign_id</b> as a path parameter. If one or more <b>ad_group_ids</b> are passed in the request body, the keywords for those ad groups will be returned. If <b>ad_group_ids</b> are not passed in the response body, the call will return all the keywords in the campaign.<br /><br />Call the <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> method to retrieve a list of current campaign IDs for a seller.
     * @param KeywordRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<KeywordPagedCollectionResponse|null>
     * @throws Exception
    */
    public function get(?KeywordRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [KeywordPagedCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method creates keywords using a specified campaign ID for an existing priority strategy campaign that uses manual targeting.<br /><br />In the request, supply the <b>campaign_id</b> as a path parameter.<br /><br />Call the <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-suggestkeywords">suggestKeywords</a> method to retrieve a list of keyword ideas to be targeted for priority strategy campaigns, and call the <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> method to retrieve a list of current campaign IDs for a seller.
     * @param CreateKeywordRequest $body A type that defines the fields for the request to create a keyword.
     * @param KeywordRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<KeywordPostResponse|null>
     * @throws Exception
    */
    public function post(CreateKeywordRequest $body, ?KeywordRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [KeywordPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method can be used to retrieve all of the keywords for ad groups in priority strategy campaigns that use the Cost Per Click (CPC) funding model.<br /><br />In the request, specify the <b>campaign_id</b> as a path parameter. If one or more <b>ad_group_ids</b> are passed in the request body, the keywords for those ad groups will be returned. If <b>ad_group_ids</b> are not passed in the response body, the call will return all the keywords in the campaign.<br /><br />Call the <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> method to retrieve a list of current campaign IDs for a seller.
     * @param KeywordRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?KeywordRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * This method creates keywords using a specified campaign ID for an existing priority strategy campaign that uses manual targeting.<br /><br />In the request, supply the <b>campaign_id</b> as a path parameter.<br /><br />Call the <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-suggestkeywords">suggestKeywords</a> method to retrieve a list of keyword ideas to be targeted for priority strategy campaigns, and call the <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaigns">getCampaigns</a> method to retrieve a list of current campaign IDs for a seller.
     * @param CreateKeywordRequest $body A type that defines the fields for the request to create a keyword.
     * @param KeywordRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateKeywordRequest $body, ?KeywordRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return KeywordRequestBuilder
    */
    public function withUrl(string $rawUrl): KeywordRequestBuilder {
        return new KeywordRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
