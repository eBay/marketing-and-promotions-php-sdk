<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Promotion_summary_report;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\SummaryReportResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /promotion_summary_report
*/
class Promotion_summary_reportRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Promotion_summary_reportRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/promotion_summary_report?marketplace_id={marketplace_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <span class="tablenote"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method generates a report that summarizes the seller's discounts for the specified eBay marketplace. The report returns information on <code>RUNNING</code>, <code>PAUSED</code>, and <code>ENDED</code> discounts (deleted reports are not returned) and summarizes the seller's campaign performance for all discounts on a given site.  <br><br>For information about summary reports, see <a href="/api-docs/sell/static/marketing/pm-summary-report.html">Reading the item discount Summary report</a>.
     * @param Promotion_summary_reportRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SummaryReportResponse|null>
     * @throws Exception
    */
    public function get(?Promotion_summary_reportRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [SummaryReportResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * <span class="tablenote"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method generates a report that summarizes the seller's discounts for the specified eBay marketplace. The report returns information on <code>RUNNING</code>, <code>PAUSED</code>, and <code>ENDED</code> discounts (deleted reports are not returned) and summarizes the seller's campaign performance for all discounts on a given site.  <br><br>For information about summary reports, see <a href="/api-docs/sell/static/marketing/pm-summary-report.html">Reading the item discount Summary report</a>.
     * @param Promotion_summary_reportRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Promotion_summary_reportRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Promotion_summary_reportRequestBuilder
    */
    public function withUrl(string $rawUrl): Promotion_summary_reportRequestBuilder {
        return new Promotion_summary_reportRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
