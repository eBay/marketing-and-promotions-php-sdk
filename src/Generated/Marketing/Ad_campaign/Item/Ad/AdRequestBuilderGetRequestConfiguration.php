<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AdRequestBuilderGetQueryParameters.
     * @param string|null $ad_group_ids A comma-separated list of ad group IDs. The results will be filtered to only include active ads for these ad groups.<br><br>Use the <a href="/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups" target="_blank">getAdGroups</a> method to retrieve the ad group ID for the ad group.<br /><br /><span class="tablenote"><b>Note:</b> This field only applies to the Cost Per Click (CPC) funding model; it does not apply to the Cost Per Sale (CPS) funding model.</span>
     * @param string|null $ad_status A comma-separated list of ad statuses. The results will be filtered to only include the given statuses of the ad. If none are provided, all ads are returned.<br><br>See <a href="/api-docs/sell/marketing/types/pls:AdStatusEnum" target="_blank">AdStatusEnum</a> for supported values.
     * @param string|null $limit Specifies the maximum number of ads to return on a page in the paginated response.<br><br><b>Default: </b>10 <br><br><b>Maximum:</b> 500
     * @param string|null $listing_ids A comma-separated list of listing IDs. <br><br><span class="tablenote"><b>Note:</b> The response includes only active ads. The results do not include listing IDs that are excluded by other conditions.</span>
     * @param string|null $offset Specifies the number of ads to skip in the result set before returning the first ad in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
     * @return AdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $ad_group_ids = null, ?string $ad_status = null, ?string $limit = null, ?string $listing_ids = null, ?string $offset = null): AdRequestBuilderGetQueryParameters {
        return new AdRequestBuilderGetQueryParameters($ad_group_ids, $ad_status, $limit, $listing_ids, $offset);
    }

}
