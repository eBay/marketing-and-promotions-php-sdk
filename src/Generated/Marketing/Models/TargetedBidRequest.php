<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that defines the targeted bid.
*/
class TargetedBidRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<KeywordRequest>|null $keywords An array of keywords for which bids will be required. <br /><br /><b>Maximum number of keywords: </b>500
    */
    private ?array $keywords = null;
    
    /**
     * Instantiates a new TargetedBidRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TargetedBidRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TargetedBidRequest {
        return new TargetedBidRequest();
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
            'keywords' => fn(ParseNode $n) => $o->setKeywords($n->getCollectionOfObjectValues([KeywordRequest::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the keywords property value. An array of keywords for which bids will be required. <br /><br /><b>Maximum number of keywords: </b>500
     * @return array<KeywordRequest>|null
    */
    public function getKeywords(): ?array {
        return $this->keywords;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('keywords', $this->getKeywords());
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
     * Sets the keywords property value. An array of keywords for which bids will be required. <br /><br /><b>Maximum number of keywords: </b>500
     * @param array<KeywordRequest>|null $value Value to set for the keywords property.
    */
    public function setKeywords(?array $value): void {
        $this->keywords = $value;
    }

}
