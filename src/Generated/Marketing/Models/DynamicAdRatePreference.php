<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A type that defines the ad rate details for a general strategy ad campaign.
*/
class DynamicAdRatePreference implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adRateAdjustmentPercent The percentage above or below (-) the eBay suggested ad rate that a seller is willing to pay.<br /><br />This specifies the maximum and minimum values to which an ad rate can be dynamically adjusted.
    */
    private ?string $adRateAdjustmentPercent = null;
    
    /**
     * @var string|null $adRateCapPercent The maximum value (specified as a percentage) to which the eBay suggested ad rate can be adjusted. The adjusted ad rate will never exceed this percentage.
    */
    private ?string $adRateCapPercent = null;
    
    /**
     * Instantiates a new DynamicAdRatePreference and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DynamicAdRatePreference
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DynamicAdRatePreference {
        return new DynamicAdRatePreference();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adRateAdjustmentPercent property value. The percentage above or below (-) the eBay suggested ad rate that a seller is willing to pay.<br /><br />This specifies the maximum and minimum values to which an ad rate can be dynamically adjusted.
     * @return string|null
    */
    public function getAdRateAdjustmentPercent(): ?string {
        return $this->adRateAdjustmentPercent;
    }

    /**
     * Gets the adRateCapPercent property value. The maximum value (specified as a percentage) to which the eBay suggested ad rate can be adjusted. The adjusted ad rate will never exceed this percentage.
     * @return string|null
    */
    public function getAdRateCapPercent(): ?string {
        return $this->adRateCapPercent;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adRateAdjustmentPercent' => fn(ParseNode $n) => $o->setAdRateAdjustmentPercent($n->getStringValue()),
            'adRateCapPercent' => fn(ParseNode $n) => $o->setAdRateCapPercent($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adRateAdjustmentPercent', $this->getAdRateAdjustmentPercent());
        $writer->writeStringValue('adRateCapPercent', $this->getAdRateCapPercent());
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
     * Sets the adRateAdjustmentPercent property value. The percentage above or below (-) the eBay suggested ad rate that a seller is willing to pay.<br /><br />This specifies the maximum and minimum values to which an ad rate can be dynamically adjusted.
     * @param string|null $value Value to set for the adRateAdjustmentPercent property.
    */
    public function setAdRateAdjustmentPercent(?string $value): void {
        $this->adRateAdjustmentPercent = $value;
    }

    /**
     * Sets the adRateCapPercent property value. The maximum value (specified as a percentage) to which the eBay suggested ad rate can be adjusted. The adjusted ad rate will never exceed this percentage.
     * @param string|null $value Value to set for the adRateCapPercent property.
    */
    public function setAdRateCapPercent(?string $value): void {
        $this->adRateCapPercent = $value;
    }

}
