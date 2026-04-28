<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the fields in an Discounts Manager Summary report. Reports are formatted in JSON. For more details, see <a href="/api-docs/sell/static/marketing/pm-summary-reports.html">Reading item discount Summary reports</a>.
*/
class SummaryReportResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $baseSale A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $baseSale = null;
    
    /**
     * @var string|null $lastUpdated The date the report was generated.
    */
    private ?string $lastUpdated = null;
    
    /**
     * @var string|null $percentageSalesLift The percentage of the total dollar amount gained due to discounts. This value is calculated as follows:  <br><br><b>precentageSalesLift</b> = <b>promotionSale</b> / (<b>baseSale</b> + <b>promotionSale</b>)
    */
    private ?string $percentageSalesLift = null;
    
    /**
     * @var Amount|null $promotionSale A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $promotionSale = null;
    
    /**
     * @var Amount|null $totalSale A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $totalSale = null;
    
    /**
     * Instantiates a new SummaryReportResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SummaryReportResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SummaryReportResponse {
        return new SummaryReportResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the baseSale property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getBaseSale(): ?Amount {
        return $this->baseSale;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'baseSale' => fn(ParseNode $n) => $o->setBaseSale($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'lastUpdated' => fn(ParseNode $n) => $o->setLastUpdated($n->getStringValue()),
            'percentageSalesLift' => fn(ParseNode $n) => $o->setPercentageSalesLift($n->getStringValue()),
            'promotionSale' => fn(ParseNode $n) => $o->setPromotionSale($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'totalSale' => fn(ParseNode $n) => $o->setTotalSale($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the lastUpdated property value. The date the report was generated.
     * @return string|null
    */
    public function getLastUpdated(): ?string {
        return $this->lastUpdated;
    }

    /**
     * Gets the percentageSalesLift property value. The percentage of the total dollar amount gained due to discounts. This value is calculated as follows:  <br><br><b>precentageSalesLift</b> = <b>promotionSale</b> / (<b>baseSale</b> + <b>promotionSale</b>)
     * @return string|null
    */
    public function getPercentageSalesLift(): ?string {
        return $this->percentageSalesLift;
    }

    /**
     * Gets the promotionSale property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getPromotionSale(): ?Amount {
        return $this->promotionSale;
    }

    /**
     * Gets the totalSale property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getTotalSale(): ?Amount {
        return $this->totalSale;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('baseSale', $this->getBaseSale());
        $writer->writeStringValue('lastUpdated', $this->getLastUpdated());
        $writer->writeStringValue('percentageSalesLift', $this->getPercentageSalesLift());
        $writer->writeObjectValue('promotionSale', $this->getPromotionSale());
        $writer->writeObjectValue('totalSale', $this->getTotalSale());
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
     * Sets the baseSale property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the baseSale property.
    */
    public function setBaseSale(?Amount $value): void {
        $this->baseSale = $value;
    }

    /**
     * Sets the lastUpdated property value. The date the report was generated.
     * @param string|null $value Value to set for the lastUpdated property.
    */
    public function setLastUpdated(?string $value): void {
        $this->lastUpdated = $value;
    }

    /**
     * Sets the percentageSalesLift property value. The percentage of the total dollar amount gained due to discounts. This value is calculated as follows:  <br><br><b>precentageSalesLift</b> = <b>promotionSale</b> / (<b>baseSale</b> + <b>promotionSale</b>)
     * @param string|null $value Value to set for the percentageSalesLift property.
    */
    public function setPercentageSalesLift(?string $value): void {
        $this->percentageSalesLift = $value;
    }

    /**
     * Sets the promotionSale property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the promotionSale property.
    */
    public function setPromotionSale(?Amount $value): void {
        $this->promotionSale = $value;
    }

    /**
     * Sets the totalSale property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the totalSale property.
    */
    public function setTotalSale(?Amount $value): void {
        $this->totalSale = $value;
    }

}
