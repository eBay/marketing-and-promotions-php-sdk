<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Report;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\GetEmailReportResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /email_campaign/report
*/
class ReportRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ReportRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/email_campaign/report?endDate={endDate}&startDate={startDate}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method returns the seller's email campaign performance report for a time period specified by the <b>startDate</b> and <b>endDate</b> path parameters. The maximum date range for a report retrieved by this method is one year. <br><br><span class="tablenote"><b>Note: </b>The <b>startDate</b> and <b>endDate</b> must be given in UTC format, as shown in the following example: <br><code>sell/marketing/v1/email_campaign/report?startDate=2022-11-01T19:09:02.768Z&endDate=2022-12-28T19:09:02.768Z</code></span><br>The email report returns a list of metrics, such as the number of times an email report has been opened and resulted in clicks.
     * @param ReportRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetEmailReportResponse|null>
     * @throws Exception
    */
    public function get(?ReportRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [GetEmailReportResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method returns the seller's email campaign performance report for a time period specified by the <b>startDate</b> and <b>endDate</b> path parameters. The maximum date range for a report retrieved by this method is one year. <br><br><span class="tablenote"><b>Note: </b>The <b>startDate</b> and <b>endDate</b> must be given in UTC format, as shown in the following example: <br><code>sell/marketing/v1/email_campaign/report?startDate=2022-11-01T19:09:02.768Z&endDate=2022-12-28T19:09:02.768Z</code></span><br>The email report returns a list of metrics, such as the number of times an email report has been opened and resulted in clicks.
     * @param ReportRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ReportRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ReportRequestBuilder
    */
    public function withUrl(string $rawUrl): ReportRequestBuilder {
        return new ReportRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
