<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that contains the fields for the bulk request to create negative keywords.
*/
class BulkCreateNegativeKeywordRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CreateNegativeKeywordRequest>|null $requests This array is used to pass in multiple negative keywords for one or more ad groups that belong to a campaign that uses the Cost Per Click (CPC) funding model.
    */
    private ?array $requests = null;
    
    /**
     * Instantiates a new BulkCreateNegativeKeywordRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BulkCreateNegativeKeywordRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BulkCreateNegativeKeywordRequest {
        return new BulkCreateNegativeKeywordRequest();
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
            'requests' => fn(ParseNode $n) => $o->setRequests($n->getCollectionOfObjectValues([CreateNegativeKeywordRequest::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the requests property value. This array is used to pass in multiple negative keywords for one or more ad groups that belong to a campaign that uses the Cost Per Click (CPC) funding model.
     * @return array<CreateNegativeKeywordRequest>|null
    */
    public function getRequests(): ?array {
        return $this->requests;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('requests', $this->getRequests());
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
     * Sets the requests property value. This array is used to pass in multiple negative keywords for one or more ad groups that belong to a campaign that uses the Cost Per Click (CPC) funding model.
     * @param array<CreateNegativeKeywordRequest>|null $value Value to set for the requests property.
    */
    public function setRequests(?array $value): void {
        $this->requests = $value;
    }

}
