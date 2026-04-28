<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Promotion\Item\Get_listing_set;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Get_listing_setRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Get_listing_setRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Get_listing_setRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Get_listing_setRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Get_listing_setRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Get_listing_setRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Get_listing_setRequestBuilderGetQueryParameters.
     * @param string|null $limit Specifies the maximum number of discounts returned on a page from the result set. <br><br><b>Default:</b> 200<br><b>Maximum:</b> 200
     * @param string|null $offset Specifies the number of discounts to skip in the result set before returning the first discount in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
     * @param string|null $q Reserved for future use.
     * @param string|null $sort Specifies the order in which to sort the associated listings in the response. If you precede the supplied value with a dash, the response is sorted in reverse order.  <br><br><b>Example:</b> <br>&nbsp;&nbsp;&nbsp;<code>sort=PRICE</code> - Sorts the associated listings by their current price in ascending order <br>&nbsp;&nbsp;&nbsp;<code>sort=-TITLE</code> - Sorts the associated listings by their title in descending alphabetical order (Z-Az-a)  <br><br><b>Valid values</b>:<ul class="compact"><li>AVAILABLE</li> <li>PRICE</li> <li>TITLE</li></ul> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/csb:SortField
     * @param string|null $status This query parameter applies only to markdown discounts. It filters the response based on the indicated status of the discount.<br><br><span class="tablenote"><b>Note:</b> Currently, the only supported value for this parameter is <code>MARKED_DOWN</code>, which indicates active markdown discounts.</span> For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/marketing/types/sme:ItemMarkdownStatusEnum
     * @return Get_listing_setRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $limit = null, ?string $offset = null, ?string $q = null, ?string $sort = null, ?string $status = null): Get_listing_setRequestBuilderGetQueryParameters {
        return new Get_listing_setRequestBuilderGetQueryParameters($limit, $offset, $q, $sort, $status);
    }

}
