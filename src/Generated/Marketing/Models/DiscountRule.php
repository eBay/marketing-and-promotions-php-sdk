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
 * This complex type defines a discount as being either a monetary amount or a percentage of a sales price that's subtracted from the price of an item or order. <p>Set the amount of the discount and the rules that govern when the discount triggers using the <b>discountBenefit</b> and <b>discountSpecification</b> fields.</p>  <p class="tablenote"><b>Note:</b> In <b>volume pricing discounts</b>, you must configure at least two <b>discountRule</b> containers and at most four.</p>
*/
class DiscountRule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DiscountBenefit|null $discountBenefit This container defines the discount as either a monetary amount or a percentage of the sales price.  <p><b>Note:</b> When configuring discount benefits, populate just one of the following fields in the <b>discountBenefit</b> container:</p> <ul><li><b>amountOffItem</b></li> <li><b>amountOffOrder</b></li> <li><b>percentageOffItem</b></li> <li><b>percentageOffOrder</b></li></ul>  <p>For volume pricing, only <b>percentageOffOrder</b> is applicable as a <b>discountBenefit</b>. Also, the first <b>discountBenefit</b> container in a volume pricing configuration must set <b>percentageOffOrder</b> to <code>0</code>.</p>  <p class="tablenote"><b>Tip:</b> Refer to <a href="/api-docs/sell/static/marketing/pm-specifying-discounts.html" target="_blank">Configuring threshold discounts</a> for information and examples on how to combine <b>discountBenefit</b> and <b>discountSpecification</b> to create different types of discounts.</p>
    */
    private ?DiscountBenefit $discountBenefit = null;
    
    /**
     * @var DiscountSpecification|null $discountSpecification This container defines the criteria for when the discounts trigger, such as the minimum quantity that the buyer must purchase before the discount kicks in. The discount is applied each time the criteria defined by this container is met.  <p>When configuring the rules that govern when the discounts are applied, populate just one of the following fields in the <b>discountSpecification</b> container:</p>  <ul><li><b>minAmount</b></li> <li><b>minQuantity</b></li> <li><b>forEachQuantity</b></li> <li><b>forEachAmount</b></li></ul>  <p class="tablenote"><b>Important:</b> When configuring <i>volume pricing discounts</i>, only <b>minQuantity</b> is applicable as a <b>discountSpecification</b>. Also, the configuration for <b>minQuantity</b> in a volume pricing configuration is specific. In the first <b>discountSpecification</b> container, set <b>minQuantity</b> to <code>1</code>, and in the second, set <b>minQuantity</b> to <code>2</code>. If you include a third <b>discountRules</b> pair, <b>minQuantity</b> must be set to <code>3</code>, and in a fourth, it must be set to <code>4</code>. Also, you must set a <b>ruleOrder</b> value in each <b>discountRules</b> container. In the first container, <b>discountRules</b> must be set to <code>1</code>, and in each subsequent container, the value be be incremented by 1. For more, see <a href="/api-docs/sell/static/marketing/pm-volume-discounts.html" target="_blank">Configuring volume pricing discounts</a>.</p> <p class="tablenote"><b>Tip:</b> see <a href="/api-docs/sell/static/marketing/pm-specifying-discounts.html" target="_blank">Configuring threshold discounts</a> for information and examples on how to combine <b>discountBenefit</b> and <b>discountSpecification</b> to create different types of discounts.</p>
    */
    private ?DiscountSpecification $discountSpecification = null;
    
    /**
     * @var Amount|null $maxDiscountAmount The limit on how much a buyer can save using a <code>CODED_COUPON</code> discount type. Permitted values are 1-1000. Supported currency codes include USD, GBP, EUR, and AUD. <p class="tablenote"><b>Note:</b> The Currency Code for 'maxDiscountAmount' must be the same as the Currency Code for 'budget'.</p>
    */
    private ?Amount $maxDiscountAmount = null;
    
    /**
     * @var int|null $ruleOrder This field indicates the order in which the <b>discountRules</b> are presented. The value specified for this field must equal the associated <b>minQuantity</b> value. <br><br><i>Required if </i> you are creating a volume pricing discount.
    */
    private ?int $ruleOrder = null;
    
    /**
     * Instantiates a new DiscountRule and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DiscountRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DiscountRule {
        return new DiscountRule();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the discountBenefit property value. This container defines the discount as either a monetary amount or a percentage of the sales price.  <p><b>Note:</b> When configuring discount benefits, populate just one of the following fields in the <b>discountBenefit</b> container:</p> <ul><li><b>amountOffItem</b></li> <li><b>amountOffOrder</b></li> <li><b>percentageOffItem</b></li> <li><b>percentageOffOrder</b></li></ul>  <p>For volume pricing, only <b>percentageOffOrder</b> is applicable as a <b>discountBenefit</b>. Also, the first <b>discountBenefit</b> container in a volume pricing configuration must set <b>percentageOffOrder</b> to <code>0</code>.</p>  <p class="tablenote"><b>Tip:</b> Refer to <a href="/api-docs/sell/static/marketing/pm-specifying-discounts.html" target="_blank">Configuring threshold discounts</a> for information and examples on how to combine <b>discountBenefit</b> and <b>discountSpecification</b> to create different types of discounts.</p>
     * @return DiscountBenefit|null
    */
    public function getDiscountBenefit(): ?DiscountBenefit {
        return $this->discountBenefit;
    }

    /**
     * Gets the discountSpecification property value. This container defines the criteria for when the discounts trigger, such as the minimum quantity that the buyer must purchase before the discount kicks in. The discount is applied each time the criteria defined by this container is met.  <p>When configuring the rules that govern when the discounts are applied, populate just one of the following fields in the <b>discountSpecification</b> container:</p>  <ul><li><b>minAmount</b></li> <li><b>minQuantity</b></li> <li><b>forEachQuantity</b></li> <li><b>forEachAmount</b></li></ul>  <p class="tablenote"><b>Important:</b> When configuring <i>volume pricing discounts</i>, only <b>minQuantity</b> is applicable as a <b>discountSpecification</b>. Also, the configuration for <b>minQuantity</b> in a volume pricing configuration is specific. In the first <b>discountSpecification</b> container, set <b>minQuantity</b> to <code>1</code>, and in the second, set <b>minQuantity</b> to <code>2</code>. If you include a third <b>discountRules</b> pair, <b>minQuantity</b> must be set to <code>3</code>, and in a fourth, it must be set to <code>4</code>. Also, you must set a <b>ruleOrder</b> value in each <b>discountRules</b> container. In the first container, <b>discountRules</b> must be set to <code>1</code>, and in each subsequent container, the value be be incremented by 1. For more, see <a href="/api-docs/sell/static/marketing/pm-volume-discounts.html" target="_blank">Configuring volume pricing discounts</a>.</p> <p class="tablenote"><b>Tip:</b> see <a href="/api-docs/sell/static/marketing/pm-specifying-discounts.html" target="_blank">Configuring threshold discounts</a> for information and examples on how to combine <b>discountBenefit</b> and <b>discountSpecification</b> to create different types of discounts.</p>
     * @return DiscountSpecification|null
    */
    public function getDiscountSpecification(): ?DiscountSpecification {
        return $this->discountSpecification;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'discountBenefit' => fn(ParseNode $n) => $o->setDiscountBenefit($n->getObjectValue([DiscountBenefit::class, 'createFromDiscriminatorValue'])),
            'discountSpecification' => fn(ParseNode $n) => $o->setDiscountSpecification($n->getObjectValue([DiscountSpecification::class, 'createFromDiscriminatorValue'])),
            'maxDiscountAmount' => fn(ParseNode $n) => $o->setMaxDiscountAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'ruleOrder' => fn(ParseNode $n) => $o->setRuleOrder($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the maxDiscountAmount property value. The limit on how much a buyer can save using a <code>CODED_COUPON</code> discount type. Permitted values are 1-1000. Supported currency codes include USD, GBP, EUR, and AUD. <p class="tablenote"><b>Note:</b> The Currency Code for 'maxDiscountAmount' must be the same as the Currency Code for 'budget'.</p>
     * @return Amount|null
    */
    public function getMaxDiscountAmount(): ?Amount {
        return $this->maxDiscountAmount;
    }

    /**
     * Gets the ruleOrder property value. This field indicates the order in which the <b>discountRules</b> are presented. The value specified for this field must equal the associated <b>minQuantity</b> value. <br><br><i>Required if </i> you are creating a volume pricing discount.
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
        $writer->writeObjectValue('discountSpecification', $this->getDiscountSpecification());
        $writer->writeObjectValue('maxDiscountAmount', $this->getMaxDiscountAmount());
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
     * Sets the discountBenefit property value. This container defines the discount as either a monetary amount or a percentage of the sales price.  <p><b>Note:</b> When configuring discount benefits, populate just one of the following fields in the <b>discountBenefit</b> container:</p> <ul><li><b>amountOffItem</b></li> <li><b>amountOffOrder</b></li> <li><b>percentageOffItem</b></li> <li><b>percentageOffOrder</b></li></ul>  <p>For volume pricing, only <b>percentageOffOrder</b> is applicable as a <b>discountBenefit</b>. Also, the first <b>discountBenefit</b> container in a volume pricing configuration must set <b>percentageOffOrder</b> to <code>0</code>.</p>  <p class="tablenote"><b>Tip:</b> Refer to <a href="/api-docs/sell/static/marketing/pm-specifying-discounts.html" target="_blank">Configuring threshold discounts</a> for information and examples on how to combine <b>discountBenefit</b> and <b>discountSpecification</b> to create different types of discounts.</p>
     * @param DiscountBenefit|null $value Value to set for the discountBenefit property.
    */
    public function setDiscountBenefit(?DiscountBenefit $value): void {
        $this->discountBenefit = $value;
    }

    /**
     * Sets the discountSpecification property value. This container defines the criteria for when the discounts trigger, such as the minimum quantity that the buyer must purchase before the discount kicks in. The discount is applied each time the criteria defined by this container is met.  <p>When configuring the rules that govern when the discounts are applied, populate just one of the following fields in the <b>discountSpecification</b> container:</p>  <ul><li><b>minAmount</b></li> <li><b>minQuantity</b></li> <li><b>forEachQuantity</b></li> <li><b>forEachAmount</b></li></ul>  <p class="tablenote"><b>Important:</b> When configuring <i>volume pricing discounts</i>, only <b>minQuantity</b> is applicable as a <b>discountSpecification</b>. Also, the configuration for <b>minQuantity</b> in a volume pricing configuration is specific. In the first <b>discountSpecification</b> container, set <b>minQuantity</b> to <code>1</code>, and in the second, set <b>minQuantity</b> to <code>2</code>. If you include a third <b>discountRules</b> pair, <b>minQuantity</b> must be set to <code>3</code>, and in a fourth, it must be set to <code>4</code>. Also, you must set a <b>ruleOrder</b> value in each <b>discountRules</b> container. In the first container, <b>discountRules</b> must be set to <code>1</code>, and in each subsequent container, the value be be incremented by 1. For more, see <a href="/api-docs/sell/static/marketing/pm-volume-discounts.html" target="_blank">Configuring volume pricing discounts</a>.</p> <p class="tablenote"><b>Tip:</b> see <a href="/api-docs/sell/static/marketing/pm-specifying-discounts.html" target="_blank">Configuring threshold discounts</a> for information and examples on how to combine <b>discountBenefit</b> and <b>discountSpecification</b> to create different types of discounts.</p>
     * @param DiscountSpecification|null $value Value to set for the discountSpecification property.
    */
    public function setDiscountSpecification(?DiscountSpecification $value): void {
        $this->discountSpecification = $value;
    }

    /**
     * Sets the maxDiscountAmount property value. The limit on how much a buyer can save using a <code>CODED_COUPON</code> discount type. Permitted values are 1-1000. Supported currency codes include USD, GBP, EUR, and AUD. <p class="tablenote"><b>Note:</b> The Currency Code for 'maxDiscountAmount' must be the same as the Currency Code for 'budget'.</p>
     * @param Amount|null $value Value to set for the maxDiscountAmount property.
    */
    public function setMaxDiscountAmount(?Amount $value): void {
        $this->maxDiscountAmount = $value;
    }

    /**
     * Sets the ruleOrder property value. This field indicates the order in which the <b>discountRules</b> are presented. The value specified for this field must equal the associated <b>minQuantity</b> value. <br><br><i>Required if </i> you are creating a volume pricing discount.
     * @param int|null $value Value to set for the ruleOrder property.
    */
    public function setRuleOrder(?int $value): void {
        $this->ruleOrder = $value;
    }

}
