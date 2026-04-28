<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that contains the fields for the <b>UpdateNegativeKeyword</b> response.
*/
class UpdateNegativeKeywordResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Error>|null $errors A container that will be returned if there are one or more issues associated with modifying the corresponding negative keyword.
    */
    private ?array $errors = null;
    
    /**
     * @var string|null $negativeKeywordId A unique eBay-assigned ID for a negative keyword. This keyword ID will be generated for each successfully created negative keyword.
    */
    private ?string $negativeKeywordId = null;
    
    /**
     * @var int|null $statusCode An HTTP status code that indicates the success or failure of updating that negative keyword.
    */
    private ?int $statusCode = null;
    
    /**
     * Instantiates a new UpdateNegativeKeywordResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateNegativeKeywordResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateNegativeKeywordResponse {
        return new UpdateNegativeKeywordResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the errors property value. A container that will be returned if there are one or more issues associated with modifying the corresponding negative keyword.
     * @return array<Error>|null
    */
    public function getErrors(): ?array {
        return $this->errors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([Error::class, 'createFromDiscriminatorValue'])),
            'negativeKeywordId' => fn(ParseNode $n) => $o->setNegativeKeywordId($n->getStringValue()),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the negativeKeywordId property value. A unique eBay-assigned ID for a negative keyword. This keyword ID will be generated for each successfully created negative keyword.
     * @return string|null
    */
    public function getNegativeKeywordId(): ?string {
        return $this->negativeKeywordId;
    }

    /**
     * Gets the statusCode property value. An HTTP status code that indicates the success or failure of updating that negative keyword.
     * @return int|null
    */
    public function getStatusCode(): ?int {
        return $this->statusCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('errors', $this->getErrors());
        $writer->writeStringValue('negativeKeywordId', $this->getNegativeKeywordId());
        $writer->writeIntegerValue('statusCode', $this->getStatusCode());
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
     * Sets the errors property value. A container that will be returned if there are one or more issues associated with modifying the corresponding negative keyword.
     * @param array<Error>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the negativeKeywordId property value. A unique eBay-assigned ID for a negative keyword. This keyword ID will be generated for each successfully created negative keyword.
     * @param string|null $value Value to set for the negativeKeywordId property.
    */
    public function setNegativeKeywordId(?string $value): void {
        $this->negativeKeywordId = $value;
    }

    /**
     * Sets the statusCode property value. An HTTP status code that indicates the success or failure of updating that negative keyword.
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

}
