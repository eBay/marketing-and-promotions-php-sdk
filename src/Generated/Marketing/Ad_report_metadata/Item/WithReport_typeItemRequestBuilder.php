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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_metadata\Item;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\Error;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\ReportMetadata;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_report_metadata/{report_type}
*/
class WithReport_typeItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new WithReport_typeItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_report_metadata/{report_type}{?channel*,funding_model*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This call retrieves metadata that details the fields used by a specific Promoted Listings report type. Use the <b>report_type</b> path parameter to indicate metadata to retrieve.<br/><br/>This method does not use a request payload.<br/><br/><span class="tablenote"><b>Note:</b> The reporting of some data related to sales and ad-fees may require a 72-hour (<b>maximum</b>) adjustment period which is often referred to as the <i>Reconciliation Period</i>. Such adjustment periods should, on average, be minimal. However, at any given time, the <b>payments</b> tab may be used to view those amounts that have actually been charged.</span>
     * @param WithReport_typeItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ReportMetadata|null>
     * @throws Exception
    */
    public function get(?WithReport_typeItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '403' => [Error::class, 'createFromDiscriminatorValue'],
                '404' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ReportMetadata::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This call retrieves metadata that details the fields used by a specific Promoted Listings report type. Use the <b>report_type</b> path parameter to indicate metadata to retrieve.<br/><br/>This method does not use a request payload.<br/><br/><span class="tablenote"><b>Note:</b> The reporting of some data related to sales and ad-fees may require a 72-hour (<b>maximum</b>) adjustment period which is often referred to as the <i>Reconciliation Period</i>. Such adjustment periods should, on average, be minimal. However, at any given time, the <b>payments</b> tab may be used to view those amounts that have actually been charged.</span>
     * @param WithReport_typeItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithReport_typeItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WithReport_typeItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithReport_typeItemRequestBuilder {
        return new WithReport_typeItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
