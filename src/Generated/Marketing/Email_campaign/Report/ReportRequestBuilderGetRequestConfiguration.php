<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Report;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReportRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReportRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReportRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ReportRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReportRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReportRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ReportRequestBuilderGetQueryParameters.
     * @param string|null $endDate The end date for the report, given in UTC format. The maximum date range for a report retrieved by this method is one year.
     * @param string|null $startDate The start date for the report, given in UTC format. The maximum date range for a report retrieved by this method is one year.
     * @return ReportRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $endDate = null, ?string $startDate = null): ReportRequestBuilderGetQueryParameters {
        return new ReportRequestBuilderGetQueryParameters($endDate, $startDate);
    }

}
