<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that defines the fields used to update a negative keyword.
*/
class UpdateNegativeKeywordIdRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $negativeKeywordId A unique eBay-assigned ID for a negative keyword. This keyword ID will be generated for each successfully created negative keyword.<br><br>Use the <a href="/api-docs/sell/marketing/resources/negative_keyword/methods/getNegativeKeywords" target="_blank">getNegativeKeywords</a> method to retrieve negative keyword IDs.
    */
    private ?string $negativeKeywordId = null;
    
    /**
     * @var string|null $negativeKeywordStatus A field that defines the status of the negative keyword.<br><br>See <a href="/api-docs/sell/marketing/types/pls:NegativeKeywordStatusEnum" target="_blank">NegativeKeywordStatusEnum</a> for supported values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:NegativeKeywordStatusEnum'>eBay API documentation</a>
    */
    private ?string $negativeKeywordStatus = null;
    
    /**
     * Instantiates a new UpdateNegativeKeywordIdRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateNegativeKeywordIdRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateNegativeKeywordIdRequest {
        return new UpdateNegativeKeywordIdRequest();
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
            'negativeKeywordId' => fn(ParseNode $n) => $o->setNegativeKeywordId($n->getStringValue()),
            'negativeKeywordStatus' => fn(ParseNode $n) => $o->setNegativeKeywordStatus($n->getStringValue()),
        ];
    }

    /**
     * Gets the negativeKeywordId property value. A unique eBay-assigned ID for a negative keyword. This keyword ID will be generated for each successfully created negative keyword.<br><br>Use the <a href="/api-docs/sell/marketing/resources/negative_keyword/methods/getNegativeKeywords" target="_blank">getNegativeKeywords</a> method to retrieve negative keyword IDs.
     * @return string|null
    */
    public function getNegativeKeywordId(): ?string {
        return $this->negativeKeywordId;
    }

    /**
     * Gets the negativeKeywordStatus property value. A field that defines the status of the negative keyword.<br><br>See <a href="/api-docs/sell/marketing/types/pls:NegativeKeywordStatusEnum" target="_blank">NegativeKeywordStatusEnum</a> for supported values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:NegativeKeywordStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getNegativeKeywordStatus(): ?string {
        return $this->negativeKeywordStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('negativeKeywordId', $this->getNegativeKeywordId());
        $writer->writeStringValue('negativeKeywordStatus', $this->getNegativeKeywordStatus());
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
     * Sets the negativeKeywordId property value. A unique eBay-assigned ID for a negative keyword. This keyword ID will be generated for each successfully created negative keyword.<br><br>Use the <a href="/api-docs/sell/marketing/resources/negative_keyword/methods/getNegativeKeywords" target="_blank">getNegativeKeywords</a> method to retrieve negative keyword IDs.
     * @param string|null $value Value to set for the negativeKeywordId property.
    */
    public function setNegativeKeywordId(?string $value): void {
        $this->negativeKeywordId = $value;
    }

    /**
     * Sets the negativeKeywordStatus property value. A field that defines the status of the negative keyword.<br><br>See <a href="/api-docs/sell/marketing/types/pls:NegativeKeywordStatusEnum" target="_blank">NegativeKeywordStatusEnum</a> for supported values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:NegativeKeywordStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the negativeKeywordStatus property.
    */
    public function setNegativeKeywordStatus(?string $value): void {
        $this->negativeKeywordStatus = $value;
    }

}
