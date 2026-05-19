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
 * email campaign instance body
*/
class CampaignDTO implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CampaignAudience>|null $audiences The audiences that the email campaign is being sent to. See <a href="/api-docs/sell/marketing/types/api:AudienceTypeEnum">AudienceTypeEnum</a> for a list of audience types.
    */
    private ?array $audiences = null;
    
    /**
     * @var string|null $creationDate The date and time that the email campaign was created, given in UTC format.
    */
    private ?string $creationDate = null;
    
    /**
     * @var string|null $emailCampaignId The unique eBay identifier for the email campaign assigned automatically when the email campaign is created.
    */
    private ?string $emailCampaignId = null;
    
    /**
     * @var string|null $emailCampaignStatus The email campaign status. See <a href="/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum">EmailCampaignStatusEnum</a> for information on statuses. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum'>eBay API documentation</a>
    */
    private ?string $emailCampaignStatus = null;
    
    /**
     * @var string|null $emailCampaignType The email campaign type. See <a href="/api-docs/sell/marketing/types/api:CampaignTypeEnum">CampaignTypeEnum</a> for definitions of email campaign types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:CampaignTypeEnum'>eBay API documentation</a>
    */
    private ?string $emailCampaignType = null;
    
    /**
     * @var string|null $marketplaceId The eBay marketplace where the email campaign is active.
    */
    private ?string $marketplaceId = null;
    
    /**
     * @var string|null $modificationDate The date and time the email campaign was last modified, given in UTC format.
    */
    private ?string $modificationDate = null;
    
    /**
     * @var string|null $scheduleDate The date and time that the email campaign newsletter is scheduled to send, given in UTC format.
    */
    private ?string $scheduleDate = null;
    
    /**
     * @var string|null $scheduleDateType The schedule type used for sending the email campaign. See <a href="/api-docs/sell/marketing/types/api:ScheduleDateTypeEnum">ScheduleDateTypeEnum</a> for available schedule types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ScheduleDateTypeEnum'>eBay API documentation</a>
    */
    private ?string $scheduleDateType = null;
    
    /**
     * @var string|null $sentDate The date and time that the email campaign was last sent, given in UTC format.
    */
    private ?string $sentDate = null;
    
    /**
     * @var string|null $subject The email campaign subject line..
    */
    private ?string $subject = null;
    
    /**
     * Instantiates a new CampaignDTO and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CampaignDTO
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CampaignDTO {
        return new CampaignDTO();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the audiences property value. The audiences that the email campaign is being sent to. See <a href="/api-docs/sell/marketing/types/api:AudienceTypeEnum">AudienceTypeEnum</a> for a list of audience types.
     * @return array<CampaignAudience>|null
    */
    public function getAudiences(): ?array {
        return $this->audiences;
    }

    /**
     * Gets the creationDate property value. The date and time that the email campaign was created, given in UTC format.
     * @return string|null
    */
    public function getCreationDate(): ?string {
        return $this->creationDate;
    }

    /**
     * Gets the emailCampaignId property value. The unique eBay identifier for the email campaign assigned automatically when the email campaign is created.
     * @return string|null
    */
    public function getEmailCampaignId(): ?string {
        return $this->emailCampaignId;
    }

    /**
     * Gets the emailCampaignStatus property value. The email campaign status. See <a href="/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum">EmailCampaignStatusEnum</a> for information on statuses. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getEmailCampaignStatus(): ?string {
        return $this->emailCampaignStatus;
    }

    /**
     * Gets the emailCampaignType property value. The email campaign type. See <a href="/api-docs/sell/marketing/types/api:CampaignTypeEnum">CampaignTypeEnum</a> for definitions of email campaign types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:CampaignTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getEmailCampaignType(): ?string {
        return $this->emailCampaignType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'audiences' => fn(ParseNode $n) => $o->setAudiences($n->getCollectionOfObjectValues([CampaignAudience::class, 'createFromDiscriminatorValue'])),
            'creationDate' => fn(ParseNode $n) => $o->setCreationDate($n->getStringValue()),
            'emailCampaignId' => fn(ParseNode $n) => $o->setEmailCampaignId($n->getStringValue()),
            'emailCampaignStatus' => fn(ParseNode $n) => $o->setEmailCampaignStatus($n->getStringValue()),
            'emailCampaignType' => fn(ParseNode $n) => $o->setEmailCampaignType($n->getStringValue()),
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getStringValue()),
            'modificationDate' => fn(ParseNode $n) => $o->setModificationDate($n->getStringValue()),
            'scheduleDate' => fn(ParseNode $n) => $o->setScheduleDate($n->getStringValue()),
            'scheduleDateType' => fn(ParseNode $n) => $o->setScheduleDateType($n->getStringValue()),
            'sentDate' => fn(ParseNode $n) => $o->setSentDate($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
        ];
    }

    /**
     * Gets the marketplaceId property value. The eBay marketplace where the email campaign is active.
     * @return string|null
    */
    public function getMarketplaceId(): ?string {
        return $this->marketplaceId;
    }

    /**
     * Gets the modificationDate property value. The date and time the email campaign was last modified, given in UTC format.
     * @return string|null
    */
    public function getModificationDate(): ?string {
        return $this->modificationDate;
    }

    /**
     * Gets the scheduleDate property value. The date and time that the email campaign newsletter is scheduled to send, given in UTC format.
     * @return string|null
    */
    public function getScheduleDate(): ?string {
        return $this->scheduleDate;
    }

    /**
     * Gets the scheduleDateType property value. The schedule type used for sending the email campaign. See <a href="/api-docs/sell/marketing/types/api:ScheduleDateTypeEnum">ScheduleDateTypeEnum</a> for available schedule types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ScheduleDateTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getScheduleDateType(): ?string {
        return $this->scheduleDateType;
    }

    /**
     * Gets the sentDate property value. The date and time that the email campaign was last sent, given in UTC format.
     * @return string|null
    */
    public function getSentDate(): ?string {
        return $this->sentDate;
    }

    /**
     * Gets the subject property value. The email campaign subject line..
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('audiences', $this->getAudiences());
        $writer->writeStringValue('creationDate', $this->getCreationDate());
        $writer->writeStringValue('emailCampaignId', $this->getEmailCampaignId());
        $writer->writeStringValue('emailCampaignStatus', $this->getEmailCampaignStatus());
        $writer->writeStringValue('emailCampaignType', $this->getEmailCampaignType());
        $writer->writeStringValue('marketplaceId', $this->getMarketplaceId());
        $writer->writeStringValue('modificationDate', $this->getModificationDate());
        $writer->writeStringValue('scheduleDate', $this->getScheduleDate());
        $writer->writeStringValue('scheduleDateType', $this->getScheduleDateType());
        $writer->writeStringValue('sentDate', $this->getSentDate());
        $writer->writeStringValue('subject', $this->getSubject());
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
     * Sets the audiences property value. The audiences that the email campaign is being sent to. See <a href="/api-docs/sell/marketing/types/api:AudienceTypeEnum">AudienceTypeEnum</a> for a list of audience types.
     * @param array<CampaignAudience>|null $value Value to set for the audiences property.
    */
    public function setAudiences(?array $value): void {
        $this->audiences = $value;
    }

    /**
     * Sets the creationDate property value. The date and time that the email campaign was created, given in UTC format.
     * @param string|null $value Value to set for the creationDate property.
    */
    public function setCreationDate(?string $value): void {
        $this->creationDate = $value;
    }

    /**
     * Sets the emailCampaignId property value. The unique eBay identifier for the email campaign assigned automatically when the email campaign is created.
     * @param string|null $value Value to set for the emailCampaignId property.
    */
    public function setEmailCampaignId(?string $value): void {
        $this->emailCampaignId = $value;
    }

    /**
     * Sets the emailCampaignStatus property value. The email campaign status. See <a href="/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum">EmailCampaignStatusEnum</a> for information on statuses. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the emailCampaignStatus property.
    */
    public function setEmailCampaignStatus(?string $value): void {
        $this->emailCampaignStatus = $value;
    }

    /**
     * Sets the emailCampaignType property value. The email campaign type. See <a href="/api-docs/sell/marketing/types/api:CampaignTypeEnum">CampaignTypeEnum</a> for definitions of email campaign types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:CampaignTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the emailCampaignType property.
    */
    public function setEmailCampaignType(?string $value): void {
        $this->emailCampaignType = $value;
    }

    /**
     * Sets the marketplaceId property value. The eBay marketplace where the email campaign is active.
     * @param string|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?string $value): void {
        $this->marketplaceId = $value;
    }

    /**
     * Sets the modificationDate property value. The date and time the email campaign was last modified, given in UTC format.
     * @param string|null $value Value to set for the modificationDate property.
    */
    public function setModificationDate(?string $value): void {
        $this->modificationDate = $value;
    }

    /**
     * Sets the scheduleDate property value. The date and time that the email campaign newsletter is scheduled to send, given in UTC format.
     * @param string|null $value Value to set for the scheduleDate property.
    */
    public function setScheduleDate(?string $value): void {
        $this->scheduleDate = $value;
    }

    /**
     * Sets the scheduleDateType property value. The schedule type used for sending the email campaign. See <a href="/api-docs/sell/marketing/types/api:ScheduleDateTypeEnum">ScheduleDateTypeEnum</a> for available schedule types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ScheduleDateTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the scheduleDateType property.
    */
    public function setScheduleDateType(?string $value): void {
        $this->scheduleDateType = $value;
    }

    /**
     * Sets the sentDate property value. The date and time that the email campaign was last sent, given in UTC format.
     * @param string|null $value Value to set for the sentDate property.
    */
    public function setSentDate(?string $value): void {
        $this->sentDate = $value;
    }

    /**
     * Sets the subject property value. The email campaign subject line..
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->subject = $value;
    }

}
