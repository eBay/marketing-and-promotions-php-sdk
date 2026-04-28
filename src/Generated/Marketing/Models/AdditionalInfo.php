<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that provides additional information for suggested keywords.
*/
class AdditionalInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $infoType The type of additional information provided for the suggested keyword.<br /><br /><strong>Valid Value:</strong> <code>KEYWORD_INSIGHTS</code> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:AdditionalInfoEnum'>eBay API documentation</a>
    */
    private ?string $infoType = null;
    
    /**
     * @var array<AdditionalInfoData>|null $metrics A list of additional data provided for the suggested keyword.
    */
    private ?array $metrics = null;
    
    /**
     * Instantiates a new AdditionalInfo and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdditionalInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdditionalInfo {
        return new AdditionalInfo();
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
            'infoType' => fn(ParseNode $n) => $o->setInfoType($n->getStringValue()),
            'metrics' => fn(ParseNode $n) => $o->setMetrics($n->getCollectionOfObjectValues([AdditionalInfoData::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the infoType property value. The type of additional information provided for the suggested keyword.<br /><br /><strong>Valid Value:</strong> <code>KEYWORD_INSIGHTS</code> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:AdditionalInfoEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getInfoType(): ?string {
        return $this->infoType;
    }

    /**
     * Gets the metrics property value. A list of additional data provided for the suggested keyword.
     * @return array<AdditionalInfoData>|null
    */
    public function getMetrics(): ?array {
        return $this->metrics;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('infoType', $this->getInfoType());
        $writer->writeCollectionOfObjectValues('metrics', $this->getMetrics());
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
     * Sets the infoType property value. The type of additional information provided for the suggested keyword.<br /><br /><strong>Valid Value:</strong> <code>KEYWORD_INSIGHTS</code> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:AdditionalInfoEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the infoType property.
    */
    public function setInfoType(?string $value): void {
        $this->infoType = $value;
    }

    /**
     * Sets the metrics property value. A list of additional data provided for the suggested keyword.
     * @param array<AdditionalInfoData>|null $value Value to set for the metrics property.
    */
    public function setMetrics(?array $value): void {
        $this->metrics = $value;
    }

}
