<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the fields used in the <b>suggestBudget</b> response.
*/
class SuggestBudgetResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<BudgetRecommendationResponse>|null $suggestedBudget The suggested allocated daily budget for an offsite campaign.
    */
    private ?array $suggestedBudget = null;
    
    /**
     * Instantiates a new SuggestBudgetResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SuggestBudgetResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SuggestBudgetResponse {
        return new SuggestBudgetResponse();
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
            'suggestedBudget' => fn(ParseNode $n) => $o->setSuggestedBudget($n->getCollectionOfObjectValues([BudgetRecommendationResponse::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the suggestedBudget property value. The suggested allocated daily budget for an offsite campaign.
     * @return array<BudgetRecommendationResponse>|null
    */
    public function getSuggestedBudget(): ?array {
        return $this->suggestedBudget;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('suggestedBudget', $this->getSuggestedBudget());
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
     * Sets the suggestedBudget property value. The suggested allocated daily budget for an offsite campaign.
     * @param array<BudgetRecommendationResponse>|null $value Value to set for the suggestedBudget property.
    */
    public function setSuggestedBudget(?array $value): void {
        $this->suggestedBudget = $value;
    }

}
