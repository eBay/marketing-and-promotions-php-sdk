<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that defines the keywords of the paged collection.
*/
class TargetedBidsPagedCollection implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<SuggestedBids>|null $suggestedBids A list of bids in the paginated collection.
    */
    private ?array $suggestedBids = null;
    
    /**
     * Instantiates a new TargetedBidsPagedCollection and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TargetedBidsPagedCollection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TargetedBidsPagedCollection {
        return new TargetedBidsPagedCollection();
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
            'suggestedBids' => fn(ParseNode $n) => $o->setSuggestedBids($n->getCollectionOfObjectValues([SuggestedBids::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the suggestedBids property value. A list of bids in the paginated collection.
     * @return array<SuggestedBids>|null
    */
    public function getSuggestedBids(): ?array {
        return $this->suggestedBids;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('suggestedBids', $this->getSuggestedBids());
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
     * Sets the suggestedBids property value. A list of bids in the paginated collection.
     * @param array<SuggestedBids>|null $value Value to set for the suggestedBids property.
    */
    public function setSuggestedBids(?array $value): void {
        $this->suggestedBids = $value;
    }

}
