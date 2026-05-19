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
 * A type that defines the data produced for additional information about suggested keywords.
*/
class AdditionalInfoData implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $metricKey The metric used to provide additional information for the suggested keyword.<br /><br /><strong>Valid Values:</strong> <ul><li><code>ACTIVE_SELLER_COUNT</code></li><li><code>SEARCH_VOLUME</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:MetricEnum'>eBay API documentation</a>
    */
    private ?string $metricKey = null;
    
    /**
     * @var string|null $value The data provided for the specified metric.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> All metric data is compiled for the marketplace associated with the specified campaign ID.</span>
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new AdditionalInfoData and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdditionalInfoData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdditionalInfoData {
        return new AdditionalInfoData();
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
            'metricKey' => fn(ParseNode $n) => $o->setMetricKey($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the metricKey property value. The metric used to provide additional information for the suggested keyword.<br /><br /><strong>Valid Values:</strong> <ul><li><code>ACTIVE_SELLER_COUNT</code></li><li><code>SEARCH_VOLUME</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:MetricEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getMetricKey(): ?string {
        return $this->metricKey;
    }

    /**
     * Gets the value property value. The data provided for the specified metric.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> All metric data is compiled for the marketplace associated with the specified campaign ID.</span>
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
        $writer->writeStringValue('metricKey', $this->getMetricKey());
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
     * Sets the metricKey property value. The metric used to provide additional information for the suggested keyword.<br /><br /><strong>Valid Values:</strong> <ul><li><code>ACTIVE_SELLER_COUNT</code></li><li><code>SEARCH_VOLUME</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:MetricEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the metricKey property.
    */
    public function setMetricKey(?string $value): void {
        $this->metricKey = $value;
    }

    /**
     * Sets the value property value. The data provided for the specified metric.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> All metric data is compiled for the marketplace associated with the specified campaign ID.</span>
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
