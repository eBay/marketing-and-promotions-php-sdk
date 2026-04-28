<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_metadata\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithReport_typeItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithReport_typeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithReport_typeItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithReport_typeItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithReport_typeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithReport_typeItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithReport_typeItemRequestBuilderGetQueryParameters.
     * @param string|null $channel The channel used in the report. The channel must be compatible with the report type specified in the path parameter. Refer to the <a href="/api-docs/sell/marketing/types/pls:ChannelEnum">ChannelEnum</a> type for supported values. <br><br><span class="tablenote"><b>Note:</b> The channel parameter is only applicable for COST_PER_CLICK funding model.</span>
     * @param string|null $funding_model The funding model used in the report. The funding model must be compatible with the report type specified in the path parameter. Refer to the <a href="/api-docs/sell/marketing/types/pls:FundingModelEnum">FundingModelEnum</a> type for supported values.
     * @return WithReport_typeItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $channel = null, ?string $funding_model = null): WithReport_typeItemRequestBuilderGetQueryParameters {
        return new WithReport_typeItemRequestBuilderGetQueryParameters($channel, $funding_model);
    }

}
