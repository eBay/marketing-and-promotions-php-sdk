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
 * A container for the details of a Promoted Listings campaign that uses the Cost Per Click (CPC) funding model.
*/
class CampaignBudgetRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BudgetRequest|null $daily The daily budget limit for a CPC Promoted Listings campaign.<br><br>When running an offsite campaign, eBay may spend more or less than the seller's daily budget to capitalize on interested buyers, but will not exceed 2x the daily budget. The average over the course of the campaign will not exceed the provided daily budget. This value is used to calculate a total monthly budget by multiplying 30.4 by the provided daily budget. Over the course of the campaign, eBay will not charge more than this total budget per month.<br><br>If a campaign ends prematurely, however, the seller may be charged up to 2x their daily budget on a daily basis, as the campaign may have not had the chance to average the budget out over time.
    */
    private ?BudgetRequest $daily = null;
    
    /**
     * Instantiates a new CampaignBudgetRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CampaignBudgetRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CampaignBudgetRequest {
        return new CampaignBudgetRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the daily property value. The daily budget limit for a CPC Promoted Listings campaign.<br><br>When running an offsite campaign, eBay may spend more or less than the seller's daily budget to capitalize on interested buyers, but will not exceed 2x the daily budget. The average over the course of the campaign will not exceed the provided daily budget. This value is used to calculate a total monthly budget by multiplying 30.4 by the provided daily budget. Over the course of the campaign, eBay will not charge more than this total budget per month.<br><br>If a campaign ends prematurely, however, the seller may be charged up to 2x their daily budget on a daily basis, as the campaign may have not had the chance to average the budget out over time.
     * @return BudgetRequest|null
    */
    public function getDaily(): ?BudgetRequest {
        return $this->daily;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'daily' => fn(ParseNode $n) => $o->setDaily($n->getObjectValue([BudgetRequest::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('daily', $this->getDaily());
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
     * Sets the daily property value. The daily budget limit for a CPC Promoted Listings campaign.<br><br>When running an offsite campaign, eBay may spend more or less than the seller's daily budget to capitalize on interested buyers, but will not exceed 2x the daily budget. The average over the course of the campaign will not exceed the provided daily budget. This value is used to calculate a total monthly budget by multiplying 30.4 by the provided daily budget. Over the course of the campaign, eBay will not charge more than this total budget per month.<br><br>If a campaign ends prematurely, however, the seller may be charged up to 2x their daily budget on a daily basis, as the campaign may have not had the chance to average the budget out over time.
     * @param BudgetRequest|null $value Value to set for the daily property.
    */
    public function setDaily(?BudgetRequest $value): void {
        $this->daily = $value;
    }

}
