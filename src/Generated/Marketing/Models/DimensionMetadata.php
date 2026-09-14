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
 * This type defines the dimension used to create the report and the annotation keys associated with that dimension.
*/
class DimensionMetadata implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DataTypeEnum|null $dataType The data type of the dimension value used to create the report.
    */
    private ?DataTypeEnum $dataType = null;
    
    /**
     * @var string|null $dimensionKey The name of the dimension used to create the report.
    */
    private ?string $dimensionKey = null;
    
    /**
     * @var array<DimensionKeyAnnotation>|null $dimensionKeyAnnotations An list of annotation keys associated with the specified dimension of the report.
    */
    private ?array $dimensionKeyAnnotations = null;
    
    /**
     * Instantiates a new DimensionMetadata and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DimensionMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DimensionMetadata {
        return new DimensionMetadata();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dataType property value. The data type of the dimension value used to create the report.
     * @return DataTypeEnum|null
    */
    public function getDataType(): ?DataTypeEnum {
        return $this->dataType;
    }

    /**
     * Gets the dimensionKey property value. The name of the dimension used to create the report.
     * @return string|null
    */
    public function getDimensionKey(): ?string {
        return $this->dimensionKey;
    }

    /**
     * Gets the dimensionKeyAnnotations property value. An list of annotation keys associated with the specified dimension of the report.
     * @return array<DimensionKeyAnnotation>|null
    */
    public function getDimensionKeyAnnotations(): ?array {
        return $this->dimensionKeyAnnotations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dataType' => fn(ParseNode $n) => $o->setDataType($n->getEnumValue(DataTypeEnum::class)),
            'dimensionKey' => fn(ParseNode $n) => $o->setDimensionKey($n->getStringValue()),
            'dimensionKeyAnnotations' => fn(ParseNode $n) => $o->setDimensionKeyAnnotations($n->getCollectionOfObjectValues([DimensionKeyAnnotation::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('dataType', $this->getDataType());
        $writer->writeStringValue('dimensionKey', $this->getDimensionKey());
        $writer->writeCollectionOfObjectValues('dimensionKeyAnnotations', $this->getDimensionKeyAnnotations());
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
     * Sets the dataType property value. The data type of the dimension value used to create the report.
     * @param DataTypeEnum|null $value Value to set for the dataType property.
    */
    public function setDataType(?DataTypeEnum $value): void {
        $this->dataType = $value;
    }

    /**
     * Sets the dimensionKey property value. The name of the dimension used to create the report.
     * @param string|null $value Value to set for the dimensionKey property.
    */
    public function setDimensionKey(?string $value): void {
        $this->dimensionKey = $value;
    }

    /**
     * Sets the dimensionKeyAnnotations property value. An list of annotation keys associated with the specified dimension of the report.
     * @param array<DimensionKeyAnnotation>|null $value Value to set for the dimensionKeyAnnotations property.
    */
    public function setDimensionKeyAnnotations(?array $value): void {
        $this->dimensionKeyAnnotations = $value;
    }

}
