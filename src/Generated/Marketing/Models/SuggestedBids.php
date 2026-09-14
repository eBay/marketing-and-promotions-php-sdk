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
 * This type defines the suggested bid rate for the keyword.
*/
class SuggestedBids implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $keywordText The text for the keyword.
    */
    private ?string $keywordText = null;
    
    /**
     * @var MatchTypeEnum|null $matchType A field that defines the match type for the keyword.<br /><br /><b>Valid Values:</b><ul><li><code>BROAD</code></li><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul>
    */
    private ?MatchTypeEnum $matchType = null;
    
    /**
     * @var ProposedBid|null $proposedBid The suggested bid associated with the keyword. 
    */
    private ?ProposedBid $proposedBid = null;
    
    /**
     * Instantiates a new SuggestedBids and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SuggestedBids
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SuggestedBids {
        return new SuggestedBids();
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
            'keywordText' => fn(ParseNode $n) => $o->setKeywordText($n->getStringValue()),
            'matchType' => fn(ParseNode $n) => $o->setMatchType($n->getEnumValue(MatchTypeEnum::class)),
            'proposedBid' => fn(ParseNode $n) => $o->setProposedBid($n->getObjectValue([ProposedBid::class, 'createFromDiscriminatorValue'])),
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
     * Gets the proposedBid property value. The suggested bid associated with the keyword. 
     * @return ProposedBid|null
    */
    public function getProposedBid(): ?ProposedBid {
        return $this->proposedBid;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('keywordText', $this->getKeywordText());
        $writer->writeEnumValue('matchType', $this->getMatchType());
        $writer->writeObjectValue('proposedBid', $this->getProposedBid());
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

    /**
     * Sets the proposedBid property value. The suggested bid associated with the keyword. 
     * @param ProposedBid|null $value Value to set for the proposedBid property.
    */
    public function setProposedBid(?ProposedBid $value): void {
        $this->proposedBid = $value;
    }

}
