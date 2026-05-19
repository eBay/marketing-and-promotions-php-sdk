<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type defines the fields in a report task.
*/
class ReportTask implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $campaignIds A list of IDs for the campaigns that are included in the report. A campaign ID is a unique eBay-assigned identifier of the campaign that's generated when the campaign is created.<br /><br />Call <b>getCampaigns</b> to return the current campaign IDs for a seller.
    */
    private ?array $campaignIds = null;
    
    /**
     * @var array<string>|null $channels The channel for the advertising campaign that will be included in the report task. This value indicates whether the data included in the report task is for an Onsite or Offsite advertising campaign.
    */
    private ?array $channels = null;
    
    /**
     * @var string|null $dateFrom The date defining the start of the timespan covered by the report, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> timestamp.
    */
    private ?string $dateFrom = null;
    
    /**
     * @var string|null $dateTo The date defining the end of the timespan covered by the report, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> timestamp.
    */
    private ?string $dateTo = null;
    
    /**
     * @var array<Dimension>|null $dimensions A list containing the dimension in the report.
    */
    private ?array $dimensions = null;
    
    /**
     * @var array<string>|null $fundingModels The funding model for the campaign that shall be included in the report.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> The default funding model for Promoted Listings reports is <code>COST_PER_SALE</code>.</span><br /><br /><b>Valid Values:</b><ul><li><code>COST_PER_SALE</code></li><li><code>COST_PER_CLICK</code></li></ul>
    */
    private ?array $fundingModels = null;
    
    /**
     * @var array<InventoryReference>|null $inventoryReferences If supplied in the request, this field returns a list of the seller's inventory reference IDs included in the report.  <p>Each item is referenced by a pair of <b>inventoryRefernceID</b> and <b>inventoryReferenceType</b> values, where an inventory reference ID can be either a seller-defined <b>SKU</b> value or an <b>inventoryItemGroupKey</b>. An <b>inventoryItemGroupKey</b> is seller-defined ID for an inventory item group (a multiple-variation listing), and is created and used by the <a href="/api-docs/sell/inventory/resources/methods">Inventory API</a>.</p>
    */
    private ?array $inventoryReferences = null;
    
    /**
     * @var array<string>|null $listingIds If supplied in the request, this field returns a list of the listing IDs included in the report. A listing ID is an eBay-assigned ID that's generated when a listing is created.
    */
    private ?array $listingIds = null;
    
    /**
     * @var string|null $marketplaceId The ID of the eBay marketplace used by the report task. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
    */
    private ?string $marketplaceId = null;
    
    /**
     * @var array<string>|null $metricKeys A list of metrics for the report task.
    */
    private ?array $metricKeys = null;
    
    /**
     * @var string|null $reportExpirationDate The date after which the report is no longer be available. Reports are available for 30 days and you cannot download a report after it has expired.  <br><br><b>Format (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ
    */
    private ?string $reportExpirationDate = null;
    
    /**
     * @var string|null $reportFormat Indicates the format of the report. Currently, only <code>TSV_GZIP</code> is supported. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportFormatEnum'>eBay API documentation</a>
    */
    private ?string $reportFormat = null;
    
    /**
     * @var string|null $reportHref The URL of the generated report, which can be used to download the report once it has been generated.
    */
    private ?string $reportHref = null;
    
    /**
     * @var string|null $reportId A unique eBay-assigned ID for the report.
    */
    private ?string $reportId = null;
    
    /**
     * @var string|null $reportName An eBay-assigned name for the report that's created by the <b>createReportTask</b> call. This name is unique for the seller.
    */
    private ?string $reportName = null;
    
    /**
     * @var string|null $reportTaskCompletionDate The date the report task completed the report generation.  <br><br><b>Format (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ
    */
    private ?string $reportTaskCompletionDate = null;
    
    /**
     * @var string|null $reportTaskCreationDate The date the report task was created.  <br><br><b>Format (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ
    */
    private ?string $reportTaskCreationDate = null;
    
    /**
     * @var string|null $reportTaskExpectedCompletionDate The date the report task is expected to complete the report generation.  <br><br><b>Format (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ
    */
    private ?string $reportTaskExpectedCompletionDate = null;
    
    /**
     * @var string|null $reportTaskId The unique eBay-assigned ID of the report task. This value is generated when the report task is created with a call to <b>createReportTask</b>.
    */
    private ?string $reportTaskId = null;
    
    /**
     * @var string|null $reportTaskStatus Indicates the current state of the report task. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:TaskStatusEnum'>eBay API documentation</a>
    */
    private ?string $reportTaskStatus = null;
    
    /**
     * @var string|null $reportTaskStatusMessage A status message with additional information about the report task.
    */
    private ?string $reportTaskStatusMessage = null;
    
    /**
     * @var string|null $reportType Indicates type of report associated with the report task.<br/><br/><span class="tablenote"><b>Note:</b> INVENTORY_PERFORMANCE_REPORT is not currently available; availability date is pending.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportTypeEnum'>eBay API documentation</a>
    */
    private ?string $reportType = null;
    
    /**
     * Instantiates a new ReportTask and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReportTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReportTask {
        return new ReportTask();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the campaignIds property value. A list of IDs for the campaigns that are included in the report. A campaign ID is a unique eBay-assigned identifier of the campaign that's generated when the campaign is created.<br /><br />Call <b>getCampaigns</b> to return the current campaign IDs for a seller.
     * @return array<string>|null
    */
    public function getCampaignIds(): ?array {
        return $this->campaignIds;
    }

    /**
     * Gets the channels property value. The channel for the advertising campaign that will be included in the report task. This value indicates whether the data included in the report task is for an Onsite or Offsite advertising campaign.
     * @return array<string>|null
    */
    public function getChannels(): ?array {
        return $this->channels;
    }

    /**
     * Gets the dateFrom property value. The date defining the start of the timespan covered by the report, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> timestamp.
     * @return string|null
    */
    public function getDateFrom(): ?string {
        return $this->dateFrom;
    }

    /**
     * Gets the dateTo property value. The date defining the end of the timespan covered by the report, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> timestamp.
     * @return string|null
    */
    public function getDateTo(): ?string {
        return $this->dateTo;
    }

    /**
     * Gets the dimensions property value. A list containing the dimension in the report.
     * @return array<Dimension>|null
    */
    public function getDimensions(): ?array {
        return $this->dimensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'campaignIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCampaignIds($val);
            },
            'channels' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setChannels($val);
            },
            'dateFrom' => fn(ParseNode $n) => $o->setDateFrom($n->getStringValue()),
            'dateTo' => fn(ParseNode $n) => $o->setDateTo($n->getStringValue()),
            'dimensions' => fn(ParseNode $n) => $o->setDimensions($n->getCollectionOfObjectValues([Dimension::class, 'createFromDiscriminatorValue'])),
            'fundingModels' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setFundingModels($val);
            },
            'inventoryReferences' => fn(ParseNode $n) => $o->setInventoryReferences($n->getCollectionOfObjectValues([InventoryReference::class, 'createFromDiscriminatorValue'])),
            'listingIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setListingIds($val);
            },
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getStringValue()),
            'metricKeys' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMetricKeys($val);
            },
            'reportExpirationDate' => fn(ParseNode $n) => $o->setReportExpirationDate($n->getStringValue()),
            'reportFormat' => fn(ParseNode $n) => $o->setReportFormat($n->getStringValue()),
            'reportHref' => fn(ParseNode $n) => $o->setReportHref($n->getStringValue()),
            'reportId' => fn(ParseNode $n) => $o->setReportId($n->getStringValue()),
            'reportName' => fn(ParseNode $n) => $o->setReportName($n->getStringValue()),
            'reportTaskCompletionDate' => fn(ParseNode $n) => $o->setReportTaskCompletionDate($n->getStringValue()),
            'reportTaskCreationDate' => fn(ParseNode $n) => $o->setReportTaskCreationDate($n->getStringValue()),
            'reportTaskExpectedCompletionDate' => fn(ParseNode $n) => $o->setReportTaskExpectedCompletionDate($n->getStringValue()),
            'reportTaskId' => fn(ParseNode $n) => $o->setReportTaskId($n->getStringValue()),
            'reportTaskStatus' => fn(ParseNode $n) => $o->setReportTaskStatus($n->getStringValue()),
            'reportTaskStatusMessage' => fn(ParseNode $n) => $o->setReportTaskStatusMessage($n->getStringValue()),
            'reportType' => fn(ParseNode $n) => $o->setReportType($n->getStringValue()),
        ];
    }

    /**
     * Gets the fundingModels property value. The funding model for the campaign that shall be included in the report.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> The default funding model for Promoted Listings reports is <code>COST_PER_SALE</code>.</span><br /><br /><b>Valid Values:</b><ul><li><code>COST_PER_SALE</code></li><li><code>COST_PER_CLICK</code></li></ul>
     * @return array<string>|null
    */
    public function getFundingModels(): ?array {
        return $this->fundingModels;
    }

    /**
     * Gets the inventoryReferences property value. If supplied in the request, this field returns a list of the seller's inventory reference IDs included in the report.  <p>Each item is referenced by a pair of <b>inventoryRefernceID</b> and <b>inventoryReferenceType</b> values, where an inventory reference ID can be either a seller-defined <b>SKU</b> value or an <b>inventoryItemGroupKey</b>. An <b>inventoryItemGroupKey</b> is seller-defined ID for an inventory item group (a multiple-variation listing), and is created and used by the <a href="/api-docs/sell/inventory/resources/methods">Inventory API</a>.</p>
     * @return array<InventoryReference>|null
    */
    public function getInventoryReferences(): ?array {
        return $this->inventoryReferences;
    }

    /**
     * Gets the listingIds property value. If supplied in the request, this field returns a list of the listing IDs included in the report. A listing ID is an eBay-assigned ID that's generated when a listing is created.
     * @return array<string>|null
    */
    public function getListingIds(): ?array {
        return $this->listingIds;
    }

    /**
     * Gets the marketplaceId property value. The ID of the eBay marketplace used by the report task. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getMarketplaceId(): ?string {
        return $this->marketplaceId;
    }

    /**
     * Gets the metricKeys property value. A list of metrics for the report task.
     * @return array<string>|null
    */
    public function getMetricKeys(): ?array {
        return $this->metricKeys;
    }

    /**
     * Gets the reportExpirationDate property value. The date after which the report is no longer be available. Reports are available for 30 days and you cannot download a report after it has expired.  <br><br><b>Format (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ
     * @return string|null
    */
    public function getReportExpirationDate(): ?string {
        return $this->reportExpirationDate;
    }

    /**
     * Gets the reportFormat property value. Indicates the format of the report. Currently, only <code>TSV_GZIP</code> is supported. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportFormatEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getReportFormat(): ?string {
        return $this->reportFormat;
    }

    /**
     * Gets the reportHref property value. The URL of the generated report, which can be used to download the report once it has been generated.
     * @return string|null
    */
    public function getReportHref(): ?string {
        return $this->reportHref;
    }

    /**
     * Gets the reportId property value. A unique eBay-assigned ID for the report.
     * @return string|null
    */
    public function getReportId(): ?string {
        return $this->reportId;
    }

    /**
     * Gets the reportName property value. An eBay-assigned name for the report that's created by the <b>createReportTask</b> call. This name is unique for the seller.
     * @return string|null
    */
    public function getReportName(): ?string {
        return $this->reportName;
    }

    /**
     * Gets the reportTaskCompletionDate property value. The date the report task completed the report generation.  <br><br><b>Format (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ
     * @return string|null
    */
    public function getReportTaskCompletionDate(): ?string {
        return $this->reportTaskCompletionDate;
    }

    /**
     * Gets the reportTaskCreationDate property value. The date the report task was created.  <br><br><b>Format (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ
     * @return string|null
    */
    public function getReportTaskCreationDate(): ?string {
        return $this->reportTaskCreationDate;
    }

    /**
     * Gets the reportTaskExpectedCompletionDate property value. The date the report task is expected to complete the report generation.  <br><br><b>Format (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ
     * @return string|null
    */
    public function getReportTaskExpectedCompletionDate(): ?string {
        return $this->reportTaskExpectedCompletionDate;
    }

    /**
     * Gets the reportTaskId property value. The unique eBay-assigned ID of the report task. This value is generated when the report task is created with a call to <b>createReportTask</b>.
     * @return string|null
    */
    public function getReportTaskId(): ?string {
        return $this->reportTaskId;
    }

    /**
     * Gets the reportTaskStatus property value. Indicates the current state of the report task. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:TaskStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getReportTaskStatus(): ?string {
        return $this->reportTaskStatus;
    }

    /**
     * Gets the reportTaskStatusMessage property value. A status message with additional information about the report task.
     * @return string|null
    */
    public function getReportTaskStatusMessage(): ?string {
        return $this->reportTaskStatusMessage;
    }

    /**
     * Gets the reportType property value. Indicates type of report associated with the report task.<br/><br/><span class="tablenote"><b>Note:</b> INVENTORY_PERFORMANCE_REPORT is not currently available; availability date is pending.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportTypeEnum'>eBay API documentation</a>
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
        $writer->writeCollectionOfPrimitiveValues('campaignIds', $this->getCampaignIds());
        $writer->writeCollectionOfPrimitiveValues('channels', $this->getChannels());
        $writer->writeStringValue('dateFrom', $this->getDateFrom());
        $writer->writeStringValue('dateTo', $this->getDateTo());
        $writer->writeCollectionOfObjectValues('dimensions', $this->getDimensions());
        $writer->writeCollectionOfPrimitiveValues('fundingModels', $this->getFundingModels());
        $writer->writeCollectionOfObjectValues('inventoryReferences', $this->getInventoryReferences());
        $writer->writeCollectionOfPrimitiveValues('listingIds', $this->getListingIds());
        $writer->writeStringValue('marketplaceId', $this->getMarketplaceId());
        $writer->writeCollectionOfPrimitiveValues('metricKeys', $this->getMetricKeys());
        $writer->writeStringValue('reportExpirationDate', $this->getReportExpirationDate());
        $writer->writeStringValue('reportFormat', $this->getReportFormat());
        $writer->writeStringValue('reportHref', $this->getReportHref());
        $writer->writeStringValue('reportId', $this->getReportId());
        $writer->writeStringValue('reportName', $this->getReportName());
        $writer->writeStringValue('reportTaskCompletionDate', $this->getReportTaskCompletionDate());
        $writer->writeStringValue('reportTaskCreationDate', $this->getReportTaskCreationDate());
        $writer->writeStringValue('reportTaskExpectedCompletionDate', $this->getReportTaskExpectedCompletionDate());
        $writer->writeStringValue('reportTaskId', $this->getReportTaskId());
        $writer->writeStringValue('reportTaskStatus', $this->getReportTaskStatus());
        $writer->writeStringValue('reportTaskStatusMessage', $this->getReportTaskStatusMessage());
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
     * Sets the campaignIds property value. A list of IDs for the campaigns that are included in the report. A campaign ID is a unique eBay-assigned identifier of the campaign that's generated when the campaign is created.<br /><br />Call <b>getCampaigns</b> to return the current campaign IDs for a seller.
     * @param array<string>|null $value Value to set for the campaignIds property.
    */
    public function setCampaignIds(?array $value): void {
        $this->campaignIds = $value;
    }

    /**
     * Sets the channels property value. The channel for the advertising campaign that will be included in the report task. This value indicates whether the data included in the report task is for an Onsite or Offsite advertising campaign.
     * @param array<string>|null $value Value to set for the channels property.
    */
    public function setChannels(?array $value): void {
        $this->channels = $value;
    }

    /**
     * Sets the dateFrom property value. The date defining the start of the timespan covered by the report, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> timestamp.
     * @param string|null $value Value to set for the dateFrom property.
    */
    public function setDateFrom(?string $value): void {
        $this->dateFrom = $value;
    }

    /**
     * Sets the dateTo property value. The date defining the end of the timespan covered by the report, formatted as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html " title="https://www.iso.org " target="_blank">ISO 8601</a> timestamp.
     * @param string|null $value Value to set for the dateTo property.
    */
    public function setDateTo(?string $value): void {
        $this->dateTo = $value;
    }

    /**
     * Sets the dimensions property value. A list containing the dimension in the report.
     * @param array<Dimension>|null $value Value to set for the dimensions property.
    */
    public function setDimensions(?array $value): void {
        $this->dimensions = $value;
    }

    /**
     * Sets the fundingModels property value. The funding model for the campaign that shall be included in the report.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> The default funding model for Promoted Listings reports is <code>COST_PER_SALE</code>.</span><br /><br /><b>Valid Values:</b><ul><li><code>COST_PER_SALE</code></li><li><code>COST_PER_CLICK</code></li></ul>
     * @param array<string>|null $value Value to set for the fundingModels property.
    */
    public function setFundingModels(?array $value): void {
        $this->fundingModels = $value;
    }

    /**
     * Sets the inventoryReferences property value. If supplied in the request, this field returns a list of the seller's inventory reference IDs included in the report.  <p>Each item is referenced by a pair of <b>inventoryRefernceID</b> and <b>inventoryReferenceType</b> values, where an inventory reference ID can be either a seller-defined <b>SKU</b> value or an <b>inventoryItemGroupKey</b>. An <b>inventoryItemGroupKey</b> is seller-defined ID for an inventory item group (a multiple-variation listing), and is created and used by the <a href="/api-docs/sell/inventory/resources/methods">Inventory API</a>.</p>
     * @param array<InventoryReference>|null $value Value to set for the inventoryReferences property.
    */
    public function setInventoryReferences(?array $value): void {
        $this->inventoryReferences = $value;
    }

    /**
     * Sets the listingIds property value. If supplied in the request, this field returns a list of the listing IDs included in the report. A listing ID is an eBay-assigned ID that's generated when a listing is created.
     * @param array<string>|null $value Value to set for the listingIds property.
    */
    public function setListingIds(?array $value): void {
        $this->listingIds = $value;
    }

    /**
     * Sets the marketplaceId property value. The ID of the eBay marketplace used by the report task. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?string $value): void {
        $this->marketplaceId = $value;
    }

    /**
     * Sets the metricKeys property value. A list of metrics for the report task.
     * @param array<string>|null $value Value to set for the metricKeys property.
    */
    public function setMetricKeys(?array $value): void {
        $this->metricKeys = $value;
    }

    /**
     * Sets the reportExpirationDate property value. The date after which the report is no longer be available. Reports are available for 30 days and you cannot download a report after it has expired.  <br><br><b>Format (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ
     * @param string|null $value Value to set for the reportExpirationDate property.
    */
    public function setReportExpirationDate(?string $value): void {
        $this->reportExpirationDate = $value;
    }

    /**
     * Sets the reportFormat property value. Indicates the format of the report. Currently, only <code>TSV_GZIP</code> is supported. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportFormatEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the reportFormat property.
    */
    public function setReportFormat(?string $value): void {
        $this->reportFormat = $value;
    }

    /**
     * Sets the reportHref property value. The URL of the generated report, which can be used to download the report once it has been generated.
     * @param string|null $value Value to set for the reportHref property.
    */
    public function setReportHref(?string $value): void {
        $this->reportHref = $value;
    }

    /**
     * Sets the reportId property value. A unique eBay-assigned ID for the report.
     * @param string|null $value Value to set for the reportId property.
    */
    public function setReportId(?string $value): void {
        $this->reportId = $value;
    }

    /**
     * Sets the reportName property value. An eBay-assigned name for the report that's created by the <b>createReportTask</b> call. This name is unique for the seller.
     * @param string|null $value Value to set for the reportName property.
    */
    public function setReportName(?string $value): void {
        $this->reportName = $value;
    }

    /**
     * Sets the reportTaskCompletionDate property value. The date the report task completed the report generation.  <br><br><b>Format (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ
     * @param string|null $value Value to set for the reportTaskCompletionDate property.
    */
    public function setReportTaskCompletionDate(?string $value): void {
        $this->reportTaskCompletionDate = $value;
    }

    /**
     * Sets the reportTaskCreationDate property value. The date the report task was created.  <br><br><b>Format (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ
     * @param string|null $value Value to set for the reportTaskCreationDate property.
    */
    public function setReportTaskCreationDate(?string $value): void {
        $this->reportTaskCreationDate = $value;
    }

    /**
     * Sets the reportTaskExpectedCompletionDate property value. The date the report task is expected to complete the report generation.  <br><br><b>Format (UTC): </b> yyyy-MM-ddThh:mm:ss.sssZ
     * @param string|null $value Value to set for the reportTaskExpectedCompletionDate property.
    */
    public function setReportTaskExpectedCompletionDate(?string $value): void {
        $this->reportTaskExpectedCompletionDate = $value;
    }

    /**
     * Sets the reportTaskId property value. The unique eBay-assigned ID of the report task. This value is generated when the report task is created with a call to <b>createReportTask</b>.
     * @param string|null $value Value to set for the reportTaskId property.
    */
    public function setReportTaskId(?string $value): void {
        $this->reportTaskId = $value;
    }

    /**
     * Sets the reportTaskStatus property value. Indicates the current state of the report task. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:TaskStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the reportTaskStatus property.
    */
    public function setReportTaskStatus(?string $value): void {
        $this->reportTaskStatus = $value;
    }

    /**
     * Sets the reportTaskStatusMessage property value. A status message with additional information about the report task.
     * @param string|null $value Value to set for the reportTaskStatusMessage property.
    */
    public function setReportTaskStatusMessage(?string $value): void {
        $this->reportTaskStatusMessage = $value;
    }

    /**
     * Sets the reportType property value. Indicates type of report associated with the report task.<br/><br/><span class="tablenote"><b>Note:</b> INVENTORY_PERFORMANCE_REPORT is not currently available; availability date is pending.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the reportType property.
    */
    public function setReportType(?string $value): void {
        $this->reportType = $value;
    }

}
