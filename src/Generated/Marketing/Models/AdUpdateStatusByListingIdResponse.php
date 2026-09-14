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
 * A type that contains the fields for the ad update status by listing ID response.
*/
class AdUpdateStatusByListingIdResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adGroupId A unique eBay-assigned ID for an ad group in a campaign that uses the Cost Per Click (CPC) funding model.
    */
    private ?string $adGroupId = null;
    
    /**
     * @var array<ErrorDetailV3>|null $errors A list of errors associated with the specified listing ID.
    */
    private ?array $errors = null;
    
    /**
     * @var string|null $href The URI for the ad, which can be used to retrieve the ad.
    */
    private ?string $href = null;
    
    /**
     * @var string|null $listingId A unique eBay-assigned ID that is generated when the listing is created.
    */
    private ?string $listingId = null;
    
    /**
     * @var int|null $statusCode An HTTP status code that indicates the response-status of the request.
    */
    private ?int $statusCode = null;
    
    /**
     * Instantiates a new AdUpdateStatusByListingIdResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdUpdateStatusByListingIdResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdUpdateStatusByListingIdResponse {
        return new AdUpdateStatusByListingIdResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adGroupId property value. A unique eBay-assigned ID for an ad group in a campaign that uses the Cost Per Click (CPC) funding model.
     * @return string|null
    */
    public function getAdGroupId(): ?string {
        return $this->adGroupId;
    }

    /**
     * Gets the errors property value. A list of errors associated with the specified listing ID.
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
            'adGroupId' => fn(ParseNode $n) => $o->setAdGroupId($n->getStringValue()),
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([ErrorDetailV3::class, 'createFromDiscriminatorValue'])),
            'href' => fn(ParseNode $n) => $o->setHref($n->getStringValue()),
            'listingId' => fn(ParseNode $n) => $o->setListingId($n->getStringValue()),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the href property value. The URI for the ad, which can be used to retrieve the ad.
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the listingId property value. A unique eBay-assigned ID that is generated when the listing is created.
     * @return string|null
    */
    public function getListingId(): ?string {
        return $this->listingId;
    }

    /**
     * Gets the statusCode property value. An HTTP status code that indicates the response-status of the request.
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
        $writer->writeStringValue('adGroupId', $this->getAdGroupId());
        $writer->writeCollectionOfObjectValues('errors', $this->getErrors());
        $writer->writeStringValue('href', $this->getHref());
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
     * Sets the adGroupId property value. A unique eBay-assigned ID for an ad group in a campaign that uses the Cost Per Click (CPC) funding model.
     * @param string|null $value Value to set for the adGroupId property.
    */
    public function setAdGroupId(?string $value): void {
        $this->adGroupId = $value;
    }

    /**
     * Sets the errors property value. A list of errors associated with the specified listing ID.
     * @param array<ErrorDetailV3>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the href property value. The URI for the ad, which can be used to retrieve the ad.
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the listingId property value. A unique eBay-assigned ID that is generated when the listing is created.
     * @param string|null $value Value to set for the listingId property.
    */
    public function setListingId(?string $value): void {
        $this->listingId = $value;
    }

    /**
     * Sets the statusCode property value. An HTTP status code that indicates the response-status of the request.
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

}
