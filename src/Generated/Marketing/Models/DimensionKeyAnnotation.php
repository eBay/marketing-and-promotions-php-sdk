<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the annotation values associated with a dimension. Annotations are metadata of the dimension. For example, annotations for a listing ID could be <code>listing_title</code> or <code>listing_quantity_sold</code>.
*/
class DimensionKeyAnnotation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $annotationKey An annotation key associated with the dimension.
    */
    private ?string $annotationKey = null;
    
    /**
     * @var string|null $dataType The data type of the annotation key value. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:DataTypeEnum'>eBay API documentation</a>
    */
    private ?string $dataType = null;
    
    /**
     * Instantiates a new DimensionKeyAnnotation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DimensionKeyAnnotation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DimensionKeyAnnotation {
        return new DimensionKeyAnnotation();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the annotationKey property value. An annotation key associated with the dimension.
     * @return string|null
    */
    public function getAnnotationKey(): ?string {
        return $this->annotationKey;
    }

    /**
     * Gets the dataType property value. The data type of the annotation key value. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:DataTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getDataType(): ?string {
        return $this->dataType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'annotationKey' => fn(ParseNode $n) => $o->setAnnotationKey($n->getStringValue()),
            'dataType' => fn(ParseNode $n) => $o->setDataType($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('annotationKey', $this->getAnnotationKey());
        $writer->writeStringValue('dataType', $this->getDataType());
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
     * Sets the annotationKey property value. An annotation key associated with the dimension.
     * @param string|null $value Value to set for the annotationKey property.
    */
    public function setAnnotationKey(?string $value): void {
        $this->annotationKey = $value;
    }

    /**
     * Sets the dataType property value. The data type of the annotation key value. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:DataTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the dataType property.
    */
    public function setDataType(?string $value): void {
        $this->dataType = $value;
    }

}
