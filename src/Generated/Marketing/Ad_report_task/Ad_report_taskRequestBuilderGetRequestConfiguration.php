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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_task;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Ad_report_taskRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Ad_report_taskRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Ad_report_taskRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Ad_report_taskRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Ad_report_taskRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Ad_report_taskRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Ad_report_taskRequestBuilderGetQueryParameters.
     * @param string|null $limit Specifies the maximum number of report tasks to return on a page in the paginated response.<br><br><b>Default:</b> 10<br><b>Maximum:</b> 500
     * @param string|null $offset Specifies the number of report tasks to skip in the result set before returning the first report in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the reports returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the response contains the first 10 reports from the complete list of report tasks retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>10</code>, the first page of the response contains reports 11-20 from the complete result set.</p> <b>Default:</b> 0
     * @param string|null $report_task_statuses This query parameter filters the returned report tasks by their status. Supply a comma-separated list of the report statuses you want returned. The results are filtered to include only the report statuses you specify.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> The results might not include some report tasks if other search conditions exclude them.</span><br />See <a href="/develop/api/sell/marketing_api#sell-marketing_api-ad_report_task-getreporttasks.reporttask.reporttaskstatus">TaskStatusEnum</a> for supported values.
     * @return Ad_report_taskRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $limit = null, ?string $offset = null, ?string $report_task_statuses = null): Ad_report_taskRequestBuilderGetQueryParameters {
        return new Ad_report_taskRequestBuilderGetQueryParameters($limit, $offset, $report_task_statuses);
    }

}
