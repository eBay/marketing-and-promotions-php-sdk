<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Report;

/**
 * This method returns the seller's email campaign performance report for a time period specified by the <b>startDate</b> and <b>endDate</b> path parameters. The maximum date range for a report retrieved by this method is one year. <br><br><span class="tablenote"><b>Note: </b>The <b>startDate</b> and <b>endDate</b> must be given in UTC format, as shown in the following example: <br><code>sell/marketing/v1/email_campaign/report?startDate=2022-11-01T19:09:02.768Z&endDate=2022-12-28T19:09:02.768Z</code></span><br>The email report returns a list of metrics, such as the number of times an email report has been opened and resulted in clicks.
*/
class ReportRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $endDate The end date for the report, given in UTC format. The maximum date range for a report retrieved by this method is one year.
    */
    public ?string $endDate = null;
    
    /**
     * @var string|null $startDate The start date for the report, given in UTC format. The maximum date range for a report retrieved by this method is one year.
    */
    public ?string $startDate = null;
    
    /**
     * Instantiates a new ReportRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $endDate The end date for the report, given in UTC format. The maximum date range for a report retrieved by this method is one year.
     * @param string|null $startDate The start date for the report, given in UTC format. The maximum date range for a report retrieved by this method is one year.
    */
    public function __construct(?string $endDate = null, ?string $startDate = null) {
        $this->endDate = $endDate;
        $this->startDate = $startDate;
    }

}
