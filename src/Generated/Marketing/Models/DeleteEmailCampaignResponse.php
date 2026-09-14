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
 * This type defines the response payload for the <b>deleteEmailCampaign</b> method.
*/
class DeleteEmailCampaignResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $emailCampaignId The unique eBay-assigned ID for the email campaign that is generated when the email campaign is created.
    */
    private ?string $emailCampaignId = null;
    
    /**
     * Instantiates a new DeleteEmailCampaignResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeleteEmailCampaignResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeleteEmailCampaignResponse {
        return new DeleteEmailCampaignResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the emailCampaignId property value. The unique eBay-assigned ID for the email campaign that is generated when the email campaign is created.
     * @return string|null
    */
    public function getEmailCampaignId(): ?string {
        return $this->emailCampaignId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'emailCampaignId' => fn(ParseNode $n) => $o->setEmailCampaignId($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('emailCampaignId', $this->getEmailCampaignId());
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
     * Sets the emailCampaignId property value. The unique eBay-assigned ID for the email campaign that is generated when the email campaign is created.
     * @param string|null $value Value to set for the emailCampaignId property.
    */
    public function setEmailCampaignId(?string $value): void {
        $this->emailCampaignId = $value;
    }

}
