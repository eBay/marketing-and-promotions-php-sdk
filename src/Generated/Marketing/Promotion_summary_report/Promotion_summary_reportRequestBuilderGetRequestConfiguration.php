<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Promotion_summary_report;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Promotion_summary_reportRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Promotion_summary_reportRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Promotion_summary_reportRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Promotion_summary_reportRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Promotion_summary_reportRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Promotion_summary_reportRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Promotion_summary_reportRequestBuilderGetQueryParameters.
     * @param string|null $marketplace_id This parameter specifies the eBay marketplace ID of the site for which you want a discount summary report.<br><br>See <a href="/api-docs/sell/marketing/types/ba:MarketplaceIdEnum">MarketplaceIdEnum</a> for supported Marketplace ID values.
     * @return Promotion_summary_reportRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $marketplace_id = null): Promotion_summary_reportRequestBuilderGetQueryParameters {
        return new Promotion_summary_reportRequestBuilderGetQueryParameters($marketplace_id);
    }

}
