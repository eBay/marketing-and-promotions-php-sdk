<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that contains the details for keywords that are associated with an ad group.<br /><br /><span class="tablenote"><b>Note:</b> This type only applies to the Cost Per Click (CPC) funding model; it does not apply to the Cost Per Sale (CPS) funding model.</span>
*/
class Keyword implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adGroupId This field identifies the ad group that the keyword is associated with.
    */
    private ?string $adGroupId = null;
    
    /**
     * @var Amount|null $bid A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $bid = null;
    
    /**
     * @var string|null $keywordId The unique identifier of a keyword.
    */
    private ?string $keywordId = null;
    
    /**
     * @var string|null $keywordStatus The status of the keyword.<br /><br /><b>Valid Values:</b><ul><li><code>ACTIVE</code></li><li><code>PAUSED</code></li><li><code>ARCHIVED</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:KeywordStatusEnum'>eBay API documentation</a>
    */
    private ?string $keywordStatus = null;
    
    /**
     * @var string|null $keywordText The text of the keyword.
    */
    private ?string $keywordText = null;
    
    /**
     * @var string|null $matchType A field that defines the match type for the keyword.<br /><br /><b>Valid Values:</b><ul><li><code>BROAD</code></li><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:MatchTypeEnum'>eBay API documentation</a>
    */
    private ?string $matchType = null;
    
    /**
     * Instantiates a new Keyword and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Keyword
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Keyword {
        return new Keyword();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adGroupId property value. This field identifies the ad group that the keyword is associated with.
     * @return string|null
    */
    public function getAdGroupId(): ?string {
        return $this->adGroupId;
    }

    /**
     * Gets the bid property value. A complex type that describes the value of a monetary amount as represented by a global currency.
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
            'keywordId' => fn(ParseNode $n) => $o->setKeywordId($n->getStringValue()),
            'keywordStatus' => fn(ParseNode $n) => $o->setKeywordStatus($n->getStringValue()),
            'keywordText' => fn(ParseNode $n) => $o->setKeywordText($n->getStringValue()),
            'matchType' => fn(ParseNode $n) => $o->setMatchType($n->getStringValue()),
        ];
    }

    /**
     * Gets the keywordId property value. The unique identifier of a keyword.
     * @return string|null
    */
    public function getKeywordId(): ?string {
        return $this->keywordId;
    }

    /**
     * Gets the keywordStatus property value. The status of the keyword.<br /><br /><b>Valid Values:</b><ul><li><code>ACTIVE</code></li><li><code>PAUSED</code></li><li><code>ARCHIVED</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:KeywordStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getKeywordStatus(): ?string {
        return $this->keywordStatus;
    }

    /**
     * Gets the keywordText property value. The text of the keyword.
     * @return string|null
    */
    public function getKeywordText(): ?string {
        return $this->keywordText;
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
        $writer->writeStringValue('adGroupId', $this->getAdGroupId());
        $writer->writeObjectValue('bid', $this->getBid());
        $writer->writeStringValue('keywordId', $this->getKeywordId());
        $writer->writeStringValue('keywordStatus', $this->getKeywordStatus());
        $writer->writeStringValue('keywordText', $this->getKeywordText());
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
     * Sets the adGroupId property value. This field identifies the ad group that the keyword is associated with.
     * @param string|null $value Value to set for the adGroupId property.
    */
    public function setAdGroupId(?string $value): void {
        $this->adGroupId = $value;
    }

    /**
     * Sets the bid property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the bid property.
    */
    public function setBid(?Amount $value): void {
        $this->bid = $value;
    }

    /**
     * Sets the keywordId property value. The unique identifier of a keyword.
     * @param string|null $value Value to set for the keywordId property.
    */
    public function setKeywordId(?string $value): void {
        $this->keywordId = $value;
    }

    /**
     * Sets the keywordStatus property value. The status of the keyword.<br /><br /><b>Valid Values:</b><ul><li><code>ACTIVE</code></li><li><code>PAUSED</code></li><li><code>ARCHIVED</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:KeywordStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the keywordStatus property.
    */
    public function setKeywordStatus(?string $value): void {
        $this->keywordStatus = $value;
    }

    /**
     * Sets the keywordText property value. The text of the keyword.
     * @param string|null $value Value to set for the keywordText property.
    */
    public function setKeywordText(?string $value): void {
        $this->keywordText = $value;
    }

    /**
     * Sets the matchType property value. A field that defines the match type for the keyword.<br /><br /><b>Valid Values:</b><ul><li><code>BROAD</code></li><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:MatchTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the matchType property.
    */
    public function setMatchType(?string $value): void {
        $this->matchType = $value;
    }

}
