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
 * A type that contains the fields for the <b>UpdateAdStatus</b> request.
*/
class UpdateAdStatusRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adId A unique eBay-assigned identifier for an ad that belongs to the specified campaign.<br><br> Use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad-getads">getAds</a> method to retrieve ad IDs.
    */
    private ?string $adId = null;
    
    /**
     * @var AdStatusEnum|null $adStatus An enumeration value representing the status you wish to update the specified ad to.<br /><br /><b>Valid Values:</b><ul><li><code>ACTIVE</code></li><li><code>PAUSED</code></li><li><code>ARCHIVED</code></li></ul>
    */
    private ?AdStatusEnum $adStatus = null;
    
    /**
     * Instantiates a new UpdateAdStatusRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateAdStatusRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateAdStatusRequest {
        return new UpdateAdStatusRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adId property value. A unique eBay-assigned identifier for an ad that belongs to the specified campaign.<br><br> Use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad-getads">getAds</a> method to retrieve ad IDs.
     * @return string|null
    */
    public function getAdId(): ?string {
        return $this->adId;
    }

    /**
     * Gets the adStatus property value. An enumeration value representing the status you wish to update the specified ad to.<br /><br /><b>Valid Values:</b><ul><li><code>ACTIVE</code></li><li><code>PAUSED</code></li><li><code>ARCHIVED</code></li></ul>
     * @return AdStatusEnum|null
    */
    public function getAdStatus(): ?AdStatusEnum {
        return $this->adStatus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adId' => fn(ParseNode $n) => $o->setAdId($n->getStringValue()),
            'adStatus' => fn(ParseNode $n) => $o->setAdStatus($n->getEnumValue(AdStatusEnum::class)),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adId', $this->getAdId());
        $writer->writeEnumValue('adStatus', $this->getAdStatus());
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
     * Sets the adId property value. A unique eBay-assigned identifier for an ad that belongs to the specified campaign.<br><br> Use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad-getads">getAds</a> method to retrieve ad IDs.
     * @param string|null $value Value to set for the adId property.
    */
    public function setAdId(?string $value): void {
        $this->adId = $value;
    }

    /**
     * Sets the adStatus property value. An enumeration value representing the status you wish to update the specified ad to.<br /><br /><b>Valid Values:</b><ul><li><code>ACTIVE</code></li><li><code>PAUSED</code></li><li><code>ARCHIVED</code></li></ul>
     * @param AdStatusEnum|null $value Value to set for the adStatus property.
    */
    public function setAdStatus(?AdStatusEnum $value): void {
        $this->adStatus = $value;
    }

}
