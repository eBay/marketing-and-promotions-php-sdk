<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the fields that describe the discounts applied to a set of inventory items and the order in which the selection rules are applied.
*/
class SelectedInventoryDiscount implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DiscountBenefit|null $discountBenefit This container defines the discount as either a monetary amount or a percentage of the sales price.  <p class="tablenote"><b>Important!:</b> You must populate one and only one of the fields in this container: <ul><li><b>amountOffItem</b></li> <li><b>amountOffOrder</b></li> <li><b>percentageOffItem</b></li> <li><b>percentageOffOrder</b></li></ul></p>  <p class="tablenote"><b>Tip:</b> Refer to <a href="/api-docs/sell/static/marketing/pm-specifying-discounts.html">Configuring discounts for threshold discounts</a> for information and examples on how to combine <b>discountBenefit</b> and <b>discountSpecification</b> values to create different types of discounts.</p>
    */
    private ?DiscountBenefit $discountBenefit = null;
    
    /**
     * @var string|null $discountId A unique, eBay-generated ID that you can use to identify the discount. This field is ignored in POST and PUT operations.
    */
    private ?string $discountId = null;
    
    /**
     * @var InventoryCriterion|null $inventoryCriterion This type defines either the selections rules or the list of listing IDs for the discount. The "listing IDs" are are either the seller's item IDs or the eBay listing IDs.
    */
    private ?InventoryCriterion $inventoryCriterion = null;
    
    /**
     * @var int|null $ruleOrder For markdown discounts, this field is reserved for future use. <!--This field specifies the precedence of this set of inventory criteria, which is taken into account if an item is selected for multiple discounts by different sets of criteria. The criteria with the highest priority (lowest ruleOrder value) takes precedence over criteria with a lower precedence.-->
    */
    private ?int $ruleOrder = null;
    
    /**
     * Instantiates a new SelectedInventoryDiscount and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SelectedInventoryDiscount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SelectedInventoryDiscount {
        return new SelectedInventoryDiscount();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the discountBenefit property value. This container defines the discount as either a monetary amount or a percentage of the sales price.  <p class="tablenote"><b>Important!:</b> You must populate one and only one of the fields in this container: <ul><li><b>amountOffItem</b></li> <li><b>amountOffOrder</b></li> <li><b>percentageOffItem</b></li> <li><b>percentageOffOrder</b></li></ul></p>  <p class="tablenote"><b>Tip:</b> Refer to <a href="/api-docs/sell/static/marketing/pm-specifying-discounts.html">Configuring discounts for threshold discounts</a> for information and examples on how to combine <b>discountBenefit</b> and <b>discountSpecification</b> values to create different types of discounts.</p>
     * @return DiscountBenefit|null
    */
    public function getDiscountBenefit(): ?DiscountBenefit {
        return $this->discountBenefit;
    }

    /**
     * Gets the discountId property value. A unique, eBay-generated ID that you can use to identify the discount. This field is ignored in POST and PUT operations.
     * @return string|null
    */
    public function getDiscountId(): ?string {
        return $this->discountId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'discountBenefit' => fn(ParseNode $n) => $o->setDiscountBenefit($n->getObjectValue([DiscountBenefit::class, 'createFromDiscriminatorValue'])),
            'discountId' => fn(ParseNode $n) => $o->setDiscountId($n->getStringValue()),
            'inventoryCriterion' => fn(ParseNode $n) => $o->setInventoryCriterion($n->getObjectValue([InventoryCriterion::class, 'createFromDiscriminatorValue'])),
            'ruleOrder' => fn(ParseNode $n) => $o->setRuleOrder($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the inventoryCriterion property value. This type defines either the selections rules or the list of listing IDs for the discount. The "listing IDs" are are either the seller's item IDs or the eBay listing IDs.
     * @return InventoryCriterion|null
    */
    public function getInventoryCriterion(): ?InventoryCriterion {
        return $this->inventoryCriterion;
    }

    /**
     * Gets the ruleOrder property value. For markdown discounts, this field is reserved for future use. <!--This field specifies the precedence of this set of inventory criteria, which is taken into account if an item is selected for multiple discounts by different sets of criteria. The criteria with the highest priority (lowest ruleOrder value) takes precedence over criteria with a lower precedence.-->
     * @return int|null
    */
    public function getRuleOrder(): ?int {
        return $this->ruleOrder;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('discountBenefit', $this->getDiscountBenefit());
        $writer->writeStringValue('discountId', $this->getDiscountId());
        $writer->writeObjectValue('inventoryCriterion', $this->getInventoryCriterion());
        $writer->writeIntegerValue('ruleOrder', $this->getRuleOrder());
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
     * Sets the discountBenefit property value. This container defines the discount as either a monetary amount or a percentage of the sales price.  <p class="tablenote"><b>Important!:</b> You must populate one and only one of the fields in this container: <ul><li><b>amountOffItem</b></li> <li><b>amountOffOrder</b></li> <li><b>percentageOffItem</b></li> <li><b>percentageOffOrder</b></li></ul></p>  <p class="tablenote"><b>Tip:</b> Refer to <a href="/api-docs/sell/static/marketing/pm-specifying-discounts.html">Configuring discounts for threshold discounts</a> for information and examples on how to combine <b>discountBenefit</b> and <b>discountSpecification</b> values to create different types of discounts.</p>
     * @param DiscountBenefit|null $value Value to set for the discountBenefit property.
    */
    public function setDiscountBenefit(?DiscountBenefit $value): void {
        $this->discountBenefit = $value;
    }

    /**
     * Sets the discountId property value. A unique, eBay-generated ID that you can use to identify the discount. This field is ignored in POST and PUT operations.
     * @param string|null $value Value to set for the discountId property.
    */
    public function setDiscountId(?string $value): void {
        $this->discountId = $value;
    }

    /**
     * Sets the inventoryCriterion property value. This type defines either the selections rules or the list of listing IDs for the discount. The "listing IDs" are are either the seller's item IDs or the eBay listing IDs.
     * @param InventoryCriterion|null $value Value to set for the inventoryCriterion property.
    */
    public function setInventoryCriterion(?InventoryCriterion $value): void {
        $this->inventoryCriterion = $value;
    }

    /**
     * Sets the ruleOrder property value. For markdown discounts, this field is reserved for future use. <!--This field specifies the precedence of this set of inventory criteria, which is taken into account if an item is selected for multiple discounts by different sets of criteria. The criteria with the highest priority (lowest ruleOrder value) takes precedence over criteria with a lower precedence.-->
     * @param int|null $value Value to set for the ruleOrder property.
    */
    public function setRuleOrder(?int $value): void {
        $this->ruleOrder = $value;
    }

}
