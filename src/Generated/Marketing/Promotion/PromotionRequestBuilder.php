<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Promotion;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\PromotionsPagedCollection;
use EBay\MarketingAndPromotions\Generated\Marketing\Promotion\Item\WithPromotion_ItemRequestBuilder;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /promotion
*/
class PromotionRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/MarketingAndPromotions/Generated/Marketing.promotion.item collection
     * @param string $promotion_id This path parameter takes a concatenation of the ID of the discount associated with the listing set plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an "at sign" (<b>@</b>). <br><br>The ID of the discount (<b>promotionId</b>) is a unique eBay-assigned value that's generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discount is hosted.<br><br> Use the <a href="/api-docs/sell/marketing/resources/promotion/methods/getPromotions">getPromotions</a> method to retrieve promotion Ids. See <a href="/api-docs/sell/marketing/types/ba:MarketplaceIdEnum">MarketplaceIdEnum</a> for supported Marketplace ID values.<br><br><b>Example:</b> <code>1********5@EBAY_US</code>
     * @return WithPromotion_ItemRequestBuilder
    */
    public function byPromotion_id(string $promotion_id): WithPromotion_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['promotion_id'] = $promotion_id;
        return new WithPromotion_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PromotionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/promotion?marketplace_id={marketplace_id}{&limit*,offset*,promotion_status*,promotion_type*,q*,sort*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <span class="tablenote"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method returns a list of a seller's undeleted discounts. <p>The call returns up to 200 currently-available discounts on the specified marketplace. While the response body does not include the discount's <b>discountRules</b> or <b>inventoryCriterion</b> containers, it does include the <b>promotionHref</b> (which you can use to retrieve the complete details of the discount).</p>  <p>Use query parameters to sort and filter the results by the number of discounts to return, the discount state or type, and the eBay marketplace. You can also supply keywords to limit the response to the discounts that contain that keywords in the title of the discount.</p> <p><b>Maximum returned:</b> 200</p>
     * @param PromotionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PromotionsPagedCollection|null>
     * @throws Exception
    */
    public function get(?PromotionRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [PromotionsPagedCollection::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <span class="tablenote"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method returns a list of a seller's undeleted discounts. <p>The call returns up to 200 currently-available discounts on the specified marketplace. While the response body does not include the discount's <b>discountRules</b> or <b>inventoryCriterion</b> containers, it does include the <b>promotionHref</b> (which you can use to retrieve the complete details of the discount).</p>  <p>Use query parameters to sort and filter the results by the number of discounts to return, the discount state or type, and the eBay marketplace. You can also supply keywords to limit the response to the discounts that contain that keywords in the title of the discount.</p> <p><b>Maximum returned:</b> 200</p>
     * @param PromotionRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PromotionRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PromotionRequestBuilder
    */
    public function withUrl(string $rawUrl): PromotionRequestBuilder {
        return new PromotionRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
