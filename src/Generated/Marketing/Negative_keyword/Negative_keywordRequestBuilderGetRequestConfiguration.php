<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Negative_keyword;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Negative_keywordRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Negative_keywordRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Negative_keywordRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Negative_keywordRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Negative_keywordRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Negative_keywordRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Negative_keywordRequestBuilderGetQueryParameters.
     * @param string|null $ad_group_ids A comma-separated list of ad group IDs.<br /><br />This query parameter is used if the seller wants to retrieve the negative keywords from one or more specific ad groups. The results might not include these ad group IDs if other search conditions exclude them.<br /><br />Use the <a href="/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups">getAdGroups</a> method to retrieve the ad group IDs for a seller.<br /><br /><i>Required if</i> the search results must be filtered to include negative keywords created at the ad group level.
     * @param string|null $campaign_ids This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the negative keywords being retrieved.<br /><br />This query parameter is used if the seller wants to retrieve the negative keywords from a specific campaign. The results might not include these campaign IDs if other search conditions exclude them.<br /><br /><span class="tablenote"><b>Note:</b> Currently, only one campaign ID value is supported for each request.</span><br><br> Use the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns" target="_blank">getCampaigns</a> method to retrieve campaign IDs.
     * @param string|null $limit The number of results, from the current result set, to be returned in a single page.
     * @param string|null $negative_keyword_status A comma-separated list of negative keyword statuses.<br /><br />This query parameter is used if the seller wants to filter the search results based on one or more negative keyword statuses.<br><br> See <a href="/api-docs/sell/marketing/types/pls:NegativeKeywordStatusEnum" target="_blank">NegativeKeywordStatusEnum</a> for supported values.
     * @param string|null $offset The number of results that will be skipped in the result set. This is used with the <b>limit</b> field to control the pagination of the output.<br /><br />For example, if the <b>offset</b> is set to <code>0</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 1 through 10 from the list of items returned. If the <b>offset</b> is set to <code>10</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 11 through 20 from the list of items returned.
     * @return Negative_keywordRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $ad_group_ids = null, ?string $campaign_ids = null, ?string $limit = null, ?string $negative_keyword_status = null, ?string $offset = null): Negative_keywordRequestBuilderGetQueryParameters {
        return new Negative_keywordRequestBuilderGetQueryParameters($ad_group_ids, $campaign_ids, $limit, $negative_keyword_status, $offset);
    }

}
