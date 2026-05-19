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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type indicates the suggested daily keyword budget for an offsite campaign.
*/
class BudgetRecommendationResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var CampaignBudget|null $budget A type that defines the budget details for a Cost Per Click (CPC) Promoted Listings campaign.
    */
    private ?CampaignBudget $budget = null;
    
    /**
     * @var string|null $campaignId The unique eBay-assigned ID for a campaign. This ID is generated when a campaign is created.
    */
    private ?string $campaignId = null;
    
    /**
     * @var array<string>|null $channels The channel for the campaign. This value indicates whether the campaign is an Onsite or Offsite advertising campaign.<br><br><b>Valid Values:</b><ul><li><code>ON_SITE</code></li><li><code>OFF_SITE</code></li></ul>
    */
    private ?array $channels = null;
    
    /**
     * Instantiates a new BudgetRecommendationResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BudgetRecommendationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BudgetRecommendationResponse {
        return new BudgetRecommendationResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the budget property value. A type that defines the budget details for a Cost Per Click (CPC) Promoted Listings campaign.
     * @return CampaignBudget|null
    */
    public function getBudget(): ?CampaignBudget {
        return $this->budget;
    }

    /**
     * Gets the campaignId property value. The unique eBay-assigned ID for a campaign. This ID is generated when a campaign is created.
     * @return string|null
    */
    public function getCampaignId(): ?string {
        return $this->campaignId;
    }

    /**
     * Gets the channels property value. The channel for the campaign. This value indicates whether the campaign is an Onsite or Offsite advertising campaign.<br><br><b>Valid Values:</b><ul><li><code>ON_SITE</code></li><li><code>OFF_SITE</code></li></ul>
     * @return array<string>|null
    */
    public function getChannels(): ?array {
        return $this->channels;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'budget' => fn(ParseNode $n) => $o->setBudget($n->getObjectValue([CampaignBudget::class, 'createFromDiscriminatorValue'])),
            'campaignId' => fn(ParseNode $n) => $o->setCampaignId($n->getStringValue()),
            'channels' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setChannels($val);
            },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('budget', $this->getBudget());
        $writer->writeStringValue('campaignId', $this->getCampaignId());
        $writer->writeCollectionOfPrimitiveValues('channels', $this->getChannels());
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
     * Sets the budget property value. A type that defines the budget details for a Cost Per Click (CPC) Promoted Listings campaign.
     * @param CampaignBudget|null $value Value to set for the budget property.
    */
    public function setBudget(?CampaignBudget $value): void {
        $this->budget = $value;
    }

    /**
     * Sets the campaignId property value. The unique eBay-assigned ID for a campaign. This ID is generated when a campaign is created.
     * @param string|null $value Value to set for the campaignId property.
    */
    public function setCampaignId(?string $value): void {
        $this->campaignId = $value;
    }

    /**
     * Sets the channels property value. The channel for the campaign. This value indicates whether the campaign is an Onsite or Offsite advertising campaign.<br><br><b>Valid Values:</b><ul><li><code>ON_SITE</code></li><li><code>OFF_SITE</code></li></ul>
     * @param array<string>|null $value Value to set for the channels property.
    */
    public function setChannels(?array $value): void {
        $this->channels = $value;
    }

}
