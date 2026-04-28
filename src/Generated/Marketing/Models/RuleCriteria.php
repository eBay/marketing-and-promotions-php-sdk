<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type defines the fields for a set of inventory selection rules.  <br><br><b>Required:</b> When <b>inventoryCriterionType</b> is set to <code>INVENTORY_BY_RULE</code> or <code>INVENTORY_ANY</code>.
*/
class RuleCriteria implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<InventoryItem>|null $excludeInventoryItems A list of seller inventory reference IDs to exclude from the discount.<br><p class="tablenote"><b>Note:</b> The request can have either <b>excludeInventoryItems</b> or <b>excludeListingIds</b> but not both.</p> <b>Maximum:</b> 100 parent items<br><br><b>Maximum SKU or custom label length:</b> 50 characters
    */
    private ?array $excludeInventoryItems = null;
    
    /**
     * @var array<string>|null $excludeListingIds A list of eBay listing IDs to exclude from the discount.  <br><br><p class="tablenote"><b>Note:</b> The request can have either <b>excludeInventoryItems</b> or <b>excludeListingIds</b> but not both.</p> <b>Maximum:</b> 100 parent items <br><b>Maximum SKU or custom label length:</b> 50 characters
    */
    private ?array $excludeListingIds = null;
    
    /**
     * @var array<InventoryItem>|null $markupInventoryItems A list of SKUs to remove from a markdown discount. The listed SKUs are 'marked up' to their standard price after being part of the markdown discount.
    */
    private ?array $markupInventoryItems = null;
    
    /**
     * @var array<string>|null $markupListingIds A list of listing IDs to remove from a markdown discount. The listed items are 'marked up' to their standard price after being part of the markdown discount.
    */
    private ?array $markupListingIds = null;
    
    /**
     * @var array<SelectionRule>|null $selectionRules The container for the rules that select the items to be discounted.  <br><br><i>Required if </i> <b>inventoryCriterionType</b> is set to <code>INVENTORY_BY_RULE</code>. <br><br>For information on using the contained fields, see <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Promotio ">Item discounts</a>.
    */
    private ?array $selectionRules = null;
    
    /**
     * Instantiates a new RuleCriteria and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RuleCriteria
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RuleCriteria {
        return new RuleCriteria();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the excludeInventoryItems property value. A list of seller inventory reference IDs to exclude from the discount.<br><p class="tablenote"><b>Note:</b> The request can have either <b>excludeInventoryItems</b> or <b>excludeListingIds</b> but not both.</p> <b>Maximum:</b> 100 parent items<br><br><b>Maximum SKU or custom label length:</b> 50 characters
     * @return array<InventoryItem>|null
    */
    public function getExcludeInventoryItems(): ?array {
        return $this->excludeInventoryItems;
    }

    /**
     * Gets the excludeListingIds property value. A list of eBay listing IDs to exclude from the discount.  <br><br><p class="tablenote"><b>Note:</b> The request can have either <b>excludeInventoryItems</b> or <b>excludeListingIds</b> but not both.</p> <b>Maximum:</b> 100 parent items <br><b>Maximum SKU or custom label length:</b> 50 characters
     * @return array<string>|null
    */
    public function getExcludeListingIds(): ?array {
        return $this->excludeListingIds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'excludeInventoryItems' => fn(ParseNode $n) => $o->setExcludeInventoryItems($n->getCollectionOfObjectValues([InventoryItem::class, 'createFromDiscriminatorValue'])),
            'excludeListingIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setExcludeListingIds($val);
            },
            'markupInventoryItems' => fn(ParseNode $n) => $o->setMarkupInventoryItems($n->getCollectionOfObjectValues([InventoryItem::class, 'createFromDiscriminatorValue'])),
            'markupListingIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMarkupListingIds($val);
            },
            'selectionRules' => fn(ParseNode $n) => $o->setSelectionRules($n->getCollectionOfObjectValues([SelectionRule::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the markupInventoryItems property value. A list of SKUs to remove from a markdown discount. The listed SKUs are 'marked up' to their standard price after being part of the markdown discount.
     * @return array<InventoryItem>|null
    */
    public function getMarkupInventoryItems(): ?array {
        return $this->markupInventoryItems;
    }

    /**
     * Gets the markupListingIds property value. A list of listing IDs to remove from a markdown discount. The listed items are 'marked up' to their standard price after being part of the markdown discount.
     * @return array<string>|null
    */
    public function getMarkupListingIds(): ?array {
        return $this->markupListingIds;
    }

    /**
     * Gets the selectionRules property value. The container for the rules that select the items to be discounted.  <br><br><i>Required if </i> <b>inventoryCriterionType</b> is set to <code>INVENTORY_BY_RULE</code>. <br><br>For information on using the contained fields, see <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Promotio ">Item discounts</a>.
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
        $writer->writeCollectionOfObjectValues('excludeInventoryItems', $this->getExcludeInventoryItems());
        $writer->writeCollectionOfPrimitiveValues('excludeListingIds', $this->getExcludeListingIds());
        $writer->writeCollectionOfObjectValues('markupInventoryItems', $this->getMarkupInventoryItems());
        $writer->writeCollectionOfPrimitiveValues('markupListingIds', $this->getMarkupListingIds());
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
     * Sets the excludeInventoryItems property value. A list of seller inventory reference IDs to exclude from the discount.<br><p class="tablenote"><b>Note:</b> The request can have either <b>excludeInventoryItems</b> or <b>excludeListingIds</b> but not both.</p> <b>Maximum:</b> 100 parent items<br><br><b>Maximum SKU or custom label length:</b> 50 characters
     * @param array<InventoryItem>|null $value Value to set for the excludeInventoryItems property.
    */
    public function setExcludeInventoryItems(?array $value): void {
        $this->excludeInventoryItems = $value;
    }

    /**
     * Sets the excludeListingIds property value. A list of eBay listing IDs to exclude from the discount.  <br><br><p class="tablenote"><b>Note:</b> The request can have either <b>excludeInventoryItems</b> or <b>excludeListingIds</b> but not both.</p> <b>Maximum:</b> 100 parent items <br><b>Maximum SKU or custom label length:</b> 50 characters
     * @param array<string>|null $value Value to set for the excludeListingIds property.
    */
    public function setExcludeListingIds(?array $value): void {
        $this->excludeListingIds = $value;
    }

    /**
     * Sets the markupInventoryItems property value. A list of SKUs to remove from a markdown discount. The listed SKUs are 'marked up' to their standard price after being part of the markdown discount.
     * @param array<InventoryItem>|null $value Value to set for the markupInventoryItems property.
    */
    public function setMarkupInventoryItems(?array $value): void {
        $this->markupInventoryItems = $value;
    }

    /**
     * Sets the markupListingIds property value. A list of listing IDs to remove from a markdown discount. The listed items are 'marked up' to their standard price after being part of the markdown discount.
     * @param array<string>|null $value Value to set for the markupListingIds property.
    */
    public function setMarkupListingIds(?array $value): void {
        $this->markupListingIds = $value;
    }

    /**
     * Sets the selectionRules property value. The container for the rules that select the items to be discounted.  <br><br><i>Required if </i> <b>inventoryCriterionType</b> is set to <code>INVENTORY_BY_RULE</code>. <br><br>For information on using the contained fields, see <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Promotio ">Item discounts</a>.
     * @param array<SelectionRule>|null $value Value to set for the selectionRules property.
    */
    public function setSelectionRules(?array $value): void {
        $this->selectionRules = $value;
    }

}
