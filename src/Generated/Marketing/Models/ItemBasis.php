<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A container for details regarding the basis for an item.
*/
class ItemBasis implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $estimatedValue The estimated value of the search impressions for items based on the provided dimensions. <br /><br /><b>Duration:</b> 17 days<br /><br /><b>Total slots:</b> 200 <br /><br /><b>Channel:</b> Dweb, Mweb, Native
    */
    private ?int $estimatedValue = null;
    
    /**
     * @var string|null $metric The basis of the statistics. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:TargetingMetricsEnum'>eBay API documentation</a>
    */
    private ?string $metric = null;
    
    /**
     * Instantiates a new ItemBasis and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemBasis
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemBasis {
        return new ItemBasis();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the estimatedValue property value. The estimated value of the search impressions for items based on the provided dimensions. <br /><br /><b>Duration:</b> 17 days<br /><br /><b>Total slots:</b> 200 <br /><br /><b>Channel:</b> Dweb, Mweb, Native
     * @return int|null
    */
    public function getEstimatedValue(): ?int {
        return $this->estimatedValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'estimatedValue' => fn(ParseNode $n) => $o->setEstimatedValue($n->getIntegerValue()),
            'metric' => fn(ParseNode $n) => $o->setMetric($n->getStringValue()),
        ];
    }

    /**
     * Gets the metric property value. The basis of the statistics. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:TargetingMetricsEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getMetric(): ?string {
        return $this->metric;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('estimatedValue', $this->getEstimatedValue());
        $writer->writeStringValue('metric', $this->getMetric());
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
     * Sets the estimatedValue property value. The estimated value of the search impressions for items based on the provided dimensions. <br /><br /><b>Duration:</b> 17 days<br /><br /><b>Total slots:</b> 200 <br /><br /><b>Channel:</b> Dweb, Mweb, Native
     * @param int|null $value Value to set for the estimatedValue property.
    */
    public function setEstimatedValue(?int $value): void {
        $this->estimatedValue = $value;
    }

    /**
     * Sets the metric property value. The basis of the statistics. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:TargetingMetricsEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the metric property.
    */
    public function setMetric(?string $value): void {
        $this->metric = $value;
    }

}
