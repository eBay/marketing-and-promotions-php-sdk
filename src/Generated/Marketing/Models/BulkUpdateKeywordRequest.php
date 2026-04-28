<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that defines the fields for the <b>BulkUpdateKeyword</b> request.
*/
class BulkUpdateKeywordRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<UpdateKeywordByKeywordIdRequest>|null $requests Use this array to update the bid values and/or statuses of one or more existing keywords.
    */
    private ?array $requests = null;
    
    /**
     * Instantiates a new BulkUpdateKeywordRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BulkUpdateKeywordRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BulkUpdateKeywordRequest {
        return new BulkUpdateKeywordRequest();
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
            'requests' => fn(ParseNode $n) => $o->setRequests($n->getCollectionOfObjectValues([UpdateKeywordByKeywordIdRequest::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the requests property value. Use this array to update the bid values and/or statuses of one or more existing keywords.
     * @return array<UpdateKeywordByKeywordIdRequest>|null
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
     * Sets the requests property value. Use this array to update the bid values and/or statuses of one or more existing keywords.
     * @param array<UpdateKeywordByKeywordIdRequest>|null $value Value to set for the requests property.
    */
    public function setRequests(?array $value): void {
        $this->requests = $value;
    }

}
