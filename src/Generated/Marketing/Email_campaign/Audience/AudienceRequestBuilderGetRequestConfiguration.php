<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Audience;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AudienceRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AudienceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AudienceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AudienceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AudienceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AudienceRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AudienceRequestBuilderGetQueryParameters.
     * @param string|null $emailCampaignType The email campaign type to search against.<br><br>See <a href="/api-docs/sell/marketing/types/api:CampaignTypeEnum" target="_blank">CampaignTypeEnum</a> for the full list of available email campaign types and associated enum values.
     * @param string|null $limit The maximum number of audience groups returned per page in the results set.<br><br><b>Min value</b>: 1<br><br><b>Max value</b>: 200<br><br><b>Default value</b>: 100
     * @param string|null $offset The number of results to skip in a pagination query. This value cannot be less than 0.<br><br><b>Default value</b>: 0
     * @return AudienceRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $emailCampaignType = null, ?string $limit = null, ?string $offset = null): AudienceRequestBuilderGetQueryParameters {
        return new AudienceRequestBuilderGetQueryParameters($emailCampaignType, $limit, $offset);
    }

}
