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
 * This type indicates the bidding preferences of a Smart Targeting campaign.<br><br><span class="tablenote"><b>Note:</b> This type is only supported for CPC funding model campaigns with on-site channels.</span>
*/
class BidPreference implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var MaxCpc|null $maxCpc The maximum amount for which the eBay suggested bid can be adjusted. This value represents the most a seller is willing to pay for each click on their ad. The adjusted bid will never exceed this amount.<br><br>This field is required for smart targeting campaigns.<br><br><span class="tablenote"><b>Note:</b> The maximum cost-per-click has a minimum value of 0.02 and a maximum value of 100.</span>
    */
    private ?MaxCpc $maxCpc = null;
    
    /**
     * Instantiates a new BidPreference and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BidPreference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BidPreference {
        return new BidPreference();
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
            'maxCpc' => fn(ParseNode $n) => $o->setMaxCpc($n->getObjectValue([MaxCpc::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the maxCpc property value. The maximum amount for which the eBay suggested bid can be adjusted. This value represents the most a seller is willing to pay for each click on their ad. The adjusted bid will never exceed this amount.<br><br>This field is required for smart targeting campaigns.<br><br><span class="tablenote"><b>Note:</b> The maximum cost-per-click has a minimum value of 0.02 and a maximum value of 100.</span>
     * @return MaxCpc|null
    */
    public function getMaxCpc(): ?MaxCpc {
        return $this->maxCpc;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('maxCpc', $this->getMaxCpc());
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
     * Sets the maxCpc property value. The maximum amount for which the eBay suggested bid can be adjusted. This value represents the most a seller is willing to pay for each click on their ad. The adjusted bid will never exceed this amount.<br><br>This field is required for smart targeting campaigns.<br><br><span class="tablenote"><b>Note:</b> The maximum cost-per-click has a minimum value of 0.02 and a maximum value of 100.</span>
     * @param MaxCpc|null $value Value to set for the maxCpc property.
    */
    public function setMaxCpc(?MaxCpc $value): void {
        $this->maxCpc = $value;
    }

}
