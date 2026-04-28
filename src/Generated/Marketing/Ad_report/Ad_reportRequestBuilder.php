<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_report;

use EBay\MarketingAndPromotions\Generated\Marketing\Ad_report\Item\WithReport_ItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /ad_report
*/
class Ad_reportRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/MarketingAndPromotions/Generated/Marketing.ad_report.item collection
     * @param string $report_id This path parameter specifies the unique ID of the Promoted Listings report being retrieved.<br><br>Use the <a href="/api-docs/sell/marketing/resources/ad_report_task/methods/getReportTasks">getReportTasks</a> method to retrieve report IDs.
     * @return WithReport_ItemRequestBuilder
    */
    public function byReport_id(string $report_id): WithReport_ItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['report_id'] = $report_id;
        return new WithReport_ItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Ad_reportRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_report');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
