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
 * A type that contains the response fields used by the <b>UpdateAdsByInventoryReference</b> method.
*/
class UpdateAdsByInventoryReferenceResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<AdReference>|null $ads A list of ad IDs and links to retrieve them.
    */
    private ?array $ads = null;
    
    /**
     * @var array<ErrorDetailV3>|null $errors A container for all of the errors associated with the specified inventory reference ID.
    */
    private ?array $errors = null;
    
    /**
     * @var string|null $inventoryReferenceId The reference ID associated with the ad. The reference ID could be a SKU number or Inventory Item Group, depending on value of <code>inventoryReferenceType</code>.
    */
    private ?string $inventoryReferenceId = null;
    
    /**
     * @var InventoryReferenceTypeEnum|null $inventoryReferenceType The inventory reference type associated with the ad. The inventory reference type could be a SKU number or Inventory Item Group.
    */
    private ?InventoryReferenceTypeEnum $inventoryReferenceType = null;
    
    /**
     * @var int|null $statusCode An HTTP status code that indicates whether or not the CPS ad was successfully updated.
    */
    private ?int $statusCode = null;
    
    /**
     * Instantiates a new UpdateAdsByInventoryReferenceResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateAdsByInventoryReferenceResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateAdsByInventoryReferenceResponse {
        return new UpdateAdsByInventoryReferenceResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the ads property value. A list of ad IDs and links to retrieve them.
     * @return array<AdReference>|null
    */
    public function getAds(): ?array {
        return $this->ads;
    }

    /**
     * Gets the errors property value. A container for all of the errors associated with the specified inventory reference ID.
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
            'ads' => fn(ParseNode $n) => $o->setAds($n->getCollectionOfObjectValues([AdReference::class, 'createFromDiscriminatorValue'])),
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([ErrorDetailV3::class, 'createFromDiscriminatorValue'])),
            'inventoryReferenceId' => fn(ParseNode $n) => $o->setInventoryReferenceId($n->getStringValue()),
            'inventoryReferenceType' => fn(ParseNode $n) => $o->setInventoryReferenceType($n->getEnumValue(InventoryReferenceTypeEnum::class)),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the inventoryReferenceId property value. The reference ID associated with the ad. The reference ID could be a SKU number or Inventory Item Group, depending on value of <code>inventoryReferenceType</code>.
     * @return string|null
    */
    public function getInventoryReferenceId(): ?string {
        return $this->inventoryReferenceId;
    }

    /**
     * Gets the inventoryReferenceType property value. The inventory reference type associated with the ad. The inventory reference type could be a SKU number or Inventory Item Group.
     * @return InventoryReferenceTypeEnum|null
    */
    public function getInventoryReferenceType(): ?InventoryReferenceTypeEnum {
        return $this->inventoryReferenceType;
    }

    /**
     * Gets the statusCode property value. An HTTP status code that indicates whether or not the CPS ad was successfully updated.
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
     * Sets the ads property value. A list of ad IDs and links to retrieve them.
     * @param array<AdReference>|null $value Value to set for the ads property.
    */
    public function setAds(?array $value): void {
        $this->ads = $value;
    }

    /**
     * Sets the errors property value. A container for all of the errors associated with the specified inventory reference ID.
     * @param array<ErrorDetailV3>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the inventoryReferenceId property value. The reference ID associated with the ad. The reference ID could be a SKU number or Inventory Item Group, depending on value of <code>inventoryReferenceType</code>.
     * @param string|null $value Value to set for the inventoryReferenceId property.
    */
    public function setInventoryReferenceId(?string $value): void {
        $this->inventoryReferenceId = $value;
    }

    /**
     * Sets the inventoryReferenceType property value. The inventory reference type associated with the ad. The inventory reference type could be a SKU number or Inventory Item Group.
     * @param InventoryReferenceTypeEnum|null $value Value to set for the inventoryReferenceType property.
    */
    public function setInventoryReferenceType(?InventoryReferenceTypeEnum $value): void {
        $this->inventoryReferenceType = $value;
    }

    /**
     * Sets the statusCode property value. An HTTP status code that indicates whether or not the CPS ad was successfully updated.
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

}
