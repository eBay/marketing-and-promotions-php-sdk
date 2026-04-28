<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type defines the annotation and dimension key used by the report. For information on how to set these values, see <a href="/api-docs/sell/static/marketing/pl-reports.html">Promoted Listings reporting</a>.
*/
class Dimension implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $annotationKeys A list of annotations associated with the dimension of the report.
    */
    private ?array $annotationKeys = null;
    
    /**
     * @var string|null $dimensionKey The name of the dimension on which the report is based. <p>A dimension is an attribute to which the report data applies.</p>
    */
    private ?string $dimensionKey = null;
    
    /**
     * Instantiates a new Dimension and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Dimension
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Dimension {
        return new Dimension();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the annotationKeys property value. A list of annotations associated with the dimension of the report.
     * @return array<string>|null
    */
    public function getAnnotationKeys(): ?array {
        return $this->annotationKeys;
    }

    /**
     * Gets the dimensionKey property value. The name of the dimension on which the report is based. <p>A dimension is an attribute to which the report data applies.</p>
     * @return string|null
    */
    public function getDimensionKey(): ?string {
        return $this->dimensionKey;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'annotationKeys' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAnnotationKeys($val);
            },
            'dimensionKey' => fn(ParseNode $n) => $o->setDimensionKey($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('annotationKeys', $this->getAnnotationKeys());
        $writer->writeStringValue('dimensionKey', $this->getDimensionKey());
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
     * Sets the annotationKeys property value. A list of annotations associated with the dimension of the report.
     * @param array<string>|null $value Value to set for the annotationKeys property.
    */
    public function setAnnotationKeys(?array $value): void {
        $this->annotationKeys = $value;
    }

    /**
     * Sets the dimensionKey property value. The name of the dimension on which the report is based. <p>A dimension is an attribute to which the report data applies.</p>
     * @param string|null $value Value to set for the dimensionKey property.
    */
    public function setDimensionKey(?string $value): void {
        $this->dimensionKey = $value;
    }

}
