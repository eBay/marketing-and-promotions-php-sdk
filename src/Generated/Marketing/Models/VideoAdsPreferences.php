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
 * This request type defines the video ads preference settings to apply to a single listing in a Promoted Listings campaign that uses the CPC funding model. It is used as the <b>videoAdsPreferences</b> field value in both <b>bulkUpsertVideoAdsPreferences</b> and <b>upsertVideoAdsPreferences</b>.
*/
class VideoAdsPreferences implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var bool|null $videoAdsEnabled When <code>true</code>, video ads are enabled for the specified listing in the campaign, and any ads associated with that listing ID within the campaign are opted into video ads. When <code>false</code>, any ads associated with the specified listing ID within the campaign are opted out of video ads.
    */
    private ?bool $videoAdsEnabled = null;
    
    /**
     * Instantiates a new VideoAdsPreferences and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VideoAdsPreferences
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VideoAdsPreferences {
        return new VideoAdsPreferences();
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
            'videoAdsEnabled' => fn(ParseNode $n) => $o->setVideoAdsEnabled($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the videoAdsEnabled property value. When <code>true</code>, video ads are enabled for the specified listing in the campaign, and any ads associated with that listing ID within the campaign are opted into video ads. When <code>false</code>, any ads associated with the specified listing ID within the campaign are opted out of video ads.
     * @return bool|null
    */
    public function getVideoAdsEnabled(): ?bool {
        return $this->videoAdsEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('videoAdsEnabled', $this->getVideoAdsEnabled());
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
     * Sets the videoAdsEnabled property value. When <code>true</code>, video ads are enabled for the specified listing in the campaign, and any ads associated with that listing ID within the campaign are opted into video ads. When <code>false</code>, any ads associated with the specified listing ID within the campaign are opted out of video ads.
     * @param bool|null $value Value to set for the videoAdsEnabled property.
    */
    public function setVideoAdsEnabled(?bool $value): void {
        $this->videoAdsEnabled = $value;
    }

}
