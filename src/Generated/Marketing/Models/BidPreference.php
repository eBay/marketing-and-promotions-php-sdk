<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type indicates the bidding preferences of a Smart Targeting campaign.<br><br><span class="tablenote"><b>Note:</b> This type is only supported for CPC funding model campaigns with on-site channels.</span>
*/
class BidPreference implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var MaxCpc|null $maxCpc The maxCpc property
    */
    private ?MaxCpc $maxCpc = null;
    
    /**
     * Instantiates a new BidPreference and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BidPreference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BidPreference {
        return new BidPreference();
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
            'maxCpc' => fn(ParseNode $n) => $o->setMaxCpc($n->getObjectValue([MaxCpc::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the maxCpc property value. The maxCpc property
     * @return MaxCpc|null
    */
    public function getMaxCpc(): ?MaxCpc {
        return $this->maxCpc;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('maxCpc', $this->getMaxCpc());
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
     * Sets the maxCpc property value. The maxCpc property
     * @param MaxCpc|null $value Value to set for the maxCpc property.
    */
    public function setMaxCpc(?MaxCpc $value): void {
        $this->maxCpc = $value;
    }

}
