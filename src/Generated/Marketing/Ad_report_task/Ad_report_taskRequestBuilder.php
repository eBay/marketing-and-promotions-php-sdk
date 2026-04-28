<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_task;

use EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_task\Item\WithReport_task_ItemRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateReportTask;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ReportTaskPagedCollection;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_report_task
*/
class Ad_report_taskRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/MarketingAndPromotions/Generated/Marketing.ad_report_task.item collection
     * @param string $report_task_id This path parameter specifies the unique identifier of the report task being retrieved.<br><br> Use the <a href="/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTasks" target="_blank">getReportTasks</a> method to retrieve report task Ids.
     * @return WithReport_task_ItemRequestBuilder
    */
    public function byReport_task_id(string $report_task_id): WithReport_task_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['report_task_id'] = $report_task_id;
        return new WithReport_task_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Ad_report_taskRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_report_task{?limit*,offset*,report_task_statuses*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method returns information on all the existing report tasks related to a seller. <p>Use the <b>report_task_statuses</b> query parameter to control which reports to return. You can paginate the result set by specifying a <b>limit</b>, which dictates how many report tasks to return on each page of the response. Use the <b>offset</b> parameter to specify how many reports to skip in the result set before returning the first result.</p><br/><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>For <b>ad_report</b> and <b>ad_report_task</b> methods, the API call limit is subject to a per user quota. These API calls can <b>only</b> be executed a maximum of 200 times per hour for each seller/user. If the number of calls per hour exceeds this limit, any new calls will be blocked for the next hour.</p></div>
     * @param Ad_report_taskRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ReportTaskPagedCollection|null>
     * @throws Exception
    */
    public function get(?Ad_report_taskRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ReportTaskPagedCollection::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method creates a <i>report task</i>, which generates a Promoted Listings report based on the values specified in the call.<br /><br />The report is generated based on the criteria you specify, including the report type, the report's dimensions and metrics, the report's start and end dates, the listings to include in the report, and more. <i>Metrics </i>are the quantitative measurements in the report while <i>dimensions</i> specify the attributes of the data included in the reports.<br /><br />When creating a report task, you can specify the items you want included in the report. The items you specify, using either <b>listingId</b> or <b>inventoryReference</b> values, must be in a Promoted Listings campaign for them to be included in the report.<br /><br />For details on the required and optional fields for each report type, see <a href="/api-docs/sell/static/marketing/pl-reports.html">Promoted Listings reporting</a>.<br /><br />This call returns the URL to the report task in the <b>Location</b> response header, and the URL includes the report-task ID.<br /><br />Reports often take time to generate and it's common for this call to return an HTTP status of <code>202</code>, which indicates the report is being generated. Call <a href="/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTasks">getReportTasks</a> (or <a href="/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTask">getReportTask</a> with the report-task ID) to determine the status of a Promoted Listings report. When a report is complete, eBay sets its status to <b>SUCCESS</b> and you can download it using the URL returned in the <b>reportHref</b> field of the <b>getReportTask</b> call. Report files are tab-separated value gzip files with a file extension of <code>.tsv.gz</code>.<br/><br/><span class="tablenote"><b>Note:</b> The reporting of some data related to sales and ad-fees may require a 72-hour (<b>maximum</b>) adjustment period which is often referred to as the <i>Reconciliation Period</i>. Such adjustment periods should, on average, be minimal. However, at any given time, the <b>payments</b> tab may be used to view those amounts that have actually been charged.</span><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> This call fails if you don't submit all the required fields for the specified report type. Fields not supported by the specified report type are ignored. Call <a href="/api-docs/sell/marketing/resources/ad_report_metadata/methods/getReportMetadata">getReportMetadata</a> to retrieve a list of the fields you need to configure for each Promoted Listings report type.</span><br/><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>For <b>ad_report</b> and <b>ad_report_task</b> methods, the API call limit is subject to a per user quota. These API calls can <b>only</b> be executed a maximum of 200 times per hour for each seller/user. If the number of calls per hour exceeds this limit, any new calls will be blocked for the next hour.</p></div><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> The data threshold for a single report is currently 1 million records; if this threshold is exceeded, the report will fail.</p></div>
     * @param CreateReportTask $body This type defines the rules that govern the generation of a report task and the criteria that's used to create the report. The report-generation rules include the starting and ending dates for the report. Report-task criteria includes the report dimensions, metrics, listings covered in the report, and so on. For information on the required and optional fields for each report type, see <a href="/api-docs/sell/static/marketing/pl-reports.html">Promoted Listings reporting</a>.
     * @param Ad_report_taskRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function post(CreateReportTask $body, ?Ad_report_taskRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendNoContentAsync($requestInfo, null);
    }

    /**
     * This method returns information on all the existing report tasks related to a seller. <p>Use the <b>report_task_statuses</b> query parameter to control which reports to return. You can paginate the result set by specifying a <b>limit</b>, which dictates how many report tasks to return on each page of the response. Use the <b>offset</b> parameter to specify how many reports to skip in the result set before returning the first result.</p><br/><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>For <b>ad_report</b> and <b>ad_report_task</b> methods, the API call limit is subject to a per user quota. These API calls can <b>only</b> be executed a maximum of 200 times per hour for each seller/user. If the number of calls per hour exceeds this limit, any new calls will be blocked for the next hour.</p></div>
     * @param Ad_report_taskRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Ad_report_taskRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * This method creates a <i>report task</i>, which generates a Promoted Listings report based on the values specified in the call.<br /><br />The report is generated based on the criteria you specify, including the report type, the report's dimensions and metrics, the report's start and end dates, the listings to include in the report, and more. <i>Metrics </i>are the quantitative measurements in the report while <i>dimensions</i> specify the attributes of the data included in the reports.<br /><br />When creating a report task, you can specify the items you want included in the report. The items you specify, using either <b>listingId</b> or <b>inventoryReference</b> values, must be in a Promoted Listings campaign for them to be included in the report.<br /><br />For details on the required and optional fields for each report type, see <a href="/api-docs/sell/static/marketing/pl-reports.html">Promoted Listings reporting</a>.<br /><br />This call returns the URL to the report task in the <b>Location</b> response header, and the URL includes the report-task ID.<br /><br />Reports often take time to generate and it's common for this call to return an HTTP status of <code>202</code>, which indicates the report is being generated. Call <a href="/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTasks">getReportTasks</a> (or <a href="/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTask">getReportTask</a> with the report-task ID) to determine the status of a Promoted Listings report. When a report is complete, eBay sets its status to <b>SUCCESS</b> and you can download it using the URL returned in the <b>reportHref</b> field of the <b>getReportTask</b> call. Report files are tab-separated value gzip files with a file extension of <code>.tsv.gz</code>.<br/><br/><span class="tablenote"><b>Note:</b> The reporting of some data related to sales and ad-fees may require a 72-hour (<b>maximum</b>) adjustment period which is often referred to as the <i>Reconciliation Period</i>. Such adjustment periods should, on average, be minimal. However, at any given time, the <b>payments</b> tab may be used to view those amounts that have actually been charged.</span><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> This call fails if you don't submit all the required fields for the specified report type. Fields not supported by the specified report type are ignored. Call <a href="/api-docs/sell/marketing/resources/ad_report_metadata/methods/getReportMetadata">getReportMetadata</a> to retrieve a list of the fields you need to configure for each Promoted Listings report type.</span><br/><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>For <b>ad_report</b> and <b>ad_report_task</b> methods, the API call limit is subject to a per user quota. These API calls can <b>only</b> be executed a maximum of 200 times per hour for each seller/user. If the number of calls per hour exceeds this limit, any new calls will be blocked for the next hour.</p></div><br><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> The data threshold for a single report is currently 1 million records; if this threshold is exceeded, the report will fail.</p></div>
     * @param CreateReportTask $body This type defines the rules that govern the generation of a report task and the criteria that's used to create the report. The report-generation rules include the starting and ending dates for the report. Report-task criteria includes the report dimensions, metrics, listings covered in the report, and so on. For information on the required and optional fields for each report type, see <a href="/api-docs/sell/static/marketing/pl-reports.html">Promoted Listings reporting</a>.
     * @param Ad_report_taskRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateReportTask $body, ?Ad_report_taskRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Ad_report_taskRequestBuilder
    */
    public function withUrl(string $rawUrl): Ad_report_taskRequestBuilder {
        return new Ad_report_taskRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
