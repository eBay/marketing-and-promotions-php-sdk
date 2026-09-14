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
 * A complex type that contains recommendations and information on how to configure Promoted Listings ad campaigns.
*/
class Ad implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<BidPercentages>|null $bidPercentages This field returns information that you can use to configure the <b>bidPercentage</b> field in a Promoted Listings campaign.<br /><br /><span class="tablenote"><b>Note:</b> Currently, <code>ITEM</code> and <code>TRENDING</code> are the only supported bid percentage types.</span><br /><br />The <code>ITEM</code> suggested bid percentages are tailored to each of your items and are designed to help you stay competitive while finding an optimal balance between performance and cost. The recommendations are calculated based on a variety of factors that may include item attributes, seasonality, past performance, and current competition for each of your listings.<br /><br />The <code>TRENDING</code> suggested bid percentages are calculated by reviewing the category level average ad rates in the marketplace.<br /><br />Setting the <b>bidPercentage</b> of your ad campaign based on these rate recommendations will help the items in the campaign be competitive with other items in the marketplace by improving their chances of being displayed more often in the marketplace.
    */
    private ?array $bidPercentages = null;
    
    /**
     * @var PromoteWithAd|null $promoteWithAd An enum whose values describe whether or not eBay recommends you place the associated listing in a Promoted Listings ad campaign.  <br><br>IDs deemed <code>RECOMMENDED</code> by eBay are the listings with the highest potential of benefiting from being promoted. The recommendation calculation is based on marketplace trends, like buyer demand and the competition in the item’s category.  <p class="tablenote"><b>Note:</b> A <b>promoteWithAd</b> value cannot be calculated for listings that are part of Promoted Listings campaigns.  <br><br>Because of this, if you call <b>findListingRecommendations</b> with a specific set of listing IDs, the <b>promoteWithAd</b> field is not returned for any of the listings that are involved in a promotion. However, as long as they are eligible, the trending <b>bidPercentage</b> <i>is</i> returned for all specified listings, even if they are part of an ad campaign.</p>
    */
    private ?PromoteWithAd $promoteWithAd = null;
    
    /**
     * Instantiates a new Ad and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Ad
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Ad {
        return new Ad();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the bidPercentages property value. This field returns information that you can use to configure the <b>bidPercentage</b> field in a Promoted Listings campaign.<br /><br /><span class="tablenote"><b>Note:</b> Currently, <code>ITEM</code> and <code>TRENDING</code> are the only supported bid percentage types.</span><br /><br />The <code>ITEM</code> suggested bid percentages are tailored to each of your items and are designed to help you stay competitive while finding an optimal balance between performance and cost. The recommendations are calculated based on a variety of factors that may include item attributes, seasonality, past performance, and current competition for each of your listings.<br /><br />The <code>TRENDING</code> suggested bid percentages are calculated by reviewing the category level average ad rates in the marketplace.<br /><br />Setting the <b>bidPercentage</b> of your ad campaign based on these rate recommendations will help the items in the campaign be competitive with other items in the marketplace by improving their chances of being displayed more often in the marketplace.
     * @return array<BidPercentages>|null
    */
    public function getBidPercentages(): ?array {
        return $this->bidPercentages;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bidPercentages' => fn(ParseNode $n) => $o->setBidPercentages($n->getCollectionOfObjectValues([BidPercentages::class, 'createFromDiscriminatorValue'])),
            'promoteWithAd' => fn(ParseNode $n) => $o->setPromoteWithAd($n->getEnumValue(PromoteWithAd::class)),
        ];
    }

    /**
     * Gets the promoteWithAd property value. An enum whose values describe whether or not eBay recommends you place the associated listing in a Promoted Listings ad campaign.  <br><br>IDs deemed <code>RECOMMENDED</code> by eBay are the listings with the highest potential of benefiting from being promoted. The recommendation calculation is based on marketplace trends, like buyer demand and the competition in the item’s category.  <p class="tablenote"><b>Note:</b> A <b>promoteWithAd</b> value cannot be calculated for listings that are part of Promoted Listings campaigns.  <br><br>Because of this, if you call <b>findListingRecommendations</b> with a specific set of listing IDs, the <b>promoteWithAd</b> field is not returned for any of the listings that are involved in a promotion. However, as long as they are eligible, the trending <b>bidPercentage</b> <i>is</i> returned for all specified listings, even if they are part of an ad campaign.</p>
     * @return PromoteWithAd|null
    */
    public function getPromoteWithAd(): ?PromoteWithAd {
        return $this->promoteWithAd;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('bidPercentages', $this->getBidPercentages());
        $writer->writeEnumValue('promoteWithAd', $this->getPromoteWithAd());
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
     * Sets the bidPercentages property value. This field returns information that you can use to configure the <b>bidPercentage</b> field in a Promoted Listings campaign.<br /><br /><span class="tablenote"><b>Note:</b> Currently, <code>ITEM</code> and <code>TRENDING</code> are the only supported bid percentage types.</span><br /><br />The <code>ITEM</code> suggested bid percentages are tailored to each of your items and are designed to help you stay competitive while finding an optimal balance between performance and cost. The recommendations are calculated based on a variety of factors that may include item attributes, seasonality, past performance, and current competition for each of your listings.<br /><br />The <code>TRENDING</code> suggested bid percentages are calculated by reviewing the category level average ad rates in the marketplace.<br /><br />Setting the <b>bidPercentage</b> of your ad campaign based on these rate recommendations will help the items in the campaign be competitive with other items in the marketplace by improving their chances of being displayed more often in the marketplace.
     * @param array<BidPercentages>|null $value Value to set for the bidPercentages property.
    */
    public function setBidPercentages(?array $value): void {
        $this->bidPercentages = $value;
    }

    /**
     * Sets the promoteWithAd property value. An enum whose values describe whether or not eBay recommends you place the associated listing in a Promoted Listings ad campaign.  <br><br>IDs deemed <code>RECOMMENDED</code> by eBay are the listings with the highest potential of benefiting from being promoted. The recommendation calculation is based on marketplace trends, like buyer demand and the competition in the item’s category.  <p class="tablenote"><b>Note:</b> A <b>promoteWithAd</b> value cannot be calculated for listings that are part of Promoted Listings campaigns.  <br><br>Because of this, if you call <b>findListingRecommendations</b> with a specific set of listing IDs, the <b>promoteWithAd</b> field is not returned for any of the listings that are involved in a promotion. However, as long as they are eligible, the trending <b>bidPercentage</b> <i>is</i> returned for all specified listings, even if they are part of an ad campaign.</p>
     * @param PromoteWithAd|null $value Value to set for the promoteWithAd property.
    */
    public function setPromoteWithAd(?PromoteWithAd $value): void {
        $this->promoteWithAd = $value;
    }

}
