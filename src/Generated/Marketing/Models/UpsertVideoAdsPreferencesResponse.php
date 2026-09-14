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
 * This response type contains the result of a video ads preference create or update operation for a single listing. It is returned as the response body for <b>upsertVideoAdsPreferences</b> and as the per-listing result type in <b>bulkUpsertVideoAdsPreferences</b>. It contains the outcome of the attempted video ads preference create or update operation for a single listing, including the listing ID, status code, and any errors associated with that listing.
*/
class UpsertVideoAdsPreferencesResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<ErrorDetailV3>|null $errors A list of errors associated with the specified listing ID for the attempted video ads preference update. In a bulk response, this value applies to the individual listing result item.
    */
    private ?array $errors = null;
    
    /**
     * @var string|null $listingId The unique eBay listing ID for the listing that was updated or attempted (this ID was generated when the listing was created).
    */
    private ?string $listingId = null;
    
    /**
     * @var int|null $statusCode The HTTP status code returned for each listing that the seller attempted to update, whether for a single listing or for an individual listing within a bulk response.
    */
    private ?int $statusCode = null;
    
    /**
     * Instantiates a new UpsertVideoAdsPreferencesResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpsertVideoAdsPreferencesResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpsertVideoAdsPreferencesResponse {
        return new UpsertVideoAdsPreferencesResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the errors property value. A list of errors associated with the specified listing ID for the attempted video ads preference update. In a bulk response, this value applies to the individual listing result item.
     * @return array<ErrorDetailV3>|null
    */
    public function getErrors(): ?array {
        return $this->errors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([ErrorDetailV3::class, 'createFromDiscriminatorValue'])),
            'listingId' => fn(ParseNode $n) => $o->setListingId($n->getStringValue()),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the listingId property value. The unique eBay listing ID for the listing that was updated or attempted (this ID was generated when the listing was created).
     * @return string|null
    */
    public function getListingId(): ?string {
        return $this->listingId;
    }

    /**
     * Gets the statusCode property value. The HTTP status code returned for each listing that the seller attempted to update, whether for a single listing or for an individual listing within a bulk response.
     * @return int|null
    */
    public function getStatusCode(): ?int {
        return $this->statusCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('errors', $this->getErrors());
        $writer->writeStringValue('listingId', $this->getListingId());
        $writer->writeIntegerValue('statusCode', $this->getStatusCode());
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
     * Sets the errors property value. A list of errors associated with the specified listing ID for the attempted video ads preference update. In a bulk response, this value applies to the individual listing result item.
     * @param array<ErrorDetailV3>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the listingId property value. The unique eBay listing ID for the listing that was updated or attempted (this ID was generated when the listing was created).
     * @param string|null $value Value to set for the listingId property.
    */
    public function setListingId(?string $value): void {
        $this->listingId = $value;
    }

    /**
     * Sets the statusCode property value. The HTTP status code returned for each listing that the seller attempted to update, whether for a single listing or for an individual listing within a bulk response.
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

}
