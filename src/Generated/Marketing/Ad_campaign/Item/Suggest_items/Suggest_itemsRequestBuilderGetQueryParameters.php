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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Suggest_items;

/**
 * This method allows sellers to obtain ideas for listings, which can be targeted for Promoted Listings campaigns.
*/
class Suggest_itemsRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("category_ids")
     * @var string|null $categoryIds Specifies the category ID that is used to limit the results. This refers to an exact leaf category (the lowest level in that category and has no children). This field can have one category ID, or a comma-separated list of IDs. To return all category IDs, set to <code>null</code>.<br><br>Use the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySuggestions" target="_blank">getCategorySuggestions</a> method to retrieve category IDs.<br /><br /><b>Maximum: </b> 10 
    */
    public ?string $categoryIds = null;
    
    /**
     * @var string|null $limit Specifies the maximum number of campaigns to return on a page in the paginated response. If no value is specified, the default value is used. <br /><br /><b>Default: </b>10 <br /><br /><b>Minimum: </b> 1<br /><br /><b>Maximum: </b> 1000
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $offset Specifies the number of campaigns to skip in the result set before returning the first report in the paginated response.<br><br>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.<br><br> <b>Default:</b> 0
    */
    public ?string $offset = null;
    
    /**
     * Instantiates a new Suggest_itemsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $category_ids Specifies the category ID that is used to limit the results. This refers to an exact leaf category (the lowest level in that category and has no children). This field can have one category ID, or a comma-separated list of IDs. To return all category IDs, set to <code>null</code>.<br><br>Use the <a href="/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySuggestions" target="_blank">getCategorySuggestions</a> method to retrieve category IDs.<br /><br /><b>Maximum: </b> 10 
     * @param string|null $limit Specifies the maximum number of campaigns to return on a page in the paginated response. If no value is specified, the default value is used. <br /><br /><b>Default: </b>10 <br /><br /><b>Minimum: </b> 1<br /><br /><b>Maximum: </b> 1000
     * @param string|null $offset Specifies the number of campaigns to skip in the result set before returning the first report in the paginated response.<br><br>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.<br><br> <b>Default:</b> 0
    */
    public function __construct(?string $category_ids = null, ?string $limit = null, ?string $offset = null) {
        $this->categoryIds = $category_ids;
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
