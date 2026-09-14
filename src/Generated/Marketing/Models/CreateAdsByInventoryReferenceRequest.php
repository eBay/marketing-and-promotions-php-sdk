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
 * This type defines the fields needed to create ads by inventory reference ID request.
*/
class CreateAdsByInventoryReferenceRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adGroupId <span class="tablenote"><b>Note:</b> This field is not currently in use. Ad groups are only applicable to priority strategy ad campaigns that use the Cost Per Click (CPC) funding model. See <a href="/api-docs/sell/static/marketing/pl-overview.html#funding-model" target="_blank">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>
    */
    private ?string $adGroupId = null;
    
    /**
     * @var string|null $bidPercentage The user-defined <b>bid percentage</b> (also known as the <i>ad rate</i>) sets the level that eBay increases the visibility in search results for the associated listing. The higher the <b>bidPercentage</b> value, the more eBay promotes the listing.<br /><br /><i>Required if</i> the campaign's funding model is Cost Per Sale (CPS).<br /><br />The value specified here is also used to calculate the Promoted Listings fee. This percentage value is multiplied by the final sales price to determine the fee.<br /><br />The Promoted Listings fee is determined at the time the transaction completes and the seller is assessed the fee only when an item sells through a Promoted Listings ad campaign.<br /><br />The <b>bidPercentage</b> is a single precision value that is guided by the following rules: <ul><li>These values are <b>valid</b>:<br>&nbsp;&nbsp;&nbsp;<code>4.1</code>, &nbsp;&nbsp;&nbsp;<code>5.0</code>,&nbsp;&nbsp;&nbsp;<code>5.5</code>, ...</li>  <li>These values are <b>not valid</b>:<br /> &nbsp;&nbsp;&nbsp;<code>0.01</code>, &nbsp;&nbsp;&nbsp;<code>10.75</code>, &nbsp;&nbsp;&nbsp;<code>99.99</code>,<br /> &nbsp;&nbsp;&nbsp;and so on.</li></ul><br>If a bid percentage is not provided for an ad, eBay uses the default bid percentage of the associated campaign.<br><br><span class="tablenote"><b>Note:</b> This field has a minimum value of <code>2.0</code> and a maximum value of <code>100.0</code>.</span>
    */
    private ?string $bidPercentage = null;
    
    /**
     * @var string|null $inventoryReferenceId The unique identifier of a single-item listing or a multi-variation listing.<br><br>To create an ad for a single-item listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM</code> and specify an item ID or a SKU (if the SKU is defined in the listing).<br><br>To create an ad for a multi-variation listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM_GROUP</code> and specify the item ID for the multi-variation listing or the <b>inventoryitemGroupKey</b> value as defined in the Inventory API.
    */
    private ?string $inventoryReferenceId = null;
    
    /**
     * @var InventoryReferenceTypeEnum|null $inventoryReferenceType This enumerated value indicates the type of item the <b>inventoryReferenceId</b> references.<br><br>The item can be either an <code>INVENTORY_ITEM</code> or an <code>INVENTORY_ITEM_GROUP</code>.
    */
    private ?InventoryReferenceTypeEnum $inventoryReferenceType = null;
    
    /**
     * Instantiates a new CreateAdsByInventoryReferenceRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateAdsByInventoryReferenceRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateAdsByInventoryReferenceRequest {
        return new CreateAdsByInventoryReferenceRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adGroupId property value. <span class="tablenote"><b>Note:</b> This field is not currently in use. Ad groups are only applicable to priority strategy ad campaigns that use the Cost Per Click (CPC) funding model. See <a href="/api-docs/sell/static/marketing/pl-overview.html#funding-model" target="_blank">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>
     * @return string|null
    */
    public function getAdGroupId(): ?string {
        return $this->adGroupId;
    }

    /**
     * Gets the bidPercentage property value. The user-defined <b>bid percentage</b> (also known as the <i>ad rate</i>) sets the level that eBay increases the visibility in search results for the associated listing. The higher the <b>bidPercentage</b> value, the more eBay promotes the listing.<br /><br /><i>Required if</i> the campaign's funding model is Cost Per Sale (CPS).<br /><br />The value specified here is also used to calculate the Promoted Listings fee. This percentage value is multiplied by the final sales price to determine the fee.<br /><br />The Promoted Listings fee is determined at the time the transaction completes and the seller is assessed the fee only when an item sells through a Promoted Listings ad campaign.<br /><br />The <b>bidPercentage</b> is a single precision value that is guided by the following rules: <ul><li>These values are <b>valid</b>:<br>&nbsp;&nbsp;&nbsp;<code>4.1</code>, &nbsp;&nbsp;&nbsp;<code>5.0</code>,&nbsp;&nbsp;&nbsp;<code>5.5</code>, ...</li>  <li>These values are <b>not valid</b>:<br /> &nbsp;&nbsp;&nbsp;<code>0.01</code>, &nbsp;&nbsp;&nbsp;<code>10.75</code>, &nbsp;&nbsp;&nbsp;<code>99.99</code>,<br /> &nbsp;&nbsp;&nbsp;and so on.</li></ul><br>If a bid percentage is not provided for an ad, eBay uses the default bid percentage of the associated campaign.<br><br><span class="tablenote"><b>Note:</b> This field has a minimum value of <code>2.0</code> and a maximum value of <code>100.0</code>.</span>
     * @return string|null
    */
    public function getBidPercentage(): ?string {
        return $this->bidPercentage;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adGroupId' => fn(ParseNode $n) => $o->setAdGroupId($n->getStringValue()),
            'bidPercentage' => fn(ParseNode $n) => $o->setBidPercentage($n->getStringValue()),
            'inventoryReferenceId' => fn(ParseNode $n) => $o->setInventoryReferenceId($n->getStringValue()),
            'inventoryReferenceType' => fn(ParseNode $n) => $o->setInventoryReferenceType($n->getEnumValue(InventoryReferenceTypeEnum::class)),
        ];
    }

    /**
     * Gets the inventoryReferenceId property value. The unique identifier of a single-item listing or a multi-variation listing.<br><br>To create an ad for a single-item listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM</code> and specify an item ID or a SKU (if the SKU is defined in the listing).<br><br>To create an ad for a multi-variation listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM_GROUP</code> and specify the item ID for the multi-variation listing or the <b>inventoryitemGroupKey</b> value as defined in the Inventory API.
     * @return string|null
    */
    public function getInventoryReferenceId(): ?string {
        return $this->inventoryReferenceId;
    }

    /**
     * Gets the inventoryReferenceType property value. This enumerated value indicates the type of item the <b>inventoryReferenceId</b> references.<br><br>The item can be either an <code>INVENTORY_ITEM</code> or an <code>INVENTORY_ITEM_GROUP</code>.
     * @return InventoryReferenceTypeEnum|null
    */
    public function getInventoryReferenceType(): ?InventoryReferenceTypeEnum {
        return $this->inventoryReferenceType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adGroupId', $this->getAdGroupId());
        $writer->writeStringValue('bidPercentage', $this->getBidPercentage());
        $writer->writeStringValue('inventoryReferenceId', $this->getInventoryReferenceId());
        $writer->writeEnumValue('inventoryReferenceType', $this->getInventoryReferenceType());
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
     * Sets the adGroupId property value. <span class="tablenote"><b>Note:</b> This field is not currently in use. Ad groups are only applicable to priority strategy ad campaigns that use the Cost Per Click (CPC) funding model. See <a href="/api-docs/sell/static/marketing/pl-overview.html#funding-model" target="_blank">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span>
     * @param string|null $value Value to set for the adGroupId property.
    */
    public function setAdGroupId(?string $value): void {
        $this->adGroupId = $value;
    }

    /**
     * Sets the bidPercentage property value. The user-defined <b>bid percentage</b> (also known as the <i>ad rate</i>) sets the level that eBay increases the visibility in search results for the associated listing. The higher the <b>bidPercentage</b> value, the more eBay promotes the listing.<br /><br /><i>Required if</i> the campaign's funding model is Cost Per Sale (CPS).<br /><br />The value specified here is also used to calculate the Promoted Listings fee. This percentage value is multiplied by the final sales price to determine the fee.<br /><br />The Promoted Listings fee is determined at the time the transaction completes and the seller is assessed the fee only when an item sells through a Promoted Listings ad campaign.<br /><br />The <b>bidPercentage</b> is a single precision value that is guided by the following rules: <ul><li>These values are <b>valid</b>:<br>&nbsp;&nbsp;&nbsp;<code>4.1</code>, &nbsp;&nbsp;&nbsp;<code>5.0</code>,&nbsp;&nbsp;&nbsp;<code>5.5</code>, ...</li>  <li>These values are <b>not valid</b>:<br /> &nbsp;&nbsp;&nbsp;<code>0.01</code>, &nbsp;&nbsp;&nbsp;<code>10.75</code>, &nbsp;&nbsp;&nbsp;<code>99.99</code>,<br /> &nbsp;&nbsp;&nbsp;and so on.</li></ul><br>If a bid percentage is not provided for an ad, eBay uses the default bid percentage of the associated campaign.<br><br><span class="tablenote"><b>Note:</b> This field has a minimum value of <code>2.0</code> and a maximum value of <code>100.0</code>.</span>
     * @param string|null $value Value to set for the bidPercentage property.
    */
    public function setBidPercentage(?string $value): void {
        $this->bidPercentage = $value;
    }

    /**
     * Sets the inventoryReferenceId property value. The unique identifier of a single-item listing or a multi-variation listing.<br><br>To create an ad for a single-item listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM</code> and specify an item ID or a SKU (if the SKU is defined in the listing).<br><br>To create an ad for a multi-variation listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM_GROUP</code> and specify the item ID for the multi-variation listing or the <b>inventoryitemGroupKey</b> value as defined in the Inventory API.
     * @param string|null $value Value to set for the inventoryReferenceId property.
    */
    public function setInventoryReferenceId(?string $value): void {
        $this->inventoryReferenceId = $value;
    }

    /**
     * Sets the inventoryReferenceType property value. This enumerated value indicates the type of item the <b>inventoryReferenceId</b> references.<br><br>The item can be either an <code>INVENTORY_ITEM</code> or an <code>INVENTORY_ITEM_GROUP</code>.
     * @param InventoryReferenceTypeEnum|null $value Value to set for the inventoryReferenceType property.
    */
    public function setInventoryReferenceType(?InventoryReferenceTypeEnum $value): void {
        $this->inventoryReferenceType = $value;
    }

}
