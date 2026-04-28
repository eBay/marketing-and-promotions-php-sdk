<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_report_task;

/**
 * This method returns information on all the existing report tasks related to a seller. <p>Use the <b>report_task_statuses</b> query parameter to control which reports to return. You can paginate the result set by specifying a <b>limit</b>, which dictates how many report tasks to return on each page of the response. Use the <b>offset</b> parameter to specify how many reports to skip in the result set before returning the first result.</p><br/><div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span>For <b>ad_report</b> and <b>ad_report_task</b> methods, the API call limit is subject to a per user quota. These API calls can <b>only</b> be executed a maximum of 200 times per hour for each seller/user. If the number of calls per hour exceeds this limit, any new calls will be blocked for the next hour.</p></div>
*/
class Ad_report_taskRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $limit Specifies the maximum number of report tasks to return on a page in the paginated response.<br><br><b>Default:</b> 10<br><b>Maximum:</b> 500
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $offset Specifies the number of report tasks to skip in the result set before returning the first report in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the reports returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the response contains the first 10 reports from the complete list of report tasks retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>10</code>, the first page of the response contains reports 11-20 from the complete result set.</p> <b>Default:</b> 0
    */
    public ?string $offset = null;
    
    /**
     * @QueryParameter("report_task_statuses")
     * @var string|null $reportTaskStatuses This query parameter filters the returned report tasks by their status. Supply a comma-separated list of the report statuses you want returned. The results are filtered to include only the report statuses you specify.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> The results might not include some report tasks if other search conditions exclude them.</span><br />See <a href="/api-docs/sell/marketing/types/plr:TaskStatusEnum" target="_blank">TaskStatusEnum</a> for supported values.
    */
    public ?string $reportTaskStatuses = null;
    
    /**
     * Instantiates a new Ad_report_taskRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $limit Specifies the maximum number of report tasks to return on a page in the paginated response.<br><br><b>Default:</b> 10<br><b>Maximum:</b> 500
     * @param string|null $offset Specifies the number of report tasks to skip in the result set before returning the first report in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the reports returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the response contains the first 10 reports from the complete list of report tasks retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>10</code>, the first page of the response contains reports 11-20 from the complete result set.</p> <b>Default:</b> 0
     * @param string|null $report_task_statuses This query parameter filters the returned report tasks by their status. Supply a comma-separated list of the report statuses you want returned. The results are filtered to include only the report statuses you specify.<br /><br /><span class="tablenote"><span style="color:#004680"><strong>Note:</strong></span> The results might not include some report tasks if other search conditions exclude them.</span><br />See <a href="/api-docs/sell/marketing/types/plr:TaskStatusEnum" target="_blank">TaskStatusEnum</a> for supported values.
    */
    public function __construct(?string $limit = null, ?string $offset = null, ?string $report_task_statuses = null) {
        $this->limit = $limit;
        $this->offset = $offset;
        $this->reportTaskStatuses = $report_task_statuses;
    }

}
