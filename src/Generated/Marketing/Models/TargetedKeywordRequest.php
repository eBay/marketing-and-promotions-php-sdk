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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A type that provides details for the targeted keywords.
*/
class TargetedKeywordRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $additionalInfo A field used to indicate whether additional information and insight data shall be provided for suggested keywords.<br><br>Use this array to retrieve keyword insights, including active seller count and search volume.<br /><br /><strong>Valid Value:</strong> <code>KEYWORD_INSIGHTS</code>
    */
    private ?array $additionalInfo = null;
    
    /**
     * @var array<string>|null $exclusions A field used to indicate that the keywords already selected by sellers for the specified listing IDs should be filtered out of the response, and only new and unique keyword recommendations shall be returned.<br /><br /><strong>Valid Value:</strong> <code>ADOPTED_KEYWORDS</code>
    */
    private ?array $exclusions = null;
    
    /**
     * @var array<string>|null $listingIds A set of comma-separated listing IDs for the specific listings you wish to retrieve suggested keywords. <br /><br /><b>Maximum number of listings requested: </b>300
    */
    private ?array $listingIds = null;
    
    /**
     * @var string|null $matchType A field that defines the match type for the keyword.<br /><br /><b>Valid Values:</b><ul><li><code>BROAD</code></li><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:MatchTypeEnum'>eBay API documentation</a>
    */
    private ?string $matchType = null;
    
    /**
     * Instantiates a new TargetedKeywordRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TargetedKeywordRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TargetedKeywordRequest {
        return new TargetedKeywordRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalInfo property value. A field used to indicate whether additional information and insight data shall be provided for suggested keywords.<br><br>Use this array to retrieve keyword insights, including active seller count and search volume.<br /><br /><strong>Valid Value:</strong> <code>KEYWORD_INSIGHTS</code>
     * @return array<string>|null
    */
    public function getAdditionalInfo(): ?array {
        return $this->additionalInfo;
    }

    /**
     * Gets the exclusions property value. A field used to indicate that the keywords already selected by sellers for the specified listing IDs should be filtered out of the response, and only new and unique keyword recommendations shall be returned.<br /><br /><strong>Valid Value:</strong> <code>ADOPTED_KEYWORDS</code>
     * @return array<string>|null
    */
    public function getExclusions(): ?array {
        return $this->exclusions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalInfo' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAdditionalInfo($val);
            },
            'exclusions' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setExclusions($val);
            },
            'listingIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setListingIds($val);
            },
            'matchType' => fn(ParseNode $n) => $o->setMatchType($n->getStringValue()),
        ];
    }

    /**
     * Gets the listingIds property value. A set of comma-separated listing IDs for the specific listings you wish to retrieve suggested keywords. <br /><br /><b>Maximum number of listings requested: </b>300
     * @return array<string>|null
    */
    public function getListingIds(): ?array {
        return $this->listingIds;
    }

    /**
     * Gets the matchType property value. A field that defines the match type for the keyword.<br /><br /><b>Valid Values:</b><ul><li><code>BROAD</code></li><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:MatchTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getMatchType(): ?string {
        return $this->matchType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('additionalInfo', $this->getAdditionalInfo());
        $writer->writeCollectionOfPrimitiveValues('exclusions', $this->getExclusions());
        $writer->writeCollectionOfPrimitiveValues('listingIds', $this->getListingIds());
        $writer->writeStringValue('matchType', $this->getMatchType());
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
     * Sets the additionalInfo property value. A field used to indicate whether additional information and insight data shall be provided for suggested keywords.<br><br>Use this array to retrieve keyword insights, including active seller count and search volume.<br /><br /><strong>Valid Value:</strong> <code>KEYWORD_INSIGHTS</code>
     * @param array<string>|null $value Value to set for the additionalInfo property.
    */
    public function setAdditionalInfo(?array $value): void {
        $this->additionalInfo = $value;
    }

    /**
     * Sets the exclusions property value. A field used to indicate that the keywords already selected by sellers for the specified listing IDs should be filtered out of the response, and only new and unique keyword recommendations shall be returned.<br /><br /><strong>Valid Value:</strong> <code>ADOPTED_KEYWORDS</code>
     * @param array<string>|null $value Value to set for the exclusions property.
    */
    public function setExclusions(?array $value): void {
        $this->exclusions = $value;
    }

    /**
     * Sets the listingIds property value. A set of comma-separated listing IDs for the specific listings you wish to retrieve suggested keywords. <br /><br /><b>Maximum number of listings requested: </b>300
     * @param array<string>|null $value Value to set for the listingIds property.
    */
    public function setListingIds(?array $value): void {
        $this->listingIds = $value;
    }

    /**
     * Sets the matchType property value. A field that defines the match type for the keyword.<br /><br /><b>Valid Values:</b><ul><li><code>BROAD</code></li><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:MatchTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the matchType property.
    */
    public function setMatchType(?string $value): void {
        $this->matchType = $value;
    }

}
