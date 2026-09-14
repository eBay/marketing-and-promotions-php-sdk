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
 * The selection rules (criterion) used to select the listings for a campaign. If you populate the <b>campaignCriterion</b> object in your <b>createCampaign</b> request, ads for the campaign are created by rule for the listings that meet the criteria you specify, and these ads are associated with the campaign.<span class="tablenote"><b>Note:</b> This container is only returned for rules-based campaigns using the Cost Per Sale (CPS) funding model.</span>
*/
class CampaignCriterion implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $autoSelectFutureInventory A field used to indicate whether listings shall be automatically added to, or removed from, a Promoted Listings campaign based on the rules that have been configured for the campaign.<br /><br />If set to <code>true</code>, eBay adds all listings matching the campaign criterion to the campaign, including any new listings created from the items in a seller's inventory.<br /><br /><b>Default:</b> <code>false</code>
    */
    private ?bool $autoSelectFutureInventory = null;
    
    /**
     * @var CriterionTypeEnum|null $criterionType This enum defines the criterion (selection rule) types. Currently, the only criterion type supported is <code>INVENTORY_PARTITION</code>, and you must specify this value if you manage your items with the Inventory API and you want to include items based on their inventory reference IDs.  <br><br>Do not include this field if you manage your listings with Trading API/legacy model.
    */
    private ?CriterionTypeEnum $criterionType = null;
    
    /**
     * @var array<SelectionRule>|null $selectionRules This container shows all of the rules/inclusion filters used to add listings to the campaign. For information on using the contained fields, see <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Campaign " target="_blank">Promoted Listing campaigns</a>.
    */
    private ?array $selectionRules = null;
    
    /**
     * Instantiates a new CampaignCriterion and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CampaignCriterion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CampaignCriterion {
        return new CampaignCriterion();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the autoSelectFutureInventory property value. A field used to indicate whether listings shall be automatically added to, or removed from, a Promoted Listings campaign based on the rules that have been configured for the campaign.<br /><br />If set to <code>true</code>, eBay adds all listings matching the campaign criterion to the campaign, including any new listings created from the items in a seller's inventory.<br /><br /><b>Default:</b> <code>false</code>
     * @return bool|null
    */
    public function getAutoSelectFutureInventory(): ?bool {
        return $this->autoSelectFutureInventory;
    }

    /**
     * Gets the criterionType property value. This enum defines the criterion (selection rule) types. Currently, the only criterion type supported is <code>INVENTORY_PARTITION</code>, and you must specify this value if you manage your items with the Inventory API and you want to include items based on their inventory reference IDs.  <br><br>Do not include this field if you manage your listings with Trading API/legacy model.
     * @return CriterionTypeEnum|null
    */
    public function getCriterionType(): ?CriterionTypeEnum {
        return $this->criterionType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'autoSelectFutureInventory' => fn(ParseNode $n) => $o->setAutoSelectFutureInventory($n->getBooleanValue()),
            'criterionType' => fn(ParseNode $n) => $o->setCriterionType($n->getEnumValue(CriterionTypeEnum::class)),
            'selectionRules' => fn(ParseNode $n) => $o->setSelectionRules($n->getCollectionOfObjectValues([SelectionRule::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the selectionRules property value. This container shows all of the rules/inclusion filters used to add listings to the campaign. For information on using the contained fields, see <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Campaign " target="_blank">Promoted Listing campaigns</a>.
     * @return array<SelectionRule>|null
    */
    public function getSelectionRules(): ?array {
        return $this->selectionRules;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('autoSelectFutureInventory', $this->getAutoSelectFutureInventory());
        $writer->writeEnumValue('criterionType', $this->getCriterionType());
        $writer->writeCollectionOfObjectValues('selectionRules', $this->getSelectionRules());
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
     * Sets the autoSelectFutureInventory property value. A field used to indicate whether listings shall be automatically added to, or removed from, a Promoted Listings campaign based on the rules that have been configured for the campaign.<br /><br />If set to <code>true</code>, eBay adds all listings matching the campaign criterion to the campaign, including any new listings created from the items in a seller's inventory.<br /><br /><b>Default:</b> <code>false</code>
     * @param bool|null $value Value to set for the autoSelectFutureInventory property.
    */
    public function setAutoSelectFutureInventory(?bool $value): void {
        $this->autoSelectFutureInventory = $value;
    }

    /**
     * Sets the criterionType property value. This enum defines the criterion (selection rule) types. Currently, the only criterion type supported is <code>INVENTORY_PARTITION</code>, and you must specify this value if you manage your items with the Inventory API and you want to include items based on their inventory reference IDs.  <br><br>Do not include this field if you manage your listings with Trading API/legacy model.
     * @param CriterionTypeEnum|null $value Value to set for the criterionType property.
    */
    public function setCriterionType(?CriterionTypeEnum $value): void {
        $this->criterionType = $value;
    }

    /**
     * Sets the selectionRules property value. This container shows all of the rules/inclusion filters used to add listings to the campaign. For information on using the contained fields, see <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Campaign " target="_blank">Promoted Listing campaigns</a>.
     * @param array<SelectionRule>|null $value Value to set for the selectionRules property.
    */
    public function setSelectionRules(?array $value): void {
        $this->selectionRules = $value;
    }

}
