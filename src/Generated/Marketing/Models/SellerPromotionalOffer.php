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
 * This type returns the details of a promotional offer for which a seller is eligible.
*/
class SellerPromotionalOffer implements AdditionalDataHolder, Parsable 
{
    /**
     * @var Activation|null $activation This container returns activation information for the promotion that contains one or more offers, including if activation is required and the <b>promotionHash</b> value needed for activation.<br><br>This field is only returned for RSVP promotions that require activation.
    */
    private ?Activation $activation = null;
    
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $budgetAmountRemaining This container shows the budget remaining in the promotional offer period.<br><br><span class="tablenote"><b>Note:</b> This container is only returned if the promotional offer is budget based.</span>
    */
    private ?Amount $budgetAmountRemaining = null;
    
    /**
     * @var Amount|null $budgetAmountUsed This container shows the budget that has been used so far during the promotional offer period.<br><br><span class="tablenote"><b>Note:</b> This container is only returned if the promotional offer is budget based.</span>
    */
    private ?Amount $budgetAmountUsed = null;
    
    /**
     * @var string|null $description The description of the promotion.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $learnMoreUrl The URL for the webpage that explains more details about the particular promotion, including the Terms and Conditions for the promotion.
    */
    private ?string $learnMoreUrl = null;
    
    /**
     * @var MarketplaceIdEnum|null $marketplaceId The eBay marketplace associated with the promotion.
    */
    private ?MarketplaceIdEnum $marketplaceId = null;
    
    /**
     * @var string|null $offerEndDate A timestamp that indicates the date and time when the promotional offer is no longer active for the seller. This value is returned in UTC format (<code>yyyy-MM-ddTHH:mm:ssZ</code>), which can be converted into the local time of the buyer.
    */
    private ?string $offerEndDate = null;
    
    /**
     * @var string|null $offerStartDate A timestamp that indicates the date and time when the promotional offer becomes active for the seller. This value is returned in UTC format (<code>yyyy-MM-ddTHH:mm:ssZ</code>), which can be converted into the local time of the buyer.
    */
    private ?string $offerStartDate = null;
    
    /**
     * @var OfferStateEnum|null $offerState The current state of the promotional offer.<br><br>If the offer state is returned as <code>REQUIRES_ACTIVATION</code>, use the <a href=/develop/api/sell/marketing_api#sell-marketing_api-seller_promotional_offers-activatepromotion">activatePromotion</a> method to activate the promotion for the seller.
    */
    private ?OfferStateEnum $offerState = null;
    
    /**
     * @var OfferTypeEnum|null $offerType The promotional offer type. This field specifies if a promotional offer is associated with an RSVP promotion that needs to be activated before use.<br><br><b>Valid values</b>:<ul><li><code>RSVP</code></li><li><code>NON_RSVP</code></li></ul>
    */
    private ?OfferTypeEnum $offerType = null;
    
    /**
     * @var string|null $promotionEndDate A timestamp that indicates the date and time when the seller promotion ends.<br><br>This value is returned in UTC format (<code>yyyy-MM-ddTHH:mm:ssZ</code>), which can be converted into the local time of the buyer.
    */
    private ?string $promotionEndDate = null;
    
    /**
     * @var string|null $promotionId The unique identifier of the promotion.
    */
    private ?string $promotionId = null;
    
    /**
     * @var string|null $promotionStartDate A timestamp indicating the date and time when the seller promotion began.<br><br>This value is returned in UTC format (<code>yyyy-MM-ddTHH:mm:ssZ</code>), which can be converted into the local time of the buyer.
    */
    private ?string $promotionStartDate = null;
    
    /**
     * @var string|null $title The title of the promotion.
    */
    private ?string $title = null;
    
    /**
     * @var int|null $transactionsRemaining The number of transactions remaining in the promotional offer period.<br><br><span class="tablenote"><b>Note:</b> This field is only returned if the promotional offer is transaction based.</span>
    */
    private ?int $transactionsRemaining = null;
    
    /**
     * @var int|null $transactionsUsed The number of transactions that have been used so far during the promotional offer period.<br><br><span class="tablenote"><b>Note:</b> This field is only returned if the promotional offer is transaction based.</span>
    */
    private ?int $transactionsUsed = null;
    
    /**
     * @var bool|null $unlimitedTransactions This boolean field indicates whether the promotional offer has unlimited transactions or a limited cap on transactions.<br><br>If returned as <code>true</code>, the seller can receive benefits from the promotional offer for all eligible transactions or charges.
    */
    private ?bool $unlimitedTransactions = null;
    
    /**
     * Instantiates a new SellerPromotionalOffer and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SellerPromotionalOffer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SellerPromotionalOffer {
        return new SellerPromotionalOffer();
    }

    /**
     * Gets the activation property value. This container returns activation information for the promotion that contains one or more offers, including if activation is required and the <b>promotionHash</b> value needed for activation.<br><br>This field is only returned for RSVP promotions that require activation.
     * @return Activation|null
    */
    public function getActivation(): ?Activation {
        return $this->activation;
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the budgetAmountRemaining property value. This container shows the budget remaining in the promotional offer period.<br><br><span class="tablenote"><b>Note:</b> This container is only returned if the promotional offer is budget based.</span>
     * @return Amount|null
    */
    public function getBudgetAmountRemaining(): ?Amount {
        return $this->budgetAmountRemaining;
    }

    /**
     * Gets the budgetAmountUsed property value. This container shows the budget that has been used so far during the promotional offer period.<br><br><span class="tablenote"><b>Note:</b> This container is only returned if the promotional offer is budget based.</span>
     * @return Amount|null
    */
    public function getBudgetAmountUsed(): ?Amount {
        return $this->budgetAmountUsed;
    }

    /**
     * Gets the description property value. The description of the promotion.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activation' => fn(ParseNode $n) => $o->setActivation($n->getObjectValue([Activation::class, 'createFromDiscriminatorValue'])),
            'budgetAmountRemaining' => fn(ParseNode $n) => $o->setBudgetAmountRemaining($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'budgetAmountUsed' => fn(ParseNode $n) => $o->setBudgetAmountUsed($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'learnMoreUrl' => fn(ParseNode $n) => $o->setLearnMoreUrl($n->getStringValue()),
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getEnumValue(MarketplaceIdEnum::class)),
            'offerEndDate' => fn(ParseNode $n) => $o->setOfferEndDate($n->getStringValue()),
            'offerStartDate' => fn(ParseNode $n) => $o->setOfferStartDate($n->getStringValue()),
            'offerState' => fn(ParseNode $n) => $o->setOfferState($n->getEnumValue(OfferStateEnum::class)),
            'offerType' => fn(ParseNode $n) => $o->setOfferType($n->getEnumValue(OfferTypeEnum::class)),
            'promotionEndDate' => fn(ParseNode $n) => $o->setPromotionEndDate($n->getStringValue()),
            'promotionId' => fn(ParseNode $n) => $o->setPromotionId($n->getStringValue()),
            'promotionStartDate' => fn(ParseNode $n) => $o->setPromotionStartDate($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'transactionsRemaining' => fn(ParseNode $n) => $o->setTransactionsRemaining($n->getIntegerValue()),
            'transactionsUsed' => fn(ParseNode $n) => $o->setTransactionsUsed($n->getIntegerValue()),
            'unlimitedTransactions' => fn(ParseNode $n) => $o->setUnlimitedTransactions($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the learnMoreUrl property value. The URL for the webpage that explains more details about the particular promotion, including the Terms and Conditions for the promotion.
     * @return string|null
    */
    public function getLearnMoreUrl(): ?string {
        return $this->learnMoreUrl;
    }

    /**
     * Gets the marketplaceId property value. The eBay marketplace associated with the promotion.
     * @return MarketplaceIdEnum|null
    */
    public function getMarketplaceId(): ?MarketplaceIdEnum {
        return $this->marketplaceId;
    }

    /**
     * Gets the offerEndDate property value. A timestamp that indicates the date and time when the promotional offer is no longer active for the seller. This value is returned in UTC format (<code>yyyy-MM-ddTHH:mm:ssZ</code>), which can be converted into the local time of the buyer.
     * @return string|null
    */
    public function getOfferEndDate(): ?string {
        return $this->offerEndDate;
    }

    /**
     * Gets the offerStartDate property value. A timestamp that indicates the date and time when the promotional offer becomes active for the seller. This value is returned in UTC format (<code>yyyy-MM-ddTHH:mm:ssZ</code>), which can be converted into the local time of the buyer.
     * @return string|null
    */
    public function getOfferStartDate(): ?string {
        return $this->offerStartDate;
    }

    /**
     * Gets the offerState property value. The current state of the promotional offer.<br><br>If the offer state is returned as <code>REQUIRES_ACTIVATION</code>, use the <a href=/develop/api/sell/marketing_api#sell-marketing_api-seller_promotional_offers-activatepromotion">activatePromotion</a> method to activate the promotion for the seller.
     * @return OfferStateEnum|null
    */
    public function getOfferState(): ?OfferStateEnum {
        return $this->offerState;
    }

    /**
     * Gets the offerType property value. The promotional offer type. This field specifies if a promotional offer is associated with an RSVP promotion that needs to be activated before use.<br><br><b>Valid values</b>:<ul><li><code>RSVP</code></li><li><code>NON_RSVP</code></li></ul>
     * @return OfferTypeEnum|null
    */
    public function getOfferType(): ?OfferTypeEnum {
        return $this->offerType;
    }

    /**
     * Gets the promotionEndDate property value. A timestamp that indicates the date and time when the seller promotion ends.<br><br>This value is returned in UTC format (<code>yyyy-MM-ddTHH:mm:ssZ</code>), which can be converted into the local time of the buyer.
     * @return string|null
    */
    public function getPromotionEndDate(): ?string {
        return $this->promotionEndDate;
    }

    /**
     * Gets the promotionId property value. The unique identifier of the promotion.
     * @return string|null
    */
    public function getPromotionId(): ?string {
        return $this->promotionId;
    }

    /**
     * Gets the promotionStartDate property value. A timestamp indicating the date and time when the seller promotion began.<br><br>This value is returned in UTC format (<code>yyyy-MM-ddTHH:mm:ssZ</code>), which can be converted into the local time of the buyer.
     * @return string|null
    */
    public function getPromotionStartDate(): ?string {
        return $this->promotionStartDate;
    }

    /**
     * Gets the title property value. The title of the promotion.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the transactionsRemaining property value. The number of transactions remaining in the promotional offer period.<br><br><span class="tablenote"><b>Note:</b> This field is only returned if the promotional offer is transaction based.</span>
     * @return int|null
    */
    public function getTransactionsRemaining(): ?int {
        return $this->transactionsRemaining;
    }

    /**
     * Gets the transactionsUsed property value. The number of transactions that have been used so far during the promotional offer period.<br><br><span class="tablenote"><b>Note:</b> This field is only returned if the promotional offer is transaction based.</span>
     * @return int|null
    */
    public function getTransactionsUsed(): ?int {
        return $this->transactionsUsed;
    }

    /**
     * Gets the unlimitedTransactions property value. This boolean field indicates whether the promotional offer has unlimited transactions or a limited cap on transactions.<br><br>If returned as <code>true</code>, the seller can receive benefits from the promotional offer for all eligible transactions or charges.
     * @return bool|null
    */
    public function getUnlimitedTransactions(): ?bool {
        return $this->unlimitedTransactions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('activation', $this->getActivation());
        $writer->writeObjectValue('budgetAmountRemaining', $this->getBudgetAmountRemaining());
        $writer->writeObjectValue('budgetAmountUsed', $this->getBudgetAmountUsed());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('learnMoreUrl', $this->getLearnMoreUrl());
        $writer->writeEnumValue('marketplaceId', $this->getMarketplaceId());
        $writer->writeStringValue('offerEndDate', $this->getOfferEndDate());
        $writer->writeStringValue('offerStartDate', $this->getOfferStartDate());
        $writer->writeEnumValue('offerState', $this->getOfferState());
        $writer->writeEnumValue('offerType', $this->getOfferType());
        $writer->writeStringValue('promotionEndDate', $this->getPromotionEndDate());
        $writer->writeStringValue('promotionId', $this->getPromotionId());
        $writer->writeStringValue('promotionStartDate', $this->getPromotionStartDate());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeIntegerValue('transactionsRemaining', $this->getTransactionsRemaining());
        $writer->writeIntegerValue('transactionsUsed', $this->getTransactionsUsed());
        $writer->writeBooleanValue('unlimitedTransactions', $this->getUnlimitedTransactions());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activation property value. This container returns activation information for the promotion that contains one or more offers, including if activation is required and the <b>promotionHash</b> value needed for activation.<br><br>This field is only returned for RSVP promotions that require activation.
     * @param Activation|null $value Value to set for the activation property.
    */
    public function setActivation(?Activation $value): void {
        $this->activation = $value;
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the budgetAmountRemaining property value. This container shows the budget remaining in the promotional offer period.<br><br><span class="tablenote"><b>Note:</b> This container is only returned if the promotional offer is budget based.</span>
     * @param Amount|null $value Value to set for the budgetAmountRemaining property.
    */
    public function setBudgetAmountRemaining(?Amount $value): void {
        $this->budgetAmountRemaining = $value;
    }

    /**
     * Sets the budgetAmountUsed property value. This container shows the budget that has been used so far during the promotional offer period.<br><br><span class="tablenote"><b>Note:</b> This container is only returned if the promotional offer is budget based.</span>
     * @param Amount|null $value Value to set for the budgetAmountUsed property.
    */
    public function setBudgetAmountUsed(?Amount $value): void {
        $this->budgetAmountUsed = $value;
    }

    /**
     * Sets the description property value. The description of the promotion.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the learnMoreUrl property value. The URL for the webpage that explains more details about the particular promotion, including the Terms and Conditions for the promotion.
     * @param string|null $value Value to set for the learnMoreUrl property.
    */
    public function setLearnMoreUrl(?string $value): void {
        $this->learnMoreUrl = $value;
    }

    /**
     * Sets the marketplaceId property value. The eBay marketplace associated with the promotion.
     * @param MarketplaceIdEnum|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?MarketplaceIdEnum $value): void {
        $this->marketplaceId = $value;
    }

    /**
     * Sets the offerEndDate property value. A timestamp that indicates the date and time when the promotional offer is no longer active for the seller. This value is returned in UTC format (<code>yyyy-MM-ddTHH:mm:ssZ</code>), which can be converted into the local time of the buyer.
     * @param string|null $value Value to set for the offerEndDate property.
    */
    public function setOfferEndDate(?string $value): void {
        $this->offerEndDate = $value;
    }

    /**
     * Sets the offerStartDate property value. A timestamp that indicates the date and time when the promotional offer becomes active for the seller. This value is returned in UTC format (<code>yyyy-MM-ddTHH:mm:ssZ</code>), which can be converted into the local time of the buyer.
     * @param string|null $value Value to set for the offerStartDate property.
    */
    public function setOfferStartDate(?string $value): void {
        $this->offerStartDate = $value;
    }

    /**
     * Sets the offerState property value. The current state of the promotional offer.<br><br>If the offer state is returned as <code>REQUIRES_ACTIVATION</code>, use the <a href=/develop/api/sell/marketing_api#sell-marketing_api-seller_promotional_offers-activatepromotion">activatePromotion</a> method to activate the promotion for the seller.
     * @param OfferStateEnum|null $value Value to set for the offerState property.
    */
    public function setOfferState(?OfferStateEnum $value): void {
        $this->offerState = $value;
    }

    /**
     * Sets the offerType property value. The promotional offer type. This field specifies if a promotional offer is associated with an RSVP promotion that needs to be activated before use.<br><br><b>Valid values</b>:<ul><li><code>RSVP</code></li><li><code>NON_RSVP</code></li></ul>
     * @param OfferTypeEnum|null $value Value to set for the offerType property.
    */
    public function setOfferType(?OfferTypeEnum $value): void {
        $this->offerType = $value;
    }

    /**
     * Sets the promotionEndDate property value. A timestamp that indicates the date and time when the seller promotion ends.<br><br>This value is returned in UTC format (<code>yyyy-MM-ddTHH:mm:ssZ</code>), which can be converted into the local time of the buyer.
     * @param string|null $value Value to set for the promotionEndDate property.
    */
    public function setPromotionEndDate(?string $value): void {
        $this->promotionEndDate = $value;
    }

    /**
     * Sets the promotionId property value. The unique identifier of the promotion.
     * @param string|null $value Value to set for the promotionId property.
    */
    public function setPromotionId(?string $value): void {
        $this->promotionId = $value;
    }

    /**
     * Sets the promotionStartDate property value. A timestamp indicating the date and time when the seller promotion began.<br><br>This value is returned in UTC format (<code>yyyy-MM-ddTHH:mm:ssZ</code>), which can be converted into the local time of the buyer.
     * @param string|null $value Value to set for the promotionStartDate property.
    */
    public function setPromotionStartDate(?string $value): void {
        $this->promotionStartDate = $value;
    }

    /**
     * Sets the title property value. The title of the promotion.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

    /**
     * Sets the transactionsRemaining property value. The number of transactions remaining in the promotional offer period.<br><br><span class="tablenote"><b>Note:</b> This field is only returned if the promotional offer is transaction based.</span>
     * @param int|null $value Value to set for the transactionsRemaining property.
    */
    public function setTransactionsRemaining(?int $value): void {
        $this->transactionsRemaining = $value;
    }

    /**
     * Sets the transactionsUsed property value. The number of transactions that have been used so far during the promotional offer period.<br><br><span class="tablenote"><b>Note:</b> This field is only returned if the promotional offer is transaction based.</span>
     * @param int|null $value Value to set for the transactionsUsed property.
    */
    public function setTransactionsUsed(?int $value): void {
        $this->transactionsUsed = $value;
    }

    /**
     * Sets the unlimitedTransactions property value. This boolean field indicates whether the promotional offer has unlimited transactions or a limited cap on transactions.<br><br>If returned as <code>true</code>, the seller can receive benefits from the promotional offer for all eligible transactions or charges.
     * @param bool|null $value Value to set for the unlimitedTransactions property.
    */
    public function setUnlimitedTransactions(?bool $value): void {
        $this->unlimitedTransactions = $value;
    }

}
