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
 * This type defines how the Promoted Listings fee is calculated for a Promoted Listings ad campaign.
*/
class FundingStrategy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adRateStrategy This field is used to set the ad rate strategy for a Cost Per Sale (CPS) campaign.<br><br>The default value for this field is <code>FIXED</code>. If this field is omitted, the default value will be used.<br><br><span class="tablenote"><b>Note:</b> This field is not applicable for Cost Per Click (CPC) or offsite campaigns.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:AdRateStrategyEnum'>eBay API documentation</a>
    */
    private ?string $adRateStrategy = null;
    
    /**
     * @var string|null $biddingStrategy Indicates the bidding strategy for an onsite Cost Per Click (CPC) campaign that uses manual targeting.<br><br><span class="tablenote"><b>Note:</b> This field is not applicable for smart targeting campaigns.</span><br>Valid values are:<ul><li><code>FIXED</code><br><br>When using a fixed bidding strategy, sellers manually assign and adjust keyword bids for the CPC campaign.</li><li><code>DYNAMIC</code><br><br>When using a dynamic bidding strategy, eBay manages the campaign's keyword bids and automatically updates them daily to the suggested bid.<br><br><span class="tablenote"><b>Note:</b> For a CPC campaign using dynamic bidding, sellers can continue to manually add keywords for the campaign, but they are no longer able to manually adjust their associated bid values. In order to manually adjust bid values, sellers must use the <code>FIXED</code> bidding strategy.</span></li></ul><br><b>Default value:</b> FIXED For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:BiddingStrategyEnum'>eBay API documentation</a>
    */
    private ?string $biddingStrategy = null;
    
    /**
     * @var string|null $bidPercentage The user-defined <b>bid percentage</b> (also known as the <i>ad rate</i>) sets the level that eBay increases the visibility in search results for the associated listing. The higher the <b>bidPercentage</b> value, the more eBay promotes the listing.  <br><br>The value specified here is also used to calculate the Promoted Listings fee. This percentage value is multiplied by the final sales price to determine the fee. <br><br>The Promoted Listings fee is determined at the time the transaction completes and the seller is assessed the fee only when an item sells through a Promoted Listings ad campaign. <br><br>The <b>bidPercentage</b> is a single precision value that is guided by the following rules: <ul><li>These values are <b>valid</b>:<br>&nbsp;&nbsp;&nbsp;<code>4.1</code>, &nbsp;&nbsp;&nbsp;<code>5.0</code>, &nbsp;&nbsp;&nbsp;<code>5.5</code>, ...</li>  <li>These values are <b>not valid</b>:<br /> &nbsp;&nbsp;&nbsp;<code>0.01</code>, &nbsp;&nbsp;&nbsp;<code>10.75</code>, &nbsp;&nbsp;&nbsp;<code>99.99</code>,<br /> &nbsp;&nbsp;&nbsp;and so on.</li></ul>This is the default bid percentage for the campaigns using the Cost Per Sale (CPS) funding model, and this value will be overridden by any ads in the campaign that have their own set bid percentages.<br /><br />If a bid percentage is not provided for an ad, eBay uses the default bid percentage of the associated campaign.<br /><br /><span class="tablenote"><b>Note:</b>This field is only relevant for campaigns that use the CPS funding model and a fixed ad rate. It is not used for campaigns that use the Cost Per Click (CPC) funding model and should not be provided when the selected adRateStrategy for the campaign is dynamic.</span><br><br><span class="tablenote"><b>Note:</b> This field has a minimum value of <code>2.0</code> and a maximum value of <code>100.0</code>.</span>
    */
    private ?string $bidPercentage = null;
    
    /**
     * @var array<BidPreference>|null $bidPreferences This container indicates the bidding preferences of the campaign, such as the maximum CPC amount.<br><br><span class="tablenote"><b>Note:</b> This container is only applicable for smart targeting campaigns.</span><br>This container is required if the user wants to create a Smart Targeting campaign.
    */
    private ?array $bidPreferences = null;
    
    /**
     * @var array<DynamicAdRatePreference>|null $dynamicAdRatePreferences A field that indicates whether a single, user-defined bid percentage (also known as the <i>ad rate</i>) should be used, or whether eBay should automatically adjust listings to maintain the daily suggested bid percentage.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> Dynamic adjustment is only applicable when the <b>adRateStrategy</b> is set to <code>DYNAMIC</code> This field is not applicable for offsite campaigns.</span><br /><b>Default:</b> <code>FIXED</code>
    */
    private ?array $dynamicAdRatePreferences = null;
    
    /**
     * @var string|null $fundingModel Indicates the model that eBay uses to calculate the Promoted Listings fee. <p>For a description of the funding model types, refer to <b>FundingModelTypeEnum</b>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:FundingModelEnum'>eBay API documentation</a>
    */
    private ?string $fundingModel = null;
    
    /**
     * Instantiates a new FundingStrategy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FundingStrategy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FundingStrategy {
        return new FundingStrategy();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adRateStrategy property value. This field is used to set the ad rate strategy for a Cost Per Sale (CPS) campaign.<br><br>The default value for this field is <code>FIXED</code>. If this field is omitted, the default value will be used.<br><br><span class="tablenote"><b>Note:</b> This field is not applicable for Cost Per Click (CPC) or offsite campaigns.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:AdRateStrategyEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getAdRateStrategy(): ?string {
        return $this->adRateStrategy;
    }

    /**
     * Gets the biddingStrategy property value. Indicates the bidding strategy for an onsite Cost Per Click (CPC) campaign that uses manual targeting.<br><br><span class="tablenote"><b>Note:</b> This field is not applicable for smart targeting campaigns.</span><br>Valid values are:<ul><li><code>FIXED</code><br><br>When using a fixed bidding strategy, sellers manually assign and adjust keyword bids for the CPC campaign.</li><li><code>DYNAMIC</code><br><br>When using a dynamic bidding strategy, eBay manages the campaign's keyword bids and automatically updates them daily to the suggested bid.<br><br><span class="tablenote"><b>Note:</b> For a CPC campaign using dynamic bidding, sellers can continue to manually add keywords for the campaign, but they are no longer able to manually adjust their associated bid values. In order to manually adjust bid values, sellers must use the <code>FIXED</code> bidding strategy.</span></li></ul><br><b>Default value:</b> FIXED For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:BiddingStrategyEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getBiddingStrategy(): ?string {
        return $this->biddingStrategy;
    }

    /**
     * Gets the bidPercentage property value. The user-defined <b>bid percentage</b> (also known as the <i>ad rate</i>) sets the level that eBay increases the visibility in search results for the associated listing. The higher the <b>bidPercentage</b> value, the more eBay promotes the listing.  <br><br>The value specified here is also used to calculate the Promoted Listings fee. This percentage value is multiplied by the final sales price to determine the fee. <br><br>The Promoted Listings fee is determined at the time the transaction completes and the seller is assessed the fee only when an item sells through a Promoted Listings ad campaign. <br><br>The <b>bidPercentage</b> is a single precision value that is guided by the following rules: <ul><li>These values are <b>valid</b>:<br>&nbsp;&nbsp;&nbsp;<code>4.1</code>, &nbsp;&nbsp;&nbsp;<code>5.0</code>, &nbsp;&nbsp;&nbsp;<code>5.5</code>, ...</li>  <li>These values are <b>not valid</b>:<br /> &nbsp;&nbsp;&nbsp;<code>0.01</code>, &nbsp;&nbsp;&nbsp;<code>10.75</code>, &nbsp;&nbsp;&nbsp;<code>99.99</code>,<br /> &nbsp;&nbsp;&nbsp;and so on.</li></ul>This is the default bid percentage for the campaigns using the Cost Per Sale (CPS) funding model, and this value will be overridden by any ads in the campaign that have their own set bid percentages.<br /><br />If a bid percentage is not provided for an ad, eBay uses the default bid percentage of the associated campaign.<br /><br /><span class="tablenote"><b>Note:</b>This field is only relevant for campaigns that use the CPS funding model and a fixed ad rate. It is not used for campaigns that use the Cost Per Click (CPC) funding model and should not be provided when the selected adRateStrategy for the campaign is dynamic.</span><br><br><span class="tablenote"><b>Note:</b> This field has a minimum value of <code>2.0</code> and a maximum value of <code>100.0</code>.</span>
     * @return string|null
    */
    public function getBidPercentage(): ?string {
        return $this->bidPercentage;
    }

    /**
     * Gets the bidPreferences property value. This container indicates the bidding preferences of the campaign, such as the maximum CPC amount.<br><br><span class="tablenote"><b>Note:</b> This container is only applicable for smart targeting campaigns.</span><br>This container is required if the user wants to create a Smart Targeting campaign.
     * @return array<BidPreference>|null
    */
    public function getBidPreferences(): ?array {
        return $this->bidPreferences;
    }

    /**
     * Gets the dynamicAdRatePreferences property value. A field that indicates whether a single, user-defined bid percentage (also known as the <i>ad rate</i>) should be used, or whether eBay should automatically adjust listings to maintain the daily suggested bid percentage.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> Dynamic adjustment is only applicable when the <b>adRateStrategy</b> is set to <code>DYNAMIC</code> This field is not applicable for offsite campaigns.</span><br /><b>Default:</b> <code>FIXED</code>
     * @return array<DynamicAdRatePreference>|null
    */
    public function getDynamicAdRatePreferences(): ?array {
        return $this->dynamicAdRatePreferences;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adRateStrategy' => fn(ParseNode $n) => $o->setAdRateStrategy($n->getStringValue()),
            'biddingStrategy' => fn(ParseNode $n) => $o->setBiddingStrategy($n->getStringValue()),
            'bidPercentage' => fn(ParseNode $n) => $o->setBidPercentage($n->getStringValue()),
            'bidPreferences' => fn(ParseNode $n) => $o->setBidPreferences($n->getCollectionOfObjectValues([BidPreference::class, 'createFromDiscriminatorValue'])),
            'dynamicAdRatePreferences' => fn(ParseNode $n) => $o->setDynamicAdRatePreferences($n->getCollectionOfObjectValues([DynamicAdRatePreference::class, 'createFromDiscriminatorValue'])),
            'fundingModel' => fn(ParseNode $n) => $o->setFundingModel($n->getStringValue()),
        ];
    }

    /**
     * Gets the fundingModel property value. Indicates the model that eBay uses to calculate the Promoted Listings fee. <p>For a description of the funding model types, refer to <b>FundingModelTypeEnum</b>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:FundingModelEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getFundingModel(): ?string {
        return $this->fundingModel;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adRateStrategy', $this->getAdRateStrategy());
        $writer->writeStringValue('biddingStrategy', $this->getBiddingStrategy());
        $writer->writeStringValue('bidPercentage', $this->getBidPercentage());
        $writer->writeCollectionOfObjectValues('bidPreferences', $this->getBidPreferences());
        $writer->writeCollectionOfObjectValues('dynamicAdRatePreferences', $this->getDynamicAdRatePreferences());
        $writer->writeStringValue('fundingModel', $this->getFundingModel());
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
     * Sets the adRateStrategy property value. This field is used to set the ad rate strategy for a Cost Per Sale (CPS) campaign.<br><br>The default value for this field is <code>FIXED</code>. If this field is omitted, the default value will be used.<br><br><span class="tablenote"><b>Note:</b> This field is not applicable for Cost Per Click (CPC) or offsite campaigns.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:AdRateStrategyEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the adRateStrategy property.
    */
    public function setAdRateStrategy(?string $value): void {
        $this->adRateStrategy = $value;
    }

    /**
     * Sets the biddingStrategy property value. Indicates the bidding strategy for an onsite Cost Per Click (CPC) campaign that uses manual targeting.<br><br><span class="tablenote"><b>Note:</b> This field is not applicable for smart targeting campaigns.</span><br>Valid values are:<ul><li><code>FIXED</code><br><br>When using a fixed bidding strategy, sellers manually assign and adjust keyword bids for the CPC campaign.</li><li><code>DYNAMIC</code><br><br>When using a dynamic bidding strategy, eBay manages the campaign's keyword bids and automatically updates them daily to the suggested bid.<br><br><span class="tablenote"><b>Note:</b> For a CPC campaign using dynamic bidding, sellers can continue to manually add keywords for the campaign, but they are no longer able to manually adjust their associated bid values. In order to manually adjust bid values, sellers must use the <code>FIXED</code> bidding strategy.</span></li></ul><br><b>Default value:</b> FIXED For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:BiddingStrategyEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the biddingStrategy property.
    */
    public function setBiddingStrategy(?string $value): void {
        $this->biddingStrategy = $value;
    }

    /**
     * Sets the bidPercentage property value. The user-defined <b>bid percentage</b> (also known as the <i>ad rate</i>) sets the level that eBay increases the visibility in search results for the associated listing. The higher the <b>bidPercentage</b> value, the more eBay promotes the listing.  <br><br>The value specified here is also used to calculate the Promoted Listings fee. This percentage value is multiplied by the final sales price to determine the fee. <br><br>The Promoted Listings fee is determined at the time the transaction completes and the seller is assessed the fee only when an item sells through a Promoted Listings ad campaign. <br><br>The <b>bidPercentage</b> is a single precision value that is guided by the following rules: <ul><li>These values are <b>valid</b>:<br>&nbsp;&nbsp;&nbsp;<code>4.1</code>, &nbsp;&nbsp;&nbsp;<code>5.0</code>, &nbsp;&nbsp;&nbsp;<code>5.5</code>, ...</li>  <li>These values are <b>not valid</b>:<br /> &nbsp;&nbsp;&nbsp;<code>0.01</code>, &nbsp;&nbsp;&nbsp;<code>10.75</code>, &nbsp;&nbsp;&nbsp;<code>99.99</code>,<br /> &nbsp;&nbsp;&nbsp;and so on.</li></ul>This is the default bid percentage for the campaigns using the Cost Per Sale (CPS) funding model, and this value will be overridden by any ads in the campaign that have their own set bid percentages.<br /><br />If a bid percentage is not provided for an ad, eBay uses the default bid percentage of the associated campaign.<br /><br /><span class="tablenote"><b>Note:</b>This field is only relevant for campaigns that use the CPS funding model and a fixed ad rate. It is not used for campaigns that use the Cost Per Click (CPC) funding model and should not be provided when the selected adRateStrategy for the campaign is dynamic.</span><br><br><span class="tablenote"><b>Note:</b> This field has a minimum value of <code>2.0</code> and a maximum value of <code>100.0</code>.</span>
     * @param string|null $value Value to set for the bidPercentage property.
    */
    public function setBidPercentage(?string $value): void {
        $this->bidPercentage = $value;
    }

    /**
     * Sets the bidPreferences property value. This container indicates the bidding preferences of the campaign, such as the maximum CPC amount.<br><br><span class="tablenote"><b>Note:</b> This container is only applicable for smart targeting campaigns.</span><br>This container is required if the user wants to create a Smart Targeting campaign.
     * @param array<BidPreference>|null $value Value to set for the bidPreferences property.
    */
    public function setBidPreferences(?array $value): void {
        $this->bidPreferences = $value;
    }

    /**
     * Sets the dynamicAdRatePreferences property value. A field that indicates whether a single, user-defined bid percentage (also known as the <i>ad rate</i>) should be used, or whether eBay should automatically adjust listings to maintain the daily suggested bid percentage.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> Dynamic adjustment is only applicable when the <b>adRateStrategy</b> is set to <code>DYNAMIC</code> This field is not applicable for offsite campaigns.</span><br /><b>Default:</b> <code>FIXED</code>
     * @param array<DynamicAdRatePreference>|null $value Value to set for the dynamicAdRatePreferences property.
    */
    public function setDynamicAdRatePreferences(?array $value): void {
        $this->dynamicAdRatePreferences = $value;
    }

    /**
     * Sets the fundingModel property value. Indicates the model that eBay uses to calculate the Promoted Listings fee. <p>For a description of the funding model types, refer to <b>FundingModelTypeEnum</b>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:FundingModelEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the fundingModel property.
    */
    public function setFundingModel(?string $value): void {
        $this->fundingModel = $value;
    }

}
