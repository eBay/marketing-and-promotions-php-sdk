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
 * This type defines the budget details of a Promoted Listings campaign that uses the Cost Per Click (CPC) funding model.<br /><br /><span class="tablenote"><b>Note:</b> This type will only be returned for campaigns using the CPC funding model; it does not apply to the Cost Per Sale (CPS) funding model.</span>
*/
class Budget implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $amount The allocated budget amount for a CPC Promoted Listings campaign.
    */
    private ?Amount $amount = null;
    
    /**
     * @var BudgetStatusEnum|null $budgetStatus The budget status for a CPC Promoted Listings campaign.
    */
    private ?BudgetStatusEnum $budgetStatus = null;
    
    /**
     * Instantiates a new Budget and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Budget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Budget {
        return new Budget();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. The allocated budget amount for a CPC Promoted Listings campaign.
     * @return Amount|null
    */
    public function getAmount(): ?Amount {
        return $this->amount;
    }

    /**
     * Gets the budgetStatus property value. The budget status for a CPC Promoted Listings campaign.
     * @return BudgetStatusEnum|null
    */
    public function getBudgetStatus(): ?BudgetStatusEnum {
        return $this->budgetStatus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'budgetStatus' => fn(ParseNode $n) => $o->setBudgetStatus($n->getEnumValue(BudgetStatusEnum::class)),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeEnumValue('budgetStatus', $this->getBudgetStatus());
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
     * Sets the amount property value. The allocated budget amount for a CPC Promoted Listings campaign.
     * @param Amount|null $value Value to set for the amount property.
    */
    public function setAmount(?Amount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the budgetStatus property value. The budget status for a CPC Promoted Listings campaign.
     * @param BudgetStatusEnum|null $value Value to set for the budgetStatus property.
    */
    public function setBudgetStatus(?BudgetStatusEnum $value): void {
        $this->budgetStatus = $value;
    }

}
