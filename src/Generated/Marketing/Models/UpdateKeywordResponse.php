<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that contains the fields for the <b>UpdateKeyword</b> response.
*/
class UpdateKeywordResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<Error>|null $errors This container will be returned if there are one or more issues associated with modifying the corresponding keyword.
    */
    private ?array $errors = null;
    
    /**
     * @var string|null $keywordId This field identifies the keyword that the seller updated, or attempted to update.
    */
    private ?string $keywordId = null;
    
    /**
     * @var int|null $statusCode An HTTP status code is returned for each keyword to indicate the success or failure of updating that keyword.
    */
    private ?int $statusCode = null;
    
    /**
     * @var array<Error>|null $warnings List of warnings associated with this operation
    */
    private ?array $warnings = null;
    
    /**
     * Instantiates a new UpdateKeywordResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateKeywordResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateKeywordResponse {
        return new UpdateKeywordResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the errors property value. This container will be returned if there are one or more issues associated with modifying the corresponding keyword.
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
            'keywordId' => fn(ParseNode $n) => $o->setKeywordId($n->getStringValue()),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getCollectionOfObjectValues([Error::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the keywordId property value. This field identifies the keyword that the seller updated, or attempted to update.
     * @return string|null
    */
    public function getKeywordId(): ?string {
        return $this->keywordId;
    }

    /**
     * Gets the statusCode property value. An HTTP status code is returned for each keyword to indicate the success or failure of updating that keyword.
     * @return int|null
    */
    public function getStatusCode(): ?int {
        return $this->statusCode;
    }

    /**
     * Gets the warnings property value. List of warnings associated with this operation
     * @return array<Error>|null
    */
    public function getWarnings(): ?array {
        return $this->warnings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('errors', $this->getErrors());
        $writer->writeStringValue('keywordId', $this->getKeywordId());
        $writer->writeIntegerValue('statusCode', $this->getStatusCode());
        $writer->writeCollectionOfObjectValues('warnings', $this->getWarnings());
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
     * Sets the errors property value. This container will be returned if there are one or more issues associated with modifying the corresponding keyword.
     * @param array<Error>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the keywordId property value. This field identifies the keyword that the seller updated, or attempted to update.
     * @param string|null $value Value to set for the keywordId property.
    */
    public function setKeywordId(?string $value): void {
        $this->keywordId = $value;
    }

    /**
     * Sets the statusCode property value. An HTTP status code is returned for each keyword to indicate the success or failure of updating that keyword.
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

    /**
     * Sets the warnings property value. List of warnings associated with this operation
     * @param array<Error>|null $value Value to set for the warnings property.
    */
    public function setWarnings(?array $value): void {
        $this->warnings = $value;
    }

}
