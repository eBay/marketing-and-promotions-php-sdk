<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Get_campaign_by_name;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Get_campaign_by_nameRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Get_campaign_by_nameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Get_campaign_by_nameRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Get_campaign_by_nameRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Get_campaign_by_nameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Get_campaign_by_nameRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Get_campaign_by_nameRequestBuilderGetQueryParameters.
     * @param string|null $campaign_name This query parameter specifies name of the campaign being retrieved.<br><br> Use the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns" target="_blank">getCampaigns</a> method to retrieve a list of a seller's campaign names.
     * @return Get_campaign_by_nameRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $campaign_name = null): Get_campaign_by_nameRequestBuilderGetQueryParameters {
        return new Get_campaign_by_nameRequestBuilderGetQueryParameters($campaign_name);
    }

}
