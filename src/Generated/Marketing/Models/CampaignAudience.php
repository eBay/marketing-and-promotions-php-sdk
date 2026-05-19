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
 * This is the object for a single email campaign audience.
*/
class CampaignAudience implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $audienceType This enum value indicates the audience type. For the complete list of audience types and their associated enum values, see <a href="/api-docs/sell/marketing/types/api:AudienceTypeEnum">AudienceTypeEnum</a>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:AudienceTypeEnum'>eBay API documentation</a>
    */
    private ?string $audienceType = null;
    
    /**
     * @var string|null $code The unique code for an audience. 
    */
    private ?string $code = null;
    
    /**
     * @var string|null $name The display name for an audience.
    */
    private ?string $name = null;
    
    /**
     * Instantiates a new CampaignAudience and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CampaignAudience
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CampaignAudience {
        return new CampaignAudience();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the audienceType property value. This enum value indicates the audience type. For the complete list of audience types and their associated enum values, see <a href="/api-docs/sell/marketing/types/api:AudienceTypeEnum">AudienceTypeEnum</a>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:AudienceTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getAudienceType(): ?string {
        return $this->audienceType;
    }

    /**
     * Gets the code property value. The unique code for an audience. 
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'audienceType' => fn(ParseNode $n) => $o->setAudienceType($n->getStringValue()),
            'code' => fn(ParseNode $n) => $o->setCode($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. The display name for an audience.
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
        $writer->writeStringValue('audienceType', $this->getAudienceType());
        $writer->writeStringValue('code', $this->getCode());
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
     * Sets the audienceType property value. This enum value indicates the audience type. For the complete list of audience types and their associated enum values, see <a href="/api-docs/sell/marketing/types/api:AudienceTypeEnum">AudienceTypeEnum</a>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:AudienceTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the audienceType property.
    */
    public function setAudienceType(?string $value): void {
        $this->audienceType = $value;
    }

    /**
     * Sets the code property value. The unique code for an audience. 
     * @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value): void {
        $this->code = $value;
    }

    /**
     * Sets the name property value. The display name for an audience.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

}
