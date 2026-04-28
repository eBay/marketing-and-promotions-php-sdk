<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_metadata;

/**
 * This call retrieves information that details the fields used in each of the Promoted Listings reports. Use the returned information to configure the different types of Promoted Listings reports.</br></br> You can retrieve metadata for all report types,funding models and channels, or you can filter based on funding model and/or channel.<br/><br/><span class="tablenote"><b>Note:</b> The reporting of some data related to sales and ad-fees may require a 72-hour (<b>maximum</b>) adjustment period which is often referred to as the <i>Reconciliation Period</i>. Such adjustment periods should, on average, be minimal. However, at any given time, the <b>payments</b> tab may be used to view those amounts that have actually been charged.</span>
*/
class Ad_report_metadataRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $channel This query parameter is used only if the user wants to see COST_PER_CLICK report metadata for a specific channel. Refer to the <a href="/api-docs/sell/marketing/types/pls:ChannelEnum">ChannelEnum</a> type for supported values.<br><br><span class="tablenote"><b>Note:</b> The channel parameter is only applicable for COST_PER_CLICK funding model.</span>
    */
    public ?string $channel = null;
    
    /**
     * @QueryParameter("funding_model")
     * @var string|null $fundingModel This query parameter is used only if the user wants to see report metadata for a specific funding model. Refer to the <a href="/api-docs/sell/marketing/types/pls:FundingModelEnum">FundingModelEnum</a> type for supported values.
    */
    public ?string $fundingModel = null;
    
    /**
     * Instantiates a new Ad_report_metadataRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $channel This query parameter is used only if the user wants to see COST_PER_CLICK report metadata for a specific channel. Refer to the <a href="/api-docs/sell/marketing/types/pls:ChannelEnum">ChannelEnum</a> type for supported values.<br><br><span class="tablenote"><b>Note:</b> The channel parameter is only applicable for COST_PER_CLICK funding model.</span>
     * @param string|null $funding_model This query parameter is used only if the user wants to see report metadata for a specific funding model. Refer to the <a href="/api-docs/sell/marketing/types/pls:FundingModelEnum">FundingModelEnum</a> type for supported values.
    */
    public function __construct(?string $channel = null, ?string $funding_model = null) {
        $this->channel = $channel;
        $this->fundingModel = $funding_model;
    }

}
