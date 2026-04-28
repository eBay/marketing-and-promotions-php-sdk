<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the fields for the seller inventory reference IDs (also known as an "SKU" or "custom label").
*/
class InventoryItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $inventoryReferenceId The unique identifier of a single-item listing or a multi-variation listing.<br><br>To create an ad for a single-item listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM</code> and specify and item ID or a SKU (if the SKU is defined in the listing)<br><br>To create an ad for a multi-variation listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM_GROUP</code> and specify the item ID for the multi-variation listing or the <b>inventoryitemGroupKey</b> value as defined in the Inventory API.
    */
    private ?string $inventoryReferenceId = null;
    
    /**
     * Instantiates a new InventoryItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InventoryItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InventoryItem {
        return new InventoryItem();
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
        ];
    }

    /**
     * Gets the inventoryReferenceId property value. The unique identifier of a single-item listing or a multi-variation listing.<br><br>To create an ad for a single-item listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM</code> and specify and item ID or a SKU (if the SKU is defined in the listing)<br><br>To create an ad for a multi-variation listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM_GROUP</code> and specify the item ID for the multi-variation listing or the <b>inventoryitemGroupKey</b> value as defined in the Inventory API.
     * @return string|null
    */
    public function getInventoryReferenceId(): ?string {
        return $this->inventoryReferenceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('inventoryReferenceId', $this->getInventoryReferenceId());
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
     * Sets the inventoryReferenceId property value. The unique identifier of a single-item listing or a multi-variation listing.<br><br>To create an ad for a single-item listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM</code> and specify and item ID or a SKU (if the SKU is defined in the listing)<br><br>To create an ad for a multi-variation listing, set the <b>inventoryReferenceType</b> value to <code>INVENTORY_ITEM_GROUP</code> and specify the item ID for the multi-variation listing or the <b>inventoryitemGroupKey</b> value as defined in the Inventory API.
     * @param string|null $value Value to set for the inventoryReferenceId property.
    */
    public function setInventoryReferenceId(?string $value): void {
        $this->inventoryReferenceId = $value;
    }

}
