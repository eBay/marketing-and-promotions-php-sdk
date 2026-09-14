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
 * This type defines the fields for the <b>UpdateAdGroup</b> request.
*/
class UpdateAdGroupRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var AdGroupStatusEnum|null $adGroupStatus An enumeration value representing the current status of the ad group.<p>If the status of the ad is currently <code>ACTIVE</code>, you can change status to <code>PAUSED</code> or <code>ARCHIVED</code>. If ad group is currently in <code>PAUSED</code> status, you can change the status back to <code>ACTIVE</code>. Ads that are currently in <code>ARCHIVED</code> status cannot be made <code>ACTIVE</code> again.<br /><br /><b>Valid Values:</b><ul><li><code>ACTIVE</code></li><li><code>PAUSED</code></li><li><code>ARCHIVED</code></li></ul>
    */
    private ?AdGroupStatusEnum $adGroupStatus = null;
    
    /**
     * @var Amount|null $defaultBid A bid amount that applies to all of the keywords in an ad group that do not have individual bids.
    */
    private ?Amount $defaultBid = null;
    
    /**
     * @var string|null $name The updated name for the specified ad group.
    */
    private ?string $name = null;
    
    /**
     * Instantiates a new UpdateAdGroupRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateAdGroupRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateAdGroupRequest {
        return new UpdateAdGroupRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adGroupStatus property value. An enumeration value representing the current status of the ad group.<p>If the status of the ad is currently <code>ACTIVE</code>, you can change status to <code>PAUSED</code> or <code>ARCHIVED</code>. If ad group is currently in <code>PAUSED</code> status, you can change the status back to <code>ACTIVE</code>. Ads that are currently in <code>ARCHIVED</code> status cannot be made <code>ACTIVE</code> again.<br /><br /><b>Valid Values:</b><ul><li><code>ACTIVE</code></li><li><code>PAUSED</code></li><li><code>ARCHIVED</code></li></ul>
     * @return AdGroupStatusEnum|null
    */
    public function getAdGroupStatus(): ?AdGroupStatusEnum {
        return $this->adGroupStatus;
    }

    /**
     * Gets the defaultBid property value. A bid amount that applies to all of the keywords in an ad group that do not have individual bids.
     * @return Amount|null
    */
    public function getDefaultBid(): ?Amount {
        return $this->defaultBid;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adGroupStatus' => fn(ParseNode $n) => $o->setAdGroupStatus($n->getEnumValue(AdGroupStatusEnum::class)),
            'defaultBid' => fn(ParseNode $n) => $o->setDefaultBid($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. The updated name for the specified ad group.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('adGroupStatus', $this->getAdGroupStatus());
        $writer->writeObjectValue('defaultBid', $this->getDefaultBid());
        $writer->writeStringValue('name', $this->getName());
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
     * Sets the adGroupStatus property value. An enumeration value representing the current status of the ad group.<p>If the status of the ad is currently <code>ACTIVE</code>, you can change status to <code>PAUSED</code> or <code>ARCHIVED</code>. If ad group is currently in <code>PAUSED</code> status, you can change the status back to <code>ACTIVE</code>. Ads that are currently in <code>ARCHIVED</code> status cannot be made <code>ACTIVE</code> again.<br /><br /><b>Valid Values:</b><ul><li><code>ACTIVE</code></li><li><code>PAUSED</code></li><li><code>ARCHIVED</code></li></ul>
     * @param AdGroupStatusEnum|null $value Value to set for the adGroupStatus property.
    */
    public function setAdGroupStatus(?AdGroupStatusEnum $value): void {
        $this->adGroupStatus = $value;
    }

    /**
     * Sets the defaultBid property value. A bid amount that applies to all of the keywords in an ad group that do not have individual bids.
     * @param Amount|null $value Value to set for the defaultBid property.
    */
    public function setDefaultBid(?Amount $value): void {
        $this->defaultBid = $value;
    }

    /**
     * Sets the name property value. The updated name for the specified ad group.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

}
