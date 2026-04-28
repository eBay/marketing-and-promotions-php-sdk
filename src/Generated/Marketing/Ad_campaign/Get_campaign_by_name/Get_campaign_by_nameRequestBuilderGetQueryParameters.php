<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Get_campaign_by_name;

/**
 * This method retrieves the details of a single campaign, as specified with the <b>campaign_name</b> query parameter. Note that the campaign name you specify must be an exact, case-sensitive match of the name of the campaign you want to retrieve.</p><p>Call <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a> to retrieve a list of the seller's campaign names.</p>
*/
class Get_campaign_by_nameRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("campaign_name")
     * @var string|null $campaignName This query parameter specifies name of the campaign being retrieved.<br><br> Use the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns" target="_blank">getCampaigns</a> method to retrieve a list of a seller's campaign names.
    */
    public ?string $campaignName = null;
    
    /**
     * Instantiates a new Get_campaign_by_nameRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $campaign_name This query parameter specifies name of the campaign being retrieved.<br><br> Use the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns" target="_blank">getCampaigns</a> method to retrieve a list of a seller's campaign names.
    */
    public function __construct(?string $campaign_name = null) {
        $this->campaignName = $campaign_name;
    }

}
