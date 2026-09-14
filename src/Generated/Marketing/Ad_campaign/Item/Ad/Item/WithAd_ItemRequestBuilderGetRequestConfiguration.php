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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Ad\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WithAd_ItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WithAd_ItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WithAd_ItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WithAd_ItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WithAd_ItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WithAd_ItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WithAd_ItemRequestBuilderGetQueryParameters.
     * @param GetFieldgroupsQueryParameterType|null $fieldgroups A comma-separated list of values that controls what is returned in the response. If not provided, standard ad fields are returned. <ul><li><b>DEFAULT</b>: Returns the standard ad fields. The <b>videoAdsPreferences</b> container is not included in the response.</li><li><b>VIDEO</b>: Adds the <b>videoAdsPreferences</b> container to the response, including video ads preferences for each ad.</li></ul>
     * @return WithAd_ItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?GetFieldgroupsQueryParameterType $fieldgroups = null): WithAd_ItemRequestBuilderGetQueryParameters {
        return new WithAd_ItemRequestBuilderGetQueryParameters($fieldgroups);
    }

}
