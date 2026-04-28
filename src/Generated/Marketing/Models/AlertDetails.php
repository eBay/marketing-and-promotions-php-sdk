<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that contains the alert detail fields.
*/
class AlertDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Aspect|null $aspect A type that contains the aspect fields.
    */
    private ?Aspect $aspect = null;
    
    /**
     * @var AlertDimension|null $dimension A type that contains the dimension fields.
    */
    private ?AlertDimension $dimension = null;
    
    /**
     * Instantiates a new AlertDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlertDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlertDetails {
        return new AlertDetails();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the aspect property value. A type that contains the aspect fields.
     * @return Aspect|null
    */
    public function getAspect(): ?Aspect {
        return $this->aspect;
    }

    /**
     * Gets the dimension property value. A type that contains the dimension fields.
     * @return AlertDimension|null
    */
    public function getDimension(): ?AlertDimension {
        return $this->dimension;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'aspect' => fn(ParseNode $n) => $o->setAspect($n->getObjectValue([Aspect::class, 'createFromDiscriminatorValue'])),
            'dimension' => fn(ParseNode $n) => $o->setDimension($n->getObjectValue([AlertDimension::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('aspect', $this->getAspect());
        $writer->writeObjectValue('dimension', $this->getDimension());
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
     * Sets the aspect property value. A type that contains the aspect fields.
     * @param Aspect|null $value Value to set for the aspect property.
    */
    public function setAspect(?Aspect $value): void {
        $this->aspect = $value;
    }

    /**
     * Sets the dimension property value. A type that contains the dimension fields.
     * @param AlertDimension|null $value Value to set for the dimension property.
    */
    public function setDimension(?AlertDimension $value): void {
        $this->dimension = $value;
    }

}
