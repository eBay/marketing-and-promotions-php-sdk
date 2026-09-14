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
 * This type defines the status of a markdown discount.
*/
class ItemMarkdownStatus implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var ItemMarkdownStatusEnum|null $listingMarkdownStatus Indicates the state assigned to the markdown discount using one of the <b>status</b> values.
    */
    private ?ItemMarkdownStatusEnum $listingMarkdownStatus = null;
    
    /**
     * @var string|null $statusChangedDate Identifies the date the last time the state of the discount changed. Both both markdown and markup events can trigger a status change.
    */
    private ?string $statusChangedDate = null;
    
    /**
     * @var string|null $statusMessage An eBay-assigned text string that describes the status of the discount.
    */
    private ?string $statusMessage = null;
    
    /**
     * Instantiates a new ItemMarkdownStatus and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemMarkdownStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemMarkdownStatus {
        return new ItemMarkdownStatus();
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
            'listingMarkdownStatus' => fn(ParseNode $n) => $o->setListingMarkdownStatus($n->getEnumValue(ItemMarkdownStatusEnum::class)),
            'statusChangedDate' => fn(ParseNode $n) => $o->setStatusChangedDate($n->getStringValue()),
            'statusMessage' => fn(ParseNode $n) => $o->setStatusMessage($n->getStringValue()),
        ];
    }

    /**
     * Gets the listingMarkdownStatus property value. Indicates the state assigned to the markdown discount using one of the <b>status</b> values.
     * @return ItemMarkdownStatusEnum|null
    */
    public function getListingMarkdownStatus(): ?ItemMarkdownStatusEnum {
        return $this->listingMarkdownStatus;
    }

    /**
     * Gets the statusChangedDate property value. Identifies the date the last time the state of the discount changed. Both both markdown and markup events can trigger a status change.
     * @return string|null
    */
    public function getStatusChangedDate(): ?string {
        return $this->statusChangedDate;
    }

    /**
     * Gets the statusMessage property value. An eBay-assigned text string that describes the status of the discount.
     * @return string|null
    */
    public function getStatusMessage(): ?string {
        return $this->statusMessage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('listingMarkdownStatus', $this->getListingMarkdownStatus());
        $writer->writeStringValue('statusChangedDate', $this->getStatusChangedDate());
        $writer->writeStringValue('statusMessage', $this->getStatusMessage());
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
     * Sets the listingMarkdownStatus property value. Indicates the state assigned to the markdown discount using one of the <b>status</b> values.
     * @param ItemMarkdownStatusEnum|null $value Value to set for the listingMarkdownStatus property.
    */
    public function setListingMarkdownStatus(?ItemMarkdownStatusEnum $value): void {
        $this->listingMarkdownStatus = $value;
    }

    /**
     * Sets the statusChangedDate property value. Identifies the date the last time the state of the discount changed. Both both markdown and markup events can trigger a status change.
     * @param string|null $value Value to set for the statusChangedDate property.
    */
    public function setStatusChangedDate(?string $value): void {
        $this->statusChangedDate = $value;
    }

    /**
     * Sets the statusMessage property value. An eBay-assigned text string that describes the status of the discount.
     * @param string|null $value Value to set for the statusMessage property.
    */
    public function setStatusMessage(?string $value): void {
        $this->statusMessage = $value;
    }

}
