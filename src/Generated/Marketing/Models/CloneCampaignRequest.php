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
 * This type defines the fields needed for a clone-campaign request.
*/
class CloneCampaignRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $campaignName A seller-defined name for the newly-cloned campaign. This value must be unique for the seller.<br><br>You can use any alphanumeric characters in the name, except the less than (&lt;) or greater than (&gt;) characters.<br><br><b>Max length: </b>80 characters
    */
    private ?string $campaignName = null;
    
    /**
     * @var string|null $endDate The date and time the campaign ends, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>). If this field is omitted, the campaign will have no defined end date, and will not end until the seller makes a decision to end the campaign with an <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-endcampaign">endCampaign</a> call, or if they update the campaign at a later time with an end date.
    */
    private ?string $endDate = null;
    
    /**
     * @var FundingStrategy|null $fundingStrategy This container includes parameters that define an ad campaign funding strategy. The set of seller-configurable parameters depends on the selected <b>fundingModel</b> value.
    */
    private ?FundingStrategy $fundingStrategy = null;
    
    /**
     * @var string|null $startDate The date and time the cloned campaign starts, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>). For display purposes, convert this time into the local time of the seller.  <p>On the date specified, the service derives the keywords for each listing in the campaign, creates an ad for each listing, and associates each new ad with the campaign. The campaign starts after this process is completed. The amount of time it takes the service to start the campaign depends on the number of listings in the campaign. Call <b>getCampaign</b> to check the status of the campaign.</p>
    */
    private ?string $startDate = null;
    
    /**
     * Instantiates a new CloneCampaignRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloneCampaignRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloneCampaignRequest {
        return new CloneCampaignRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the campaignName property value. A seller-defined name for the newly-cloned campaign. This value must be unique for the seller.<br><br>You can use any alphanumeric characters in the name, except the less than (&lt;) or greater than (&gt;) characters.<br><br><b>Max length: </b>80 characters
     * @return string|null
    */
    public function getCampaignName(): ?string {
        return $this->campaignName;
    }

    /**
     * Gets the endDate property value. The date and time the campaign ends, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>). If this field is omitted, the campaign will have no defined end date, and will not end until the seller makes a decision to end the campaign with an <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-endcampaign">endCampaign</a> call, or if they update the campaign at a later time with an end date.
     * @return string|null
    */
    public function getEndDate(): ?string {
        return $this->endDate;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'campaignName' => fn(ParseNode $n) => $o->setCampaignName($n->getStringValue()),
            'endDate' => fn(ParseNode $n) => $o->setEndDate($n->getStringValue()),
            'fundingStrategy' => fn(ParseNode $n) => $o->setFundingStrategy($n->getObjectValue([FundingStrategy::class, 'createFromDiscriminatorValue'])),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getStringValue()),
        ];
    }

    /**
     * Gets the fundingStrategy property value. This container includes parameters that define an ad campaign funding strategy. The set of seller-configurable parameters depends on the selected <b>fundingModel</b> value.
     * @return FundingStrategy|null
    */
    public function getFundingStrategy(): ?FundingStrategy {
        return $this->fundingStrategy;
    }

    /**
     * Gets the startDate property value. The date and time the cloned campaign starts, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>). For display purposes, convert this time into the local time of the seller.  <p>On the date specified, the service derives the keywords for each listing in the campaign, creates an ad for each listing, and associates each new ad with the campaign. The campaign starts after this process is completed. The amount of time it takes the service to start the campaign depends on the number of listings in the campaign. Call <b>getCampaign</b> to check the status of the campaign.</p>
     * @return string|null
    */
    public function getStartDate(): ?string {
        return $this->startDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('campaignName', $this->getCampaignName());
        $writer->writeStringValue('endDate', $this->getEndDate());
        $writer->writeObjectValue('fundingStrategy', $this->getFundingStrategy());
        $writer->writeStringValue('startDate', $this->getStartDate());
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
     * Sets the campaignName property value. A seller-defined name for the newly-cloned campaign. This value must be unique for the seller.<br><br>You can use any alphanumeric characters in the name, except the less than (&lt;) or greater than (&gt;) characters.<br><br><b>Max length: </b>80 characters
     * @param string|null $value Value to set for the campaignName property.
    */
    public function setCampaignName(?string $value): void {
        $this->campaignName = $value;
    }

    /**
     * Sets the endDate property value. The date and time the campaign ends, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>). If this field is omitted, the campaign will have no defined end date, and will not end until the seller makes a decision to end the campaign with an <a href="/develop/api/sell/marketing_api#sell-marketing_api-campaign-endcampaign">endCampaign</a> call, or if they update the campaign at a later time with an end date.
     * @param string|null $value Value to set for the endDate property.
    */
    public function setEndDate(?string $value): void {
        $this->endDate = $value;
    }

    /**
     * Sets the fundingStrategy property value. This container includes parameters that define an ad campaign funding strategy. The set of seller-configurable parameters depends on the selected <b>fundingModel</b> value.
     * @param FundingStrategy|null $value Value to set for the fundingStrategy property.
    */
    public function setFundingStrategy(?FundingStrategy $value): void {
        $this->fundingStrategy = $value;
    }

    /**
     * Sets the startDate property value. The date and time the cloned campaign starts, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>). For display purposes, convert this time into the local time of the seller.  <p>On the date specified, the service derives the keywords for each listing in the campaign, creates an ad for each listing, and associates each new ad with the campaign. The campaign starts after this process is completed. The amount of time it takes the service to start the campaign depends on the number of listings in the campaign. Call <b>getCampaign</b> to check the status of the campaign.</p>
     * @param string|null $value Value to set for the startDate property.
    */
    public function setStartDate(?string $value): void {
        $this->startDate = $value;
    }

}
