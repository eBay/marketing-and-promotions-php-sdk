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
 * A type that defines the fields for the <b>CreateKeyword</b> request.
*/
class CreateKeywordRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adGroupId This <b>adGroupId</b> is created when an ad group is first created and associated with a campaign. This is the ad group that the corresponding keyword will be added to. This ad group must be a part of the campaign that is specified in the call URI. Use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-getadgroups">getAdGroups</a> method to retrieve the ad group IDs for a seller, and <a href="/develop/api/sell/marketing_api#sell-marketing_api-keyword-getkeywords">getKeywords</a> to retrieve the keyword IDs for a seller's keywords.
    */
    private ?string $adGroupId = null;
    
    /**
     * @var Amount|null $bid This container is used to set the maximum bid for the keyword. Each time a listing is retrieved in search results using this keyword and clicked on, the seller will be charged, at most, this amount. Each click goes toward the daily budget set up for the CPC campaign. If the bid is not provided, then the default bid associated with the ad group is used.<br /><br /><span class="tablenote"><b>Note:</b> You can call the  <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-suggestbids">suggestBids</a> method to retrieve the suggested bids for keywords.</span>
    */
    private ?Amount $bid = null;
    
    /**
     * @var string|null $keywordText The text of the keyword. Keywords are not case sensitive and compound words can be used without additional encoding (for example, tennis ball).<br><br><b>Maximum number of characters:</b> 100<br><br><b>Maximum number of words:</b> 10
    */
    private ?string $keywordText = null;
    
    /**
     * @var MatchTypeEnum|null $matchType A field that defines the match type for the keyword.<br /><br /><b>Valid Values:</b><ul><li><code>BROAD</code></li><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul>
    */
    private ?MatchTypeEnum $matchType = null;
    
    /**
     * Instantiates a new CreateKeywordRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateKeywordRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateKeywordRequest {
        return new CreateKeywordRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adGroupId property value. This <b>adGroupId</b> is created when an ad group is first created and associated with a campaign. This is the ad group that the corresponding keyword will be added to. This ad group must be a part of the campaign that is specified in the call URI. Use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-getadgroups">getAdGroups</a> method to retrieve the ad group IDs for a seller, and <a href="/develop/api/sell/marketing_api#sell-marketing_api-keyword-getkeywords">getKeywords</a> to retrieve the keyword IDs for a seller's keywords.
     * @return string|null
    */
    public function getAdGroupId(): ?string {
        return $this->adGroupId;
    }

    /**
     * Gets the bid property value. This container is used to set the maximum bid for the keyword. Each time a listing is retrieved in search results using this keyword and clicked on, the seller will be charged, at most, this amount. Each click goes toward the daily budget set up for the CPC campaign. If the bid is not provided, then the default bid associated with the ad group is used.<br /><br /><span class="tablenote"><b>Note:</b> You can call the  <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-suggestbids">suggestBids</a> method to retrieve the suggested bids for keywords.</span>
     * @return Amount|null
    */
    public function getBid(): ?Amount {
        return $this->bid;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adGroupId' => fn(ParseNode $n) => $o->setAdGroupId($n->getStringValue()),
            'bid' => fn(ParseNode $n) => $o->setBid($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'keywordText' => fn(ParseNode $n) => $o->setKeywordText($n->getStringValue()),
            'matchType' => fn(ParseNode $n) => $o->setMatchType($n->getEnumValue(MatchTypeEnum::class)),
        ];
    }

    /**
     * Gets the keywordText property value. The text of the keyword. Keywords are not case sensitive and compound words can be used without additional encoding (for example, tennis ball).<br><br><b>Maximum number of characters:</b> 100<br><br><b>Maximum number of words:</b> 10
     * @return string|null
    */
    public function getKeywordText(): ?string {
        return $this->keywordText;
    }

    /**
     * Gets the matchType property value. A field that defines the match type for the keyword.<br /><br /><b>Valid Values:</b><ul><li><code>BROAD</code></li><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul>
     * @return MatchTypeEnum|null
    */
    public function getMatchType(): ?MatchTypeEnum {
        return $this->matchType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adGroupId', $this->getAdGroupId());
        $writer->writeObjectValue('bid', $this->getBid());
        $writer->writeStringValue('keywordText', $this->getKeywordText());
        $writer->writeEnumValue('matchType', $this->getMatchType());
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
     * Sets the adGroupId property value. This <b>adGroupId</b> is created when an ad group is first created and associated with a campaign. This is the ad group that the corresponding keyword will be added to. This ad group must be a part of the campaign that is specified in the call URI. Use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-getadgroups">getAdGroups</a> method to retrieve the ad group IDs for a seller, and <a href="/develop/api/sell/marketing_api#sell-marketing_api-keyword-getkeywords">getKeywords</a> to retrieve the keyword IDs for a seller's keywords.
     * @param string|null $value Value to set for the adGroupId property.
    */
    public function setAdGroupId(?string $value): void {
        $this->adGroupId = $value;
    }

    /**
     * Sets the bid property value. This container is used to set the maximum bid for the keyword. Each time a listing is retrieved in search results using this keyword and clicked on, the seller will be charged, at most, this amount. Each click goes toward the daily budget set up for the CPC campaign. If the bid is not provided, then the default bid associated with the ad group is used.<br /><br /><span class="tablenote"><b>Note:</b> You can call the  <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_group-suggestbids">suggestBids</a> method to retrieve the suggested bids for keywords.</span>
     * @param Amount|null $value Value to set for the bid property.
    */
    public function setBid(?Amount $value): void {
        $this->bid = $value;
    }

    /**
     * Sets the keywordText property value. The text of the keyword. Keywords are not case sensitive and compound words can be used without additional encoding (for example, tennis ball).<br><br><b>Maximum number of characters:</b> 100<br><br><b>Maximum number of words:</b> 10
     * @param string|null $value Value to set for the keywordText property.
    */
    public function setKeywordText(?string $value): void {
        $this->keywordText = $value;
    }

    /**
     * Sets the matchType property value. A field that defines the match type for the keyword.<br /><br /><b>Valid Values:</b><ul><li><code>BROAD</code></li><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul>
     * @param MatchTypeEnum|null $value Value to set for the matchType property.
    */
    public function setMatchType(?MatchTypeEnum $value): void {
        $this->matchType = $value;
    }

}
