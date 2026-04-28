<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Item;

use EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Item\Email_preview\Email_previewRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\DeleteEmailCampaignResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\GetEmailCampaignResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateCampaignRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\UpdateEmailCampaignResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /email_campaign/{email_campaign_id}
*/
class WithEmail_campaign_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The email_preview property
    */
    public function email_preview(): Email_previewRequestBuilder {
        return new Email_previewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithEmail_campaign_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/email_campaign/{email_campaign_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method deletes the email campaign specified by the <b>email_campaign_id</b> path parameter.<br><br>Call <a href="/api-docs/sell/marketing/resources/email_campaign/methods/getEmailCampaigns">getEmailCampaigns</a> to retrieve all of the seller's email campaigns. Use the <b>email_campaign_id</b> of the desired email campaign in the response as the path parameter for this request.
     * @param WithEmail_campaign_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeleteEmailCampaignResponse|null>
     * @throws Exception
    */
    public function delete(?WithEmail_campaign_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [DeleteEmailCampaignResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method returns the details of a single email campaign specified by the <b>email_campaign_id</b> path parameter.<br><br>Call <a href="/api-docs/sell/marketing/resources/campaign/methods/getEmailCampaigns">getEmailCampaigns</a> to retrieve a list of all email campaigns from a seller's eBay store.
     * @param WithEmail_campaign_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetEmailCampaignResponse|null>
     * @throws Exception
    */
    public function get(?WithEmail_campaign_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [GetEmailCampaignResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method lets users update an existing email campaign. Pass the <b>emailCampaignId</b> in the request URL and specify the changes to field values in the request payload.<br><br><span class="tablenote"><b>Note: </b>You can only update the custom fields of an email campaign. Fixed values, such as the <b>emailCampaignType</b>, cannot be changed. For full specifications of fixed values for each email campaign type, see the <a href="/api-docs/sell/marketing/resources/email_campaign/methods/createEmailCampaign">createEmailCampaign</a> method documentation.</span>
     * @param UpdateCampaignRequest $body The update email campaign request payload
     * @param WithEmail_campaign_ItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UpdateEmailCampaignResponse|null>
     * @throws Exception
    */
    public function put(UpdateCampaignRequest $body, ?WithEmail_campaign_ItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [UpdateEmailCampaignResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method deletes the email campaign specified by the <b>email_campaign_id</b> path parameter.<br><br>Call <a href="/api-docs/sell/marketing/resources/email_campaign/methods/getEmailCampaigns">getEmailCampaigns</a> to retrieve all of the seller's email campaigns. Use the <b>email_campaign_id</b> of the desired email campaign in the response as the path parameter for this request.
     * @param WithEmail_campaign_ItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithEmail_campaign_ItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * This method returns the details of a single email campaign specified by the <b>email_campaign_id</b> path parameter.<br><br>Call <a href="/api-docs/sell/marketing/resources/campaign/methods/getEmailCampaigns">getEmailCampaigns</a> to retrieve a list of all email campaigns from a seller's eBay store.
     * @param WithEmail_campaign_ItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithEmail_campaign_ItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * This method lets users update an existing email campaign. Pass the <b>emailCampaignId</b> in the request URL and specify the changes to field values in the request payload.<br><br><span class="tablenote"><b>Note: </b>You can only update the custom fields of an email campaign. Fixed values, such as the <b>emailCampaignType</b>, cannot be changed. For full specifications of fixed values for each email campaign type, see the <a href="/api-docs/sell/marketing/resources/email_campaign/methods/createEmailCampaign">createEmailCampaign</a> method documentation.</span>
     * @param UpdateCampaignRequest $body The update email campaign request payload
     * @param WithEmail_campaign_ItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(UpdateCampaignRequest $body, ?WithEmail_campaign_ItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WithEmail_campaign_ItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithEmail_campaign_ItemRequestBuilder {
        return new WithEmail_campaign_ItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
