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
 * <span class="tablenote"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This type defines the fields in a discount-level report.
*/
class PromotionReportDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $averageItemDiscount A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $averageItemDiscount = null;
    
    /**
     * @var Amount|null $averageItemRevenue A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $averageItemRevenue = null;
    
    /**
     * @var Amount|null $averageOrderDiscount A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $averageOrderDiscount = null;
    
    /**
     * @var Amount|null $averageOrderRevenue A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $averageOrderRevenue = null;
    
    /**
     * @var string|null $averageOrderSize The <i>average order size</i> is the average number of items that each order contained that have an active discount. This value is calculated as follows:  <br><br><b>itemsSoldQuantity</b> / <b>numberOfOrdersSold</b> = <b>averageOrderSize</b> 
    */
    private ?string $averageOrderSize = null;
    
    /**
     * @var Amount|null $baseSale A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $baseSale = null;
    
    /**
     * @var int|null $itemsSoldQuantity This is the quantity of items purchased in a threshold discount where the threshold <i>has been met</i> and the discount was applied. <br><br>For example, suppose you're running a "Buy 1, get 1 at 50%" discount on $5 socks. One buyer purchases two pairs of socks, so they pay $7.50 for both pairs (rather than the full price of $10). Your number of items sold (<b>itemsSoldQuantity</b>) would be 2 and you number of orders sold (<b>numberOfOrdersSold</b>) would be 1.
    */
    private ?int $itemsSoldQuantity = null;
    
    /**
     * @var int|null $numberOfOrdersSold This is the number of orders sold in a threshold discount where the threshold <i>has been met</i> and the discount was applied. <br><br>For example, suppose you're running a "Buy 1, get 1 at 50%" discount on $5 socks. One buyer purchases two pairs of socks, so they pay $7.50 for both pairs (rather than the full price of $10). Your <b>numberOfOrdersSold</b> would be 1 and your <b>itemsSoldQuantity</b> would be 2.
    */
    private ?int $numberOfOrdersSold = null;
    
    /**
     * @var string|null $percentageSalesLift The <i>percentage sales lift</i> is the total dollar amount gained due to discounts. This value is calculated as follows:  <br><br> <b>promotionSale</b> / <b>totalSale</b> =  <b>percentageSalesLift</b> 
    */
    private ?string $percentageSalesLift = null;
    
    /**
     * @var string|null $promotionHref The URI of the discount report.
    */
    private ?string $promotionHref = null;
    
    /**
     * @var string|null $promotionId A unique eBay-assigned ID for the discount that's generated when the discount is created.
    */
    private ?string $promotionId = null;
    
    /**
     * @var string|null $promotionReportId The unique eBay-assigned ID of the discount report that is generated when the report is created.
    */
    private ?string $promotionReportId = null;
    
    /**
     * @var Amount|null $promotionSale A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $promotionSale = null;
    
    /**
     * @var string|null $promotionType Indicates the type of the discount, either <code>CODED_COUPON</code>, <code>MARKDOWN_SALE</code>, <code>ORDER_DISCOUNT</code>, or <code>VOLUME_DISCOUNT</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionTypeEnum'>eBay API documentation</a>
    */
    private ?string $promotionType = null;
    
    /**
     * @var Amount|null $totalDiscount A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $totalDiscount = null;
    
    /**
     * @var Amount|null $totalSale A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $totalSale = null;
    
    /**
     * Instantiates a new PromotionReportDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PromotionReportDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PromotionReportDetail {
        return new PromotionReportDetail();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the averageItemDiscount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getAverageItemDiscount(): ?Amount {
        return $this->averageItemDiscount;
    }

    /**
     * Gets the averageItemRevenue property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getAverageItemRevenue(): ?Amount {
        return $this->averageItemRevenue;
    }

    /**
     * Gets the averageOrderDiscount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getAverageOrderDiscount(): ?Amount {
        return $this->averageOrderDiscount;
    }

    /**
     * Gets the averageOrderRevenue property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getAverageOrderRevenue(): ?Amount {
        return $this->averageOrderRevenue;
    }

    /**
     * Gets the averageOrderSize property value. The <i>average order size</i> is the average number of items that each order contained that have an active discount. This value is calculated as follows:  <br><br><b>itemsSoldQuantity</b> / <b>numberOfOrdersSold</b> = <b>averageOrderSize</b> 
     * @return string|null
    */
    public function getAverageOrderSize(): ?string {
        return $this->averageOrderSize;
    }

    /**
     * Gets the baseSale property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getBaseSale(): ?Amount {
        return $this->baseSale;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'averageItemDiscount' => fn(ParseNode $n) => $o->setAverageItemDiscount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'averageItemRevenue' => fn(ParseNode $n) => $o->setAverageItemRevenue($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'averageOrderDiscount' => fn(ParseNode $n) => $o->setAverageOrderDiscount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'averageOrderRevenue' => fn(ParseNode $n) => $o->setAverageOrderRevenue($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'averageOrderSize' => fn(ParseNode $n) => $o->setAverageOrderSize($n->getStringValue()),
            'baseSale' => fn(ParseNode $n) => $o->setBaseSale($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'itemsSoldQuantity' => fn(ParseNode $n) => $o->setItemsSoldQuantity($n->getIntegerValue()),
            'numberOfOrdersSold' => fn(ParseNode $n) => $o->setNumberOfOrdersSold($n->getIntegerValue()),
            'percentageSalesLift' => fn(ParseNode $n) => $o->setPercentageSalesLift($n->getStringValue()),
            'promotionHref' => fn(ParseNode $n) => $o->setPromotionHref($n->getStringValue()),
            'promotionId' => fn(ParseNode $n) => $o->setPromotionId($n->getStringValue()),
            'promotionReportId' => fn(ParseNode $n) => $o->setPromotionReportId($n->getStringValue()),
            'promotionSale' => fn(ParseNode $n) => $o->setPromotionSale($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'promotionType' => fn(ParseNode $n) => $o->setPromotionType($n->getStringValue()),
            'totalDiscount' => fn(ParseNode $n) => $o->setTotalDiscount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'totalSale' => fn(ParseNode $n) => $o->setTotalSale($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the itemsSoldQuantity property value. This is the quantity of items purchased in a threshold discount where the threshold <i>has been met</i> and the discount was applied. <br><br>For example, suppose you're running a "Buy 1, get 1 at 50%" discount on $5 socks. One buyer purchases two pairs of socks, so they pay $7.50 for both pairs (rather than the full price of $10). Your number of items sold (<b>itemsSoldQuantity</b>) would be 2 and you number of orders sold (<b>numberOfOrdersSold</b>) would be 1.
     * @return int|null
    */
    public function getItemsSoldQuantity(): ?int {
        return $this->itemsSoldQuantity;
    }

    /**
     * Gets the numberOfOrdersSold property value. This is the number of orders sold in a threshold discount where the threshold <i>has been met</i> and the discount was applied. <br><br>For example, suppose you're running a "Buy 1, get 1 at 50%" discount on $5 socks. One buyer purchases two pairs of socks, so they pay $7.50 for both pairs (rather than the full price of $10). Your <b>numberOfOrdersSold</b> would be 1 and your <b>itemsSoldQuantity</b> would be 2.
     * @return int|null
    */
    public function getNumberOfOrdersSold(): ?int {
        return $this->numberOfOrdersSold;
    }

    /**
     * Gets the percentageSalesLift property value. The <i>percentage sales lift</i> is the total dollar amount gained due to discounts. This value is calculated as follows:  <br><br> <b>promotionSale</b> / <b>totalSale</b> =  <b>percentageSalesLift</b> 
     * @return string|null
    */
    public function getPercentageSalesLift(): ?string {
        return $this->percentageSalesLift;
    }

    /**
     * Gets the promotionHref property value. The URI of the discount report.
     * @return string|null
    */
    public function getPromotionHref(): ?string {
        return $this->promotionHref;
    }

    /**
     * Gets the promotionId property value. A unique eBay-assigned ID for the discount that's generated when the discount is created.
     * @return string|null
    */
    public function getPromotionId(): ?string {
        return $this->promotionId;
    }

    /**
     * Gets the promotionReportId property value. The unique eBay-assigned ID of the discount report that is generated when the report is created.
     * @return string|null
    */
    public function getPromotionReportId(): ?string {
        return $this->promotionReportId;
    }

    /**
     * Gets the promotionSale property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getPromotionSale(): ?Amount {
        return $this->promotionSale;
    }

    /**
     * Gets the promotionType property value. Indicates the type of the discount, either <code>CODED_COUPON</code>, <code>MARKDOWN_SALE</code>, <code>ORDER_DISCOUNT</code>, or <code>VOLUME_DISCOUNT</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getPromotionType(): ?string {
        return $this->promotionType;
    }

    /**
     * Gets the totalDiscount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getTotalDiscount(): ?Amount {
        return $this->totalDiscount;
    }

    /**
     * Gets the totalSale property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getTotalSale(): ?Amount {
        return $this->totalSale;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('averageItemDiscount', $this->getAverageItemDiscount());
        $writer->writeObjectValue('averageItemRevenue', $this->getAverageItemRevenue());
        $writer->writeObjectValue('averageOrderDiscount', $this->getAverageOrderDiscount());
        $writer->writeObjectValue('averageOrderRevenue', $this->getAverageOrderRevenue());
        $writer->writeStringValue('averageOrderSize', $this->getAverageOrderSize());
        $writer->writeObjectValue('baseSale', $this->getBaseSale());
        $writer->writeIntegerValue('itemsSoldQuantity', $this->getItemsSoldQuantity());
        $writer->writeIntegerValue('numberOfOrdersSold', $this->getNumberOfOrdersSold());
        $writer->writeStringValue('percentageSalesLift', $this->getPercentageSalesLift());
        $writer->writeStringValue('promotionHref', $this->getPromotionHref());
        $writer->writeStringValue('promotionId', $this->getPromotionId());
        $writer->writeStringValue('promotionReportId', $this->getPromotionReportId());
        $writer->writeObjectValue('promotionSale', $this->getPromotionSale());
        $writer->writeStringValue('promotionType', $this->getPromotionType());
        $writer->writeObjectValue('totalDiscount', $this->getTotalDiscount());
        $writer->writeObjectValue('totalSale', $this->getTotalSale());
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
     * Sets the averageItemDiscount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the averageItemDiscount property.
    */
    public function setAverageItemDiscount(?Amount $value): void {
        $this->averageItemDiscount = $value;
    }

    /**
     * Sets the averageItemRevenue property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the averageItemRevenue property.
    */
    public function setAverageItemRevenue(?Amount $value): void {
        $this->averageItemRevenue = $value;
    }

    /**
     * Sets the averageOrderDiscount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the averageOrderDiscount property.
    */
    public function setAverageOrderDiscount(?Amount $value): void {
        $this->averageOrderDiscount = $value;
    }

    /**
     * Sets the averageOrderRevenue property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the averageOrderRevenue property.
    */
    public function setAverageOrderRevenue(?Amount $value): void {
        $this->averageOrderRevenue = $value;
    }

    /**
     * Sets the averageOrderSize property value. The <i>average order size</i> is the average number of items that each order contained that have an active discount. This value is calculated as follows:  <br><br><b>itemsSoldQuantity</b> / <b>numberOfOrdersSold</b> = <b>averageOrderSize</b> 
     * @param string|null $value Value to set for the averageOrderSize property.
    */
    public function setAverageOrderSize(?string $value): void {
        $this->averageOrderSize = $value;
    }

    /**
     * Sets the baseSale property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the baseSale property.
    */
    public function setBaseSale(?Amount $value): void {
        $this->baseSale = $value;
    }

    /**
     * Sets the itemsSoldQuantity property value. This is the quantity of items purchased in a threshold discount where the threshold <i>has been met</i> and the discount was applied. <br><br>For example, suppose you're running a "Buy 1, get 1 at 50%" discount on $5 socks. One buyer purchases two pairs of socks, so they pay $7.50 for both pairs (rather than the full price of $10). Your number of items sold (<b>itemsSoldQuantity</b>) would be 2 and you number of orders sold (<b>numberOfOrdersSold</b>) would be 1.
     * @param int|null $value Value to set for the itemsSoldQuantity property.
    */
    public function setItemsSoldQuantity(?int $value): void {
        $this->itemsSoldQuantity = $value;
    }

    /**
     * Sets the numberOfOrdersSold property value. This is the number of orders sold in a threshold discount where the threshold <i>has been met</i> and the discount was applied. <br><br>For example, suppose you're running a "Buy 1, get 1 at 50%" discount on $5 socks. One buyer purchases two pairs of socks, so they pay $7.50 for both pairs (rather than the full price of $10). Your <b>numberOfOrdersSold</b> would be 1 and your <b>itemsSoldQuantity</b> would be 2.
     * @param int|null $value Value to set for the numberOfOrdersSold property.
    */
    public function setNumberOfOrdersSold(?int $value): void {
        $this->numberOfOrdersSold = $value;
    }

    /**
     * Sets the percentageSalesLift property value. The <i>percentage sales lift</i> is the total dollar amount gained due to discounts. This value is calculated as follows:  <br><br> <b>promotionSale</b> / <b>totalSale</b> =  <b>percentageSalesLift</b> 
     * @param string|null $value Value to set for the percentageSalesLift property.
    */
    public function setPercentageSalesLift(?string $value): void {
        $this->percentageSalesLift = $value;
    }

    /**
     * Sets the promotionHref property value. The URI of the discount report.
     * @param string|null $value Value to set for the promotionHref property.
    */
    public function setPromotionHref(?string $value): void {
        $this->promotionHref = $value;
    }

    /**
     * Sets the promotionId property value. A unique eBay-assigned ID for the discount that's generated when the discount is created.
     * @param string|null $value Value to set for the promotionId property.
    */
    public function setPromotionId(?string $value): void {
        $this->promotionId = $value;
    }

    /**
     * Sets the promotionReportId property value. The unique eBay-assigned ID of the discount report that is generated when the report is created.
     * @param string|null $value Value to set for the promotionReportId property.
    */
    public function setPromotionReportId(?string $value): void {
        $this->promotionReportId = $value;
    }

    /**
     * Sets the promotionSale property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the promotionSale property.
    */
    public function setPromotionSale(?Amount $value): void {
        $this->promotionSale = $value;
    }

    /**
     * Sets the promotionType property value. Indicates the type of the discount, either <code>CODED_COUPON</code>, <code>MARKDOWN_SALE</code>, <code>ORDER_DISCOUNT</code>, or <code>VOLUME_DISCOUNT</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:PromotionTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the promotionType property.
    */
    public function setPromotionType(?string $value): void {
        $this->promotionType = $value;
    }

    /**
     * Sets the totalDiscount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the totalDiscount property.
    */
    public function setTotalDiscount(?Amount $value): void {
        $this->totalDiscount = $value;
    }

    /**
     * Sets the totalSale property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the totalSale property.
    */
    public function setTotalSale(?Amount $value): void {
        $this->totalSale = $value;
    }

}
