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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Report;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ReportRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ReportRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ReportRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ReportRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ReportRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ReportRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ReportRequestBuilderGetQueryParameters.
     * @param string|null $endDate The end date for the report, given in UTC format. The maximum date range for a report retrieved by this method is one year.
     * @param string|null $startDate The start date for the report, given in UTC format. The maximum date range for a report retrieved by this method is one year.
     * @return ReportRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $endDate = null, ?string $startDate = null): ReportRequestBuilderGetQueryParameters {
        return new ReportRequestBuilderGetQueryParameters($endDate, $startDate);
    }

}
