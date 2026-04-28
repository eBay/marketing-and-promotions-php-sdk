<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This container defines the discount as either a monetary amount or a percentage of the sales price.  <p class="tablenote"><b>Important!:</b> You must populate one and only one of the fields in this container: <ul><li><b>amountOffItem</b></li> <li><b>amountOffOrder</b></li> <li><b>percentageOffItem</b></li> <li><b>percentageOffOrder</b></li></ul></p>  <p class="tablenote"><b>Tip:</b> Refer to <a href="/api-docs/sell/static/marketing/pm-specifying-discounts.html">Configuring discounts for threshold discounts</a> for information and examples on how to combine <b>discountBenefit</b> and <b>discountSpecification</b> values to create different types of discounts.</p>
*/
class DiscountBenefit implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $amountOffItem A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $amountOffItem = null;
    
    /**
     * @var Amount|null $amountOffOrder A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $amountOffOrder = null;
    
    /**
     * @var string|null $percentageOffItem The percentage applied to the sales price that is discounted off the discounted item (or items) when the discount criteria is met.  <br><br>Valid integer values for percentage off: &nbsp;&nbsp;<b>Min:</b> <code>5</code> &nbsp;&nbsp;<b>Max:</b> <code>80</code>
    */
    private ?string $percentageOffItem = null;
    
    /**
     * @var string|null $percentageOffOrder Used for threshold discounts, this is the percentage of the order price that is discounted off the order when the discount criteria is met. This field is not value for markdown discounts.  <br><br>Valid integer values for ORDER_DISCOUNT discounts: &nbsp;&nbsp;<b>Min:</b> <code>5</code> &nbsp;&nbsp;<b>Max:</b> <code>80</code>  <br><br>For VOLUME_DISCOUNT discounts: Must be set to <code>0</code> for the first discount rule.
    */
    private ?string $percentageOffOrder = null;
    
    /**
     * Instantiates a new DiscountBenefit and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DiscountBenefit
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DiscountBenefit {
        return new DiscountBenefit();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amountOffItem property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getAmountOffItem(): ?Amount {
        return $this->amountOffItem;
    }

    /**
     * Gets the amountOffOrder property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getAmountOffOrder(): ?Amount {
        return $this->amountOffOrder;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amountOffItem' => fn(ParseNode $n) => $o->setAmountOffItem($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'amountOffOrder' => fn(ParseNode $n) => $o->setAmountOffOrder($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'percentageOffItem' => fn(ParseNode $n) => $o->setPercentageOffItem($n->getStringValue()),
            'percentageOffOrder' => fn(ParseNode $n) => $o->setPercentageOffOrder($n->getStringValue()),
        ];
    }

    /**
     * Gets the percentageOffItem property value. The percentage applied to the sales price that is discounted off the discounted item (or items) when the discount criteria is met.  <br><br>Valid integer values for percentage off: &nbsp;&nbsp;<b>Min:</b> <code>5</code> &nbsp;&nbsp;<b>Max:</b> <code>80</code>
     * @return string|null
    */
    public function getPercentageOffItem(): ?string {
        return $this->percentageOffItem;
    }

    /**
     * Gets the percentageOffOrder property value. Used for threshold discounts, this is the percentage of the order price that is discounted off the order when the discount criteria is met. This field is not value for markdown discounts.  <br><br>Valid integer values for ORDER_DISCOUNT discounts: &nbsp;&nbsp;<b>Min:</b> <code>5</code> &nbsp;&nbsp;<b>Max:</b> <code>80</code>  <br><br>For VOLUME_DISCOUNT discounts: Must be set to <code>0</code> for the first discount rule.
     * @return string|null
    */
    public function getPercentageOffOrder(): ?string {
        return $this->percentageOffOrder;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('amountOffItem', $this->getAmountOffItem());
        $writer->writeObjectValue('amountOffOrder', $this->getAmountOffOrder());
        $writer->writeStringValue('percentageOffItem', $this->getPercentageOffItem());
        $writer->writeStringValue('percentageOffOrder', $this->getPercentageOffOrder());
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
     * Sets the amountOffItem property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the amountOffItem property.
    */
    public function setAmountOffItem(?Amount $value): void {
        $this->amountOffItem = $value;
    }

    /**
     * Sets the amountOffOrder property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the amountOffOrder property.
    */
    public function setAmountOffOrder(?Amount $value): void {
        $this->amountOffOrder = $value;
    }

    /**
     * Sets the percentageOffItem property value. The percentage applied to the sales price that is discounted off the discounted item (or items) when the discount criteria is met.  <br><br>Valid integer values for percentage off: &nbsp;&nbsp;<b>Min:</b> <code>5</code> &nbsp;&nbsp;<b>Max:</b> <code>80</code>
     * @param string|null $value Value to set for the percentageOffItem property.
    */
    public function setPercentageOffItem(?string $value): void {
        $this->percentageOffItem = $value;
    }

    /**
     * Sets the percentageOffOrder property value. Used for threshold discounts, this is the percentage of the order price that is discounted off the order when the discount criteria is met. This field is not value for markdown discounts.  <br><br>Valid integer values for ORDER_DISCOUNT discounts: &nbsp;&nbsp;<b>Min:</b> <code>5</code> &nbsp;&nbsp;<b>Max:</b> <code>80</code>  <br><br>For VOLUME_DISCOUNT discounts: Must be set to <code>0</code> for the first discount rule.
     * @param string|null $value Value to set for the percentageOffOrder property.
    */
    public function setPercentageOffOrder(?string $value): void {
        $this->percentageOffOrder = $value;
    }

}
