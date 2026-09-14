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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Item_price_markdown;

use EBay\MarketingAndPromotions\Generated\Marketing\Item_price_markdown\Item\WithPromotion_ItemRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Error;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ItemPriceMarkdown;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /item_price_markdown
*/
class Item_price_markdownRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/MarketingAndPromotions/Generated/Marketing.item_price_markdown.item collection
     * @param string $promotion_id This path parameter takes a concatenation of the ID of the discount you want to retrieve plus the marketplace ID on which the discount is hosted. Concatenate the two values by separating them with an "at sign" (<b>@</b>). <br><br>The ID of the discount (<b>promotionId</b>) is a unique eBay-assigned value that's generated when the discount is created. The Marketplace ID is the ENUM value of eBay marketplace where the discount is hosted.<br><br> Use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-promotion-getpromotions">getPromotions</a> method to retrieve promotion Ids. See <a href="/develop/api/sell/request_headers#marketplace-id-values" target="_blank">Marketplace ID values</a> for supported Marketplace ID values.<br><br><b>Example:</b> <code>1********5@EBAY_US</code>
     * @return WithPromotion_ItemRequestBuilder
    */
    public function byPromotion_id(string $promotion_id): WithPromotion_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['promotion_id'] = $promotion_id;
        return new WithPromotion_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Item_price_markdownRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/item_price_markdown');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <span class="tablenote"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method creates an <b>item price markdown discount</b> (know simply as a "markdown discount") where a discount amount is applied directly to the items included in the discount. Discounts can be specified as either a monetary amount or a percentage off the standard sales price. eBay highlights discounted items by placing teasers for the items throughout the online sales flows.  <p>Unlike an <a href="/develop/api/sell/marketing_api#sell-marketing_api-item_promotion-createitempromotion">item discount</a>, a markdown discount does not require the buyer meet a "threshold" before the offer takes effect. With markdown discounts, all the buyer needs to do is purchase the item to receive the discount benefit.</p>  <p class="tablenote"><b>Important:</b> There are some restrictions for which listings are available for price markdown discounts. For details, see <a href="/api-docs/sell/static/marketing/pm-requirements.html" target="_blank">Discounts Manager requirements and restrictions</a>. <br><br>In addition, we recommend you list items at competitive prices before including them in your markdown discounts. For an extensive list of pricing recommendations, see the <b>Growth</b> tab in Seller Hub.</p> <p>There are two ways to enable items for markdown discounts:</p> <ul><li><b>Key-based discounts</b> select items using either the listing IDs or inventory reference IDs of the items you want to discount. Note that if you use inventory reference IDs, you must specify both the <b>inventoryReferenceId</b> and the associated <b>inventoryReferenceType</b> of the item(s) you want to include.</li>  <li><b>Rule-based discounts</b> select items using a list of eBay category IDs or seller Store category IDs. Rules can further constrain items being discounted by minimum and maximum prices, brands, and item conditions.</li></ul>  <p>New discounts must be created in either a <code>DRAFT</code> or a <code>SCHEDULED</code> state. Use the DRAFT state when you are initially creating a discount and you want to be sure it's correctly configured before scheduling it to run. When you create a discount, the <b>promotionId</b> is returned in the <b>Location</b> response header. Use this ID to reference the discount in subsequent requests (such as to schedule a discount that's in a DRAFT state).</p>  <p class="tablenote"><b>Tip:</b> Refer to <a href="/api-docs/sell/static/marketing/promotions-manager.html" target="_blank">Discounts Manager</a> in the <i>Selling Integration Guide</i> for details and examples showing how to create and manage seller discounts.</p>  <p>Markdown discounts are available on all eBay marketplaces. For more information, see <a href="/api-docs/sell/static/marketing/pm-requirements.html" target="_blank">Discounts Manager requirements and restrictions</a>.</p>
     * @param ItemPriceMarkdown $body This type defines the fields that describe an item price markdown discount.
     * @param Item_price_markdownRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Item_price_markdownPostResponse|null>
     * @throws Exception
    */
    public function post(ItemPriceMarkdown $body, ?Item_price_markdownRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '409' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Item_price_markdownPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * <span class="tablenote"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method creates an <b>item price markdown discount</b> (know simply as a "markdown discount") where a discount amount is applied directly to the items included in the discount. Discounts can be specified as either a monetary amount or a percentage off the standard sales price. eBay highlights discounted items by placing teasers for the items throughout the online sales flows.  <p>Unlike an <a href="/develop/api/sell/marketing_api#sell-marketing_api-item_promotion-createitempromotion">item discount</a>, a markdown discount does not require the buyer meet a "threshold" before the offer takes effect. With markdown discounts, all the buyer needs to do is purchase the item to receive the discount benefit.</p>  <p class="tablenote"><b>Important:</b> There are some restrictions for which listings are available for price markdown discounts. For details, see <a href="/api-docs/sell/static/marketing/pm-requirements.html" target="_blank">Discounts Manager requirements and restrictions</a>. <br><br>In addition, we recommend you list items at competitive prices before including them in your markdown discounts. For an extensive list of pricing recommendations, see the <b>Growth</b> tab in Seller Hub.</p> <p>There are two ways to enable items for markdown discounts:</p> <ul><li><b>Key-based discounts</b> select items using either the listing IDs or inventory reference IDs of the items you want to discount. Note that if you use inventory reference IDs, you must specify both the <b>inventoryReferenceId</b> and the associated <b>inventoryReferenceType</b> of the item(s) you want to include.</li>  <li><b>Rule-based discounts</b> select items using a list of eBay category IDs or seller Store category IDs. Rules can further constrain items being discounted by minimum and maximum prices, brands, and item conditions.</li></ul>  <p>New discounts must be created in either a <code>DRAFT</code> or a <code>SCHEDULED</code> state. Use the DRAFT state when you are initially creating a discount and you want to be sure it's correctly configured before scheduling it to run. When you create a discount, the <b>promotionId</b> is returned in the <b>Location</b> response header. Use this ID to reference the discount in subsequent requests (such as to schedule a discount that's in a DRAFT state).</p>  <p class="tablenote"><b>Tip:</b> Refer to <a href="/api-docs/sell/static/marketing/promotions-manager.html" target="_blank">Discounts Manager</a> in the <i>Selling Integration Guide</i> for details and examples showing how to create and manage seller discounts.</p>  <p>Markdown discounts are available on all eBay marketplaces. For more information, see <a href="/api-docs/sell/static/marketing/pm-requirements.html" target="_blank">Discounts Manager requirements and restrictions</a>.</p>
     * @param ItemPriceMarkdown $body This type defines the fields that describe an item price markdown discount.
     * @param Item_price_markdownRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ItemPriceMarkdown $body, ?Item_price_markdownRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Item_price_markdownRequestBuilder
    */
    public function withUrl(string $rawUrl): Item_price_markdownRequestBuilder {
        return new Item_price_markdownRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
