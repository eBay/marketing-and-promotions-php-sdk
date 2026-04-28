<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_metadata;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Ad_report_metadataRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Ad_report_metadataRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Ad_report_metadataRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Ad_report_metadataRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Ad_report_metadataRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Ad_report_metadataRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Ad_report_metadataRequestBuilderGetQueryParameters.
     * @param string|null $channel This query parameter is used only if the user wants to see COST_PER_CLICK report metadata for a specific channel. Refer to the <a href="/api-docs/sell/marketing/types/pls:ChannelEnum">ChannelEnum</a> type for supported values.<br><br><span class="tablenote"><b>Note:</b> The channel parameter is only applicable for COST_PER_CLICK funding model.</span>
     * @param string|null $funding_model This query parameter is used only if the user wants to see report metadata for a specific funding model. Refer to the <a href="/api-docs/sell/marketing/types/pls:FundingModelEnum">FundingModelEnum</a> type for supported values.
     * @return Ad_report_metadataRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $channel = null, ?string $funding_model = null): Ad_report_metadataRequestBuilderGetQueryParameters {
        return new Ad_report_metadataRequestBuilderGetQueryParameters($channel, $funding_model);
    }

}
