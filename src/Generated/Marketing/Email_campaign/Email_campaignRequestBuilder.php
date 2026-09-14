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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign;

use EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Audience\AudienceRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Item\WithEmail_campaign_ItemRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Report\ReportRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateEmailCampaignRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateEmailCampaignResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Error;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\GetEmailCampaignsResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /email_campaign
*/
class Email_campaignRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The audience property
    */
    public function audience(): AudienceRequestBuilder {
        return new AudienceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The report property
    */
    public function report(): ReportRequestBuilder {
        return new ReportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the EBay/MarketingAndPromotions/Generated/Marketing.email_campaign.item collection
     * @param string $email_campaign_id This path parameter specifies the unique eBay-assigned identifier of the email campaign being retrieved.<br><br>Use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-email_campaign-getemailcampaigns">getEmailCampaigns</a> method to retrieve a list of email campaign IDs for a seller.
     * @return WithEmail_campaign_ItemRequestBuilder
    */
    public function byEmail_campaign_id(string $email_campaign_id): WithEmail_campaign_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['email_campaign_id'] = $email_campaign_id;
        return new WithEmail_campaign_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Email_campaignRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/email_campaign{?limit*,offset*,q*,sort*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves a list of email campaigns from a seller's eBay store.<br><br>Users can filter the results by <a href="/develop/api/sell/marketing_api#sell-marketing_api-email_campaign-getemailcampaigns.campaigntypeenum">email campaign type</a>, <a href="/develop/api/sell/marketing_api#sell-marketing_api-email_campaign-getemailcampaigns.emailcampaignstatusenum">email campaign status</a>, and <a href="/develop/api/sell/request_headers#marketplace-id-values" target="_blank">marketplace ID</a> using the <code>q</code> query parameter.
     * @param Email_campaignRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetEmailCampaignsResponse|null>
     * @throws Exception
    */
    public function get(?Email_campaignRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetEmailCampaignsResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method creates a new email campaign. An eBay store owner can create six different types of email campaigns: Welcome, New products & collections, Coupon, Sale event + markdown, Order discount, and Volume pricing.<br><br>A successful <b>createEmailCampaign</b> request returns the <b>emailCampaignId</b> assigned to the new email campaign.<br><br>The fields <b>emailCampaignType</b>, <b>audienceCodes</b>, <b>itemSelectMode</b>, <b>subject</b>, and <b>personalizedMessage</b> are required for all email campaign types. <br><br>Specific email campaign types have required values for additional fields. For more information on the email campaign types, see the <a href="/api-docs/sell/static/marketing/store-email-campaigns.html#email-campain-types" target="_blank">Store Email Campaigns</a> section of the Selling Integration Guide. 
     * @param CreateEmailCampaignRequest $body Create a new email campaign request.
     * @param Email_campaignRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateEmailCampaignResponse|null>
     * @throws Exception
    */
    public function post(CreateEmailCampaignRequest $body, ?Email_campaignRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CreateEmailCampaignResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This method retrieves a list of email campaigns from a seller's eBay store.<br><br>Users can filter the results by <a href="/develop/api/sell/marketing_api#sell-marketing_api-email_campaign-getemailcampaigns.campaigntypeenum">email campaign type</a>, <a href="/develop/api/sell/marketing_api#sell-marketing_api-email_campaign-getemailcampaigns.emailcampaignstatusenum">email campaign status</a>, and <a href="/develop/api/sell/request_headers#marketplace-id-values" target="_blank">marketplace ID</a> using the <code>q</code> query parameter.
     * @param Email_campaignRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Email_campaignRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * This method creates a new email campaign. An eBay store owner can create six different types of email campaigns: Welcome, New products & collections, Coupon, Sale event + markdown, Order discount, and Volume pricing.<br><br>A successful <b>createEmailCampaign</b> request returns the <b>emailCampaignId</b> assigned to the new email campaign.<br><br>The fields <b>emailCampaignType</b>, <b>audienceCodes</b>, <b>itemSelectMode</b>, <b>subject</b>, and <b>personalizedMessage</b> are required for all email campaign types. <br><br>Specific email campaign types have required values for additional fields. For more information on the email campaign types, see the <a href="/api-docs/sell/static/marketing/store-email-campaigns.html#email-campain-types" target="_blank">Store Email Campaigns</a> section of the Selling Integration Guide. 
     * @param CreateEmailCampaignRequest $body Create a new email campaign request.
     * @param Email_campaignRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateEmailCampaignRequest $body, ?Email_campaignRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Email_campaignRequestBuilder
    */
    public function withUrl(string $rawUrl): Email_campaignRequestBuilder {
        return new Email_campaignRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
