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
 * This type defines the fields required to activate a specific promotion for a seller.
*/
class PromotionSignUpRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $promotionHash The unique hash associated with the promotion.<br><br>Use the <b>getSellerPromotionalOffers</b> method to retrieve this value for eligible promotions.
    */
    private ?string $promotionHash = null;
    
    /**
     * @var string|null $promotionId The unique identifier of the promotion.<br><br>Use the <b>getSellerPromotionalOffers</b> method to retrieve this value for eligible promotions.
    */
    private ?string $promotionId = null;
    
    /**
     * Instantiates a new PromotionSignUpRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PromotionSignUpRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PromotionSignUpRequest {
        return new PromotionSignUpRequest();
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
            'promotionHash' => fn(ParseNode $n) => $o->setPromotionHash($n->getStringValue()),
            'promotionId' => fn(ParseNode $n) => $o->setPromotionId($n->getStringValue()),
        ];
    }

    /**
     * Gets the promotionHash property value. The unique hash associated with the promotion.<br><br>Use the <b>getSellerPromotionalOffers</b> method to retrieve this value for eligible promotions.
     * @return string|null
    */
    public function getPromotionHash(): ?string {
        return $this->promotionHash;
    }

    /**
     * Gets the promotionId property value. The unique identifier of the promotion.<br><br>Use the <b>getSellerPromotionalOffers</b> method to retrieve this value for eligible promotions.
     * @return string|null
    */
    public function getPromotionId(): ?string {
        return $this->promotionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('promotionHash', $this->getPromotionHash());
        $writer->writeStringValue('promotionId', $this->getPromotionId());
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
     * Sets the promotionHash property value. The unique hash associated with the promotion.<br><br>Use the <b>getSellerPromotionalOffers</b> method to retrieve this value for eligible promotions.
     * @param string|null $value Value to set for the promotionHash property.
    */
    public function setPromotionHash(?string $value): void {
        $this->promotionHash = $value;
    }

    /**
     * Sets the promotionId property value. The unique identifier of the promotion.<br><br>Use the <b>getSellerPromotionalOffers</b> method to retrieve this value for eligible promotions.
     * @param string|null $value Value to set for the promotionId property.
    */
    public function setPromotionId(?string $value): void {
        $this->promotionId = $value;
    }

}
