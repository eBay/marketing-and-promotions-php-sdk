<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Keyword;

use EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Keyword\Item\WithKeyword_ItemRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateKeywordRequest;
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
     * @param string $keyword_id This path parameter specifies the unique identifier of the keyword being retrieved.<br><br> Use the <a href="/api-docs/sell/marketing/resources/keyword/methods/getKeywords" target="_blank">getKeywords</a> method to retrieve keyword IDs.
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
     * <span class="tablenote"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href="/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests " target="_blank "> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href="/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility " target="_blank ">getAdvertisingEligibility</a> method in Account API.</span><br />This method can be used to retrieve all of the keywords for ad groups in priority strategy campaigns that use the Cost Per Click (CPC) funding model.<br /><br />In the request, specify the <b>campaign_id</b> as a path parameter. If one or more <b>ad_group_ids</b> are passed in the request body, the keywords for those ad groups will be returned. If <b>ad_group_ids</b> are not passed in the response body, the call will return all the keywords in the campaign.<br /><br />Call the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a> method to retrieve a list of current campaign IDs for a seller.
     * @param KeywordRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<KeywordPagedCollectionResponse|null>
     * @throws Exception
    */
    public function get(?KeywordRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [KeywordPagedCollectionResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <span class="tablenote"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href="/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests " target="_blank "> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href="/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility " target="_blank ">getAdvertisingEligibility</a> method in Account API.</span><br />This method creates keywords using a specified campaign ID for an existing priority strategy campaign that uses manual targeting.<br /><br />In the request, supply the <b>campaign_id</b> as a path parameter.<br /><br />Call the <a href="/api-docs/sell/marketing/resources/campaign/methods/suggestKeywords">suggestKeywords</a> method to retrieve a list of keyword ideas to be targeted for priority strategy campaigns, and call the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a> method to retrieve a list of current campaign IDs for a seller.
     * @param CreateKeywordRequest $body A type that defines the fields for the <b>CreateKeyword</b> request.
     * @param KeywordRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<KeywordPostResponse|null>
     * @throws Exception
    */
    public function post(CreateKeywordRequest $body, ?KeywordRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [KeywordPostResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <span class="tablenote"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href="/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests " target="_blank "> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href="/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility " target="_blank ">getAdvertisingEligibility</a> method in Account API.</span><br />This method can be used to retrieve all of the keywords for ad groups in priority strategy campaigns that use the Cost Per Click (CPC) funding model.<br /><br />In the request, specify the <b>campaign_id</b> as a path parameter. If one or more <b>ad_group_ids</b> are passed in the request body, the keywords for those ad groups will be returned. If <b>ad_group_ids</b> are not passed in the response body, the call will return all the keywords in the campaign.<br /><br />Call the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a> method to retrieve a list of current campaign IDs for a seller.
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
     * <span class="tablenote"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href="/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests " target="_blank "> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href="/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility " target="_blank ">getAdvertisingEligibility</a> method in Account API.</span><br />This method creates keywords using a specified campaign ID for an existing priority strategy campaign that uses manual targeting.<br /><br />In the request, supply the <b>campaign_id</b> as a path parameter.<br /><br />Call the <a href="/api-docs/sell/marketing/resources/campaign/methods/suggestKeywords">suggestKeywords</a> method to retrieve a list of keyword ideas to be targeted for priority strategy campaigns, and call the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a> method to retrieve a list of current campaign IDs for a seller.
     * @param CreateKeywordRequest $body A type that defines the fields for the <b>CreateKeyword</b> request.
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
