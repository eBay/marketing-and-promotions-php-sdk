<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Promotion\Item\Pause;

use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /promotion/{promotion_id}/pause
*/
class PauseRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new PauseRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/promotion/{promotion_id}/pause');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <span class="tablenote"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method pauses a currently-active (RUNNING) threshold discount and changes the state of the discount from <code>RUNNING</code> to <code>PAUSED</code>. Pausing a discount makes the discount temporarily unavailable to buyers and any currently-incomplete transactions will not receive the offer until the discount is resumed. Also, discount teasers are not displayed when a discount is paused.  <br><br>Pass the ID of the discount you want to pause using the <b>promotion_id</b> path parameter. Call <a href="/api-docs/sell/marketing/resources/promotion/methods/getPromotions">getPromotions</a> to retrieve the IDs of the seller's discounts. <br><br><b>Note:</b> You can only pause threshold discounts (you cannot pause markdown discounts).
     * @param PauseRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(?PauseRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * <span class="tablenote"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method pauses a currently-active (RUNNING) threshold discount and changes the state of the discount from <code>RUNNING</code> to <code>PAUSED</code>. Pausing a discount makes the discount temporarily unavailable to buyers and any currently-incomplete transactions will not receive the offer until the discount is resumed. Also, discount teasers are not displayed when a discount is paused.  <br><br>Pass the ID of the discount you want to pause using the <b>promotion_id</b> path parameter. Call <a href="/api-docs/sell/marketing/resources/promotion/methods/getPromotions">getPromotions</a> to retrieve the IDs of the seller's discounts. <br><br><b>Note:</b> You can only pause threshold discounts (you cannot pause markdown discounts).
     * @param PauseRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?PauseRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return PauseRequestBuilder
    */
    public function withUrl(string $rawUrl): PauseRequestBuilder {
        return new PauseRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
