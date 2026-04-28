<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Promotion_report;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Promotion_reportRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Promotion_reportRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Promotion_reportRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Promotion_reportRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Promotion_reportRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Promotion_reportRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Promotion_reportRequestBuilderGetQueryParameters.
     * @param string|null $limit Specifies the maximum number of discounts returned on a page from the result set.  <br><br><b>Default:</b> 200 <br><b>Maximum:</b> 200
     * @param string|null $marketplace_id This parameter specifies the eBay marketplace ID of the site for which you want the discounts report.<br><br>See <a href="/api-docs/sell/marketing/types/ba:MarketplaceIdEnum">MarketplaceIdEnum</a> for supported Marketplace ID values.
     * @param string|null $offset Specifies the number of discounts to skip in the result set before returning the first discount in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
     * @param string|null $promotion_status This parameter specifies the discount state by which you want to filter the results. <br><br>See <a href="/api-docs/sell/marketing/types/sme:PromotionStatusEnum" target="_blank">PromotionStatusEnum</a> for supported values.<br><br><b>Maximum number of input values:</b> 1
     * @param string|null $promotion_type This parameter specifies the campaign discount type by which you want to filter the results.<br><br>See <a href="/api-docs/sell/marketing/types/sme:PromotionTypeEnum" target="_blank">PromotionTypeEnum</a> for supported values.
     * @param string|null $q A string consisting of one or more <i>keywords</i>. eBay filters the response by returning only the discounts that contain the supplied keywords in the discount title.  <br><br><b>Example:</b> "iPhone" or "Harry Potter."  <br><br>Commas that separate keywords are ignored. For example, a keyword string of "iPhone, iPad" equals "iPhone iPad", and each results in a response that contains discounts with both "iPhone" and "iPad" in the title.
     * @return Promotion_reportRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $limit = null, ?string $marketplace_id = null, ?string $offset = null, ?string $promotion_status = null, ?string $promotion_type = null, ?string $q = null): Promotion_reportRequestBuilderGetQueryParameters {
        return new Promotion_reportRequestBuilderGetQueryParameters($limit, $marketplace_id, $offset, $promotion_status, $promotion_type, $q);
    }

}
