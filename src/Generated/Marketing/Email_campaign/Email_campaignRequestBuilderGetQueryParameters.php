<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign;

/**
 * This method retrieves a list of email campaigns from a seller's eBay store.<br><br>Users can filter the results by <a href="/api-docs/sell/marketing/types/api:CampaignTypeEnum">email campaign type</a>, <a href="/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum">email campaign status</a>, and <a href="/api-docs/sell/marketing/types/ba:MarketplaceIdEnum">marketplace ID</a> using the <code>q</code> query parameter.
*/
class Email_campaignRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $limit The maximum number of email campaigns returned in a page.<br><br><b>Min value</b>: 1<br><br><b>Max value</b>: 200
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $offset The number of results to skip in a pagination query. This value cannot be less than zero.<br><br><b>Default value</b>: 0
    */
    public ?string $offset = null;
    
    /**
     * @var string|null $q This field contains filter criteria for the results returned. Filter by <a href="/api-docs/sell/marketing/types/api:CampaignTypeEnum">email campaign type</a>, <a href="/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum">email campaign status</a>, and <a href="/api-docs/sell/marketing/types/ba:MarketplaceIdEnum">marketplace ID</a>.<br><br>For example, setting <code>q=campaignType:WELCOME,ITEM_SHOWCASE</code> will return only Welcome and Item Showcase email campaigns.<br><br><span class="tablenote"><b>Note:</b> At least one <code>campaignType</code> value must be set through the <code>q</code> query parameter. If no other filters are set, all email campaigns for the specified campaign type(s) will be returned in the results set.</span>
    */
    public ?string $q = null;
    
    /**
     * @var string|null $sort The criteria for sorting email campaign results. See <a href="/api-docs/sell/marketing/types/api:ItemSortEnum" target="_blank">ItemSortEnum</a> for sorting options and their enum values.<br><br><b>Default</b>: <code>NEWLY_LISTED</code>
    */
    public ?string $sort = null;
    
    /**
     * Instantiates a new Email_campaignRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $limit The maximum number of email campaigns returned in a page.<br><br><b>Min value</b>: 1<br><br><b>Max value</b>: 200
     * @param string|null $offset The number of results to skip in a pagination query. This value cannot be less than zero.<br><br><b>Default value</b>: 0
     * @param string|null $q This field contains filter criteria for the results returned. Filter by <a href="/api-docs/sell/marketing/types/api:CampaignTypeEnum">email campaign type</a>, <a href="/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum">email campaign status</a>, and <a href="/api-docs/sell/marketing/types/ba:MarketplaceIdEnum">marketplace ID</a>.<br><br>For example, setting <code>q=campaignType:WELCOME,ITEM_SHOWCASE</code> will return only Welcome and Item Showcase email campaigns.<br><br><span class="tablenote"><b>Note:</b> At least one <code>campaignType</code> value must be set through the <code>q</code> query parameter. If no other filters are set, all email campaigns for the specified campaign type(s) will be returned in the results set.</span>
     * @param string|null $sort The criteria for sorting email campaign results. See <a href="/api-docs/sell/marketing/types/api:ItemSortEnum" target="_blank">ItemSortEnum</a> for sorting options and their enum values.<br><br><b>Default</b>: <code>NEWLY_LISTED</code>
    */
    public function __construct(?string $limit = null, ?string $offset = null, ?string $q = null, ?string $sort = null) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->q = $q;
        $this->sort = $sort;
    }

}
