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
 * This container defines the criteria for when the discounts trigger, such as the minimum quantity the buyer must purchase before the discount kicks in. The discount is applied each time the criteria defined by this container is met.  <p><b>Note:</b> When configuring the rules that govern when the discounts are applied, populate just one of the following fields in the <b>discountSpecification</b> container:</p>  <ul><li><b>minAmount</b></li> <li><b>minQuantity</b></li> <li><b>forEachQuantity</b></li> <li><b>forEachAmount</b></li></ul> <p class="tablenote"><b>Tip:</b> Refer to <a href="/api-docs/sell/static/marketing/pm-specifying-discounts.html">Configuring threshold discounts</a> for information and examples on how to combine <b>discountBenefit</b> and <b>discountSpecification</b> to create different types of discounts.</p>
*/
class DiscountSpecification implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $forEachAmount A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $forEachAmount = null;
    
    /**
     * @var int|null $forEachQuantity The number of items that must be purchased in order to qualify for the discount.  <br><br><b>Valid values:</b> <br><code> &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, <br> &nbsp; 12, 13, 14, 15, 16, 17, 18, 19 <br> &nbsp; 20, 25, 50, 75, 100</code>
    */
    private ?int $forEachQuantity = null;
    
    /**
     * @var Amount|null $minAmount A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $minAmount = null;
    
    /**
     * @var int|null $minQuantity The minimum quantity of discounted items that needs to be bought in order to qualify for the discount.  <br><br><b>Valid values:</b> <br><code> &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, <br> &nbsp; 12, 13, 14, 15, 16, 17, 18, 19 <br> &nbsp; 20, 25, 50, 75, 100</code>
    */
    private ?int $minQuantity = null;
    
    /**
     * @var int|null $numberOfDiscountedItems Use this field to configure "Buy One Get One" (or <b>BOGO</b>) discounts.  <br><br>You must couple this field with <b>forEachQuantity</b> and an <b>amountOffItem</b> or <b>percentOffItem</b> field to configure your BOGO discount. This field is not valid with order-based discounts. <br><br>The value of this field represents the number of items to be discounted when other discount criteria is met. For example, when the buyer adds the number of items identified by the <b>forEachQuantity</b> value to their cart, they are then eligible to receive the stated discount from an additional number of like items (the number of which is identified by this field) when they add those items to their cart. To receive the discount, the buyer must purchase the number of items indicated by  <b>forEachQuantity</b> <i>plus</i> the number indicated by this field.  <br><br><b>Valid values:</b> <br><code> &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10</code>
    */
    private ?int $numberOfDiscountedItems = null;
    
    /**
     * Instantiates a new DiscountSpecification and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DiscountSpecification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DiscountSpecification {
        return new DiscountSpecification();
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
            'forEachAmount' => fn(ParseNode $n) => $o->setForEachAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'forEachQuantity' => fn(ParseNode $n) => $o->setForEachQuantity($n->getIntegerValue()),
            'minAmount' => fn(ParseNode $n) => $o->setMinAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'minQuantity' => fn(ParseNode $n) => $o->setMinQuantity($n->getIntegerValue()),
            'numberOfDiscountedItems' => fn(ParseNode $n) => $o->setNumberOfDiscountedItems($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the forEachAmount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getForEachAmount(): ?Amount {
        return $this->forEachAmount;
    }

    /**
     * Gets the forEachQuantity property value. The number of items that must be purchased in order to qualify for the discount.  <br><br><b>Valid values:</b> <br><code> &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, <br> &nbsp; 12, 13, 14, 15, 16, 17, 18, 19 <br> &nbsp; 20, 25, 50, 75, 100</code>
     * @return int|null
    */
    public function getForEachQuantity(): ?int {
        return $this->forEachQuantity;
    }

    /**
     * Gets the minAmount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getMinAmount(): ?Amount {
        return $this->minAmount;
    }

    /**
     * Gets the minQuantity property value. The minimum quantity of discounted items that needs to be bought in order to qualify for the discount.  <br><br><b>Valid values:</b> <br><code> &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, <br> &nbsp; 12, 13, 14, 15, 16, 17, 18, 19 <br> &nbsp; 20, 25, 50, 75, 100</code>
     * @return int|null
    */
    public function getMinQuantity(): ?int {
        return $this->minQuantity;
    }

    /**
     * Gets the numberOfDiscountedItems property value. Use this field to configure "Buy One Get One" (or <b>BOGO</b>) discounts.  <br><br>You must couple this field with <b>forEachQuantity</b> and an <b>amountOffItem</b> or <b>percentOffItem</b> field to configure your BOGO discount. This field is not valid with order-based discounts. <br><br>The value of this field represents the number of items to be discounted when other discount criteria is met. For example, when the buyer adds the number of items identified by the <b>forEachQuantity</b> value to their cart, they are then eligible to receive the stated discount from an additional number of like items (the number of which is identified by this field) when they add those items to their cart. To receive the discount, the buyer must purchase the number of items indicated by  <b>forEachQuantity</b> <i>plus</i> the number indicated by this field.  <br><br><b>Valid values:</b> <br><code> &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10</code>
     * @return int|null
    */
    public function getNumberOfDiscountedItems(): ?int {
        return $this->numberOfDiscountedItems;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('forEachAmount', $this->getForEachAmount());
        $writer->writeIntegerValue('forEachQuantity', $this->getForEachQuantity());
        $writer->writeObjectValue('minAmount', $this->getMinAmount());
        $writer->writeIntegerValue('minQuantity', $this->getMinQuantity());
        $writer->writeIntegerValue('numberOfDiscountedItems', $this->getNumberOfDiscountedItems());
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
     * Sets the forEachAmount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the forEachAmount property.
    */
    public function setForEachAmount(?Amount $value): void {
        $this->forEachAmount = $value;
    }

    /**
     * Sets the forEachQuantity property value. The number of items that must be purchased in order to qualify for the discount.  <br><br><b>Valid values:</b> <br><code> &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, <br> &nbsp; 12, 13, 14, 15, 16, 17, 18, 19 <br> &nbsp; 20, 25, 50, 75, 100</code>
     * @param int|null $value Value to set for the forEachQuantity property.
    */
    public function setForEachQuantity(?int $value): void {
        $this->forEachQuantity = $value;
    }

    /**
     * Sets the minAmount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the minAmount property.
    */
    public function setMinAmount(?Amount $value): void {
        $this->minAmount = $value;
    }

    /**
     * Sets the minQuantity property value. The minimum quantity of discounted items that needs to be bought in order to qualify for the discount.  <br><br><b>Valid values:</b> <br><code> &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, <br> &nbsp; 12, 13, 14, 15, 16, 17, 18, 19 <br> &nbsp; 20, 25, 50, 75, 100</code>
     * @param int|null $value Value to set for the minQuantity property.
    */
    public function setMinQuantity(?int $value): void {
        $this->minQuantity = $value;
    }

    /**
     * Sets the numberOfDiscountedItems property value. Use this field to configure "Buy One Get One" (or <b>BOGO</b>) discounts.  <br><br>You must couple this field with <b>forEachQuantity</b> and an <b>amountOffItem</b> or <b>percentOffItem</b> field to configure your BOGO discount. This field is not valid with order-based discounts. <br><br>The value of this field represents the number of items to be discounted when other discount criteria is met. For example, when the buyer adds the number of items identified by the <b>forEachQuantity</b> value to their cart, they are then eligible to receive the stated discount from an additional number of like items (the number of which is identified by this field) when they add those items to their cart. To receive the discount, the buyer must purchase the number of items indicated by  <b>forEachQuantity</b> <i>plus</i> the number indicated by this field.  <br><br><b>Valid values:</b> <br><code> &nbsp; 1, 2, 3, 4, 5, 6, 7, 8, 9, 10</code>
     * @param int|null $value Value to set for the numberOfDiscountedItems property.
    */
    public function setNumberOfDiscountedItems(?int $value): void {
        $this->numberOfDiscountedItems = $value;
    }

}
