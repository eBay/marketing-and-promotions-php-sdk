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
 * This type defines the fields that describe a listing that is in a discount.
*/
class ListingDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $currentPrice The container that returns the current price of the listing.
    */
    private ?Amount $currentPrice = null;
    
    /**
     * @var bool|null $freeShipping If set to <code>true</code>, the seller pays for the shipping (or that the item is marked for local pickup only) In this case, the listing does not have an associated shipping cost for the first listed domestic-shipping option (even if the first domestic-shipping option specifies a flat-rate or calculated shipping option). If <code>false</code>, the buyer is required to pay for a flat-rate or calculated cost shipping service.
    */
    private ?bool $freeShipping = null;
    
    /**
     * @var string|null $inventoryReferenceId The seller's inventory reference ID for a listing. Also known as the "SKU" or "custom label," an inventory reference ID is either the ID of the listing or, if the listing has variations (such as a shirt that's available in multiple sizes and colors), the ID of the parent listing.
    */
    private ?string $inventoryReferenceId = null;
    
    /**
     * @var string|null $inventoryReferenceType Indicates the type of the <b>inventoryReferenceId</b>, which can be either a single-SKU or a multi-SKU listing (<code>INVENTORY_ITEM</code> and <code>INVENTORY_ITEM_GROUP</code>, respectively).  <br><br><b>Note:</b> This value is not currently returned in the response.
    */
    private ?string $inventoryReferenceType = null;
    
    /**
     * @var string|null $listingCategoryId The ID of the category that listing belongs to. The ID is a numeric and unique identifier for the category that is assigned by eBay.
    */
    private ?string $listingCategoryId = null;
    
    /**
     * @var string|null $listingCondition An eBay-assigned value that indicates condition of the associated item. For more information, see <a href="/api-docs/sell/static/metadata/condition-id-values.html" target="_blank">Item condition ID and name values</a>.
    */
    private ?string $listingCondition = null;
    
    /**
     * @var string|null $listingConditionId The ID of the condition associated with the item. For more information, see <a href="/api-docs/sell/static/metadata/condition-id-values.html" target="_blank">Item condition ID and name values</a>.<br /><br /><span class="tablenote"><b>Note: </b> This value is not currently returned in the response.</span>
    */
    private ?string $listingConditionId = null;
    
    /**
     * @var string|null $listingId A unique eBay-assigned ID that is generated when the item is listed.
    */
    private ?string $listingId = null;
    
    /**
     * @var array<ItemMarkdownStatus>|null $listingPromotionStatuses A list of the status values assigned to the item and the date that each new status was assigned.
    */
    private ?array $listingPromotionStatuses = null;
    
    /**
     * @var int|null $quantity The number of items being sold in the listing.
    */
    private ?int $quantity = null;
    
    /**
     * @var string|null $storeCategoryId Store CategoryId (if any) that to which the listing belongs. This field is blank if there is no seller Store category ID.
    */
    private ?string $storeCategoryId = null;
    
    /**
     * @var string|null $title The seller-defined title of the listing that a seller can use to identify the item.  This label is not displayed in end-user flows.
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new ListingDetail and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListingDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListingDetail {
        return new ListingDetail();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the currentPrice property value. The container that returns the current price of the listing.
     * @return Amount|null
    */
    public function getCurrentPrice(): ?Amount {
        return $this->currentPrice;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currentPrice' => fn(ParseNode $n) => $o->setCurrentPrice($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'freeShipping' => fn(ParseNode $n) => $o->setFreeShipping($n->getBooleanValue()),
            'inventoryReferenceId' => fn(ParseNode $n) => $o->setInventoryReferenceId($n->getStringValue()),
            'inventoryReferenceType' => fn(ParseNode $n) => $o->setInventoryReferenceType($n->getStringValue()),
            'listingCategoryId' => fn(ParseNode $n) => $o->setListingCategoryId($n->getStringValue()),
            'listingCondition' => fn(ParseNode $n) => $o->setListingCondition($n->getStringValue()),
            'listingConditionId' => fn(ParseNode $n) => $o->setListingConditionId($n->getStringValue()),
            'listingId' => fn(ParseNode $n) => $o->setListingId($n->getStringValue()),
            'listingPromotionStatuses' => fn(ParseNode $n) => $o->setListingPromotionStatuses($n->getCollectionOfObjectValues([ItemMarkdownStatus::class, 'createFromDiscriminatorValue'])),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
            'storeCategoryId' => fn(ParseNode $n) => $o->setStoreCategoryId($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the freeShipping property value. If set to <code>true</code>, the seller pays for the shipping (or that the item is marked for local pickup only) In this case, the listing does not have an associated shipping cost for the first listed domestic-shipping option (even if the first domestic-shipping option specifies a flat-rate or calculated shipping option). If <code>false</code>, the buyer is required to pay for a flat-rate or calculated cost shipping service.
     * @return bool|null
    */
    public function getFreeShipping(): ?bool {
        return $this->freeShipping;
    }

    /**
     * Gets the inventoryReferenceId property value. The seller's inventory reference ID for a listing. Also known as the "SKU" or "custom label," an inventory reference ID is either the ID of the listing or, if the listing has variations (such as a shirt that's available in multiple sizes and colors), the ID of the parent listing.
     * @return string|null
    */
    public function getInventoryReferenceId(): ?string {
        return $this->inventoryReferenceId;
    }

    /**
     * Gets the inventoryReferenceType property value. Indicates the type of the <b>inventoryReferenceId</b>, which can be either a single-SKU or a multi-SKU listing (<code>INVENTORY_ITEM</code> and <code>INVENTORY_ITEM_GROUP</code>, respectively).  <br><br><b>Note:</b> This value is not currently returned in the response.
     * @return string|null
    */
    public function getInventoryReferenceType(): ?string {
        return $this->inventoryReferenceType;
    }

    /**
     * Gets the listingCategoryId property value. The ID of the category that listing belongs to. The ID is a numeric and unique identifier for the category that is assigned by eBay.
     * @return string|null
    */
    public function getListingCategoryId(): ?string {
        return $this->listingCategoryId;
    }

    /**
     * Gets the listingCondition property value. An eBay-assigned value that indicates condition of the associated item. For more information, see <a href="/api-docs/sell/static/metadata/condition-id-values.html" target="_blank">Item condition ID and name values</a>.
     * @return string|null
    */
    public function getListingCondition(): ?string {
        return $this->listingCondition;
    }

    /**
     * Gets the listingConditionId property value. The ID of the condition associated with the item. For more information, see <a href="/api-docs/sell/static/metadata/condition-id-values.html" target="_blank">Item condition ID and name values</a>.<br /><br /><span class="tablenote"><b>Note: </b> This value is not currently returned in the response.</span>
     * @return string|null
    */
    public function getListingConditionId(): ?string {
        return $this->listingConditionId;
    }

    /**
     * Gets the listingId property value. A unique eBay-assigned ID that is generated when the item is listed.
     * @return string|null
    */
    public function getListingId(): ?string {
        return $this->listingId;
    }

    /**
     * Gets the listingPromotionStatuses property value. A list of the status values assigned to the item and the date that each new status was assigned.
     * @return array<ItemMarkdownStatus>|null
    */
    public function getListingPromotionStatuses(): ?array {
        return $this->listingPromotionStatuses;
    }

    /**
     * Gets the quantity property value. The number of items being sold in the listing.
     * @return int|null
    */
    public function getQuantity(): ?int {
        return $this->quantity;
    }

    /**
     * Gets the storeCategoryId property value. Store CategoryId (if any) that to which the listing belongs. This field is blank if there is no seller Store category ID.
     * @return string|null
    */
    public function getStoreCategoryId(): ?string {
        return $this->storeCategoryId;
    }

    /**
     * Gets the title property value. The seller-defined title of the listing that a seller can use to identify the item.  This label is not displayed in end-user flows.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('currentPrice', $this->getCurrentPrice());
        $writer->writeBooleanValue('freeShipping', $this->getFreeShipping());
        $writer->writeStringValue('inventoryReferenceId', $this->getInventoryReferenceId());
        $writer->writeStringValue('inventoryReferenceType', $this->getInventoryReferenceType());
        $writer->writeStringValue('listingCategoryId', $this->getListingCategoryId());
        $writer->writeStringValue('listingCondition', $this->getListingCondition());
        $writer->writeStringValue('listingConditionId', $this->getListingConditionId());
        $writer->writeStringValue('listingId', $this->getListingId());
        $writer->writeCollectionOfObjectValues('listingPromotionStatuses', $this->getListingPromotionStatuses());
        $writer->writeIntegerValue('quantity', $this->getQuantity());
        $writer->writeStringValue('storeCategoryId', $this->getStoreCategoryId());
        $writer->writeStringValue('title', $this->getTitle());
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
     * Sets the currentPrice property value. The container that returns the current price of the listing.
     * @param Amount|null $value Value to set for the currentPrice property.
    */
    public function setCurrentPrice(?Amount $value): void {
        $this->currentPrice = $value;
    }

    /**
     * Sets the freeShipping property value. If set to <code>true</code>, the seller pays for the shipping (or that the item is marked for local pickup only) In this case, the listing does not have an associated shipping cost for the first listed domestic-shipping option (even if the first domestic-shipping option specifies a flat-rate or calculated shipping option). If <code>false</code>, the buyer is required to pay for a flat-rate or calculated cost shipping service.
     * @param bool|null $value Value to set for the freeShipping property.
    */
    public function setFreeShipping(?bool $value): void {
        $this->freeShipping = $value;
    }

    /**
     * Sets the inventoryReferenceId property value. The seller's inventory reference ID for a listing. Also known as the "SKU" or "custom label," an inventory reference ID is either the ID of the listing or, if the listing has variations (such as a shirt that's available in multiple sizes and colors), the ID of the parent listing.
     * @param string|null $value Value to set for the inventoryReferenceId property.
    */
    public function setInventoryReferenceId(?string $value): void {
        $this->inventoryReferenceId = $value;
    }

    /**
     * Sets the inventoryReferenceType property value. Indicates the type of the <b>inventoryReferenceId</b>, which can be either a single-SKU or a multi-SKU listing (<code>INVENTORY_ITEM</code> and <code>INVENTORY_ITEM_GROUP</code>, respectively).  <br><br><b>Note:</b> This value is not currently returned in the response.
     * @param string|null $value Value to set for the inventoryReferenceType property.
    */
    public function setInventoryReferenceType(?string $value): void {
        $this->inventoryReferenceType = $value;
    }

    /**
     * Sets the listingCategoryId property value. The ID of the category that listing belongs to. The ID is a numeric and unique identifier for the category that is assigned by eBay.
     * @param string|null $value Value to set for the listingCategoryId property.
    */
    public function setListingCategoryId(?string $value): void {
        $this->listingCategoryId = $value;
    }

    /**
     * Sets the listingCondition property value. An eBay-assigned value that indicates condition of the associated item. For more information, see <a href="/api-docs/sell/static/metadata/condition-id-values.html" target="_blank">Item condition ID and name values</a>.
     * @param string|null $value Value to set for the listingCondition property.
    */
    public function setListingCondition(?string $value): void {
        $this->listingCondition = $value;
    }

    /**
     * Sets the listingConditionId property value. The ID of the condition associated with the item. For more information, see <a href="/api-docs/sell/static/metadata/condition-id-values.html" target="_blank">Item condition ID and name values</a>.<br /><br /><span class="tablenote"><b>Note: </b> This value is not currently returned in the response.</span>
     * @param string|null $value Value to set for the listingConditionId property.
    */
    public function setListingConditionId(?string $value): void {
        $this->listingConditionId = $value;
    }

    /**
     * Sets the listingId property value. A unique eBay-assigned ID that is generated when the item is listed.
     * @param string|null $value Value to set for the listingId property.
    */
    public function setListingId(?string $value): void {
        $this->listingId = $value;
    }

    /**
     * Sets the listingPromotionStatuses property value. A list of the status values assigned to the item and the date that each new status was assigned.
     * @param array<ItemMarkdownStatus>|null $value Value to set for the listingPromotionStatuses property.
    */
    public function setListingPromotionStatuses(?array $value): void {
        $this->listingPromotionStatuses = $value;
    }

    /**
     * Sets the quantity property value. The number of items being sold in the listing.
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

    /**
     * Sets the storeCategoryId property value. Store CategoryId (if any) that to which the listing belongs. This field is blank if there is no seller Store category ID.
     * @param string|null $value Value to set for the storeCategoryId property.
    */
    public function setStoreCategoryId(?string $value): void {
        $this->storeCategoryId = $value;
    }

    /**
     * Sets the title property value. The seller-defined title of the listing that a seller can use to identify the item.  This label is not displayed in end-user flows.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

}
