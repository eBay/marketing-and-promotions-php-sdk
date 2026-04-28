<?php

namespace EBay\MarketingAndPromotions\Generated\Recommendation\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A complex type that contains information about how a seller can improve their listing configurations. The <code>AD</code> object contains Promoted Listings recommendations and information, which the seller can use to improve buyer conversions. The response can also contain an optional message about the returned data.
*/
class MarketingRecommendation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var Ad|null $ad A complex type that contains recommendations and information on how to configure Promoted Listings ad campaigns.
    */
    private ?Ad $ad = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $message A message that can conditionally accompany the listing information.
    */
    private ?string $message = null;
    
    /**
     * Instantiates a new MarketingRecommendation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MarketingRecommendation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MarketingRecommendation {
        return new MarketingRecommendation();
    }

    /**
     * Gets the ad property value. A complex type that contains recommendations and information on how to configure Promoted Listings ad campaigns.
     * @return Ad|null
    */
    public function getAd(): ?Ad {
        return $this->ad;
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
            'ad' => fn(ParseNode $n) => $o->setAd($n->getObjectValue([Ad::class, 'createFromDiscriminatorValue'])),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
        ];
    }

    /**
     * Gets the message property value. A message that can conditionally accompany the listing information.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('ad', $this->getAd());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the ad property value. A complex type that contains recommendations and information on how to configure Promoted Listings ad campaigns.
     * @param Ad|null $value Value to set for the ad property.
    */
    public function setAd(?Ad $value): void {
        $this->ad = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the message property value. A message that can conditionally accompany the listing information.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->message = $value;
    }

}
