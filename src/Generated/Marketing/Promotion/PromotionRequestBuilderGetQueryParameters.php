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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Promotion;

/**
 * <span class="tablenote"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method returns a list of a seller's undeleted discounts. <p>The call returns up to 200 currently-available discounts on the specified marketplace. While the response body does not include the discount's <b>discountRules</b> or <b>inventoryCriterion</b> containers, it does include the <b>promotionHref</b> (which you can use to retrieve the complete details of the discount).</p>  <p>Use query parameters to sort and filter the results by the number of discounts to return, the discount state or type, and the eBay marketplace. You can also supply keywords to limit the response to the discounts that contain that keywords in the title of the discount.</p> <p><b>Maximum returned:</b> 200</p>
*/
class PromotionRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $limit Specifies the maximum number of discounts returned on a page from the result set.  <br><br><b>Default:</b> 200 <br><b>Maximum:</b> 200
    */
    public ?string $limit = null;
    
    /**
     * @QueryParameter("marketplace_id")
     * @var string|null $marketplaceId This parameter specifies eBay marketplace ID of the site where the discount is hosted.<br><br>See <a href="/api-docs/sell/marketing/types/ba:MarketplaceIdEnum">MarketplaceIdEnum</a> for supported Marketplace ID values.
    */
    public ?string $marketplaceId = null;
    
    /**
     * @var string|null $offset Specifies the number of discounts to skip in the result set before returning the first discount in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
    */
    public ?string $offset = null;
    
    /**
     * @QueryParameter("promotion_status")
     * @var string|null $promotionStatus This parameter specifies the discount state by which you want to filter the results. The response contains only those discounts that match the state you specify. <br><br>See <a href="/api-docs/sell/marketing/types/sme:PromotionStatusEnum" target="_blank">PromotionStatusEnum</a> for supported values.<br><br><b>Maximum number of input values:</b> 1
    */
    public ?string $promotionStatus = null;
    
    /**
     * @QueryParameter("promotion_type")
     * @var string|null $promotionType This parameter specifies the campaign discounts type by which you want to filter the results.<br><br>See <a href="/api-docs/sell/marketing/types/sme:PromotionTypeEnum" target="_blank">PromotionTypeEnum</a> for supported values.
    */
    public ?string $promotionType = null;
    
    /**
     * @var string|null $q A string consisting of one or more <i>keywords</i>. eBay filters the response by returning only the discounts that contain the supplied keywords in the title.  <br><br><b>Example:</b> "iPhone" or "Harry Potter."  <br><br>Commas that separate keywords are ignored. For example, a keyword string of "iPhone, iPad" equals "iPhone iPad", and each results in a response that contains discounts with both "iPhone" and "iPad" in the title.
    */
    public ?string $q = null;
    
    /**
     * @var string|null $sort Specifies the order for how to sort the response. If you precede the supplied value with a dash, the response is sorted in reverse order.  <br><br><b>Example:</b> <br>&nbsp;&nbsp;&nbsp;<code>sort=END_DATE</code> &nbsp; Sorts the discounts in the response by their end dates in ascending order <br>&nbsp;&nbsp;&nbsp;<code>sort=-PROMOTION_NAME</code> &nbsp; Sorts the discounts by their name in descending alphabetical order (Z-Az-a)  <br><br><b>Valid values</b>:<ul><li><code>START_DATE</code></li> <li><code>END_DATE</code></li> <li><code>PROMOTION_NAME</code></li></ul> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField
    */
    public ?string $sort = null;
    
    /**
     * Instantiates a new PromotionRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $limit Specifies the maximum number of discounts returned on a page from the result set.  <br><br><b>Default:</b> 200 <br><b>Maximum:</b> 200
     * @param string|null $marketplace_id This parameter specifies eBay marketplace ID of the site where the discount is hosted.<br><br>See <a href="/api-docs/sell/marketing/types/ba:MarketplaceIdEnum">MarketplaceIdEnum</a> for supported Marketplace ID values.
     * @param string|null $offset Specifies the number of discounts to skip in the result set before returning the first discount in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
     * @param string|null $promotion_status This parameter specifies the discount state by which you want to filter the results. The response contains only those discounts that match the state you specify. <br><br>See <a href="/api-docs/sell/marketing/types/sme:PromotionStatusEnum" target="_blank">PromotionStatusEnum</a> for supported values.<br><br><b>Maximum number of input values:</b> 1
     * @param string|null $promotion_type This parameter specifies the campaign discounts type by which you want to filter the results.<br><br>See <a href="/api-docs/sell/marketing/types/sme:PromotionTypeEnum" target="_blank">PromotionTypeEnum</a> for supported values.
     * @param string|null $q A string consisting of one or more <i>keywords</i>. eBay filters the response by returning only the discounts that contain the supplied keywords in the title.  <br><br><b>Example:</b> "iPhone" or "Harry Potter."  <br><br>Commas that separate keywords are ignored. For example, a keyword string of "iPhone, iPad" equals "iPhone iPad", and each results in a response that contains discounts with both "iPhone" and "iPad" in the title.
     * @param string|null $sort Specifies the order for how to sort the response. If you precede the supplied value with a dash, the response is sorted in reverse order.  <br><br><b>Example:</b> <br>&nbsp;&nbsp;&nbsp;<code>sort=END_DATE</code> &nbsp; Sorts the discounts in the response by their end dates in ascending order <br>&nbsp;&nbsp;&nbsp;<code>sort=-PROMOTION_NAME</code> &nbsp; Sorts the discounts by their name in descending alphabetical order (Z-Az-a)  <br><br><b>Valid values</b>:<ul><li><code>START_DATE</code></li> <li><code>END_DATE</code></li> <li><code>PROMOTION_NAME</code></li></ul> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField
    */
    public function __construct(?string $limit = null, ?string $marketplace_id = null, ?string $offset = null, ?string $promotion_status = null, ?string $promotion_type = null, ?string $q = null, ?string $sort = null) {
        $this->limit = $limit;
        $this->marketplaceId = $marketplace_id;
        $this->offset = $offset;
        $this->promotionStatus = $promotion_status;
        $this->promotionType = $promotion_type;
        $this->q = $q;
        $this->sort = $sort;
    }

}
