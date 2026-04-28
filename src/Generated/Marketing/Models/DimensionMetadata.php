<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the dimension used to create the report and the annotation keys associated with that dimension.
*/
class DimensionMetadata implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $dataType The data type of the dimension value used to create the report. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:DataTypeEnum'>eBay API documentation</a>
    */
    private ?string $dataType = null;
    
    /**
     * @var string|null $dimensionKey The name of the dimension used to create the report.
    */
    private ?string $dimensionKey = null;
    
    /**
     * @var array<DimensionKeyAnnotation>|null $dimensionKeyAnnotations An list of annotation keys associated with the specified dimension of the report.
    */
    private ?array $dimensionKeyAnnotations = null;
    
    /**
     * Instantiates a new DimensionMetadata and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DimensionMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DimensionMetadata {
        return new DimensionMetadata();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the dataType property value. The data type of the dimension value used to create the report. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:DataTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getDataType(): ?string {
        return $this->dataType;
    }

    /**
     * Gets the dimensionKey property value. The name of the dimension used to create the report.
     * @return string|null
    */
    public function getDimensionKey(): ?string {
        return $this->dimensionKey;
    }

    /**
     * Gets the dimensionKeyAnnotations property value. An list of annotation keys associated with the specified dimension of the report.
     * @return array<DimensionKeyAnnotation>|null
    */
    public function getDimensionKeyAnnotations(): ?array {
        return $this->dimensionKeyAnnotations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dataType' => fn(ParseNode $n) => $o->setDataType($n->getStringValue()),
            'dimensionKey' => fn(ParseNode $n) => $o->setDimensionKey($n->getStringValue()),
            'dimensionKeyAnnotations' => fn(ParseNode $n) => $o->setDimensionKeyAnnotations($n->getCollectionOfObjectValues([DimensionKeyAnnotation::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('dataType', $this->getDataType());
        $writer->writeStringValue('dimensionKey', $this->getDimensionKey());
        $writer->writeCollectionOfObjectValues('dimensionKeyAnnotations', $this->getDimensionKeyAnnotations());
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
     * Sets the dataType property value. The data type of the dimension value used to create the report. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:DataTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the dataType property.
    */
    public function setDataType(?string $value): void {
        $this->dataType = $value;
    }

    /**
     * Sets the dimensionKey property value. The name of the dimension used to create the report.
     * @param string|null $value Value to set for the dimensionKey property.
    */
    public function setDimensionKey(?string $value): void {
        $this->dimensionKey = $value;
    }

    /**
     * Sets the dimensionKeyAnnotations property value. An list of annotation keys associated with the specified dimension of the report.
     * @param array<DimensionKeyAnnotation>|null $value Value to set for the dimensionKeyAnnotations property.
    */
    public function setDimensionKeyAnnotations(?array $value): void {
        $this->dimensionKeyAnnotations = $value;
    }

}
