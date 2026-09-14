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
 * A type that defines the response fields used by the <b>Keyword</b> method.
*/
class KeywordResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adGroupId The identifier of the ad group that the keyword was added to.
    */
    private ?string $adGroupId = null;
    
    /**
     * @var array<ErrorDetailV3>|null $errors This container will be returned if there is an issue creating the corresponding keyword and/or adding that keyword to the corresponding ad group.
    */
    private ?array $errors = null;
    
    /**
     * @var string|null $href The getKeyword URI for the keyword, which is used to retrieve the keyword. This URI will be returned for each successfully created keyword.
    */
    private ?string $href = null;
    
    /**
     * @var string|null $keywordId A unique eBay-assigned ID for a keyword that is generated for an ad group. This keyword ID will be generated for each successfully created keyword.
    */
    private ?string $keywordId = null;
    
    /**
     * @var string|null $keywordText The text of the keyword.
    */
    private ?string $keywordText = null;
    
    /**
     * @var MatchTypeEnum|null $matchType A field that defines the match type for the keyword.<br /><br /><b>Valid Values:</b><ul><li><code>BROAD</code></li><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul>
    */
    private ?MatchTypeEnum $matchType = null;
    
    /**
     * @var int|null $statusCode An HTTP status code is returned for each keyword to indicate the success or failure of adding that keyword to the ad group.
    */
    private ?int $statusCode = null;
    
    /**
     * @var array<ErrorDetailV3>|null $warnings List of warnings associated with this operation
    */
    private ?array $warnings = null;
    
    /**
     * Instantiates a new KeywordResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return KeywordResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): KeywordResponse {
        return new KeywordResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adGroupId property value. The identifier of the ad group that the keyword was added to.
     * @return string|null
    */
    public function getAdGroupId(): ?string {
        return $this->adGroupId;
    }

    /**
     * Gets the errors property value. This container will be returned if there is an issue creating the corresponding keyword and/or adding that keyword to the corresponding ad group.
     * @return array<ErrorDetailV3>|null
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
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([ErrorDetailV3::class, 'createFromDiscriminatorValue'])),
            'href' => fn(ParseNode $n) => $o->setHref($n->getStringValue()),
            'keywordId' => fn(ParseNode $n) => $o->setKeywordId($n->getStringValue()),
            'keywordText' => fn(ParseNode $n) => $o->setKeywordText($n->getStringValue()),
            'matchType' => fn(ParseNode $n) => $o->setMatchType($n->getEnumValue(MatchTypeEnum::class)),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([ErrorDetailV3::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the href property value. The getKeyword URI for the keyword, which is used to retrieve the keyword. This URI will be returned for each successfully created keyword.
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the keywordId property value. A unique eBay-assigned ID for a keyword that is generated for an ad group. This keyword ID will be generated for each successfully created keyword.
     * @return string|null
    */
    public function getKeywordId(): ?string {
        return $this->keywordId;
    }

    /**
     * Gets the keywordText property value. The text of the keyword.
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
     * Gets the statusCode property value. An HTTP status code is returned for each keyword to indicate the success or failure of adding that keyword to the ad group.
     * @return int|null
    */
    public function getStatusCode(): ?int {
        return $this->statusCode;
    }

    /**
     * Gets the warnings property value. List of warnings associated with this operation
     * @return array<ErrorDetailV3>|null
    */
    public function getWarnings(): ?array {
        return $this->warnings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adGroupId', $this->getAdGroupId());
        $writer->writeCollectionOfObjectValues('errors', $this->getErrors());
        $writer->writeStringValue('href', $this->getHref());
        $writer->writeStringValue('keywordId', $this->getKeywordId());
        $writer->writeStringValue('keywordText', $this->getKeywordText());
        $writer->writeEnumValue('matchType', $this->getMatchType());
        $writer->writeIntegerValue('statusCode', $this->getStatusCode());
        $writer->writeCollectionOfObjectValues('warnings', $this->getWarnings());
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
     * Sets the adGroupId property value. The identifier of the ad group that the keyword was added to.
     * @param string|null $value Value to set for the adGroupId property.
    */
    public function setAdGroupId(?string $value): void {
        $this->adGroupId = $value;
    }

    /**
     * Sets the errors property value. This container will be returned if there is an issue creating the corresponding keyword and/or adding that keyword to the corresponding ad group.
     * @param array<ErrorDetailV3>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the href property value. The getKeyword URI for the keyword, which is used to retrieve the keyword. This URI will be returned for each successfully created keyword.
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the keywordId property value. A unique eBay-assigned ID for a keyword that is generated for an ad group. This keyword ID will be generated for each successfully created keyword.
     * @param string|null $value Value to set for the keywordId property.
    */
    public function setKeywordId(?string $value): void {
        $this->keywordId = $value;
    }

    /**
     * Sets the keywordText property value. The text of the keyword.
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
     * Sets the statusCode property value. An HTTP status code is returned for each keyword to indicate the success or failure of adding that keyword to the ad group.
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

    /**
     * Sets the warnings property value. List of warnings associated with this operation
     * @param array<ErrorDetailV3>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
