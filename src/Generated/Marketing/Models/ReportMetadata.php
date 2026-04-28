<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the fields included in the report.
*/
class ReportMetadata implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $channel This field indicates whether a COST_PER_CLICK report type is related to an ON_SITE or OFF_SITE Promoted Listings campaign. This field is not returned for COST_PER_SALE report types since COST_PER_SALE campaigns are only available ON_SITE. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:ChannelEnum'>eBay API documentation</a>
    */
    private ?string $channel = null;
    
    /**
     * @var array<DimensionMetadata>|null $dimensionMetadata A list containing the metadata for the dimension used in the report.
    */
    private ?array $dimensionMetadata = null;
    
    /**
     * @var int|null $maxNumberOfDimensionsToRequest The maximum number of dimensions that can be requested for the specified report type.
    */
    private ?int $maxNumberOfDimensionsToRequest = null;
    
    /**
     * @var int|null $maxNumberOfMetricsToRequest The maximum number of metrics that can be requested for the specified report type.
    */
    private ?int $maxNumberOfMetricsToRequest = null;
    
    /**
     * @var array<MetricMetadata>|null $metricMetadata A list containing the metadata for the metrics in the report.
    */
    private ?array $metricMetadata = null;
    
    /**
     * @var string|null $reportType The <b>report_type</b>, as specified in the request to create the report task.<br/><br/><span class="tablenote"><b>Note:</b> INVENTORY_PERFORMANCE_REPORT is not currently available; availability date is pending.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportTypeEnum'>eBay API documentation</a>
    */
    private ?string $reportType = null;
    
    /**
     * Instantiates a new ReportMetadata and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReportMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReportMetadata {
        return new ReportMetadata();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the channel property value. This field indicates whether a COST_PER_CLICK report type is related to an ON_SITE or OFF_SITE Promoted Listings campaign. This field is not returned for COST_PER_SALE report types since COST_PER_SALE campaigns are only available ON_SITE. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:ChannelEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getChannel(): ?string {
        return $this->channel;
    }

    /**
     * Gets the dimensionMetadata property value. A list containing the metadata for the dimension used in the report.
     * @return array<DimensionMetadata>|null
    */
    public function getDimensionMetadata(): ?array {
        return $this->dimensionMetadata;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'channel' => fn(ParseNode $n) => $o->setChannel($n->getStringValue()),
            'dimensionMetadata' => fn(ParseNode $n) => $o->setDimensionMetadata($n->getCollectionOfObjectValues([DimensionMetadata::class, 'createFromDiscriminatorValue'])),
            'maxNumberOfDimensionsToRequest' => fn(ParseNode $n) => $o->setMaxNumberOfDimensionsToRequest($n->getIntegerValue()),
            'maxNumberOfMetricsToRequest' => fn(ParseNode $n) => $o->setMaxNumberOfMetricsToRequest($n->getIntegerValue()),
            'metricMetadata' => fn(ParseNode $n) => $o->setMetricMetadata($n->getCollectionOfObjectValues([MetricMetadata::class, 'createFromDiscriminatorValue'])),
            'reportType' => fn(ParseNode $n) => $o->setReportType($n->getStringValue()),
        ];
    }

    /**
     * Gets the maxNumberOfDimensionsToRequest property value. The maximum number of dimensions that can be requested for the specified report type.
     * @return int|null
    */
    public function getMaxNumberOfDimensionsToRequest(): ?int {
        return $this->maxNumberOfDimensionsToRequest;
    }

    /**
     * Gets the maxNumberOfMetricsToRequest property value. The maximum number of metrics that can be requested for the specified report type.
     * @return int|null
    */
    public function getMaxNumberOfMetricsToRequest(): ?int {
        return $this->maxNumberOfMetricsToRequest;
    }

    /**
     * Gets the metricMetadata property value. A list containing the metadata for the metrics in the report.
     * @return array<MetricMetadata>|null
    */
    public function getMetricMetadata(): ?array {
        return $this->metricMetadata;
    }

    /**
     * Gets the reportType property value. The <b>report_type</b>, as specified in the request to create the report task.<br/><br/><span class="tablenote"><b>Note:</b> INVENTORY_PERFORMANCE_REPORT is not currently available; availability date is pending.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getReportType(): ?string {
        return $this->reportType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('channel', $this->getChannel());
        $writer->writeCollectionOfObjectValues('dimensionMetadata', $this->getDimensionMetadata());
        $writer->writeIntegerValue('maxNumberOfDimensionsToRequest', $this->getMaxNumberOfDimensionsToRequest());
        $writer->writeIntegerValue('maxNumberOfMetricsToRequest', $this->getMaxNumberOfMetricsToRequest());
        $writer->writeCollectionOfObjectValues('metricMetadata', $this->getMetricMetadata());
        $writer->writeStringValue('reportType', $this->getReportType());
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
     * Sets the channel property value. This field indicates whether a COST_PER_CLICK report type is related to an ON_SITE or OFF_SITE Promoted Listings campaign. This field is not returned for COST_PER_SALE report types since COST_PER_SALE campaigns are only available ON_SITE. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:ChannelEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the channel property.
    */
    public function setChannel(?string $value): void {
        $this->channel = $value;
    }

    /**
     * Sets the dimensionMetadata property value. A list containing the metadata for the dimension used in the report.
     * @param array<DimensionMetadata>|null $value Value to set for the dimensionMetadata property.
    */
    public function setDimensionMetadata(?array $value): void {
        $this->dimensionMetadata = $value;
    }

    /**
     * Sets the maxNumberOfDimensionsToRequest property value. The maximum number of dimensions that can be requested for the specified report type.
     * @param int|null $value Value to set for the maxNumberOfDimensionsToRequest property.
    */
    public function setMaxNumberOfDimensionsToRequest(?int $value): void {
        $this->maxNumberOfDimensionsToRequest = $value;
    }

    /**
     * Sets the maxNumberOfMetricsToRequest property value. The maximum number of metrics that can be requested for the specified report type.
     * @param int|null $value Value to set for the maxNumberOfMetricsToRequest property.
    */
    public function setMaxNumberOfMetricsToRequest(?int $value): void {
        $this->maxNumberOfMetricsToRequest = $value;
    }

    /**
     * Sets the metricMetadata property value. A list containing the metadata for the metrics in the report.
     * @param array<MetricMetadata>|null $value Value to set for the metricMetadata property.
    */
    public function setMetricMetadata(?array $value): void {
        $this->metricMetadata = $value;
    }

    /**
     * Sets the reportType property value. The <b>report_type</b>, as specified in the request to create the report task.<br/><br/><span class="tablenote"><b>Note:</b> INVENTORY_PERFORMANCE_REPORT is not currently available; availability date is pending.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the reportType property.
    */
    public function setReportType(?string $value): void {
        $this->reportType = $value;
    }

}
