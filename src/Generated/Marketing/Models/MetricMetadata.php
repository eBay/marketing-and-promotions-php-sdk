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
 * This type defines the name and data type of a metric.
*/
class MetricMetadata implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var DataTypeEnum|null $dataType The data type of the returned metric value.
    */
    private ?DataTypeEnum $dataType = null;
    
    /**
     * @var string|null $metricKey The name of the metric.
    */
    private ?string $metricKey = null;
    
    /**
     * Instantiates a new MetricMetadata and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MetricMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MetricMetadata {
        return new MetricMetadata();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dataType property value. The data type of the returned metric value.
     * @return DataTypeEnum|null
    */
    public function getDataType(): ?DataTypeEnum {
        return $this->dataType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dataType' => fn(ParseNode $n) => $o->setDataType($n->getEnumValue(DataTypeEnum::class)),
            'metricKey' => fn(ParseNode $n) => $o->setMetricKey($n->getStringValue()),
        ];
    }

    /**
     * Gets the metricKey property value. The name of the metric.
     * @return string|null
    */
    public function getMetricKey(): ?string {
        return $this->metricKey;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('dataType', $this->getDataType());
        $writer->writeStringValue('metricKey', $this->getMetricKey());
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
     * Sets the dataType property value. The data type of the returned metric value.
     * @param DataTypeEnum|null $value Value to set for the dataType property.
    */
    public function setDataType(?DataTypeEnum $value): void {
        $this->dataType = $value;
    }

    /**
     * Sets the metricKey property value. The name of the metric.
     * @param string|null $value Value to set for the metricKey property.
    */
    public function setMetricKey(?string $value): void {
        $this->metricKey = $value;
    }

}
