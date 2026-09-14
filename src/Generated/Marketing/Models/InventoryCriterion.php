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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type defines either the selections rules or the list of listing IDs for the discount. The "listing IDs" are either the seller's item IDs or the eBay listing IDs.
*/
class InventoryCriterion implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var InventoryCriterionEnum|null $inventoryCriterionType Indicates how the items to be discounted are selected. You can include inventory by ID, using rules, or globally include all your inventory. 
    */
    private ?InventoryCriterionEnum $inventoryCriterionType = null;
    
    /**
     * @var array<InventoryItem>|null $inventoryItems An array of containers for the seller's inventory reference IDs (also known as an "SKU" or "custom label") to be added to the discount.<br><p class="tablenote"><b>Note:</b> The request can have either <b>inventoryItems</b> or <b>listingIds</b>, but not both.</p><br><b>Maximum:</b> 2000 parent items <br><br><b>Maximum SKU or custom label length:</b> 50 characters <br><br><i>Required if</i> <b>InventoryCriterionType</b> is set to <code>INVENTORY_BY_VALUE</code>, you must specify either <b>inventoryItems</b> or <b>listingIds</b>.
    */
    private ?array $inventoryItems = null;
    
    /**
     * @var array<string>|null $listingIds An array of eBay listing IDs to be discounted. <br><p class="tablenote"><b>Note:</b> The request can have either <b>inventoryItems</b> or <b>listingIds</b>, but not both.</p>  <br><b>Required:</b> All listings being discounted must offer an electronic payment method.<br><br><b>Maximum:</b> 2000 parent items <br><br><b>Maximum SKU or custom label length:</b> 50 characters <br><br><i>Required if</i> <b>InventoryCriterionType</b> is set to <code>INVENTORY_BY_VALUE</code>, you must specify either <b>inventoryItems</b> or <b>listingIds</b>.
    */
    private ?array $listingIds = null;
    
    /**
     * @var RuleCriteria|null $ruleCriteria This container defines a set of inventory selection rules for a discount.  <br><br>When defining rule criteria, you must limit item exclusions to 100 IDs when you choose from live inventory.  <br><br>Required if  <b>InventoryCriterionEnum</b> is set to <code>INVENTORY_BY_RULE</code> or <code>INVENTORY_ANY</code>.
    */
    private ?RuleCriteria $ruleCriteria = null;
    
    /**
     * Instantiates a new InventoryCriterion and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InventoryCriterion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InventoryCriterion {
        return new InventoryCriterion();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'inventoryCriterionType' => fn(ParseNode $n) => $o->setInventoryCriterionType($n->getEnumValue(InventoryCriterionEnum::class)),
            'inventoryItems' => fn(ParseNode $n) => $o->setInventoryItems($n->getCollectionOfObjectValues([InventoryItem::class, 'createFromDiscriminatorValue'])),
            'listingIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setListingIds($val);
            },
            'ruleCriteria' => fn(ParseNode $n) => $o->setRuleCriteria($n->getObjectValue([RuleCriteria::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the inventoryCriterionType property value. Indicates how the items to be discounted are selected. You can include inventory by ID, using rules, or globally include all your inventory. 
     * @return InventoryCriterionEnum|null
    */
    public function getInventoryCriterionType(): ?InventoryCriterionEnum {
        return $this->inventoryCriterionType;
    }

    /**
     * Gets the inventoryItems property value. An array of containers for the seller's inventory reference IDs (also known as an "SKU" or "custom label") to be added to the discount.<br><p class="tablenote"><b>Note:</b> The request can have either <b>inventoryItems</b> or <b>listingIds</b>, but not both.</p><br><b>Maximum:</b> 2000 parent items <br><br><b>Maximum SKU or custom label length:</b> 50 characters <br><br><i>Required if</i> <b>InventoryCriterionType</b> is set to <code>INVENTORY_BY_VALUE</code>, you must specify either <b>inventoryItems</b> or <b>listingIds</b>.
     * @return array<InventoryItem>|null
    */
    public function getInventoryItems(): ?array {
        return $this->inventoryItems;
    }

    /**
     * Gets the listingIds property value. An array of eBay listing IDs to be discounted. <br><p class="tablenote"><b>Note:</b> The request can have either <b>inventoryItems</b> or <b>listingIds</b>, but not both.</p>  <br><b>Required:</b> All listings being discounted must offer an electronic payment method.<br><br><b>Maximum:</b> 2000 parent items <br><br><b>Maximum SKU or custom label length:</b> 50 characters <br><br><i>Required if</i> <b>InventoryCriterionType</b> is set to <code>INVENTORY_BY_VALUE</code>, you must specify either <b>inventoryItems</b> or <b>listingIds</b>.
     * @return array<string>|null
    */
    public function getListingIds(): ?array {
        return $this->listingIds;
    }

    /**
     * Gets the ruleCriteria property value. This container defines a set of inventory selection rules for a discount.  <br><br>When defining rule criteria, you must limit item exclusions to 100 IDs when you choose from live inventory.  <br><br>Required if  <b>InventoryCriterionEnum</b> is set to <code>INVENTORY_BY_RULE</code> or <code>INVENTORY_ANY</code>.
     * @return RuleCriteria|null
    */
    public function getRuleCriteria(): ?RuleCriteria {
        return $this->ruleCriteria;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('inventoryCriterionType', $this->getInventoryCriterionType());
        $writer->writeCollectionOfObjectValues('inventoryItems', $this->getInventoryItems());
        $writer->writeCollectionOfPrimitiveValues('listingIds', $this->getListingIds());
        $writer->writeObjectValue('ruleCriteria', $this->getRuleCriteria());
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
     * Sets the inventoryCriterionType property value. Indicates how the items to be discounted are selected. You can include inventory by ID, using rules, or globally include all your inventory. 
     * @param InventoryCriterionEnum|null $value Value to set for the inventoryCriterionType property.
    */
    public function setInventoryCriterionType(?InventoryCriterionEnum $value): void {
        $this->inventoryCriterionType = $value;
    }

    /**
     * Sets the inventoryItems property value. An array of containers for the seller's inventory reference IDs (also known as an "SKU" or "custom label") to be added to the discount.<br><p class="tablenote"><b>Note:</b> The request can have either <b>inventoryItems</b> or <b>listingIds</b>, but not both.</p><br><b>Maximum:</b> 2000 parent items <br><br><b>Maximum SKU or custom label length:</b> 50 characters <br><br><i>Required if</i> <b>InventoryCriterionType</b> is set to <code>INVENTORY_BY_VALUE</code>, you must specify either <b>inventoryItems</b> or <b>listingIds</b>.
     * @param array<InventoryItem>|null $value Value to set for the inventoryItems property.
    */
    public function setInventoryItems(?array $value): void {
        $this->inventoryItems = $value;
    }

    /**
     * Sets the listingIds property value. An array of eBay listing IDs to be discounted. <br><p class="tablenote"><b>Note:</b> The request can have either <b>inventoryItems</b> or <b>listingIds</b>, but not both.</p>  <br><b>Required:</b> All listings being discounted must offer an electronic payment method.<br><br><b>Maximum:</b> 2000 parent items <br><br><b>Maximum SKU or custom label length:</b> 50 characters <br><br><i>Required if</i> <b>InventoryCriterionType</b> is set to <code>INVENTORY_BY_VALUE</code>, you must specify either <b>inventoryItems</b> or <b>listingIds</b>.
     * @param array<string>|null $value Value to set for the listingIds property.
    */
    public function setListingIds(?array $value): void {
        $this->listingIds = $value;
    }

    /**
     * Sets the ruleCriteria property value. This container defines a set of inventory selection rules for a discount.  <br><br>When defining rule criteria, you must limit item exclusions to 100 IDs when you choose from live inventory.  <br><br>Required if  <b>InventoryCriterionEnum</b> is set to <code>INVENTORY_BY_RULE</code> or <code>INVENTORY_ANY</code>.
     * @param RuleCriteria|null $value Value to set for the ruleCriteria property.
    */
    public function setRuleCriteria(?RuleCriteria $value): void {
        $this->ruleCriteria = $value;
    }

}
