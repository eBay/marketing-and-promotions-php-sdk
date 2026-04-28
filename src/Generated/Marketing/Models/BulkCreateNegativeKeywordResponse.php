<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that contains the response fields for the bulk request to create negative keywords.
*/
class BulkCreateNegativeKeywordResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<NegativeKeywordResponse>|null $responses A list of negative keywords that have been processed by the request.
    */
    private ?array $responses = null;
    
    /**
     * Instantiates a new BulkCreateNegativeKeywordResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BulkCreateNegativeKeywordResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BulkCreateNegativeKeywordResponse {
        return new BulkCreateNegativeKeywordResponse();
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
            'responses' => fn(ParseNode $n) => $o->setResponses($n->getCollectionOfObjectValues([NegativeKeywordResponse::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the responses property value. A list of negative keywords that have been processed by the request.
     * @return array<NegativeKeywordResponse>|null
    */
    public function getResponses(): ?array {
        return $this->responses;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('responses', $this->getResponses());
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
     * Sets the responses property value. A list of negative keywords that have been processed by the request.
     * @param array<NegativeKeywordResponse>|null $value Value to set for the responses property.
    */
    public function setResponses(?array $value): void {
        $this->responses = $value;
    }

}
