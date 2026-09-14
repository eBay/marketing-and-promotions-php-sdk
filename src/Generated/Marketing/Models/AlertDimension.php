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
 * A type that contains the dimension fields.
*/
class AlertDimension implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DimensionKeyEnum|null $key The key field of the applied dimension. For example, the marketplace Id.
    */
    private ?DimensionKeyEnum $key = null;
    
    /**
     * @var string|null $value The value field of the applied dimension. For example, if the key is a <code>MARKETPLACE_ID</code>, the value would be from <a href='/develop/api/sell/request_headers#marketplace-id-values' target="_blank">Marketplace ID values</a>.
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new AlertDimension and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlertDimension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlertDimension {
        return new AlertDimension();
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
            'key' => fn(ParseNode $n) => $o->setKey($n->getEnumValue(DimensionKeyEnum::class)),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the key property value. The key field of the applied dimension. For example, the marketplace Id.
     * @return DimensionKeyEnum|null
    */
    public function getKey(): ?DimensionKeyEnum {
        return $this->key;
    }

    /**
     * Gets the value property value. The value field of the applied dimension. For example, if the key is a <code>MARKETPLACE_ID</code>, the value would be from <a href='/develop/api/sell/request_headers#marketplace-id-values' target="_blank">Marketplace ID values</a>.
     * @return string|null
    */
    public function getValue(): ?string {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('key', $this->getKey());
        $writer->writeStringValue('value', $this->getValue());
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
     * Sets the key property value. The key field of the applied dimension. For example, the marketplace Id.
     * @param DimensionKeyEnum|null $value Value to set for the key property.
    */
    public function setKey(?DimensionKeyEnum $value): void {
        $this->key = $value;
    }

    /**
     * Sets the value property value. The value field of the applied dimension. For example, if the key is a <code>MARKETPLACE_ID</code>, the value would be from <a href='/develop/api/sell/request_headers#marketplace-id-values' target="_blank">Marketplace ID values</a>.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
