<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the metadata used by the all report types.
*/
class ReportMetadatas implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<ReportMetadata>|null $reportMetadata A list of the metadata for the associated report type.
    */
    private ?array $reportMetadata = null;
    
    /**
     * Instantiates a new ReportMetadatas and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReportMetadatas
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReportMetadatas {
        return new ReportMetadatas();
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
            'reportMetadata' => fn(ParseNode $n) => $o->setReportMetadata($n->getCollectionOfObjectValues([ReportMetadata::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the reportMetadata property value. A list of the metadata for the associated report type.
     * @return array<ReportMetadata>|null
    */
    public function getReportMetadata(): ?array {
        return $this->reportMetadata;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('reportMetadata', $this->getReportMetadata());
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
     * Sets the reportMetadata property value. A list of the metadata for the associated report type.
     * @param array<ReportMetadata>|null $value Value to set for the reportMetadata property.
    */
    public function setReportMetadata(?array $value): void {
        $this->reportMetadata = $value;
    }

}
