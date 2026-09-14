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
 * A type that provides additional information for suggested keywords.
*/
class AdditionalInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var AdditionalInfoEnum|null $infoType The type of additional information provided for the suggested keyword.<br /><br /><strong>Valid Value:</strong> <code>KEYWORD_INSIGHTS</code>
    */
    private ?AdditionalInfoEnum $infoType = null;
    
    /**
     * @var array<AdditionalInfoData>|null $metrics A list of additional data provided for the suggested keyword.
    */
    private ?array $metrics = null;
    
    /**
     * Instantiates a new AdditionalInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdditionalInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdditionalInfo {
        return new AdditionalInfo();
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
            'infoType' => fn(ParseNode $n) => $o->setInfoType($n->getEnumValue(AdditionalInfoEnum::class)),
            'metrics' => fn(ParseNode $n) => $o->setMetrics($n->getCollectionOfObjectValues([AdditionalInfoData::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the infoType property value. The type of additional information provided for the suggested keyword.<br /><br /><strong>Valid Value:</strong> <code>KEYWORD_INSIGHTS</code>
     * @return AdditionalInfoEnum|null
    */
    public function getInfoType(): ?AdditionalInfoEnum {
        return $this->infoType;
    }

    /**
     * Gets the metrics property value. A list of additional data provided for the suggested keyword.
     * @return array<AdditionalInfoData>|null
    */
    public function getMetrics(): ?array {
        return $this->metrics;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('infoType', $this->getInfoType());
        $writer->writeCollectionOfObjectValues('metrics', $this->getMetrics());
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
     * Sets the infoType property value. The type of additional information provided for the suggested keyword.<br /><br /><strong>Valid Value:</strong> <code>KEYWORD_INSIGHTS</code>
     * @param AdditionalInfoEnum|null $value Value to set for the infoType property.
    */
    public function setInfoType(?AdditionalInfoEnum $value): void {
        $this->infoType = $value;
    }

    /**
     * Sets the metrics property value. A list of additional data provided for the suggested keyword.
     * @param array<AdditionalInfoData>|null $value Value to set for the metrics property.
    */
    public function setMetrics(?array $value): void {
        $this->metrics = $value;
    }

}
