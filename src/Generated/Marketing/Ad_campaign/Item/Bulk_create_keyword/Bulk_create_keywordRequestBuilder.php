<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Bulk_create_keyword;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateKeywordRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BulkCreateKeywordResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign/{campaign_id}/bulk_create_keyword
*/
class Bulk_create_keywordRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Bulk_create_keywordRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign/{campaign_id}/bulk_create_keyword');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <span class="tablenote"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href="/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests " target="_blank "> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href="/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility " target="_blank ">getAdvertisingEligibility</a> method in Account API.</span><br />This method adds keywords, in bulk, to an existing priority strategy ad group in a campaign that uses manual targeting.<br><br>This method also sets the CPC rate for each keyword, depending on the selected bidding strategy, as follows:<br><br><ul><li><code>FIXED</code>: If the seller provides a keyword bid, that bid value will be used.<br><br>If no bid is provided, the adgroup's default bid value will be used.</li><li><code>DYNAMIC</code>: The eBay suggested bid will be used.<br><br>If the seller passes in a value, a warning will be returned.</li></ul><br>In the request, supply the <b>campaign_id</b> as a path parameter.<br /><br />Call the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a> method to retrieve a list of current campaign IDs for a specified seller.
     * @param BulkCreateKeywordRequest $body A type that contains the fields for the bulk request to create keywords.
     * @param Bulk_create_keywordRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BulkCreateKeywordResponse|null>
     * @throws Exception
    */
    public function post(BulkCreateKeywordRequest $body, ?Bulk_create_keywordRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [BulkCreateKeywordResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <span class="tablenote"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href="/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests " target="_blank "> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href="/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility " target="_blank ">getAdvertisingEligibility</a> method in Account API.</span><br />This method adds keywords, in bulk, to an existing priority strategy ad group in a campaign that uses manual targeting.<br><br>This method also sets the CPC rate for each keyword, depending on the selected bidding strategy, as follows:<br><br><ul><li><code>FIXED</code>: If the seller provides a keyword bid, that bid value will be used.<br><br>If no bid is provided, the adgroup's default bid value will be used.</li><li><code>DYNAMIC</code>: The eBay suggested bid will be used.<br><br>If the seller passes in a value, a warning will be returned.</li></ul><br>In the request, supply the <b>campaign_id</b> as a path parameter.<br /><br />Call the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a> method to retrieve a list of current campaign IDs for a specified seller.
     * @param BulkCreateKeywordRequest $body A type that contains the fields for the bulk request to create keywords.
     * @param Bulk_create_keywordRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(BulkCreateKeywordRequest $body, ?Bulk_create_keywordRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Bulk_create_keywordRequestBuilder
    */
    public function withUrl(string $rawUrl): Bulk_create_keywordRequestBuilder {
        return new Bulk_create_keywordRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
