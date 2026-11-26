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
 * This type defines the activation information for a promotion.
*/
class Activation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var bool|null $activationRequired This boolean indicates if activation is required for the promotion.<br><br>If returned as <code>true</code>, activation is required for the promotion. Use the <a href=/develop/api/sell/marketing_api#sell-marketing_api-seller_promotional_offers-activatepromotion">activatePromotion</a> method to activate a promotion.
    */
    private ?bool $activationRequired = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $promotionHash The unique hash associated with the promotion that is required for activation.<br><br>This value, alongside the promotion's <b>promotionId</b>, can be passed in the <a href=/develop/api/sell/marketing_api#sell-marketing_api-seller_promotional_offers-activatepromotion">activatePromotion</a> method to activate a promotion for a seller.
    */
    private ?string $promotionHash = null;
    
    /**
     * Instantiates a new Activation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Activation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Activation {
        return new Activation();
    }

    /**
     * Gets the activationRequired property value. This boolean indicates if activation is required for the promotion.<br><br>If returned as <code>true</code>, activation is required for the promotion. Use the <a href=/develop/api/sell/marketing_api#sell-marketing_api-seller_promotional_offers-activatepromotion">activatePromotion</a> method to activate a promotion.
     * @return bool|null
    */
    public function getActivationRequired(): ?bool {
        return $this->activationRequired;
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
            'activationRequired' => fn(ParseNode $n) => $o->setActivationRequired($n->getBooleanValue()),
            'promotionHash' => fn(ParseNode $n) => $o->setPromotionHash($n->getStringValue()),
        ];
    }

    /**
     * Gets the promotionHash property value. The unique hash associated with the promotion that is required for activation.<br><br>This value, alongside the promotion's <b>promotionId</b>, can be passed in the <a href=/develop/api/sell/marketing_api#sell-marketing_api-seller_promotional_offers-activatepromotion">activatePromotion</a> method to activate a promotion for a seller.
     * @return string|null
    */
    public function getPromotionHash(): ?string {
        return $this->promotionHash;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('activationRequired', $this->getActivationRequired());
        $writer->writeStringValue('promotionHash', $this->getPromotionHash());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activationRequired property value. This boolean indicates if activation is required for the promotion.<br><br>If returned as <code>true</code>, activation is required for the promotion. Use the <a href=/develop/api/sell/marketing_api#sell-marketing_api-seller_promotional_offers-activatepromotion">activatePromotion</a> method to activate a promotion.
     * @param bool|null $value Value to set for the activationRequired property.
    */
    public function setActivationRequired(?bool $value): void {
        $this->activationRequired = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the promotionHash property value. The unique hash associated with the promotion that is required for activation.<br><br>This value, alongside the promotion's <b>promotionId</b>, can be passed in the <a href=/develop/api/sell/marketing_api#sell-marketing_api-seller_promotional_offers-activatepromotion">activatePromotion</a> method to activate a promotion for a seller.
     * @param string|null $value Value to set for the promotionHash property.
    */
    public function setPromotionHash(?string $value): void {
        $this->promotionHash = $value;
    }

}
