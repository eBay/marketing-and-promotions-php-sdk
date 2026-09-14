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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_metadata;

use EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_metadata\Item\WithReport_typeItemRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\Error;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ReportMetadatas;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_report_metadata
*/
class Ad_report_metadataRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the EBay/MarketingAndPromotions/Generated/Marketing.ad_report_metadata.item collection
     * @param string $report_type This path parameter specifies the name of the report type whose metadata you want to retrieve.<br /><br />For details about available report types and their descriptions, refer to the <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_report_task-getreporttasks.reporttypeenum">ReportTypeEnum</a>.
     * @return WithReport_typeItemRequestBuilder
    */
    public function byReport_type(string $report_type): WithReport_typeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['report_type'] = $report_type;
        return new WithReport_typeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new Ad_report_metadataRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_report_metadata{?channel*,funding_model*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This call retrieves information that details the fields used in each of the Promoted Listings reports. Use the returned information to configure the different types of Promoted Listings reports.</br></br> You can retrieve metadata for all report types,funding models and channels, or you can filter based on funding model and/or channel.<br/><br/><span class="tablenote"><b>Note:</b> The reporting of some data related to sales and ad-fees may require a 72-hour (<b>maximum</b>) adjustment period which is often referred to as the <i>Reconciliation Period</i>. Such adjustment periods should, on average, be minimal. However, at any given time, the <b>payments</b> tab may be used to view those amounts that have actually been charged.</span>
     * @param Ad_report_metadataRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ReportMetadatas|null>
     * @throws Exception
    */
    public function get(?Ad_report_metadataRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ReportMetadatas::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This call retrieves information that details the fields used in each of the Promoted Listings reports. Use the returned information to configure the different types of Promoted Listings reports.</br></br> You can retrieve metadata for all report types,funding models and channels, or you can filter based on funding model and/or channel.<br/><br/><span class="tablenote"><b>Note:</b> The reporting of some data related to sales and ad-fees may require a 72-hour (<b>maximum</b>) adjustment period which is often referred to as the <i>Reconciliation Period</i>. Such adjustment periods should, on average, be minimal. However, at any given time, the <b>payments</b> tab may be used to view those amounts that have actually been charged.</span>
     * @param Ad_report_metadataRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Ad_report_metadataRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Ad_report_metadataRequestBuilder
    */
    public function withUrl(string $rawUrl): Ad_report_metadataRequestBuilder {
        return new Ad_report_metadataRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
