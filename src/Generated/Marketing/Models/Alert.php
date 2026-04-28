<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that contains the alert message fields for the ad.
*/
class Alert implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $alertType The type of alert message. For example, an invalid bid percentage. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:AlertTypeEnum'>eBay API documentation</a>
    */
    private ?string $alertType = null;
    
    /**
     * @var array<AlertDetails>|null $details A description of the alert including dimensions and aspects.
    */
    private ?array $details = null;
    
    /**
     * Instantiates a new Alert and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Alert
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Alert {
        return new Alert();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the alertType property value. The type of alert message. For example, an invalid bid percentage. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:AlertTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getAlertType(): ?string {
        return $this->alertType;
    }

    /**
     * Gets the details property value. A description of the alert including dimensions and aspects.
     * @return array<AlertDetails>|null
    */
    public function getDetails(): ?array {
        return $this->details;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alertType' => fn(ParseNode $n) => $o->setAlertType($n->getStringValue()),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getCollectionOfObjectValues([AlertDetails::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('alertType', $this->getAlertType());
        $writer->writeCollectionOfObjectValues('details', $this->getDetails());
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
     * Sets the alertType property value. The type of alert message. For example, an invalid bid percentage. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:AlertTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the alertType property.
    */
    public function setAlertType(?string $value): void {
        $this->alertType = $value;
    }

    /**
     * Sets the details property value. A description of the alert including dimensions and aspects.
     * @param array<AlertDetails>|null $value Value to set for the details property.
    */
    public function setDetails(?array $value): void {
        $this->details = $value;
    }

}
