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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type defines the fields returned by request to delete a set of ads by inventory reference ID.
*/
class DeleteAdsByInventoryReferenceResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $adIds The unique identifier of the ad that was deleted, or the ad that the seller attempted to delete.<span class="tablenote"><b>Note:</b>Although the field name is plural and it is an array, only one ad ID will be returned here since there can be only one ad per listing.</span>
    */
    private ?array $adIds = null;
    
    /**
     * @var array<ErrorDetailV3>|null $errors The container for the errors associated with the request.
    */
    private ?array $errors = null;
    
    /**
     * @var string|null $inventoryReferenceId The inventory reference ID is a seller-defined SKU value for a single-item listing, or a seller-defined identifier for an inventory item group. Both of these values are defined when using the Inventory API, and an inventory item group is used to create a multiple-variation listing.
    */
    private ?string $inventoryReferenceId = null;
    
    /**
     * @var InventoryReferenceTypeEnum|null $inventoryReferenceType The enumeration value returned here indicates if the ad was for a single-variation listing or a multiple-variation listing.
    */
    private ?InventoryReferenceTypeEnum $inventoryReferenceType = null;
    
    /**
     * @var int|null $statusCode An HTTP status code indicating if the corresponding ad was successfully deleted or not. <code>200 Successful</code> should be returned for successfully deleted ads. <span class="tablenote"><b>Note:</b>A status code is returned for each ad that the seller deletes, or attempts to delete.</span>
    */
    private ?int $statusCode = null;
    
    /**
     * Instantiates a new DeleteAdsByInventoryReferenceResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeleteAdsByInventoryReferenceResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeleteAdsByInventoryReferenceResponse {
        return new DeleteAdsByInventoryReferenceResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adIds property value. The unique identifier of the ad that was deleted, or the ad that the seller attempted to delete.<span class="tablenote"><b>Note:</b>Although the field name is plural and it is an array, only one ad ID will be returned here since there can be only one ad per listing.</span>
     * @return array<string>|null
    */
    public function getAdIds(): ?array {
        return $this->adIds;
    }

    /**
     * Gets the errors property value. The container for the errors associated with the request.
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
            'adIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAdIds($val);
            },
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([ErrorDetailV3::class, 'createFromDiscriminatorValue'])),
            'inventoryReferenceId' => fn(ParseNode $n) => $o->setInventoryReferenceId($n->getStringValue()),
            'inventoryReferenceType' => fn(ParseNode $n) => $o->setInventoryReferenceType($n->getEnumValue(InventoryReferenceTypeEnum::class)),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the inventoryReferenceId property value. The inventory reference ID is a seller-defined SKU value for a single-item listing, or a seller-defined identifier for an inventory item group. Both of these values are defined when using the Inventory API, and an inventory item group is used to create a multiple-variation listing.
     * @return string|null
    */
    public function getInventoryReferenceId(): ?string {
        return $this->inventoryReferenceId;
    }

    /**
     * Gets the inventoryReferenceType property value. The enumeration value returned here indicates if the ad was for a single-variation listing or a multiple-variation listing.
     * @return InventoryReferenceTypeEnum|null
    */
    public function getInventoryReferenceType(): ?InventoryReferenceTypeEnum {
        return $this->inventoryReferenceType;
    }

    /**
     * Gets the statusCode property value. An HTTP status code indicating if the corresponding ad was successfully deleted or not. <code>200 Successful</code> should be returned for successfully deleted ads. <span class="tablenote"><b>Note:</b>A status code is returned for each ad that the seller deletes, or attempts to delete.</span>
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
        $writer->writeCollectionOfPrimitiveValues('adIds', $this->getAdIds());
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
     * Sets the adIds property value. The unique identifier of the ad that was deleted, or the ad that the seller attempted to delete.<span class="tablenote"><b>Note:</b>Although the field name is plural and it is an array, only one ad ID will be returned here since there can be only one ad per listing.</span>
     * @param array<string>|null $value Value to set for the adIds property.
    */
    public function setAdIds(?array $value): void {
        $this->adIds = $value;
    }

    /**
     * Sets the errors property value. The container for the errors associated with the request.
     * @param array<ErrorDetailV3>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the inventoryReferenceId property value. The inventory reference ID is a seller-defined SKU value for a single-item listing, or a seller-defined identifier for an inventory item group. Both of these values are defined when using the Inventory API, and an inventory item group is used to create a multiple-variation listing.
     * @param string|null $value Value to set for the inventoryReferenceId property.
    */
    public function setInventoryReferenceId(?string $value): void {
        $this->inventoryReferenceId = $value;
    }

    /**
     * Sets the inventoryReferenceType property value. The enumeration value returned here indicates if the ad was for a single-variation listing or a multiple-variation listing.
     * @param InventoryReferenceTypeEnum|null $value Value to set for the inventoryReferenceType property.
    */
    public function setInventoryReferenceType(?InventoryReferenceTypeEnum $value): void {
        $this->inventoryReferenceType = $value;
    }

    /**
     * Sets the statusCode property value. An HTTP status code indicating if the corresponding ad was successfully deleted or not. <code>200 Successful</code> should be returned for successfully deleted ads. <span class="tablenote"><b>Note:</b>A status code is returned for each ad that the seller deletes, or attempts to delete.</span>
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

}
