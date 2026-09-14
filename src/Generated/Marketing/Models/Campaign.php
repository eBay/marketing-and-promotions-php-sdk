<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the fields that describe an ad campaign.
*/
class Campaign implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Alert>|null $alerts This array contains alert messages for the campaign.
    */
    private ?array $alerts = null;
    
    /**
     * @var CampaignBudget|null $budget The allocated budget for the Cost Per Click (CPC) Promoted Listings campaign.<span class="tablenote"><b>Note:</b> This field will only be returned for campaigns using the CPC funding model; it does not apply to the Cost Per Sale (CPS) funding model.</span>
    */
    private ?CampaignBudget $budget = null;
    
    /**
     * @var CampaignCriterion|null $campaignCriterion The selection rules (criterion) used to select the listings for a campaign. If you populate the <b>campaignCriterion</b> object in your <b>createCampaign</b> request, ads for the campaign are created by rule for the listings that meet the criteria you specify, and these ads are associated with the campaign.<span class="tablenote"><b>Note:</b> This container is only returned for rules-based campaigns using the Cost Per Sale (CPS) funding model.</span>
    */
    private ?CampaignCriterion $campaignCriterion = null;
    
    /**
     * @var string|null $campaignId A unique eBay-assigned ID for a campaign. This ID is generated when a campaign is created.
    */
    private ?string $campaignId = null;
    
    /**
     * @var string|null $campaignName A seller-defined name for the campaign. This value must be unique for the seller. <p>You can use any alphanumeric characters in the name, except the less than (&lt;) or greater than (&gt;) characters.</p><b>Max length:</b> 80 characters
    */
    private ?string $campaignName = null;
    
    /**
     * @var CampaignStatusEnum|null $campaignStatus Indicates the status of the campaign, such as <code>RUNNING</code>, <code>PAUSED</code>, and <code>ENDED</code>.
    */
    private ?CampaignStatusEnum $campaignStatus = null;
    
    /**
     * @var CampaignTargetingTypeEnum|null $campaignTargetingType The targeting type of the campaign. This value indicates whether the campaign is a manual targeting or smart targeting ad campaign.
    */
    private ?CampaignTargetingTypeEnum $campaignTargetingType = null;
    
    /**
     * @var array<ChannelEnum>|null $channels The channel for the campaign. This value indicates whether the campaign is an Onsite or Offsite advertising campaign. <br><br><b>Valid Values:</b><ul><li><code>ON_SITE</code></li><li><code>OFF_SITE</code></li></ul>
    */
    private ?array $channels = null;
    
    /**
     * @var string|null $endDate The date and time the campaign ends, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>). If this field is omitted, the campaign will have no defined end date, and will not end until the seller makes a decision to end the campaign with an <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-endcampaign">endCampaign</a> call, or if they update the campaign at a later time with an end date.
    */
    private ?string $endDate = null;
    
    /**
     * @var FundingStrategy|null $fundingStrategy This container includes parameters that define an ad campaign funding strategy. The set of seller-configurable parameters depends on the selected <b>fundingModel</b> value.<br/><br/>Currently, the supported funding models are <code>COST_PER_SALE</code> (CPS) and <code>COST_PER_CLICK</code> (CPC). For onsite ads, the CPC model supports two bidding strategies: <code>FIXED</code> and <code>DYNAMIC</code>.
    */
    private ?FundingStrategy $fundingStrategy = null;
    
    /**
     * @var MarketplaceIdEnum|null $marketplaceId The ID of the eBay marketplace where the campaign is hosted.
    */
    private ?MarketplaceIdEnum $marketplaceId = null;
    
    /**
     * @var string|null $startDate The date and time the campaign starts, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>). For display purposes, convert this time into the local time of the seller.  <p>On the date specified, the service derives the keywords for each listing in the campaign, creates an ad for each listing, and associates each new ad with the campaign. The campaign starts after this process is completed. The amount of time it takes the service to start the campaign depends on the number of listings in the campaign. Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaign">getCampaign</a> to check the status of the campaign.</p>
    */
    private ?string $startDate = null;
    
    /**
     * Instantiates a new Campaign and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Campaign
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Campaign {
        return new Campaign();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the alerts property value. This array contains alert messages for the campaign.
     * @return array<Alert>|null
    */
    public function getAlerts(): ?array {
        return $this->alerts;
    }

    /**
     * Gets the budget property value. The allocated budget for the Cost Per Click (CPC) Promoted Listings campaign.<span class="tablenote"><b>Note:</b> This field will only be returned for campaigns using the CPC funding model; it does not apply to the Cost Per Sale (CPS) funding model.</span>
     * @return CampaignBudget|null
    */
    public function getBudget(): ?CampaignBudget {
        return $this->budget;
    }

    /**
     * Gets the campaignCriterion property value. The selection rules (criterion) used to select the listings for a campaign. If you populate the <b>campaignCriterion</b> object in your <b>createCampaign</b> request, ads for the campaign are created by rule for the listings that meet the criteria you specify, and these ads are associated with the campaign.<span class="tablenote"><b>Note:</b> This container is only returned for rules-based campaigns using the Cost Per Sale (CPS) funding model.</span>
     * @return CampaignCriterion|null
    */
    public function getCampaignCriterion(): ?CampaignCriterion {
        return $this->campaignCriterion;
    }

    /**
     * Gets the campaignId property value. A unique eBay-assigned ID for a campaign. This ID is generated when a campaign is created.
     * @return string|null
    */
    public function getCampaignId(): ?string {
        return $this->campaignId;
    }

    /**
     * Gets the campaignName property value. A seller-defined name for the campaign. This value must be unique for the seller. <p>You can use any alphanumeric characters in the name, except the less than (&lt;) or greater than (&gt;) characters.</p><b>Max length:</b> 80 characters
     * @return string|null
    */
    public function getCampaignName(): ?string {
        return $this->campaignName;
    }

    /**
     * Gets the campaignStatus property value. Indicates the status of the campaign, such as <code>RUNNING</code>, <code>PAUSED</code>, and <code>ENDED</code>.
     * @return CampaignStatusEnum|null
    */
    public function getCampaignStatus(): ?CampaignStatusEnum {
        return $this->campaignStatus;
    }

    /**
     * Gets the campaignTargetingType property value. The targeting type of the campaign. This value indicates whether the campaign is a manual targeting or smart targeting ad campaign.
     * @return CampaignTargetingTypeEnum|null
    */
    public function getCampaignTargetingType(): ?CampaignTargetingTypeEnum {
        return $this->campaignTargetingType;
    }

    /**
     * Gets the channels property value. The channel for the campaign. This value indicates whether the campaign is an Onsite or Offsite advertising campaign. <br><br><b>Valid Values:</b><ul><li><code>ON_SITE</code></li><li><code>OFF_SITE</code></li></ul>
     * @return array<ChannelEnum>|null
    */
    public function getChannels(): ?array {
        return $this->channels;
    }

    /**
     * Gets the endDate property value. The date and time the campaign ends, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>). If this field is omitted, the campaign will have no defined end date, and will not end until the seller makes a decision to end the campaign with an <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-endcampaign">endCampaign</a> call, or if they update the campaign at a later time with an end date.
     * @return string|null
    */
    public function getEndDate(): ?string {
        return $this->endDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alerts' => fn(ParseNode $n) => $o->setAlerts($n->getCollectionOfObjectValues([Alert::class, 'createFromDiscriminatorValue'])),
            'budget' => fn(ParseNode $n) => $o->setBudget($n->getObjectValue([CampaignBudget::class, 'createFromDiscriminatorValue'])),
            'campaignCriterion' => fn(ParseNode $n) => $o->setCampaignCriterion($n->getObjectValue([CampaignCriterion::class, 'createFromDiscriminatorValue'])),
            'campaignId' => fn(ParseNode $n) => $o->setCampaignId($n->getStringValue()),
            'campaignName' => fn(ParseNode $n) => $o->setCampaignName($n->getStringValue()),
            'campaignStatus' => fn(ParseNode $n) => $o->setCampaignStatus($n->getEnumValue(CampaignStatusEnum::class)),
            'campaignTargetingType' => fn(ParseNode $n) => $o->setCampaignTargetingType($n->getEnumValue(CampaignTargetingTypeEnum::class)),
            'channels' => fn(ParseNode $n) => $o->setChannels($n->getCollectionOfEnumValues(ChannelEnum::class)),
            'endDate' => fn(ParseNode $n) => $o->setEndDate($n->getStringValue()),
            'fundingStrategy' => fn(ParseNode $n) => $o->setFundingStrategy($n->getObjectValue([FundingStrategy::class, 'createFromDiscriminatorValue'])),
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getEnumValue(MarketplaceIdEnum::class)),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getStringValue()),
        ];
    }

    /**
     * Gets the fundingStrategy property value. This container includes parameters that define an ad campaign funding strategy. The set of seller-configurable parameters depends on the selected <b>fundingModel</b> value.<br/><br/>Currently, the supported funding models are <code>COST_PER_SALE</code> (CPS) and <code>COST_PER_CLICK</code> (CPC). For onsite ads, the CPC model supports two bidding strategies: <code>FIXED</code> and <code>DYNAMIC</code>.
     * @return FundingStrategy|null
    */
    public function getFundingStrategy(): ?FundingStrategy {
        return $this->fundingStrategy;
    }

    /**
     * Gets the marketplaceId property value. The ID of the eBay marketplace where the campaign is hosted.
     * @return MarketplaceIdEnum|null
    */
    public function getMarketplaceId(): ?MarketplaceIdEnum {
        return $this->marketplaceId;
    }

    /**
     * Gets the startDate property value. The date and time the campaign starts, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>). For display purposes, convert this time into the local time of the seller.  <p>On the date specified, the service derives the keywords for each listing in the campaign, creates an ad for each listing, and associates each new ad with the campaign. The campaign starts after this process is completed. The amount of time it takes the service to start the campaign depends on the number of listings in the campaign. Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaign">getCampaign</a> to check the status of the campaign.</p>
     * @return string|null
    */
    public function getStartDate(): ?string {
        return $this->startDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('alerts', $this->getAlerts());
        $writer->writeObjectValue('budget', $this->getBudget());
        $writer->writeObjectValue('campaignCriterion', $this->getCampaignCriterion());
        $writer->writeStringValue('campaignId', $this->getCampaignId());
        $writer->writeStringValue('campaignName', $this->getCampaignName());
        $writer->writeEnumValue('campaignStatus', $this->getCampaignStatus());
        $writer->writeEnumValue('campaignTargetingType', $this->getCampaignTargetingType());
        $writer->writeCollectionOfEnumValues('channels', $this->getChannels());
        $writer->writeStringValue('endDate', $this->getEndDate());
        $writer->writeObjectValue('fundingStrategy', $this->getFundingStrategy());
        $writer->writeEnumValue('marketplaceId', $this->getMarketplaceId());
        $writer->writeStringValue('startDate', $this->getStartDate());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the alerts property value. This array contains alert messages for the campaign.
     * @param array<Alert>|null $value Value to set for the alerts property.
    */
    public function setAlerts(?array $value): void {
        $this->alerts = $value;
    }

    /**
     * Sets the budget property value. The allocated budget for the Cost Per Click (CPC) Promoted Listings campaign.<span class="tablenote"><b>Note:</b> This field will only be returned for campaigns using the CPC funding model; it does not apply to the Cost Per Sale (CPS) funding model.</span>
     * @param CampaignBudget|null $value Value to set for the budget property.
    */
    public function setBudget(?CampaignBudget $value): void {
        $this->budget = $value;
    }

    /**
     * Sets the campaignCriterion property value. The selection rules (criterion) used to select the listings for a campaign. If you populate the <b>campaignCriterion</b> object in your <b>createCampaign</b> request, ads for the campaign are created by rule for the listings that meet the criteria you specify, and these ads are associated with the campaign.<span class="tablenote"><b>Note:</b> This container is only returned for rules-based campaigns using the Cost Per Sale (CPS) funding model.</span>
     * @param CampaignCriterion|null $value Value to set for the campaignCriterion property.
    */
    public function setCampaignCriterion(?CampaignCriterion $value): void {
        $this->campaignCriterion = $value;
    }

    /**
     * Sets the campaignId property value. A unique eBay-assigned ID for a campaign. This ID is generated when a campaign is created.
     * @param string|null $value Value to set for the campaignId property.
    */
    public function setCampaignId(?string $value): void {
        $this->campaignId = $value;
    }

    /**
     * Sets the campaignName property value. A seller-defined name for the campaign. This value must be unique for the seller. <p>You can use any alphanumeric characters in the name, except the less than (&lt;) or greater than (&gt;) characters.</p><b>Max length:</b> 80 characters
     * @param string|null $value Value to set for the campaignName property.
    */
    public function setCampaignName(?string $value): void {
        $this->campaignName = $value;
    }

    /**
     * Sets the campaignStatus property value. Indicates the status of the campaign, such as <code>RUNNING</code>, <code>PAUSED</code>, and <code>ENDED</code>.
     * @param CampaignStatusEnum|null $value Value to set for the campaignStatus property.
    */
    public function setCampaignStatus(?CampaignStatusEnum $value): void {
        $this->campaignStatus = $value;
    }

    /**
     * Sets the campaignTargetingType property value. The targeting type of the campaign. This value indicates whether the campaign is a manual targeting or smart targeting ad campaign.
     * @param CampaignTargetingTypeEnum|null $value Value to set for the campaignTargetingType property.
    */
    public function setCampaignTargetingType(?CampaignTargetingTypeEnum $value): void {
        $this->campaignTargetingType = $value;
    }

    /**
     * Sets the channels property value. The channel for the campaign. This value indicates whether the campaign is an Onsite or Offsite advertising campaign. <br><br><b>Valid Values:</b><ul><li><code>ON_SITE</code></li><li><code>OFF_SITE</code></li></ul>
     * @param array<ChannelEnum>|null $value Value to set for the channels property.
    */
    public function setChannels(?array $value): void {
        $this->channels = $value;
    }

    /**
     * Sets the endDate property value. The date and time the campaign ends, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>). If this field is omitted, the campaign will have no defined end date, and will not end until the seller makes a decision to end the campaign with an <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-endcampaign">endCampaign</a> call, or if they update the campaign at a later time with an end date.
     * @param string|null $value Value to set for the endDate property.
    */
    public function setEndDate(?string $value): void {
        $this->endDate = $value;
    }

    /**
     * Sets the fundingStrategy property value. This container includes parameters that define an ad campaign funding strategy. The set of seller-configurable parameters depends on the selected <b>fundingModel</b> value.<br/><br/>Currently, the supported funding models are <code>COST_PER_SALE</code> (CPS) and <code>COST_PER_CLICK</code> (CPC). For onsite ads, the CPC model supports two bidding strategies: <code>FIXED</code> and <code>DYNAMIC</code>.
     * @param FundingStrategy|null $value Value to set for the fundingStrategy property.
    */
    public function setFundingStrategy(?FundingStrategy $value): void {
        $this->fundingStrategy = $value;
    }

    /**
     * Sets the marketplaceId property value. The ID of the eBay marketplace where the campaign is hosted.
     * @param MarketplaceIdEnum|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?MarketplaceIdEnum $value): void {
        $this->marketplaceId = $value;
    }

    /**
     * Sets the startDate property value. The date and time the campaign starts, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>). For display purposes, convert this time into the local time of the seller.  <p>On the date specified, the service derives the keywords for each listing in the campaign, creates an ad for each listing, and associates each new ad with the campaign. The campaign starts after this process is completed. The amount of time it takes the service to start the campaign depends on the number of listings in the campaign. Call <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-getcampaign">getCampaign</a> to check the status of the campaign.</p>
     * @param string|null $value Value to set for the startDate property.
    */
    public function setStartDate(?string $value): void {
        $this->startDate = $value;
    }

}
