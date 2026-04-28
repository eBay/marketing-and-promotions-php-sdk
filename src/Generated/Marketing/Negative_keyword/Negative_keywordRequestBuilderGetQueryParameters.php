<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Negative_keyword;

/**
 * <span class="tablenote"><b>Note:</b> This method is only available for select partners who have been approved for the eBay priority strategy program. For information about how to request access to this program, refer to <a href="/api-docs/sell/static/marketing/pl-verify-eligibility.html#access-requests " target="_blank "> Priority Strategy Access Requests</a> in the Promoted Listings Playbook. To determine if a seller qualifies for priority strategy, use the <a href="/api-docs/sell/account/resources/advertising_eligibility/methods/getAdvertisingEligibility " target="_blank ">getAdvertisingEligibility</a> method in Account API.</span><br />This method can be used to retrieve all of the negative keywords for ad groups in priority strategy campaigns that use the Cost Per Click (CPC) funding model.<br /><br />The results can be filtered using the <b>campaign_ids</b>, <b>ad_group_ids</b>, and <b>negative_keyword_status</b> query parameters.<br /><br />Call the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a> method to retrieve a list of current campaign IDs for a seller.
*/
class Negative_keywordRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("ad_group_ids")
     * @var string|null $adGroupIds A comma-separated list of ad group IDs.<br /><br />This query parameter is used if the seller wants to retrieve the negative keywords from one or more specific ad groups. The results might not include these ad group IDs if other search conditions exclude them.<br /><br />Use the <a href="/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups">getAdGroups</a> method to retrieve the ad group IDs for a seller.<br /><br /><i>Required if</i> the search results must be filtered to include negative keywords created at the ad group level.
    */
    public ?string $adGroupIds = null;
    
    /**
     * @QueryParameter("campaign_ids")
     * @var string|null $campaignIds This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the negative keywords being retrieved.<br /><br />This query parameter is used if the seller wants to retrieve the negative keywords from a specific campaign. The results might not include these campaign IDs if other search conditions exclude them.<br /><br /><span class="tablenote"><b>Note:</b> Currently, only one campaign ID value is supported for each request.</span><br><br> Use the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns" target="_blank">getCampaigns</a> method to retrieve campaign IDs.
    */
    public ?string $campaignIds = null;
    
    /**
     * @var string|null $limit The number of results, from the current result set, to be returned in a single page.
    */
    public ?string $limit = null;
    
    /**
     * @QueryParameter("negative_keyword_status")
     * @var string|null $negativeKeywordStatus A comma-separated list of negative keyword statuses.<br /><br />This query parameter is used if the seller wants to filter the search results based on one or more negative keyword statuses.<br><br> See <a href="/api-docs/sell/marketing/types/pls:NegativeKeywordStatusEnum" target="_blank">NegativeKeywordStatusEnum</a> for supported values.
    */
    public ?string $negativeKeywordStatus = null;
    
    /**
     * @var string|null $offset The number of results that will be skipped in the result set. This is used with the <b>limit</b> field to control the pagination of the output.<br /><br />For example, if the <b>offset</b> is set to <code>0</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 1 through 10 from the list of items returned. If the <b>offset</b> is set to <code>10</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 11 through 20 from the list of items returned.
    */
    public ?string $offset = null;
    
    /**
     * Instantiates a new Negative_keywordRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $ad_group_ids A comma-separated list of ad group IDs.<br /><br />This query parameter is used if the seller wants to retrieve the negative keywords from one or more specific ad groups. The results might not include these ad group IDs if other search conditions exclude them.<br /><br />Use the <a href="/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups">getAdGroups</a> method to retrieve the ad group IDs for a seller.<br /><br /><i>Required if</i> the search results must be filtered to include negative keywords created at the ad group level.
     * @param string|null $campaign_ids This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the negative keywords being retrieved.<br /><br />This query parameter is used if the seller wants to retrieve the negative keywords from a specific campaign. The results might not include these campaign IDs if other search conditions exclude them.<br /><br /><span class="tablenote"><b>Note:</b> Currently, only one campaign ID value is supported for each request.</span><br><br> Use the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns" target="_blank">getCampaigns</a> method to retrieve campaign IDs.
     * @param string|null $limit The number of results, from the current result set, to be returned in a single page.
     * @param string|null $negative_keyword_status A comma-separated list of negative keyword statuses.<br /><br />This query parameter is used if the seller wants to filter the search results based on one or more negative keyword statuses.<br><br> See <a href="/api-docs/sell/marketing/types/pls:NegativeKeywordStatusEnum" target="_blank">NegativeKeywordStatusEnum</a> for supported values.
     * @param string|null $offset The number of results that will be skipped in the result set. This is used with the <b>limit</b> field to control the pagination of the output.<br /><br />For example, if the <b>offset</b> is set to <code>0</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 1 through 10 from the list of items returned. If the <b>offset</b> is set to <code>10</code> and the <b>limit</b> is set to <code>10</code>, the method will retrieve items 11 through 20 from the list of items returned.
    */
    public function __construct(?string $ad_group_ids = null, ?string $campaign_ids = null, ?string $limit = null, ?string $negative_keyword_status = null, ?string $offset = null) {
        $this->adGroupIds = $ad_group_ids;
        $this->campaignIds = $campaign_ids;
        $this->limit = $limit;
        $this->negativeKeywordStatus = $negative_keyword_status;
        $this->offset = $offset;
    }

}
