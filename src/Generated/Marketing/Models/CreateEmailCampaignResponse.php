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

class CreateEmailCampaignResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $emailCampaignId The unique eBay-assigned identifier of the email campaign. It is generated automatically when the email campaign is created.<br><br>This value is returned unless there is an error.
    */
    private ?string $emailCampaignId = null;
    
    /**
     * @var string|null $emailCampaignStatus The status of the email campaign.<br><br><code>ACTIVE</code> is returned for email campaigns that have been successfully created but not been sent.<br><br><code>SENT</code> is returned for email campaigns that have already been sent.<br><br><code>ERROR</code> is returned when an email has not been successfully created. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum'>eBay API documentation</a>
    */
    private ?string $emailCampaignStatus = null;
    
    /**
     * Instantiates a new CreateEmailCampaignResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateEmailCampaignResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateEmailCampaignResponse {
        return new CreateEmailCampaignResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the emailCampaignId property value. The unique eBay-assigned identifier of the email campaign. It is generated automatically when the email campaign is created.<br><br>This value is returned unless there is an error.
     * @return string|null
    */
    public function getEmailCampaignId(): ?string {
        return $this->emailCampaignId;
    }

    /**
     * Gets the emailCampaignStatus property value. The status of the email campaign.<br><br><code>ACTIVE</code> is returned for email campaigns that have been successfully created but not been sent.<br><br><code>SENT</code> is returned for email campaigns that have already been sent.<br><br><code>ERROR</code> is returned when an email has not been successfully created. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getEmailCampaignStatus(): ?string {
        return $this->emailCampaignStatus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'emailCampaignId' => fn(ParseNode $n) => $o->setEmailCampaignId($n->getStringValue()),
            'emailCampaignStatus' => fn(ParseNode $n) => $o->setEmailCampaignStatus($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('emailCampaignId', $this->getEmailCampaignId());
        $writer->writeStringValue('emailCampaignStatus', $this->getEmailCampaignStatus());
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
     * Sets the emailCampaignId property value. The unique eBay-assigned identifier of the email campaign. It is generated automatically when the email campaign is created.<br><br>This value is returned unless there is an error.
     * @param string|null $value Value to set for the emailCampaignId property.
    */
    public function setEmailCampaignId(?string $value): void {
        $this->emailCampaignId = $value;
    }

    /**
     * Sets the emailCampaignStatus property value. The status of the email campaign.<br><br><code>ACTIVE</code> is returned for email campaigns that have been successfully created but not been sent.<br><br><code>SENT</code> is returned for email campaigns that have already been sent.<br><br><code>ERROR</code> is returned when an email has not been successfully created. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the emailCampaignStatus property.
    */
    public function setEmailCampaignStatus(?string $value): void {
        $this->emailCampaignStatus = $value;
    }

}
