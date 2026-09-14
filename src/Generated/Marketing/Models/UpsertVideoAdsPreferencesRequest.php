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
 * This request type defines the video ads preference create or update settings for a single listing in a campaign that uses the CPC funding model. It is used both for each listing item in the <b>bulkUpsertVideoAdsPreferences</b> request and as the request body for <b>upsertVideoAdsPreferences</b>.
*/
class UpsertVideoAdsPreferencesRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $listingId The unique eBay listing ID of the listing whose video ads preferences you want to create or update. This value is generated when a listing is created with the <b>Trading API</b> or the <b>Inventory API</b>.
    */
    private ?string $listingId = null;
    
    /**
     * @var VideoAdsPreferences|null $videoAdsPreferences The video ads preference settings to apply to the specified listing in a campaign that uses the CPC funding model.
    */
    private ?VideoAdsPreferences $videoAdsPreferences = null;
    
    /**
     * Instantiates a new UpsertVideoAdsPreferencesRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpsertVideoAdsPreferencesRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpsertVideoAdsPreferencesRequest {
        return new UpsertVideoAdsPreferencesRequest();
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
            'listingId' => fn(ParseNode $n) => $o->setListingId($n->getStringValue()),
            'videoAdsPreferences' => fn(ParseNode $n) => $o->setVideoAdsPreferences($n->getObjectValue([VideoAdsPreferences::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the listingId property value. The unique eBay listing ID of the listing whose video ads preferences you want to create or update. This value is generated when a listing is created with the <b>Trading API</b> or the <b>Inventory API</b>.
     * @return string|null
    */
    public function getListingId(): ?string {
        return $this->listingId;
    }

    /**
     * Gets the videoAdsPreferences property value. The video ads preference settings to apply to the specified listing in a campaign that uses the CPC funding model.
     * @return VideoAdsPreferences|null
    */
    public function getVideoAdsPreferences(): ?VideoAdsPreferences {
        return $this->videoAdsPreferences;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('listingId', $this->getListingId());
        $writer->writeObjectValue('videoAdsPreferences', $this->getVideoAdsPreferences());
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
     * Sets the listingId property value. The unique eBay listing ID of the listing whose video ads preferences you want to create or update. This value is generated when a listing is created with the <b>Trading API</b> or the <b>Inventory API</b>.
     * @param string|null $value Value to set for the listingId property.
    */
    public function setListingId(?string $value): void {
        $this->listingId = $value;
    }

    /**
     * Sets the videoAdsPreferences property value. The video ads preference settings to apply to the specified listing in a campaign that uses the CPC funding model.
     * @param VideoAdsPreferences|null $value Value to set for the videoAdsPreferences property.
    */
    public function setVideoAdsPreferences(?VideoAdsPreferences $value): void {
        $this->videoAdsPreferences = $value;
    }

}
