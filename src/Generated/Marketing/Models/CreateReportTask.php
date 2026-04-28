<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type defines the rules that govern the generation of a report task and the criteria that's used to create the report. The report-generation rules include the starting and ending dates for the report. Report-task criteria includes the report dimensions, metrics, listings covered in the report, and so on. For information on the required and optional fields for each report type, see <a href="/api-docs/sell/static/marketing/pl-reports.html">Promoted Listings reporting</a>.
*/
class CreateReportTask implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $additionalRecords A list of additional records that shall be included in the report, such as non-performing data.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> Additional records are only applicable to Promoted Listings priority strategy campaigns that use the Cost Per Click (CPC) funding model.</span><br /><b>Valid Value:</b> <code>NON_PERFORMING_DATA</code>
    */
    private ?array $additionalRecords = null;
    
    /**
     * @var array<string>|null $campaignIds A list of campaign IDs to be included in the report task. Use the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns" target="_blank">getCampaigns</a> method to retrieve a list of the current campaign IDs for a seller.<br /><br />For general campaign strategy sellers, this field is required if the <b>reportType</b> is set to <code>CAMPAIGN_PERFORMANCE_REPORT</code> or <code>CAMPAIGN_PERFORMANCE_SUMMARY_REPORT</code>.<br /><br />For priority strategy campaign sellers, leave this request field blank to retrieve the details for all campaigns associated with your account, or specify the campaign IDs for which you would like to retrieve the campaign-specific details.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> There is a maximum data limit that cannot be exceeded when generating reports. If this threshold is exceeded, the report will fail. Refer to <a href="/api-docs/sell/static/marketing/pl-reports.html#creation">Promoted Listings reporting</a> in the Selling Integration Guide for details.</span><br /><br /><b>Maximum:</b> 1,000 IDs</li></ul>
    */
    private ?array $campaignIds = null;
    
    /**
     * @var array<string>|null $channels The channel for the advertising campaign that will be included in the report task. This value indicates whether the data included in the report task is for an Onsite or Offsite advertising campaign.<br><br>If no value is entered, this field will default to <code>ON_SITE</code>. Multiple channels are not supported.<br><br><span class="tablenote"><b>Note:</b> Channels are only applicable for campaigns that use the Cost Per Click (CPC) funding model.</span><br><b>Valid Values</b>:<ul><li> <code>ON_SITE</code></li><li><code>OFF_SITE</code></li></ul>This field is required and must be set to <code>OFF_SITE</code> if the report is for a Offsite Ads campaign.
    */
    private ?array $channels = null;
    
    /**
     * @var string|null $dateFrom The date defining the start of the timespan covered by the report.<br /><br />Format the timestamp as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock with local offset.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> The date specified cannot be a future date.</span><br /><br /><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code><br /><br /><b>Example:</b> <code>2021-03-15T13:00:00-07:00</code>
    */
    private ?string $dateFrom = null;
    
    /**
     * @var string|null $dateTo The date defining the end of the timespan covered by the report.<br /><br />As with the <b>dateFrom</b> field, format the timestamp as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> string.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> The date specified cannot be a future date. Additionally, the time specified must be a later time than that specified in the <b>dateFrom</b> field.</span><br /><br /><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code><br /><br /><b>Example:</b> <code>2021-03-17T13:00:00-07:00</code>
    */
    private ?string $dateTo = null;
    
    /**
     * @var array<Dimension>|null $dimensions The list of the dimensions applied to the report.  <p>A dimension is an attribute to which the report data applies. For example, if you set <b>dimensionKey</b> to <code>campaign_id</code> in a Campaign Performance Report, the data will apply to the entire ad campaign. For information on the dimensions and how to specify them, see <a href="/api-docs/sell/static/marketing/pl-reports.html">Promoted Listings reporting</a>.</p>
    */
    private ?array $dimensions = null;
    
    /**
     * @var array<string>|null $fundingModels The funding model for the campaign that shall be included in the report.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> The default funding model for Promoted Listings reports is <code>COST_PER_SALE</code>.</span><br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> Multiple value support for the <b>fundingModels</b> array has been deprecated. See <a href ="/develop/apis/api-deprecation-status ">API&nbsp;Deprecation&nbsp;Status</a> for information.</span><br /><br /><b>Valid Values:</b><ul><li><code>COST_PER_SALE</code></li><li><code>COST_PER_CLICK</code></li></ul><i>Required if</i> the campaign funding model is Cost Per Click (CPC).
    */
    private ?array $fundingModels = null;
    
    /**
     * @var array<InventoryReference>|null $inventoryReferences You can use this field to supply an array of items to include in the report if you manage your inventory with the <a href="/api-docs/sell/inventory/resources/methods">Inventory API</a>.  <br><br>This field is mutually exclusive with the <b>listingIds</b> field; if you populate this field, <i>do not</i> populate the <b>listingIds</b> field.  <br><br>An inventory reference identifies an item in your inventory using a pair of values, where the <b>inventoryReferenceId</b> can be either a seller-defined <b>SKU</b> value or an <b>inventoryItemGroupKey</b>, where an <b>inventoryItemGroupKey</b> is seller-defined ID for an inventory item group (a multiple-variation listing). <br><br>Couple the <b>inventoryReferenceId</b> with an <b>inventoryReferenceType</b> identifier to fully identify an item in your inventory.  <br><br><b>Maximum: </b> 500 items <br><br><i>Required if </i> you do not supply an array of <b>listingId</b> values or if you set <b>reportType</b> to <code>INVENTORY_PERFORMANCE_REPORT</code>.
    */
    private ?array $inventoryReferences = null;
    
    /**
     * @var array<string>|null $listingIds Use this field to supply an array of eBay listing IDs you want to include in the report.<br><br><span class="tablenote"><span style="color:#FF0000"><strong>Important:</strong></span> This field is mutually exclusive with the <b>inventoryReferences</b> field; if you populate this field, <i>do not</i> populate the <b>inventoryReferences</b> field.</span><br />For general campaign strategy sellers, this field is required if you do not supply an array of <b>inventoryReferences</b> values or if you set the <b>reportType</b> to <code>LISTING_PERFORMANCE_REPORT</code>.<br /><br />For priority strategy campaign sellers, leave this field blank to retrieve the details for all listings associated with the specified campaign IDs (or all campaigns associated with your account, if no campaign IDs are specified), or specify the listing IDs for which you would like to retrieve the listing-specific details.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> There is a maximum data limit that cannot be exceeded when generating reports. If this threshold is exceeded, the report will fail. Refer to <a href="/api-docs/sell/static/marketing/pl-reports.html#creation">Promoted Listings reporting</a> in the Selling Integration Guide for details.</span><br /><br /><b>Maximum:</b> 500 listings
    */
    private ?array $listingIds = null;
    
    /**
     * @var string|null $marketplaceId The unique identifier for the eBay marketplace on which the report is based. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
    */
    private ?string $marketplaceId = null;
    
    /**
     * @var array<string>|null $metricKeys The list of metrics to be included in the report.  <p>Metrics are the quantitative measurements compiled into the report and the data returned is based on the specified dimension of the report. For example, if the dimension is <code>campaign</code>, the metrics for <b>number of sales</b> would be the number of sales in the campaign. However, if the dimension is <code>listing</code>, the <b>number of sales</b> represents the number of items sold in that listing.</p>  <p>For information on metric keys and how to set them, see <a href="/api-docs/sell/static/marketing/pl-reports.html">Promoted Listings reporting</a>.</p><b>Minimum: </b> 1
    */
    private ?array $metricKeys = null;
    
    /**
     * @var string|null $reportFormat The file format of the report. Currently, the only supported format is <code>TSV_GZIP</code>, which is a gzip file with tab separated values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportFormatEnum'>eBay API documentation</a>
    */
    private ?string $reportFormat = null;
    
    /**
     * @var string|null $reportType The type of report to be generated, such as <code>ACCOUNT_PERFORMANCE_REPORT</code> or <code>CAMPAIGN_PERFORMANCE_REPORT</code>.<br/><br/><span class="tablenote"><b>Note:</b> INVENTORY_PERFORMANCE_REPORT is not currently available; availability date is pending.</span><br /><br /><b>Maximum:</b> 1 For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportTypeEnum'>eBay API documentation</a>
    */
    private ?string $reportType = null;
    
    /**
     * Instantiates a new CreateReportTask and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateReportTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateReportTask {
        return new CreateReportTask();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalRecords property value. A list of additional records that shall be included in the report, such as non-performing data.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> Additional records are only applicable to Promoted Listings priority strategy campaigns that use the Cost Per Click (CPC) funding model.</span><br /><b>Valid Value:</b> <code>NON_PERFORMING_DATA</code>
     * @return array<string>|null
    */
    public function getAdditionalRecords(): ?array {
        return $this->additionalRecords;
    }

    /**
     * Gets the campaignIds property value. A list of campaign IDs to be included in the report task. Use the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns" target="_blank">getCampaigns</a> method to retrieve a list of the current campaign IDs for a seller.<br /><br />For general campaign strategy sellers, this field is required if the <b>reportType</b> is set to <code>CAMPAIGN_PERFORMANCE_REPORT</code> or <code>CAMPAIGN_PERFORMANCE_SUMMARY_REPORT</code>.<br /><br />For priority strategy campaign sellers, leave this request field blank to retrieve the details for all campaigns associated with your account, or specify the campaign IDs for which you would like to retrieve the campaign-specific details.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> There is a maximum data limit that cannot be exceeded when generating reports. If this threshold is exceeded, the report will fail. Refer to <a href="/api-docs/sell/static/marketing/pl-reports.html#creation">Promoted Listings reporting</a> in the Selling Integration Guide for details.</span><br /><br /><b>Maximum:</b> 1,000 IDs</li></ul>
     * @return array<string>|null
    */
    public function getCampaignIds(): ?array {
        return $this->campaignIds;
    }

    /**
     * Gets the channels property value. The channel for the advertising campaign that will be included in the report task. This value indicates whether the data included in the report task is for an Onsite or Offsite advertising campaign.<br><br>If no value is entered, this field will default to <code>ON_SITE</code>. Multiple channels are not supported.<br><br><span class="tablenote"><b>Note:</b> Channels are only applicable for campaigns that use the Cost Per Click (CPC) funding model.</span><br><b>Valid Values</b>:<ul><li> <code>ON_SITE</code></li><li><code>OFF_SITE</code></li></ul>This field is required and must be set to <code>OFF_SITE</code> if the report is for a Offsite Ads campaign.
     * @return array<string>|null
    */
    public function getChannels(): ?array {
        return $this->channels;
    }

    /**
     * Gets the dateFrom property value. The date defining the start of the timespan covered by the report.<br /><br />Format the timestamp as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock with local offset.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> The date specified cannot be a future date.</span><br /><br /><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code><br /><br /><b>Example:</b> <code>2021-03-15T13:00:00-07:00</code>
     * @return string|null
    */
    public function getDateFrom(): ?string {
        return $this->dateFrom;
    }

    /**
     * Gets the dateTo property value. The date defining the end of the timespan covered by the report.<br /><br />As with the <b>dateFrom</b> field, format the timestamp as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> string.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> The date specified cannot be a future date. Additionally, the time specified must be a later time than that specified in the <b>dateFrom</b> field.</span><br /><br /><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code><br /><br /><b>Example:</b> <code>2021-03-17T13:00:00-07:00</code>
     * @return string|null
    */
    public function getDateTo(): ?string {
        return $this->dateTo;
    }

    /**
     * Gets the dimensions property value. The list of the dimensions applied to the report.  <p>A dimension is an attribute to which the report data applies. For example, if you set <b>dimensionKey</b> to <code>campaign_id</code> in a Campaign Performance Report, the data will apply to the entire ad campaign. For information on the dimensions and how to specify them, see <a href="/api-docs/sell/static/marketing/pl-reports.html">Promoted Listings reporting</a>.</p>
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
            'additionalRecords' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAdditionalRecords($val);
            },
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
            'reportFormat' => fn(ParseNode $n) => $o->setReportFormat($n->getStringValue()),
            'reportType' => fn(ParseNode $n) => $o->setReportType($n->getStringValue()),
        ];
    }

    /**
     * Gets the fundingModels property value. The funding model for the campaign that shall be included in the report.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> The default funding model for Promoted Listings reports is <code>COST_PER_SALE</code>.</span><br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> Multiple value support for the <b>fundingModels</b> array has been deprecated. See <a href ="/develop/apis/api-deprecation-status ">API&nbsp;Deprecation&nbsp;Status</a> for information.</span><br /><br /><b>Valid Values:</b><ul><li><code>COST_PER_SALE</code></li><li><code>COST_PER_CLICK</code></li></ul><i>Required if</i> the campaign funding model is Cost Per Click (CPC).
     * @return array<string>|null
    */
    public function getFundingModels(): ?array {
        return $this->fundingModels;
    }

    /**
     * Gets the inventoryReferences property value. You can use this field to supply an array of items to include in the report if you manage your inventory with the <a href="/api-docs/sell/inventory/resources/methods">Inventory API</a>.  <br><br>This field is mutually exclusive with the <b>listingIds</b> field; if you populate this field, <i>do not</i> populate the <b>listingIds</b> field.  <br><br>An inventory reference identifies an item in your inventory using a pair of values, where the <b>inventoryReferenceId</b> can be either a seller-defined <b>SKU</b> value or an <b>inventoryItemGroupKey</b>, where an <b>inventoryItemGroupKey</b> is seller-defined ID for an inventory item group (a multiple-variation listing). <br><br>Couple the <b>inventoryReferenceId</b> with an <b>inventoryReferenceType</b> identifier to fully identify an item in your inventory.  <br><br><b>Maximum: </b> 500 items <br><br><i>Required if </i> you do not supply an array of <b>listingId</b> values or if you set <b>reportType</b> to <code>INVENTORY_PERFORMANCE_REPORT</code>.
     * @return array<InventoryReference>|null
    */
    public function getInventoryReferences(): ?array {
        return $this->inventoryReferences;
    }

    /**
     * Gets the listingIds property value. Use this field to supply an array of eBay listing IDs you want to include in the report.<br><br><span class="tablenote"><span style="color:#FF0000"><strong>Important:</strong></span> This field is mutually exclusive with the <b>inventoryReferences</b> field; if you populate this field, <i>do not</i> populate the <b>inventoryReferences</b> field.</span><br />For general campaign strategy sellers, this field is required if you do not supply an array of <b>inventoryReferences</b> values or if you set the <b>reportType</b> to <code>LISTING_PERFORMANCE_REPORT</code>.<br /><br />For priority strategy campaign sellers, leave this field blank to retrieve the details for all listings associated with the specified campaign IDs (or all campaigns associated with your account, if no campaign IDs are specified), or specify the listing IDs for which you would like to retrieve the listing-specific details.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> There is a maximum data limit that cannot be exceeded when generating reports. If this threshold is exceeded, the report will fail. Refer to <a href="/api-docs/sell/static/marketing/pl-reports.html#creation">Promoted Listings reporting</a> in the Selling Integration Guide for details.</span><br /><br /><b>Maximum:</b> 500 listings
     * @return array<string>|null
    */
    public function getListingIds(): ?array {
        return $this->listingIds;
    }

    /**
     * Gets the marketplaceId property value. The unique identifier for the eBay marketplace on which the report is based. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getMarketplaceId(): ?string {
        return $this->marketplaceId;
    }

    /**
     * Gets the metricKeys property value. The list of metrics to be included in the report.  <p>Metrics are the quantitative measurements compiled into the report and the data returned is based on the specified dimension of the report. For example, if the dimension is <code>campaign</code>, the metrics for <b>number of sales</b> would be the number of sales in the campaign. However, if the dimension is <code>listing</code>, the <b>number of sales</b> represents the number of items sold in that listing.</p>  <p>For information on metric keys and how to set them, see <a href="/api-docs/sell/static/marketing/pl-reports.html">Promoted Listings reporting</a>.</p><b>Minimum: </b> 1
     * @return array<string>|null
    */
    public function getMetricKeys(): ?array {
        return $this->metricKeys;
    }

    /**
     * Gets the reportFormat property value. The file format of the report. Currently, the only supported format is <code>TSV_GZIP</code>, which is a gzip file with tab separated values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportFormatEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getReportFormat(): ?string {
        return $this->reportFormat;
    }

    /**
     * Gets the reportType property value. The type of report to be generated, such as <code>ACCOUNT_PERFORMANCE_REPORT</code> or <code>CAMPAIGN_PERFORMANCE_REPORT</code>.<br/><br/><span class="tablenote"><b>Note:</b> INVENTORY_PERFORMANCE_REPORT is not currently available; availability date is pending.</span><br /><br /><b>Maximum:</b> 1 For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportTypeEnum'>eBay API documentation</a>
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
        $writer->writeCollectionOfPrimitiveValues('additionalRecords', $this->getAdditionalRecords());
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
        $writer->writeStringValue('reportFormat', $this->getReportFormat());
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
     * Sets the additionalRecords property value. A list of additional records that shall be included in the report, such as non-performing data.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> Additional records are only applicable to Promoted Listings priority strategy campaigns that use the Cost Per Click (CPC) funding model.</span><br /><b>Valid Value:</b> <code>NON_PERFORMING_DATA</code>
     * @param array<string>|null $value Value to set for the additionalRecords property.
    */
    public function setAdditionalRecords(?array $value): void {
        $this->additionalRecords = $value;
    }

    /**
     * Sets the campaignIds property value. A list of campaign IDs to be included in the report task. Use the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns" target="_blank">getCampaigns</a> method to retrieve a list of the current campaign IDs for a seller.<br /><br />For general campaign strategy sellers, this field is required if the <b>reportType</b> is set to <code>CAMPAIGN_PERFORMANCE_REPORT</code> or <code>CAMPAIGN_PERFORMANCE_SUMMARY_REPORT</code>.<br /><br />For priority strategy campaign sellers, leave this request field blank to retrieve the details for all campaigns associated with your account, or specify the campaign IDs for which you would like to retrieve the campaign-specific details.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> There is a maximum data limit that cannot be exceeded when generating reports. If this threshold is exceeded, the report will fail. Refer to <a href="/api-docs/sell/static/marketing/pl-reports.html#creation">Promoted Listings reporting</a> in the Selling Integration Guide for details.</span><br /><br /><b>Maximum:</b> 1,000 IDs</li></ul>
     * @param array<string>|null $value Value to set for the campaignIds property.
    */
    public function setCampaignIds(?array $value): void {
        $this->campaignIds = $value;
    }

    /**
     * Sets the channels property value. The channel for the advertising campaign that will be included in the report task. This value indicates whether the data included in the report task is for an Onsite or Offsite advertising campaign.<br><br>If no value is entered, this field will default to <code>ON_SITE</code>. Multiple channels are not supported.<br><br><span class="tablenote"><b>Note:</b> Channels are only applicable for campaigns that use the Cost Per Click (CPC) funding model.</span><br><b>Valid Values</b>:<ul><li> <code>ON_SITE</code></li><li><code>OFF_SITE</code></li></ul>This field is required and must be set to <code>OFF_SITE</code> if the report is for a Offsite Ads campaign.
     * @param array<string>|null $value Value to set for the channels property.
    */
    public function setChannels(?array $value): void {
        $this->channels = $value;
    }

    /**
     * Sets the dateFrom property value. The date defining the start of the timespan covered by the report.<br /><br />Format the timestamp as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> string, which is based on the 24-hour Coordinated Universal Time (UTC) clock with local offset.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> The date specified cannot be a future date.</span><br /><br /><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code><br /><br /><b>Example:</b> <code>2021-03-15T13:00:00-07:00</code>
     * @param string|null $value Value to set for the dateFrom property.
    */
    public function setDateFrom(?string $value): void {
        $this->dateFrom = $value;
    }

    /**
     * Sets the dateTo property value. The date defining the end of the timespan covered by the report.<br /><br />As with the <b>dateFrom</b> field, format the timestamp as an <a href="https://www.iso.org/iso-8601-date-and-time-format.html" title="https://www.iso.org" target="_blank">ISO 8601</a> string.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> The date specified cannot be a future date. Additionally, the time specified must be a later time than that specified in the <b>dateFrom</b> field.</span><br /><br /><b>Format:</b> <code>[YYYY]-[MM]-[DD]T[hh]:[mm]:[ss].[sss]Z</code><br /><br /><b>Example:</b> <code>2021-03-17T13:00:00-07:00</code>
     * @param string|null $value Value to set for the dateTo property.
    */
    public function setDateTo(?string $value): void {
        $this->dateTo = $value;
    }

    /**
     * Sets the dimensions property value. The list of the dimensions applied to the report.  <p>A dimension is an attribute to which the report data applies. For example, if you set <b>dimensionKey</b> to <code>campaign_id</code> in a Campaign Performance Report, the data will apply to the entire ad campaign. For information on the dimensions and how to specify them, see <a href="/api-docs/sell/static/marketing/pl-reports.html">Promoted Listings reporting</a>.</p>
     * @param array<Dimension>|null $value Value to set for the dimensions property.
    */
    public function setDimensions(?array $value): void {
        $this->dimensions = $value;
    }

    /**
     * Sets the fundingModels property value. The funding model for the campaign that shall be included in the report.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> The default funding model for Promoted Listings reports is <code>COST_PER_SALE</code>.</span><br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> Multiple value support for the <b>fundingModels</b> array has been deprecated. See <a href ="/develop/apis/api-deprecation-status ">API&nbsp;Deprecation&nbsp;Status</a> for information.</span><br /><br /><b>Valid Values:</b><ul><li><code>COST_PER_SALE</code></li><li><code>COST_PER_CLICK</code></li></ul><i>Required if</i> the campaign funding model is Cost Per Click (CPC).
     * @param array<string>|null $value Value to set for the fundingModels property.
    */
    public function setFundingModels(?array $value): void {
        $this->fundingModels = $value;
    }

    /**
     * Sets the inventoryReferences property value. You can use this field to supply an array of items to include in the report if you manage your inventory with the <a href="/api-docs/sell/inventory/resources/methods">Inventory API</a>.  <br><br>This field is mutually exclusive with the <b>listingIds</b> field; if you populate this field, <i>do not</i> populate the <b>listingIds</b> field.  <br><br>An inventory reference identifies an item in your inventory using a pair of values, where the <b>inventoryReferenceId</b> can be either a seller-defined <b>SKU</b> value or an <b>inventoryItemGroupKey</b>, where an <b>inventoryItemGroupKey</b> is seller-defined ID for an inventory item group (a multiple-variation listing). <br><br>Couple the <b>inventoryReferenceId</b> with an <b>inventoryReferenceType</b> identifier to fully identify an item in your inventory.  <br><br><b>Maximum: </b> 500 items <br><br><i>Required if </i> you do not supply an array of <b>listingId</b> values or if you set <b>reportType</b> to <code>INVENTORY_PERFORMANCE_REPORT</code>.
     * @param array<InventoryReference>|null $value Value to set for the inventoryReferences property.
    */
    public function setInventoryReferences(?array $value): void {
        $this->inventoryReferences = $value;
    }

    /**
     * Sets the listingIds property value. Use this field to supply an array of eBay listing IDs you want to include in the report.<br><br><span class="tablenote"><span style="color:#FF0000"><strong>Important:</strong></span> This field is mutually exclusive with the <b>inventoryReferences</b> field; if you populate this field, <i>do not</i> populate the <b>inventoryReferences</b> field.</span><br />For general campaign strategy sellers, this field is required if you do not supply an array of <b>inventoryReferences</b> values or if you set the <b>reportType</b> to <code>LISTING_PERFORMANCE_REPORT</code>.<br /><br />For priority strategy campaign sellers, leave this field blank to retrieve the details for all listings associated with the specified campaign IDs (or all campaigns associated with your account, if no campaign IDs are specified), or specify the listing IDs for which you would like to retrieve the listing-specific details.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> There is a maximum data limit that cannot be exceeded when generating reports. If this threshold is exceeded, the report will fail. Refer to <a href="/api-docs/sell/static/marketing/pl-reports.html#creation">Promoted Listings reporting</a> in the Selling Integration Guide for details.</span><br /><br /><b>Maximum:</b> 500 listings
     * @param array<string>|null $value Value to set for the listingIds property.
    */
    public function setListingIds(?array $value): void {
        $this->listingIds = $value;
    }

    /**
     * Sets the marketplaceId property value. The unique identifier for the eBay marketplace on which the report is based. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?string $value): void {
        $this->marketplaceId = $value;
    }

    /**
     * Sets the metricKeys property value. The list of metrics to be included in the report.  <p>Metrics are the quantitative measurements compiled into the report and the data returned is based on the specified dimension of the report. For example, if the dimension is <code>campaign</code>, the metrics for <b>number of sales</b> would be the number of sales in the campaign. However, if the dimension is <code>listing</code>, the <b>number of sales</b> represents the number of items sold in that listing.</p>  <p>For information on metric keys and how to set them, see <a href="/api-docs/sell/static/marketing/pl-reports.html">Promoted Listings reporting</a>.</p><b>Minimum: </b> 1
     * @param array<string>|null $value Value to set for the metricKeys property.
    */
    public function setMetricKeys(?array $value): void {
        $this->metricKeys = $value;
    }

    /**
     * Sets the reportFormat property value. The file format of the report. Currently, the only supported format is <code>TSV_GZIP</code>, which is a gzip file with tab separated values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportFormatEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the reportFormat property.
    */
    public function setReportFormat(?string $value): void {
        $this->reportFormat = $value;
    }

    /**
     * Sets the reportType property value. The type of report to be generated, such as <code>ACCOUNT_PERFORMANCE_REPORT</code> or <code>CAMPAIGN_PERFORMANCE_REPORT</code>.<br/><br/><span class="tablenote"><b>Note:</b> INVENTORY_PERFORMANCE_REPORT is not currently available; availability date is pending.</span><br /><br /><b>Maximum:</b> 1 For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/plr:ReportTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the reportType property.
    */
    public function setReportType(?string $value): void {
        $this->reportType = $value;
    }

}
