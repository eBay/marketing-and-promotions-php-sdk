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

namespace EBay\MarketingAndPromotions\Generated\Recommendation\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A complex type that contains the ID of an actively listed item and a set of related listing recommendations. The recommendations contain information the seller can use to optimize their listing configurations.
*/
class ListingRecommendation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $listingId An ID that identifies the active listing associated with the eBay recommendations.
    */
    private ?string $listingId = null;
    
    /**
     * @var MarketingRecommendation|null $marketing This return object provides the eBay recommendations and information related to the associated listing ID.  <br><br>The container currently returns the <code>AD</code> recommendation type, which contains information that sellers can use to configure Promoted Listings ad campaigns.  <br><br>This container is returned with each <b>ListingRecommendation</b> object, <i>except</i> when: <ul><li>The listing ID is not eligible for Promoted Listings</li> <li>The listing ID is currently in a Promoted Listings campaign</li> <li>The listing ID is invalid</li></ul>
    */
    private ?MarketingRecommendation $marketing = null;
    
    /**
     * Instantiates a new ListingRecommendation and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ListingRecommendation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ListingRecommendation {
        return new ListingRecommendation();
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
            'listingId' => fn(ParseNode $n) => $o->setListingId($n->getStringValue()),
            'marketing' => fn(ParseNode $n) => $o->setMarketing($n->getObjectValue([MarketingRecommendation::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the listingId property value. An ID that identifies the active listing associated with the eBay recommendations.
     * @return string|null
    */
    public function getListingId(): ?string {
        return $this->listingId;
    }

    /**
     * Gets the marketing property value. This return object provides the eBay recommendations and information related to the associated listing ID.  <br><br>The container currently returns the <code>AD</code> recommendation type, which contains information that sellers can use to configure Promoted Listings ad campaigns.  <br><br>This container is returned with each <b>ListingRecommendation</b> object, <i>except</i> when: <ul><li>The listing ID is not eligible for Promoted Listings</li> <li>The listing ID is currently in a Promoted Listings campaign</li> <li>The listing ID is invalid</li></ul>
     * @return MarketingRecommendation|null
    */
    public function getMarketing(): ?MarketingRecommendation {
        return $this->marketing;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('listingId', $this->getListingId());
        $writer->writeObjectValue('marketing', $this->getMarketing());
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
     * Sets the listingId property value. An ID that identifies the active listing associated with the eBay recommendations.
     * @param string|null $value Value to set for the listingId property.
    */
    public function setListingId(?string $value): void {
        $this->listingId = $value;
    }

    /**
     * Sets the marketing property value. This return object provides the eBay recommendations and information related to the associated listing ID.  <br><br>The container currently returns the <code>AD</code> recommendation type, which contains information that sellers can use to configure Promoted Listings ad campaigns.  <br><br>This container is returned with each <b>ListingRecommendation</b> object, <i>except</i> when: <ul><li>The listing ID is not eligible for Promoted Listings</li> <li>The listing ID is currently in a Promoted Listings campaign</li> <li>The listing ID is invalid</li></ul>
     * @param MarketingRecommendation|null $value Value to set for the marketing property.
    */
    public function setMarketing(?MarketingRecommendation $value): void {
        $this->marketing = $value;
    }

}
