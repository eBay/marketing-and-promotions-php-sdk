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
 * A type that defines the negative keyword response.
*/
class NegativeKeywordResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adGroupId A unique identifier for an ad group that is generated when an ad group is first created and associated with a campaign.
    */
    private ?string $adGroupId = null;
    
    /**
     * @var string|null $campaignId A unique eBay-assigned ID for a campaign. This ID is generated when a campaign is created.
    */
    private ?string $campaignId = null;
    
    /**
     * @var array<Error>|null $errors This container will be returned if there is an issue creating the corresponding negative keyword.
    */
    private ?array $errors = null;
    
    /**
     * @var string|null $href The URI for the negative keyword, which is used to retrieve the negative keyword. This URI will be returned for each successfully created negative keyword.
    */
    private ?string $href = null;
    
    /**
     * @var string|null $negativeKeywordId A unique eBay-assigned ID for a negative keyword. This negative keyword ID will be generated for each successfully created negative keyword.
    */
    private ?string $negativeKeywordId = null;
    
    /**
     * @var string|null $negativeKeywordMatchType The match type for the negative keyword.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> Broad matching of negative keywords is not currently supported.</span><br /><b>Valid Values:</b><ul><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:NegativeKeywordMatchTypeEnum'>eBay API documentation</a>
    */
    private ?string $negativeKeywordMatchType = null;
    
    /**
     * @var string|null $negativeKeywordText The text for the negative keyword.
    */
    private ?string $negativeKeywordText = null;
    
    /**
     * @var int|null $statusCode The status of the request to create a negative keyword. This field indicates whether the process was successful or not.
    */
    private ?int $statusCode = null;
    
    /**
     * Instantiates a new NegativeKeywordResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NegativeKeywordResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NegativeKeywordResponse {
        return new NegativeKeywordResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adGroupId property value. A unique identifier for an ad group that is generated when an ad group is first created and associated with a campaign.
     * @return string|null
    */
    public function getAdGroupId(): ?string {
        return $this->adGroupId;
    }

    /**
     * Gets the campaignId property value. A unique eBay-assigned ID for a campaign. This ID is generated when a campaign is created.
     * @return string|null
    */
    public function getCampaignId(): ?string {
        return $this->campaignId;
    }

    /**
     * Gets the errors property value. This container will be returned if there is an issue creating the corresponding negative keyword.
     * @return array<Error>|null
    */
    public function getErrors(): ?array {
        return $this->errors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adGroupId' => fn(ParseNode $n) => $o->setAdGroupId($n->getStringValue()),
            'campaignId' => fn(ParseNode $n) => $o->setCampaignId($n->getStringValue()),
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([Error::class, 'createFromDiscriminatorValue'])),
            'href' => fn(ParseNode $n) => $o->setHref($n->getStringValue()),
            'negativeKeywordId' => fn(ParseNode $n) => $o->setNegativeKeywordId($n->getStringValue()),
            'negativeKeywordMatchType' => fn(ParseNode $n) => $o->setNegativeKeywordMatchType($n->getStringValue()),
            'negativeKeywordText' => fn(ParseNode $n) => $o->setNegativeKeywordText($n->getStringValue()),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the href property value. The URI for the negative keyword, which is used to retrieve the negative keyword. This URI will be returned for each successfully created negative keyword.
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the negativeKeywordId property value. A unique eBay-assigned ID for a negative keyword. This negative keyword ID will be generated for each successfully created negative keyword.
     * @return string|null
    */
    public function getNegativeKeywordId(): ?string {
        return $this->negativeKeywordId;
    }

    /**
     * Gets the negativeKeywordMatchType property value. The match type for the negative keyword.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> Broad matching of negative keywords is not currently supported.</span><br /><b>Valid Values:</b><ul><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:NegativeKeywordMatchTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getNegativeKeywordMatchType(): ?string {
        return $this->negativeKeywordMatchType;
    }

    /**
     * Gets the negativeKeywordText property value. The text for the negative keyword.
     * @return string|null
    */
    public function getNegativeKeywordText(): ?string {
        return $this->negativeKeywordText;
    }

    /**
     * Gets the statusCode property value. The status of the request to create a negative keyword. This field indicates whether the process was successful or not.
     * @return int|null
    */
    public function getStatusCode(): ?int {
        return $this->statusCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adGroupId', $this->getAdGroupId());
        $writer->writeStringValue('campaignId', $this->getCampaignId());
        $writer->writeCollectionOfObjectValues('errors', $this->getErrors());
        $writer->writeStringValue('href', $this->getHref());
        $writer->writeStringValue('negativeKeywordId', $this->getNegativeKeywordId());
        $writer->writeStringValue('negativeKeywordMatchType', $this->getNegativeKeywordMatchType());
        $writer->writeStringValue('negativeKeywordText', $this->getNegativeKeywordText());
        $writer->writeIntegerValue('statusCode', $this->getStatusCode());
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
     * Sets the adGroupId property value. A unique identifier for an ad group that is generated when an ad group is first created and associated with a campaign.
     * @param string|null $value Value to set for the adGroupId property.
    */
    public function setAdGroupId(?string $value): void {
        $this->adGroupId = $value;
    }

    /**
     * Sets the campaignId property value. A unique eBay-assigned ID for a campaign. This ID is generated when a campaign is created.
     * @param string|null $value Value to set for the campaignId property.
    */
    public function setCampaignId(?string $value): void {
        $this->campaignId = $value;
    }

    /**
     * Sets the errors property value. This container will be returned if there is an issue creating the corresponding negative keyword.
     * @param array<Error>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the href property value. The URI for the negative keyword, which is used to retrieve the negative keyword. This URI will be returned for each successfully created negative keyword.
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the negativeKeywordId property value. A unique eBay-assigned ID for a negative keyword. This negative keyword ID will be generated for each successfully created negative keyword.
     * @param string|null $value Value to set for the negativeKeywordId property.
    */
    public function setNegativeKeywordId(?string $value): void {
        $this->negativeKeywordId = $value;
    }

    /**
     * Sets the negativeKeywordMatchType property value. The match type for the negative keyword.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> Broad matching of negative keywords is not currently supported.</span><br /><b>Valid Values:</b><ul><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:NegativeKeywordMatchTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the negativeKeywordMatchType property.
    */
    public function setNegativeKeywordMatchType(?string $value): void {
        $this->negativeKeywordMatchType = $value;
    }

    /**
     * Sets the negativeKeywordText property value. The text for the negative keyword.
     * @param string|null $value Value to set for the negativeKeywordText property.
    */
    public function setNegativeKeywordText(?string $value): void {
        $this->negativeKeywordText = $value;
    }

    /**
     * Sets the statusCode property value. The status of the request to create a negative keyword. This field indicates whether the process was successful or not.
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

}
