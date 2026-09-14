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
 * This type defines the fields returned when you create an ad by inventory reference ID.
*/
class CreateAdsByInventoryReferenceResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adGroupId A unique eBay-assigned ID for an ad group in a priority strategy campaign that uses the Cost Per Click (CPC) funding model.<span class="tablenote"><b>Note:</b> This field will always be returned for campaigns that use the CPC funding model. It will not be returned for campaigns that use the Cost Per Sale (CPS) funding model.</span>
    */
    private ?string $adGroupId = null;
    
    /**
     * @var array<AdReference>|null $ads A list of ad IDs. An ad ID is generated for each successfully created ad.
    */
    private ?array $ads = null;
    
    /**
     * @var array<ErrorDetailV3>|null $errors An array of errors or warnings associated with the create-ads request.
    */
    private ?array $errors = null;
    
    /**
     * @var string|null $inventoryReferenceId An ID that identifies a single-item listing or multiple-variation listing that is managed with the <a href="/api-docs/sell/inventory/resources/methods" title="Inventory API Reference" target="_blank">Inventory API</a>. <p>The <i>inventory reference ID</i> is a seller-defined value that can be either an <b>SKU</b> for a single-item listing or an <b>inventoryItemGroupKey</b> for a multiple-value listing.</p>
    */
    private ?string $inventoryReferenceId = null;
    
    /**
     * @var InventoryReferenceTypeEnum|null $inventoryReferenceType Indicates the type of item the <b>inventoryReferenceId</b> references. The item can be either an <code>INVENTORY_ITEM</code> or an <code>INVENTORY_ITEM_GROUP</code>.
    */
    private ?InventoryReferenceTypeEnum $inventoryReferenceType = null;
    
    /**
     * @var int|null $statusCode An HTTP status code that indicates the response-status of the request. Check this code to see if the ads were successfully created.
    */
    private ?int $statusCode = null;
    
    /**
     * Instantiates a new CreateAdsByInventoryReferenceResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateAdsByInventoryReferenceResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateAdsByInventoryReferenceResponse {
        return new CreateAdsByInventoryReferenceResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adGroupId property value. A unique eBay-assigned ID for an ad group in a priority strategy campaign that uses the Cost Per Click (CPC) funding model.<span class="tablenote"><b>Note:</b> This field will always be returned for campaigns that use the CPC funding model. It will not be returned for campaigns that use the Cost Per Sale (CPS) funding model.</span>
     * @return string|null
    */
    public function getAdGroupId(): ?string {
        return $this->adGroupId;
    }

    /**
     * Gets the ads property value. A list of ad IDs. An ad ID is generated for each successfully created ad.
     * @return array<AdReference>|null
    */
    public function getAds(): ?array {
        return $this->ads;
    }

    /**
     * Gets the errors property value. An array of errors or warnings associated with the create-ads request.
     * @return array<ErrorDetailV3>|null
    */
    public function getErrors(): ?array {
        return $this->errors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adGroupId' => fn(ParseNode $n) => $o->setAdGroupId($n->getStringValue()),
            'ads' => fn(ParseNode $n) => $o->setAds($n->getCollectionOfObjectValues([AdReference::class, 'createFromDiscriminatorValue'])),
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([ErrorDetailV3::class, 'createFromDiscriminatorValue'])),
            'inventoryReferenceId' => fn(ParseNode $n) => $o->setInventoryReferenceId($n->getStringValue()),
            'inventoryReferenceType' => fn(ParseNode $n) => $o->setInventoryReferenceType($n->getEnumValue(InventoryReferenceTypeEnum::class)),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the inventoryReferenceId property value. An ID that identifies a single-item listing or multiple-variation listing that is managed with the <a href="/api-docs/sell/inventory/resources/methods" title="Inventory API Reference" target="_blank">Inventory API</a>. <p>The <i>inventory reference ID</i> is a seller-defined value that can be either an <b>SKU</b> for a single-item listing or an <b>inventoryItemGroupKey</b> for a multiple-value listing.</p>
     * @return string|null
    */
    public function getInventoryReferenceId(): ?string {
        return $this->inventoryReferenceId;
    }

    /**
     * Gets the inventoryReferenceType property value. Indicates the type of item the <b>inventoryReferenceId</b> references. The item can be either an <code>INVENTORY_ITEM</code> or an <code>INVENTORY_ITEM_GROUP</code>.
     * @return InventoryReferenceTypeEnum|null
    */
    public function getInventoryReferenceType(): ?InventoryReferenceTypeEnum {
        return $this->inventoryReferenceType;
    }

    /**
     * Gets the statusCode property value. An HTTP status code that indicates the response-status of the request. Check this code to see if the ads were successfully created.
     * @return int|null
    */
    public function getStatusCode(): ?int {
        return $this->statusCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adGroupId', $this->getAdGroupId());
        $writer->writeCollectionOfObjectValues('ads', $this->getAds());
        $writer->writeCollectionOfObjectValues('errors', $this->getErrors());
        $writer->writeStringValue('inventoryReferenceId', $this->getInventoryReferenceId());
        $writer->writeEnumValue('inventoryReferenceType', $this->getInventoryReferenceType());
        $writer->writeIntegerValue('statusCode', $this->getStatusCode());
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
     * Sets the adGroupId property value. A unique eBay-assigned ID for an ad group in a priority strategy campaign that uses the Cost Per Click (CPC) funding model.<span class="tablenote"><b>Note:</b> This field will always be returned for campaigns that use the CPC funding model. It will not be returned for campaigns that use the Cost Per Sale (CPS) funding model.</span>
     * @param string|null $value Value to set for the adGroupId property.
    */
    public function setAdGroupId(?string $value): void {
        $this->adGroupId = $value;
    }

    /**
     * Sets the ads property value. A list of ad IDs. An ad ID is generated for each successfully created ad.
     * @param array<AdReference>|null $value Value to set for the ads property.
    */
    public function setAds(?array $value): void {
        $this->ads = $value;
    }

    /**
     * Sets the errors property value. An array of errors or warnings associated with the create-ads request.
     * @param array<ErrorDetailV3>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the inventoryReferenceId property value. An ID that identifies a single-item listing or multiple-variation listing that is managed with the <a href="/api-docs/sell/inventory/resources/methods" title="Inventory API Reference" target="_blank">Inventory API</a>. <p>The <i>inventory reference ID</i> is a seller-defined value that can be either an <b>SKU</b> for a single-item listing or an <b>inventoryItemGroupKey</b> for a multiple-value listing.</p>
     * @param string|null $value Value to set for the inventoryReferenceId property.
    */
    public function setInventoryReferenceId(?string $value): void {
        $this->inventoryReferenceId = $value;
    }

    /**
     * Sets the inventoryReferenceType property value. Indicates the type of item the <b>inventoryReferenceId</b> references. The item can be either an <code>INVENTORY_ITEM</code> or an <code>INVENTORY_ITEM_GROUP</code>.
     * @param InventoryReferenceTypeEnum|null $value Value to set for the inventoryReferenceType property.
    */
    public function setInventoryReferenceType(?InventoryReferenceTypeEnum $value): void {
        $this->inventoryReferenceType = $value;
    }

    /**
     * Sets the statusCode property value. An HTTP status code that indicates the response-status of the request. Check this code to see if the ads were successfully created.
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

}
