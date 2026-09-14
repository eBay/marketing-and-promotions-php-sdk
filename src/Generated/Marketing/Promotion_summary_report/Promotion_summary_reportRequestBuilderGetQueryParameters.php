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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Promotion_summary_report;

/**
 * <span class="tablenote"><b>Note:</b> As of July 8th 2024, <i>promotions</i> are now being referred to as <i>discounts</i> on Seller Hub and eBay help pages. Sell Marketing API documentation has been updated to reflect this product name change, but note that no API interface changes have been made.</span><br>This method generates a report that summarizes the seller's discounts for the specified eBay marketplace. The report returns information on <code>RUNNING</code>, <code>PAUSED</code>, and <code>ENDED</code> discounts (deleted reports are not returned) and summarizes the seller's campaign performance for all discounts on a given site.  <br><br>For information about summary reports, see <a href="/api-docs/sell/static/marketing/pm-summary-report.html" target="_blank">Reading the item discount Summary report</a>.
*/
class Promotion_summary_reportRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("marketplace_id")
     * @var string|null $marketplaceId This parameter specifies the eBay marketplace ID of the site for which you want a discount summary report.<br><br>See <a href="/develop/api/sell/request_headers#marketplace-id-values" target="_blank">Marketplace ID values</a> for supported Marketplace ID values.
    */
    public ?string $marketplaceId = null;
    
    /**
     * Instantiates a new Promotion_summary_reportRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $marketplace_id This parameter specifies the eBay marketplace ID of the site for which you want a discount summary report.<br><br>See <a href="/develop/api/sell/request_headers#marketplace-id-values" target="_blank">Marketplace ID values</a> for supported Marketplace ID values.
    */
    public function __construct(?string $marketplace_id = null) {
        $this->marketplaceId = $marketplace_id;
    }

}
