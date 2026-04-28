<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This complex type is used to identify an item that is managed by the Inventory API. The type defines the fields contained in an inventory reference ID.
*/
class InventoryReference implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $inventoryReferenceId The unique identifier of a single-item listing or a multi-variation listing.<br><br>To create an ad for a single-item listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM</code> and specify an item ID or a SKU (if the SKU is defined in the listing).<br><br>To create an ad for a multi-variation listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM_GROUP</code> and specify the item ID for the multi-variation listing or the <b>inventoryitemGroupKey</b> value as defined in the Inventory API.<br><br><i>Required if </i> if you supply an <b>inventoryReferenceType</b>.
    */
    private ?string $inventoryReferenceId = null;
    
    /**
     * @var string|null $inventoryReferenceType Indicates the type of item indicated by the <b>inventoryReferenceId</b>.<br><br>This value can be set to either <code>INVENTORY_ITEM</code> or <code>INVENTORY_ITEM_GROUP</code>.<br><br><i>Required if </i> if you supply an <b>inventoryReferenceId</b>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum'>eBay API documentation</a>
    */
    private ?string $inventoryReferenceType = null;
    
    /**
     * Instantiates a new InventoryReference and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InventoryReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InventoryReference {
        return new InventoryReference();
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
            'inventoryReferenceId' => fn(ParseNode $n) => $o->setInventoryReferenceId($n->getStringValue()),
            'inventoryReferenceType' => fn(ParseNode $n) => $o->setInventoryReferenceType($n->getStringValue()),
        ];
    }

    /**
     * Gets the inventoryReferenceId property value. The unique identifier of a single-item listing or a multi-variation listing.<br><br>To create an ad for a single-item listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM</code> and specify an item ID or a SKU (if the SKU is defined in the listing).<br><br>To create an ad for a multi-variation listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM_GROUP</code> and specify the item ID for the multi-variation listing or the <b>inventoryitemGroupKey</b> value as defined in the Inventory API.<br><br><i>Required if </i> if you supply an <b>inventoryReferenceType</b>.
     * @return string|null
    */
    public function getInventoryReferenceId(): ?string {
        return $this->inventoryReferenceId;
    }

    /**
     * Gets the inventoryReferenceType property value. Indicates the type of item indicated by the <b>inventoryReferenceId</b>.<br><br>This value can be set to either <code>INVENTORY_ITEM</code> or <code>INVENTORY_ITEM_GROUP</code>.<br><br><i>Required if </i> if you supply an <b>inventoryReferenceId</b>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getInventoryReferenceType(): ?string {
        return $this->inventoryReferenceType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('inventoryReferenceId', $this->getInventoryReferenceId());
        $writer->writeStringValue('inventoryReferenceType', $this->getInventoryReferenceType());
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
     * Sets the inventoryReferenceId property value. The unique identifier of a single-item listing or a multi-variation listing.<br><br>To create an ad for a single-item listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM</code> and specify an item ID or a SKU (if the SKU is defined in the listing).<br><br>To create an ad for a multi-variation listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM_GROUP</code> and specify the item ID for the multi-variation listing or the <b>inventoryitemGroupKey</b> value as defined in the Inventory API.<br><br><i>Required if </i> if you supply an <b>inventoryReferenceType</b>.
     * @param string|null $value Value to set for the inventoryReferenceId property.
    */
    public function setInventoryReferenceId(?string $value): void {
        $this->inventoryReferenceId = $value;
    }

    /**
     * Sets the inventoryReferenceType property value. Indicates the type of item indicated by the <b>inventoryReferenceId</b>.<br><br>This value can be set to either <code>INVENTORY_ITEM</code> or <code>INVENTORY_ITEM_GROUP</code>.<br><br><i>Required if </i> if you supply an <b>inventoryReferenceId</b>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the inventoryReferenceType property.
    */
    public function setInventoryReferenceType(?string $value): void {
        $this->inventoryReferenceType = $value;
    }

}
