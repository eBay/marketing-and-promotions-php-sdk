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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Promotion\Item\Get_listing_set;

/**
 * <span class="tablenote"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method returns the set of listings associated with the <b>promotion_id</b> specified in the path parameter. Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-promotion-getpromotions">getPromotions</a> to retrieve the IDs of a seller's discounts.  <p>The listing details are returned in a paginated set and you can control and results returned using the following query parameters: <b>limit</b>, <b>offset</b>, <b>q</b>, <b>sort</b>, and <b>status</b>.</p>  <ul><li><b>Maximum associated listings returned:</b> 200</li>  <li><b>Default number of listings returned:</b> 200</li></ul>
*/
class Get_listing_setRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $limit Specifies the maximum number of discounts returned on a page from the result set. <br><br><b>Default:</b> 200<br><b>Maximum:</b> 200
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $offset Specifies the number of discounts to skip in the result set before returning the first discount in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
    */
    public ?string $offset = null;
    
    /**
     * @var string|null $q Reserved for future use.
    */
    public ?string $q = null;
    
    /**
     * @var string|null $sort Specifies the order in which to sort the associated listings in the response. If you precede the supplied value with a dash, the response is sorted in reverse order.  <br><br><b>Example:</b> <br>&nbsp;&nbsp;&nbsp;<code>sort=PRICE</code> - Sorts the associated listings by their current price in ascending order <br>&nbsp;&nbsp;&nbsp;<code>sort=-TITLE</code> - Sorts the associated listings by their title in descending alphabetical order (Z-Az-a)  <br><br><b>Valid values</b>:<ul class="compact"><li>AVAILABLE</li> <li>PRICE</li> <li>TITLE</li></ul> 
    */
    public ?string $sort = null;
    
    /**
     * @var string|null $status This query parameter applies only to markdown discounts. It filters the response based on the indicated status of the discount.<br><br><span class="tablenote"><b>Note:</b> Currently, the only supported value for this parameter is <code>MARKED_DOWN</code>, which indicates active markdown discounts.</span>
    */
    public ?string $status = null;
    
    /**
     * Instantiates a new Get_listing_setRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $limit Specifies the maximum number of discounts returned on a page from the result set. <br><br><b>Default:</b> 200<br><b>Maximum:</b> 200
     * @param string|null $offset Specifies the number of discounts to skip in the result set before returning the first discount in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
     * @param string|null $q Reserved for future use.
     * @param string|null $sort Specifies the order in which to sort the associated listings in the response. If you precede the supplied value with a dash, the response is sorted in reverse order.  <br><br><b>Example:</b> <br>&nbsp;&nbsp;&nbsp;<code>sort=PRICE</code> - Sorts the associated listings by their current price in ascending order <br>&nbsp;&nbsp;&nbsp;<code>sort=-TITLE</code> - Sorts the associated listings by their title in descending alphabetical order (Z-Az-a)  <br><br><b>Valid values</b>:<ul class="compact"><li>AVAILABLE</li> <li>PRICE</li> <li>TITLE</li></ul> 
     * @param string|null $status This query parameter applies only to markdown discounts. It filters the response based on the indicated status of the discount.<br><br><span class="tablenote"><b>Note:</b> Currently, the only supported value for this parameter is <code>MARKED_DOWN</code>, which indicates active markdown discounts.</span>
    */
    public function __construct(?string $limit = null, ?string $offset = null, ?string $q = null, ?string $sort = null, ?string $status = null) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->q = $q;
        $this->sort = $sort;
        $this->status = $status;
    }

}
