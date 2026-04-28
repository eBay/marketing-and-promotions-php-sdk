<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that defines the fields used by the <b>Keyword</b> method.
*/
class KeywordRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $keywordText The text of the keyword. Keywords are not case sensitive and compound words can be used without additional encoding (for example, tennis ball).<br><br>You can use the <a href="/api-docs/sell/marketing/resources/keyword/methods/getKeywords">getKeywords</a> method to retrieve keyword values currently associated with the specified ad group.<br /><br /><b>Maximum number of characters: </b>100 <br /><br /><b>Maximum number of words: </b>10 
    */
    private ?string $keywordText = null;
    
    /**
     * @var string|null $matchType A field that defines the match type for the keyword.<br /><br /><b>Valid Values:</b><ul><li><code>BROAD</code></li><li><code>EXACT</code></li><li><code>PHRASE</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:MatchTypeEnum'>eBay API documentation</a>
    */
    private ?string $matchType = null;
    
    /**
     * Instantiates a new KeywordRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return KeywordRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): KeywordRequest {
        return new KeywordRequest();
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
            'matchType' => fn(ParseNode $n) => $o->setMatchType($n->getStringValue()),
        ];
    }

    /**
     * Gets the keywordText property value. The text of the keyword. Keywords are not case sensitive and compound words can be used without additional encoding (for example, tennis ball).<br><br>You can use the <a href="/api-docs/sell/marketing/resources/keyword/methods/getKeywords">getKeywords</a> method to retrieve keyword values currently associated with the specified ad group.<br /><br /><b>Maximum number of characters: </b>100 <br /><br /><b>Maximum number of words: </b>10 
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
     * Sets the keywordText property value. The text of the keyword. Keywords are not case sensitive and compound words can be used without additional encoding (for example, tennis ball).<br><br>You can use the <a href="/api-docs/sell/marketing/resources/keyword/methods/getKeywords">getKeywords</a> method to retrieve keyword values currently associated with the specified ad group.<br /><br /><b>Maximum number of characters: </b>100 <br /><br /><b>Maximum number of words: </b>10 
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
