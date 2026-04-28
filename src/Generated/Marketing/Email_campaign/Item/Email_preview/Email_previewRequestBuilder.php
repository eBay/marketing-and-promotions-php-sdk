<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Item\Email_preview;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\GetEmailPreviewResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /email_campaign/{email_campaign_id}/email_preview
*/
class Email_previewRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Email_previewRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/email_campaign/{email_campaign_id}/email_preview');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method returns a preview of the email sent by the email campaign indicated by the <b>email_campaign_id</b> path parameter.<br><br>Call <a href="/api-docs/sell/marketing/resources/campaign/methods/getEmailCampaigns">getEmailCampaigns</a> to obtain a list of email campaigns. Use the <b>emailCampaignId</b> value of the desired email campaign as the <b>email_campaign_id</b> path parameter value.<br><br>If this call is executed successfully, the response returns a <b>content</b> field that contains the raw HTML code of the email campaign that can then be rendered anywhere.<br><br><span class="tablenote"><b>Note:</b> The eBay listings in the email are sorted according to the email campaign sort criteria. The individual listings can change over time, as well.<br><br>The result of the email preview call can be treated as a snapshot of the email campaign taken at the date and time of the <b>renderDate</b> value found in the results of the call.</span>
     * @param Email_previewRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetEmailPreviewResponse|null>
     * @throws Exception
    */
    public function get(?Email_previewRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [GetEmailPreviewResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method returns a preview of the email sent by the email campaign indicated by the <b>email_campaign_id</b> path parameter.<br><br>Call <a href="/api-docs/sell/marketing/resources/campaign/methods/getEmailCampaigns">getEmailCampaigns</a> to obtain a list of email campaigns. Use the <b>emailCampaignId</b> value of the desired email campaign as the <b>email_campaign_id</b> path parameter value.<br><br>If this call is executed successfully, the response returns a <b>content</b> field that contains the raw HTML code of the email campaign that can then be rendered anywhere.<br><br><span class="tablenote"><b>Note:</b> The eBay listings in the email are sorted according to the email campaign sort criteria. The individual listings can change over time, as well.<br><br>The result of the email preview call can be treated as a snapshot of the email campaign taken at the date and time of the <b>renderDate</b> value found in the results of the call.</span>
     * @param Email_previewRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Email_previewRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Email_previewRequestBuilder
    */
    public function withUrl(string $rawUrl): Email_previewRequestBuilder {
        return new Email_previewRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
