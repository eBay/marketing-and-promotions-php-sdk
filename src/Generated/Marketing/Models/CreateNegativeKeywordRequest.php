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
 * A type that defines the fields for the <b>CreateNegativeKeyword</b> request.
*/
class CreateNegativeKeywordRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adGroupId This adGroupId is created when an ad group is first created and associated with a campaign. This is the ad group to which the corresponding negative keyword will be added.<br /><br />Use the  <a href="/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups">getAdGroups</a> method to retrieve the ad group IDs for a seller.</span><br /><br /><i>Required if</i> the negative keyword is being created at the ad group level.
    */
    private ?string $adGroupId = null;
    
    /**
     * @var string|null $campaignId This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the set of negative keywords being created. <br><br> Use the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns" target="_blank">getCampaigns</a> method to retrieve campaign IDs.<br /><br /><i>Required if</i> the negative keyword is being created at the ad group level.
    */
    private ?string $campaignId = null;
    
    /**
     * @var string|null $negativeKeywordMatchType A field that defines the match type for the negative keyword.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> Broad matching of negative keywords is not currently supported.</span><br /><b>Valid Values:</b><ul><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:NegativeKeywordMatchTypeEnum'>eBay API documentation</a>
    */
    private ?string $negativeKeywordMatchType = null;
    
    /**
     * @var string|null $negativeKeywordText The negative keyword text.
    */
    private ?string $negativeKeywordText = null;
    
    /**
     * Instantiates a new CreateNegativeKeywordRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateNegativeKeywordRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateNegativeKeywordRequest {
        return new CreateNegativeKeywordRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adGroupId property value. This adGroupId is created when an ad group is first created and associated with a campaign. This is the ad group to which the corresponding negative keyword will be added.<br /><br />Use the  <a href="/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups">getAdGroups</a> method to retrieve the ad group IDs for a seller.</span><br /><br /><i>Required if</i> the negative keyword is being created at the ad group level.
     * @return string|null
    */
    public function getAdGroupId(): ?string {
        return $this->adGroupId;
    }

    /**
     * Gets the campaignId property value. This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the set of negative keywords being created. <br><br> Use the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns" target="_blank">getCampaigns</a> method to retrieve campaign IDs.<br /><br /><i>Required if</i> the negative keyword is being created at the ad group level.
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
            'negativeKeywordMatchType' => fn(ParseNode $n) => $o->setNegativeKeywordMatchType($n->getStringValue()),
            'negativeKeywordText' => fn(ParseNode $n) => $o->setNegativeKeywordText($n->getStringValue()),
        ];
    }

    /**
     * Gets the negativeKeywordMatchType property value. A field that defines the match type for the negative keyword.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> Broad matching of negative keywords is not currently supported.</span><br /><b>Valid Values:</b><ul><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:NegativeKeywordMatchTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getNegativeKeywordMatchType(): ?string {
        return $this->negativeKeywordMatchType;
    }

    /**
     * Gets the negativeKeywordText property value. The negative keyword text.
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
        $writer->writeStringValue('negativeKeywordMatchType', $this->getNegativeKeywordMatchType());
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
     * Sets the adGroupId property value. This adGroupId is created when an ad group is first created and associated with a campaign. This is the ad group to which the corresponding negative keyword will be added.<br /><br />Use the  <a href="/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups">getAdGroups</a> method to retrieve the ad group IDs for a seller.</span><br /><br /><i>Required if</i> the negative keyword is being created at the ad group level.
     * @param string|null $value Value to set for the adGroupId property.
    */
    public function setAdGroupId(?string $value): void {
        $this->adGroupId = $value;
    }

    /**
     * Sets the campaignId property value. This path parameter specifies the unique eBay-assigned identifier of the ad campaign associated with the set of negative keywords being created. <br><br> Use the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns" target="_blank">getCampaigns</a> method to retrieve campaign IDs.<br /><br /><i>Required if</i> the negative keyword is being created at the ad group level.
     * @param string|null $value Value to set for the campaignId property.
    */
    public function setCampaignId(?string $value): void {
        $this->campaignId = $value;
    }

    /**
     * Sets the negativeKeywordMatchType property value. A field that defines the match type for the negative keyword.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> Broad matching of negative keywords is not currently supported.</span><br /><b>Valid Values:</b><ul><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:NegativeKeywordMatchTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the negativeKeywordMatchType property.
    */
    public function setNegativeKeywordMatchType(?string $value): void {
        $this->negativeKeywordMatchType = $value;
    }

    /**
     * Sets the negativeKeywordText property value. The negative keyword text.
     * @param string|null $value Value to set for the negativeKeywordText property.
    */
    public function setNegativeKeywordText(?string $value): void {
        $this->negativeKeywordText = $value;
    }

}
