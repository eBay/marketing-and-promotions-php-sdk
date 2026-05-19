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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Promotion_report;

/**
 * <span class="tablenote"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method generates a report that lists the seller's running, paused, and ended discounts for the specified eBay marketplace. The result set can be filtered by the discount status and the number of results to return. You can also supply <i>keywords</i> to limit the report to discounts that contain the specified keywords. <br><br>Specify the eBay marketplace for which you want the report run using the <b>marketplace_id</b> query parameter. Supply additional query parameters to control the report as needed.
*/
class Promotion_reportRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $limit Specifies the maximum number of discounts returned on a page from the result set.  <br><br><b>Default:</b> 200 <br><b>Maximum:</b> 200
    */
    public ?string $limit = null;
    
    /**
     * @QueryParameter("marketplace_id")
     * @var string|null $marketplaceId This parameter specifies the eBay marketplace ID of the site for which you want the discounts report.<br><br>See <a href="/api-docs/sell/marketing/types/ba:MarketplaceIdEnum">MarketplaceIdEnum</a> for supported Marketplace ID values.
    */
    public ?string $marketplaceId = null;
    
    /**
     * @var string|null $offset Specifies the number of discounts to skip in the result set before returning the first discount in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
    */
    public ?string $offset = null;
    
    /**
     * @QueryParameter("promotion_status")
     * @var string|null $promotionStatus This parameter specifies the discount state by which you want to filter the results. <br><br>See <a href="/api-docs/sell/marketing/types/sme:PromotionStatusEnum" target="_blank">PromotionStatusEnum</a> for supported values.<br><br><b>Maximum number of input values:</b> 1
    */
    public ?string $promotionStatus = null;
    
    /**
     * @QueryParameter("promotion_type")
     * @var string|null $promotionType This parameter specifies the campaign discount type by which you want to filter the results.<br><br>See <a href="/api-docs/sell/marketing/types/sme:PromotionTypeEnum" target="_blank">PromotionTypeEnum</a> for supported values.
    */
    public ?string $promotionType = null;
    
    /**
     * @var string|null $q A string consisting of one or more <i>keywords</i>. eBay filters the response by returning only the discounts that contain the supplied keywords in the discount title.  <br><br><b>Example:</b> "iPhone" or "Harry Potter."  <br><br>Commas that separate keywords are ignored. For example, a keyword string of "iPhone, iPad" equals "iPhone iPad", and each results in a response that contains discounts with both "iPhone" and "iPad" in the title.
    */
    public ?string $q = null;
    
    /**
     * Instantiates a new Promotion_reportRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $limit Specifies the maximum number of discounts returned on a page from the result set.  <br><br><b>Default:</b> 200 <br><b>Maximum:</b> 200
     * @param string|null $marketplace_id This parameter specifies the eBay marketplace ID of the site for which you want the discounts report.<br><br>See <a href="/api-docs/sell/marketing/types/ba:MarketplaceIdEnum">MarketplaceIdEnum</a> for supported Marketplace ID values.
     * @param string|null $offset Specifies the number of discounts to skip in the result set before returning the first discount in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
     * @param string|null $promotion_status This parameter specifies the discount state by which you want to filter the results. <br><br>See <a href="/api-docs/sell/marketing/types/sme:PromotionStatusEnum" target="_blank">PromotionStatusEnum</a> for supported values.<br><br><b>Maximum number of input values:</b> 1
     * @param string|null $promotion_type This parameter specifies the campaign discount type by which you want to filter the results.<br><br>See <a href="/api-docs/sell/marketing/types/sme:PromotionTypeEnum" target="_blank">PromotionTypeEnum</a> for supported values.
     * @param string|null $q A string consisting of one or more <i>keywords</i>. eBay filters the response by returning only the discounts that contain the supplied keywords in the discount title.  <br><br><b>Example:</b> "iPhone" or "Harry Potter."  <br><br>Commas that separate keywords are ignored. For example, a keyword string of "iPhone, iPad" equals "iPhone iPad", and each results in a response that contains discounts with both "iPhone" and "iPad" in the title.
    */
    public function __construct(?string $limit = null, ?string $marketplace_id = null, ?string $offset = null, ?string $promotion_status = null, ?string $promotion_type = null, ?string $q = null) {
        $this->limit = $limit;
        $this->marketplaceId = $marketplace_id;
        $this->offset = $offset;
        $this->promotionStatus = $promotion_status;
        $this->promotionType = $promotion_type;
        $this->q = $q;
    }

}
