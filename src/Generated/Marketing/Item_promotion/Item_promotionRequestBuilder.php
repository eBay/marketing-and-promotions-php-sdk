<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Item_promotion;

use EBay\MarketingAndPromotions\Generated\Marketing\Item_promotion\Item\WithPromotion_ItemRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\BaseResponse;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ItemPromotion;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /item_promotion
*/
class Item_promotionRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/MarketingAndPromotions/Generated/Marketing.item_promotion.item collection
     * @param string $promotion_id This path parameter takes a concatenation of the ID of the discount you want to retrieve plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an "at sign" (<b>@</b>). <br><br>The ID of the discount (<b>promotionId</b>) is a unique eBay-assigned value that's generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discount is hosted.<br><br> Use the <a href="/api-docs/sell/marketing/resources/promotion/methods/getPromotions">getPromotions</a> method to retrieve promotion Ids. See <a href="/api-docs/sell/marketing/types/ba:MarketplaceIdEnum">MarketplaceIdEnum</a> for supported Marketplace ID values.<br><br><b>Example:</b> <code>1********5@EBAY_US</code>
     * @return WithPromotion_ItemRequestBuilder
    */
    public function byPromotion_id(string $promotion_id): WithPromotion_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['promotion_id'] = $promotion_id;
        return new WithPromotion_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Item_promotionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/item_promotion');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <span class="tablenote"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method creates an <b>item discount</b>, where the buyer receives a discount when they meet the specific buying criteria. Known here as "threshold discounts", these discounts trigger when a threshold is met.  <p>eBay highlights discounted items by placing teasers for the discounted items throughout the online buyer flows.</p>  <p><i>Discounts</i> are specified as either a monetary amount or a percentage off the standard sales price of a listing, letting you offer deals such as "Buy 1 Get 1" and "Buy $50, get 20% off".</p> <p><i>Volume pricing</i> discounts increase the value of the discount as the buyer increases the quantity they purchase.</p> <p><i>Coded Coupons</i> provide unique codes that a buyer can use during checkout to receive a discount. The seller can specify the number of times a buyer can use the coupon and the maximum amount across all purchases that can be discounted using the coupon. The coupon code can also be made public (appearing on the seller's Offer page, search pages, the item listing, and the checkout page) or private (only on the seller's Offer page, but the seller can include the code in email and social media).</p> <p class="tablenote"><b>Note</b>: Coded Coupons are currently available in the US, UK, DE, FR, IT, ES, and AU marketplaces.</p><p>There are two ways to add items to a threshold discount:</p>  <ul><li><b>Key-based discounts</b> select items using either the listing IDs or inventory reference IDs of the items you want to discount. Note that if you use inventory reference IDs, you must specify both the <b>inventoryReferenceId</b> and the associated <b>inventoryReferenceType</b> of the item(s) you want to be discounted.</li> <li><b>Rule-based discounts</b> select items using a list of eBay category IDs or seller Store category IDs. Rules can further constrain the items being discounted by minimum and maximum prices, brands, and item conditions.</li></ul>  <p>You must create a new discount in either a <code>DRAFT</code> or <code>SCHEDULED</code> state. Use the DRAFT state when you are initially creating a discount and you want to be sure it's correctly configured before scheduling it to run. When you create a discount, the promotion ID is returned in the <b>Location</b> response header. Use this ID to reference the discount in subsequent requests.</p>  <p class="tablenote"><b>Tip:</b> Refer to the <a href="/api-docs/sell/static/marketing/promotions-manager.html">Selling Integration Guide</a> for details and examples showing how to create and manage threshold discounts using the Discounts Manager.</p>  <p>For information on the eBay marketplaces that support item discounts, see <a href="/api-docs/sell/marketing/static/overview.html#PM-requirements">Discounts Manager requirements and restrictions</a>.</p>
     * @param ItemPromotion $body <span class="tablenote"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This type defines the fields that describe a threshold discount and includes the discount, the items being discounted, and the rules that specify when the discount is applied.
     * @param Item_promotionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<BaseResponse|null>
     * @throws Exception
    */
    public function post(ItemPromotion $body, ?Item_promotionRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [BaseResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <span class="tablenote"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method creates an <b>item discount</b>, where the buyer receives a discount when they meet the specific buying criteria. Known here as "threshold discounts", these discounts trigger when a threshold is met.  <p>eBay highlights discounted items by placing teasers for the discounted items throughout the online buyer flows.</p>  <p><i>Discounts</i> are specified as either a monetary amount or a percentage off the standard sales price of a listing, letting you offer deals such as "Buy 1 Get 1" and "Buy $50, get 20% off".</p> <p><i>Volume pricing</i> discounts increase the value of the discount as the buyer increases the quantity they purchase.</p> <p><i>Coded Coupons</i> provide unique codes that a buyer can use during checkout to receive a discount. The seller can specify the number of times a buyer can use the coupon and the maximum amount across all purchases that can be discounted using the coupon. The coupon code can also be made public (appearing on the seller's Offer page, search pages, the item listing, and the checkout page) or private (only on the seller's Offer page, but the seller can include the code in email and social media).</p> <p class="tablenote"><b>Note</b>: Coded Coupons are currently available in the US, UK, DE, FR, IT, ES, and AU marketplaces.</p><p>There are two ways to add items to a threshold discount:</p>  <ul><li><b>Key-based discounts</b> select items using either the listing IDs or inventory reference IDs of the items you want to discount. Note that if you use inventory reference IDs, you must specify both the <b>inventoryReferenceId</b> and the associated <b>inventoryReferenceType</b> of the item(s) you want to be discounted.</li> <li><b>Rule-based discounts</b> select items using a list of eBay category IDs or seller Store category IDs. Rules can further constrain the items being discounted by minimum and maximum prices, brands, and item conditions.</li></ul>  <p>You must create a new discount in either a <code>DRAFT</code> or <code>SCHEDULED</code> state. Use the DRAFT state when you are initially creating a discount and you want to be sure it's correctly configured before scheduling it to run. When you create a discount, the promotion ID is returned in the <b>Location</b> response header. Use this ID to reference the discount in subsequent requests.</p>  <p class="tablenote"><b>Tip:</b> Refer to the <a href="/api-docs/sell/static/marketing/promotions-manager.html">Selling Integration Guide</a> for details and examples showing how to create and manage threshold discounts using the Discounts Manager.</p>  <p>For information on the eBay marketplaces that support item discounts, see <a href="/api-docs/sell/marketing/static/overview.html#PM-requirements">Discounts Manager requirements and restrictions</a>.</p>
     * @param ItemPromotion $body <span class="tablenote"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This type defines the fields that describe a threshold discount and includes the discount, the items being discounted, and the rules that specify when the discount is applied.
     * @param Item_promotionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ItemPromotion $body, ?Item_promotionRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Item_promotionRequestBuilder
    */
    public function withUrl(string $rawUrl): Item_promotionRequestBuilder {
        return new Item_promotionRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
