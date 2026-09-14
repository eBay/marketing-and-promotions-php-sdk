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
 * This type defines the fields used in the <b>updatedBiddingStrategy</b> request.
*/
class UpdateBiddingStrategyRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BiddingStrategyEnum|null $biddingStrategy The new bidding strategy for the specified Cost Per Click (CPC) campaign.
    */
    private ?BiddingStrategyEnum $biddingStrategy = null;
    
    /**
     * @var array<BidPreference>|null $bidPreferences This container indicates the bidding preferences of the campaign, such as the maximum CPC amount.<br><br><span class="tablenote"><b>Note:</b> This container is only applicable for smart targeting campaigns.</span><br>This container is required if the user wants to create a Smart Targeting campaign.
    */
    private ?array $bidPreferences = null;
    
    /**
     * Instantiates a new UpdateBiddingStrategyRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateBiddingStrategyRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateBiddingStrategyRequest {
        return new UpdateBiddingStrategyRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the biddingStrategy property value. The new bidding strategy for the specified Cost Per Click (CPC) campaign.
     * @return BiddingStrategyEnum|null
    */
    public function getBiddingStrategy(): ?BiddingStrategyEnum {
        return $this->biddingStrategy;
    }

    /**
     * Gets the bidPreferences property value. This container indicates the bidding preferences of the campaign, such as the maximum CPC amount.<br><br><span class="tablenote"><b>Note:</b> This container is only applicable for smart targeting campaigns.</span><br>This container is required if the user wants to create a Smart Targeting campaign.
     * @return array<BidPreference>|null
    */
    public function getBidPreferences(): ?array {
        return $this->bidPreferences;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'biddingStrategy' => fn(ParseNode $n) => $o->setBiddingStrategy($n->getEnumValue(BiddingStrategyEnum::class)),
            'bidPreferences' => fn(ParseNode $n) => $o->setBidPreferences($n->getCollectionOfObjectValues([BidPreference::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('biddingStrategy', $this->getBiddingStrategy());
        $writer->writeCollectionOfObjectValues('bidPreferences', $this->getBidPreferences());
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
     * Sets the biddingStrategy property value. The new bidding strategy for the specified Cost Per Click (CPC) campaign.
     * @param BiddingStrategyEnum|null $value Value to set for the biddingStrategy property.
    */
    public function setBiddingStrategy(?BiddingStrategyEnum $value): void {
        $this->biddingStrategy = $value;
    }

    /**
     * Sets the bidPreferences property value. This container indicates the bidding preferences of the campaign, such as the maximum CPC amount.<br><br><span class="tablenote"><b>Note:</b> This container is only applicable for smart targeting campaigns.</span><br>This container is required if the user wants to create a Smart Targeting campaign.
     * @param array<BidPreference>|null $value Value to set for the bidPreferences property.
    */
    public function setBidPreferences(?array $value): void {
        $this->bidPreferences = $value;
    }

}
