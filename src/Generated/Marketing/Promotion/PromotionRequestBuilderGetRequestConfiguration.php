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

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PromotionRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PromotionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PromotionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PromotionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PromotionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PromotionRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PromotionRequestBuilderGetQueryParameters.
     * @param string|null $limit Specifies the maximum number of discounts returned on a page from the result set.  <br><br><b>Default:</b> 200 <br><b>Maximum:</b> 200
     * @param string|null $marketplace_id This parameter specifies eBay marketplace ID of the site where the discount is hosted.<br><br>See <a href="/develop/api/sell/request_headers#marketplace-id-values" target="_blank">Marketplace ID values</a> for supported Marketplace ID values.
     * @param string|null $offset Specifies the number of discounts to skip in the result set before returning the first discount in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
     * @param string|null $promotion_status This parameter specifies the discount state by which you want to filter the results. The response contains only those discounts that match the state you specify. <br><br>See <a href="/develop/api/sell/marketing_api#sell-marketing_api-promotion-getpromotions.promotionstatusenum">PromotionStatusEnum</a> for supported values.<br><br><b>Maximum number of input values:</b> 1
     * @param string|null $promotion_type This parameter specifies the campaign discounts type by which you want to filter the results.<br><br>See <a href="/develop/api/sell/marketing_api#sell-marketing_api-promotion-getpromotions.promotiontypeenum">PromotionTypeEnum</a> for supported values.
     * @param string|null $q A string consisting of one or more <i>keywords</i>. eBay filters the response by returning only the discounts that contain the supplied keywords in the title.  <br><br><b>Example:</b> "iPhone" or "Harry Potter."  <br><br>Commas that separate keywords are ignored. For example, a keyword string of "iPhone, iPad" equals "iPhone iPad", and each results in a response that contains discounts with both "iPhone" and "iPad" in the title.
     * @param string|null $sort Specifies the order for how to sort the response. If you precede the supplied value with a dash, the response is sorted in reverse order.  <br><br><b>Example:</b> <br>&nbsp;&nbsp;&nbsp;<code>sort=END_DATE</code> &nbsp; Sorts the discounts in the response by their end dates in ascending order <br>&nbsp;&nbsp;&nbsp;<code>sort=-PROMOTION_NAME</code> &nbsp; Sorts the discounts by their name in descending alphabetical order (Z-Az-a)  <br><br><b>Valid values</b>:<ul><li><code>START_DATE</code></li> <li><code>END_DATE</code></li> <li><code>PROMOTION_NAME</code></li></ul>
     * @return PromotionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $limit = null, ?string $marketplace_id = null, ?string $offset = null, ?string $promotion_status = null, ?string $promotion_type = null, ?string $q = null, ?string $sort = null): PromotionRequestBuilderGetQueryParameters {
        return new PromotionRequestBuilderGetQueryParameters($limit, $marketplace_id, $offset, $promotion_status, $promotion_type, $q, $sort);
    }

}
