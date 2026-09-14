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
 * This type defines the fields for an ad ID and its associated URL.
*/
class AdReference implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adId A unique eBay-assigned ID for an ad. This ID is generated when an ad is created.
    */
    private ?string $adId = null;
    
    /**
     * @var string|null $href The <b>getAd</b> URI of an ad. You can use this URI to retrieve the ad.
    */
    private ?string $href = null;
    
    /**
     * Instantiates a new AdReference and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdReference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdReference {
        return new AdReference();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adId property value. A unique eBay-assigned ID for an ad. This ID is generated when an ad is created.
     * @return string|null
    */
    public function getAdId(): ?string {
        return $this->adId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adId' => fn(ParseNode $n) => $o->setAdId($n->getStringValue()),
            'href' => fn(ParseNode $n) => $o->setHref($n->getStringValue()),
        ];
    }

    /**
     * Gets the href property value. The <b>getAd</b> URI of an ad. You can use this URI to retrieve the ad.
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adId', $this->getAdId());
        $writer->writeStringValue('href', $this->getHref());
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
     * Sets the adId property value. A unique eBay-assigned ID for an ad. This ID is generated when an ad is created.
     * @param string|null $value Value to set for the adId property.
    */
    public function setAdId(?string $value): void {
        $this->adId = $value;
    }

    /**
     * Sets the href property value. The <b>getAd</b> URI of an ad. You can use this URI to retrieve the ad.
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

}
