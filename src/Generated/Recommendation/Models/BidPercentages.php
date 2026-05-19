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

namespace EBay\MarketingAndPromotions\Generated\Recommendation\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A complex type that returns data related to Promoted Listings bid percentages.
*/
class BidPercentages implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $basis The basis by which the ad rate is calculated.<br /><br /><b>Valid Values:</b> <code>ITEM</code> and <code>TRENDING</code> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/recommendation/types/api:Basis'>eBay API documentation</a>
    */
    private ?string $basis = null;
    
    /**
     * @var string|null $value The bid percentage data is a single precision value, as calculated by the associated basis. <p>In Promoted listings ad campaigns, the <b>bid percentage</b> (also known as the <i>ad rate</i>) is a user-defined value that sets the level that eBay raises the visibility of the listing in the marketplace. It is also the rate that is used to calculate the Promoted Listings fee.</p> <p><b>Minimum value:</b> 1.0 &nbsp; <b>Maximum value:</b> 100.0</p>
    */
    private ?string $value = null;
    
    /**
     * Instantiates a new BidPercentages and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BidPercentages
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BidPercentages {
        return new BidPercentages();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the basis property value. The basis by which the ad rate is calculated.<br /><br /><b>Valid Values:</b> <code>ITEM</code> and <code>TRENDING</code> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/recommendation/types/api:Basis'>eBay API documentation</a>
     * @return string|null
    */
    public function getBasis(): ?string {
        return $this->basis;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'basis' => fn(ParseNode $n) => $o->setBasis($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ];
    }

    /**
     * Gets the value property value. The bid percentage data is a single precision value, as calculated by the associated basis. <p>In Promoted listings ad campaigns, the <b>bid percentage</b> (also known as the <i>ad rate</i>) is a user-defined value that sets the level that eBay raises the visibility of the listing in the marketplace. It is also the rate that is used to calculate the Promoted Listings fee.</p> <p><b>Minimum value:</b> 1.0 &nbsp; <b>Maximum value:</b> 100.0</p>
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
        $writer->writeStringValue('basis', $this->getBasis());
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
     * Sets the basis property value. The basis by which the ad rate is calculated.<br /><br /><b>Valid Values:</b> <code>ITEM</code> and <code>TRENDING</code> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/recommendation/types/api:Basis'>eBay API documentation</a>
     * @param string|null $value Value to set for the basis property.
    */
    public function setBasis(?string $value): void {
        $this->basis = $value;
    }

    /**
     * Sets the value property value. The bid percentage data is a single precision value, as calculated by the associated basis. <p>In Promoted listings ad campaigns, the <b>bid percentage</b> (also known as the <i>ad rate</i>) is a user-defined value that sets the level that eBay raises the visibility of the listing in the marketplace. It is also the rate that is used to calculate the Promoted Listings fee.</p> <p><b>Minimum value:</b> 1.0 &nbsp; <b>Maximum value:</b> 100.0</p>
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->value = $value;
    }

}
