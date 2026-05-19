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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Email_campaign\Audience;

/**
 * This method retrieves all available email newsletter audiences for the <a href="/api-docs/sell/marketing/types/api:CampaignTypeEnum">email campaign type</a> specified by the <b>emailCampaignType</b> path parameter.<br><br>Use the optional <b>limit</b> and <b>offset</b> path parameters to paginate the results and to control which records are returned, respectively.
*/
class AudienceRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $emailCampaignType The email campaign type to search against.<br><br>See <a href="/api-docs/sell/marketing/types/api:CampaignTypeEnum" target="_blank">CampaignTypeEnum</a> for the full list of available email campaign types and associated enum values.
    */
    public ?string $emailCampaignType = null;
    
    /**
     * @var string|null $limit The maximum number of audience groups returned per page in the results set.<br><br><b>Min value</b>: 1<br><br><b>Max value</b>: 200<br><br><b>Default value</b>: 100
    */
    public ?string $limit = null;
    
    /**
     * @var string|null $offset The number of results to skip in a pagination query. This value cannot be less than 0.<br><br><b>Default value</b>: 0
    */
    public ?string $offset = null;
    
    /**
     * Instantiates a new AudienceRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $emailCampaignType The email campaign type to search against.<br><br>See <a href="/api-docs/sell/marketing/types/api:CampaignTypeEnum" target="_blank">CampaignTypeEnum</a> for the full list of available email campaign types and associated enum values.
     * @param string|null $limit The maximum number of audience groups returned per page in the results set.<br><br><b>Min value</b>: 1<br><br><b>Max value</b>: 200<br><br><b>Default value</b>: 100
     * @param string|null $offset The number of results to skip in a pagination query. This value cannot be less than 0.<br><br><b>Default value</b>: 0
    */
    public function __construct(?string $emailCampaignType = null, ?string $limit = null, ?string $offset = null) {
        $this->emailCampaignType = $emailCampaignType;
        $this->limit = $limit;
        $this->offset = $offset;
    }

}
