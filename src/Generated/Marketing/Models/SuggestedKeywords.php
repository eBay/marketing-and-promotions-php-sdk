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
 * This type defines the suggested keywords for the item.
*/
class SuggestedKeywords implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<AdditionalInfo>|null $additionalInfo A container for the additional information and compiled insight data for suggested keywords. 
    */
    private ?array $additionalInfo = null;
    
    /**
     * @var string|null $keywordText The text for the keyword.
    */
    private ?string $keywordText = null;
    
    /**
     * @var MatchTypeEnum|null $matchType A field that defines the match type for the keyword.<br /><br /><b>Valid Values:</b><ul><li><code>BROAD</code></li><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul>
    */
    private ?MatchTypeEnum $matchType = null;
    
    /**
     * Instantiates a new SuggestedKeywords and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SuggestedKeywords
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SuggestedKeywords {
        return new SuggestedKeywords();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalInfo property value. A container for the additional information and compiled insight data for suggested keywords. 
     * @return array<AdditionalInfo>|null
    */
    public function getAdditionalInfo(): ?array {
        return $this->additionalInfo;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalInfo' => fn(ParseNode $n) => $o->setAdditionalInfo($n->getCollectionOfObjectValues([AdditionalInfo::class, 'createFromDiscriminatorValue'])),
            'keywordText' => fn(ParseNode $n) => $o->setKeywordText($n->getStringValue()),
            'matchType' => fn(ParseNode $n) => $o->setMatchType($n->getEnumValue(MatchTypeEnum::class)),
        ];
    }

    /**
     * Gets the keywordText property value. The text for the keyword.
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
        $writer->writeCollectionOfObjectValues('additionalInfo', $this->getAdditionalInfo());
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
     * Sets the additionalInfo property value. A container for the additional information and compiled insight data for suggested keywords. 
     * @param array<AdditionalInfo>|null $value Value to set for the additionalInfo property.
    */
    public function setAdditionalInfo(?array $value): void {
        $this->additionalInfo = $value;
    }

    /**
     * Sets the keywordText property value. The text for the keyword.
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
