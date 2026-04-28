<?php

namespace EBay\MarketingAndPromotions\Generated\Recommendation\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * An list of listing ID values for which you want Promoted Listings ad configuration information.
*/
class FindListingRecommendationRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $listingIds A comma-separated list of listing IDs for which you want Promoted Listings ad configuration information.  <p>Currently, this method accepts only <b>listingId</b> values from the Trading API.</p>  <p><b>Max:</b> 500 listing IDs</p>
    */
    private ?array $listingIds = null;
    
    /**
     * Instantiates a new FindListingRecommendationRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FindListingRecommendationRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FindListingRecommendationRequest {
        return new FindListingRecommendationRequest();
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
            'listingIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setListingIds($val);
            },
        ];
    }

    /**
     * Gets the listingIds property value. A comma-separated list of listing IDs for which you want Promoted Listings ad configuration information.  <p>Currently, this method accepts only <b>listingId</b> values from the Trading API.</p>  <p><b>Max:</b> 500 listing IDs</p>
     * @return array<string>|null
    */
    public function getListingIds(): ?array {
        return $this->listingIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('listingIds', $this->getListingIds());
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
     * Sets the listingIds property value. A comma-separated list of listing IDs for which you want Promoted Listings ad configuration information.  <p>Currently, this method accepts only <b>listingId</b> values from the Trading API.</p>  <p><b>Max:</b> 500 listing IDs</p>
     * @param array<string>|null $value Value to set for the listingIds property.
    */
    public function setListingIds(?array $value): void {
        $this->listingIds = $value;
    }

}
