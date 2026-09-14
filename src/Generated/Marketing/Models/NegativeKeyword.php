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
 * A type that defines the fields for a negative keyword.
*/
class NegativeKeyword implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adGroupId An ad group ID that is generated when an ad group is first created and associated with a campaign.<br /><br /><span class="tablenote"><b>Note:</b> You can call the <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-getadgroups">getAdGroups</a> method to retrieve the ad group IDs for a seller.</span>
    */
    private ?string $adGroupId = null;
    
    /**
     * @var string|null $campaignId A unique eBay-assigned ID for a campaign. This ID is generated when a campaign is created.
    */
    private ?string $campaignId = null;
    
    /**
     * @var string|null $negativeKeywordId A unique eBay-assigned ID for a negative keyword. This keyword ID will be generated for each successfully created negative keyword.
    */
    private ?string $negativeKeywordId = null;
    
    /**
     * @var NegativeKeywordMatchTypeEnum|null $negativeKeywordMatchType A field that defines the match type for the negative keyword.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> Broad matching of negative keywords is not currently supported.</span><br /><b>Valid Values:</b><ul><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul>
    */
    private ?NegativeKeywordMatchTypeEnum $negativeKeywordMatchType = null;
    
    /**
     * @var NegativeKeywordStatusEnum|null $negativeKeywordStatus A field that defines the status of the negative keyword.
    */
    private ?NegativeKeywordStatusEnum $negativeKeywordStatus = null;
    
    /**
     * @var string|null $negativeKeywordText The text for the negative keyword.
    */
    private ?string $negativeKeywordText = null;
    
    /**
     * Instantiates a new NegativeKeyword and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NegativeKeyword
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NegativeKeyword {
        return new NegativeKeyword();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adGroupId property value. An ad group ID that is generated when an ad group is first created and associated with a campaign.<br /><br /><span class="tablenote"><b>Note:</b> You can call the <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-getadgroups">getAdGroups</a> method to retrieve the ad group IDs for a seller.</span>
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adGroupId' => fn(ParseNode $n) => $o->setAdGroupId($n->getStringValue()),
            'campaignId' => fn(ParseNode $n) => $o->setCampaignId($n->getStringValue()),
            'negativeKeywordId' => fn(ParseNode $n) => $o->setNegativeKeywordId($n->getStringValue()),
            'negativeKeywordMatchType' => fn(ParseNode $n) => $o->setNegativeKeywordMatchType($n->getEnumValue(NegativeKeywordMatchTypeEnum::class)),
            'negativeKeywordStatus' => fn(ParseNode $n) => $o->setNegativeKeywordStatus($n->getEnumValue(NegativeKeywordStatusEnum::class)),
            'negativeKeywordText' => fn(ParseNode $n) => $o->setNegativeKeywordText($n->getStringValue()),
        ];
    }

    /**
     * Gets the negativeKeywordId property value. A unique eBay-assigned ID for a negative keyword. This keyword ID will be generated for each successfully created negative keyword.
     * @return string|null
    */
    public function getNegativeKeywordId(): ?string {
        return $this->negativeKeywordId;
    }

    /**
     * Gets the negativeKeywordMatchType property value. A field that defines the match type for the negative keyword.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> Broad matching of negative keywords is not currently supported.</span><br /><b>Valid Values:</b><ul><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul>
     * @return NegativeKeywordMatchTypeEnum|null
    */
    public function getNegativeKeywordMatchType(): ?NegativeKeywordMatchTypeEnum {
        return $this->negativeKeywordMatchType;
    }

    /**
     * Gets the negativeKeywordStatus property value. A field that defines the status of the negative keyword.
     * @return NegativeKeywordStatusEnum|null
    */
    public function getNegativeKeywordStatus(): ?NegativeKeywordStatusEnum {
        return $this->negativeKeywordStatus;
    }

    /**
     * Gets the negativeKeywordText property value. The text for the negative keyword.
     * @return string|null
    */
    public function getNegativeKeywordText(): ?string {
        return $this->negativeKeywordText;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adGroupId', $this->getAdGroupId());
        $writer->writeStringValue('campaignId', $this->getCampaignId());
        $writer->writeStringValue('negativeKeywordId', $this->getNegativeKeywordId());
        $writer->writeEnumValue('negativeKeywordMatchType', $this->getNegativeKeywordMatchType());
        $writer->writeEnumValue('negativeKeywordStatus', $this->getNegativeKeywordStatus());
        $writer->writeStringValue('negativeKeywordText', $this->getNegativeKeywordText());
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
     * Sets the adGroupId property value. An ad group ID that is generated when an ad group is first created and associated with a campaign.<br /><br /><span class="tablenote"><b>Note:</b> You can call the <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-getadgroups">getAdGroups</a> method to retrieve the ad group IDs for a seller.</span>
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
     * Sets the negativeKeywordId property value. A unique eBay-assigned ID for a negative keyword. This keyword ID will be generated for each successfully created negative keyword.
     * @param string|null $value Value to set for the negativeKeywordId property.
    */
    public function setNegativeKeywordId(?string $value): void {
        $this->negativeKeywordId = $value;
    }

    /**
     * Sets the negativeKeywordMatchType property value. A field that defines the match type for the negative keyword.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> Broad matching of negative keywords is not currently supported.</span><br /><b>Valid Values:</b><ul><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul>
     * @param NegativeKeywordMatchTypeEnum|null $value Value to set for the negativeKeywordMatchType property.
    */
    public function setNegativeKeywordMatchType(?NegativeKeywordMatchTypeEnum $value): void {
        $this->negativeKeywordMatchType = $value;
    }

    /**
     * Sets the negativeKeywordStatus property value. A field that defines the status of the negative keyword.
     * @param NegativeKeywordStatusEnum|null $value Value to set for the negativeKeywordStatus property.
    */
    public function setNegativeKeywordStatus(?NegativeKeywordStatusEnum $value): void {
        $this->negativeKeywordStatus = $value;
    }

    /**
     * Sets the negativeKeywordText property value. The text for the negative keyword.
     * @param string|null $value Value to set for the negativeKeywordText property.
    */
    public function setNegativeKeywordText(?string $value): void {
        $this->negativeKeywordText = $value;
    }

}
