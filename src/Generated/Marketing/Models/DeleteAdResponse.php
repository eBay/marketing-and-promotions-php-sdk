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
 * This type defines the fields returned in a delete-ad response.
*/
class DeleteAdResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adId The unique identifier of the ad that was deleted, or the ad that the seller attempted to delete.
    */
    private ?string $adId = null;
    
    /**
     * @var array<ErrorDetailV3>|null $errors An array of the errors or warnings associated with the request.
    */
    private ?array $errors = null;
    
    /**
     * @var string|null $listingId A unique eBay-assigned ID for a listing that is generated when the listing is created.
    */
    private ?string $listingId = null;
    
    /**
     * @var int|null $statusCode An HTTP status code that indicates the response-status of the request. Check this code to see if the ad was successfully deleted.<span class="tablenote"><b>Note:</b>A status code is returned for each ad that the seller deletes, or attempts to delete.</span>
    */
    private ?int $statusCode = null;
    
    /**
     * Instantiates a new DeleteAdResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeleteAdResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeleteAdResponse {
        return new DeleteAdResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adId property value. The unique identifier of the ad that was deleted, or the ad that the seller attempted to delete.
     * @return string|null
    */
    public function getAdId(): ?string {
        return $this->adId;
    }

    /**
     * Gets the errors property value. An array of the errors or warnings associated with the request.
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
            'adId' => fn(ParseNode $n) => $o->setAdId($n->getStringValue()),
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([ErrorDetailV3::class, 'createFromDiscriminatorValue'])),
            'listingId' => fn(ParseNode $n) => $o->setListingId($n->getStringValue()),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the listingId property value. A unique eBay-assigned ID for a listing that is generated when the listing is created.
     * @return string|null
    */
    public function getListingId(): ?string {
        return $this->listingId;
    }

    /**
     * Gets the statusCode property value. An HTTP status code that indicates the response-status of the request. Check this code to see if the ad was successfully deleted.<span class="tablenote"><b>Note:</b>A status code is returned for each ad that the seller deletes, or attempts to delete.</span>
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
        $writer->writeStringValue('adId', $this->getAdId());
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
     * Sets the adId property value. The unique identifier of the ad that was deleted, or the ad that the seller attempted to delete.
     * @param string|null $value Value to set for the adId property.
    */
    public function setAdId(?string $value): void {
        $this->adId = $value;
    }

    /**
     * Sets the errors property value. An array of the errors or warnings associated with the request.
     * @param array<ErrorDetailV3>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the listingId property value. A unique eBay-assigned ID for a listing that is generated when the listing is created.
     * @param string|null $value Value to set for the listingId property.
    */
    public function setListingId(?string $value): void {
        $this->listingId = $value;
    }

    /**
     * Sets the statusCode property value. An HTTP status code that indicates the response-status of the request. Check this code to see if the ad was successfully deleted.<span class="tablenote"><b>Note:</b>A status code is returned for each ad that the seller deletes, or attempts to delete.</span>
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

}
