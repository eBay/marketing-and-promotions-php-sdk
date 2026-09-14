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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This request type defines the listing-level video ads preference create or update operations to perform in a single request across multiple Promoted Listings ads within a CPC campaign.
*/
class BulkUpsertVideoAdsPreferencesRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<UpsertVideoAdsPreferencesRequest>|null $requests An array of listing-level video ads preference updates. Include one object for each listing you want to create or update. You can specify up to 500 listing IDs in a single call, and the array must contain at least one item. <br><br><b>Maximum:</b> 500 IDs per call
    */
    private ?array $requests = null;
    
    /**
     * Instantiates a new BulkUpsertVideoAdsPreferencesRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BulkUpsertVideoAdsPreferencesRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BulkUpsertVideoAdsPreferencesRequest {
        return new BulkUpsertVideoAdsPreferencesRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'requests' => fn(ParseNode $n) => $o->setRequests($n->getCollectionOfObjectValues([UpsertVideoAdsPreferencesRequest::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the requests property value. An array of listing-level video ads preference updates. Include one object for each listing you want to create or update. You can specify up to 500 listing IDs in a single call, and the array must contain at least one item. <br><br><b>Maximum:</b> 500 IDs per call
     * @return array<UpsertVideoAdsPreferencesRequest>|null
    */
    public function getRequests(): ?array {
        return $this->requests;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('requests', $this->getRequests());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the requests property value. An array of listing-level video ads preference updates. Include one object for each listing you want to create or update. You can specify up to 500 listing IDs in a single call, and the array must contain at least one item. <br><br><b>Maximum:</b> 500 IDs per call
     * @param array<UpsertVideoAdsPreferencesRequest>|null $value Value to set for the requests property.
    */
    public function setRequests(?array $value): void {
        $this->requests = $value;
    }

}
