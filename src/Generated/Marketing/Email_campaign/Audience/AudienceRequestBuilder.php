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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Audience;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\Error;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\GetEmailCampaignAudiencesResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /email_campaign/audience
*/
class AudienceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AudienceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/email_campaign/audience?emailCampaignType={emailCampaignType}{&limit*,offset*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves all available email newsletter audiences for the <a href="/develop/api/sell/marketing_api#sell-marketing_api-email_campaign-getemailcampaigns.campaigntypeenum">email campaign type</a> specified by the <b>emailCampaignType</b> path parameter.<br><br>Use the optional <b>limit</b> and <b>offset</b> path parameters to paginate the results and to control which records are returned, respectively.
     * @param AudienceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetEmailCampaignAudiencesResponse|null>
     * @throws Exception
    */
    public function get(?AudienceRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetEmailCampaignAudiencesResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method retrieves all available email newsletter audiences for the <a href="/develop/api/sell/marketing_api#sell-marketing_api-email_campaign-getemailcampaigns.campaigntypeenum">email campaign type</a> specified by the <b>emailCampaignType</b> path parameter.<br><br>Use the optional <b>limit</b> and <b>offset</b> path parameters to paginate the results and to control which records are returned, respectively.
     * @param AudienceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AudienceRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AudienceRequestBuilder
    */
    public function withUrl(string $rawUrl): AudienceRequestBuilder {
        return new AudienceRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
