<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateEmailCampaignResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $emailCampaignId The unique eBay-assigned ID to the email campaign that is generated when the email campaign is created.
    */
    private ?string $emailCampaignId = null;
    
    /**
     * @var string|null $emailCampaignStatus The email campaign status. See <a href="/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum">EmailCampaignStatusEnum</a> for a list of email campaign statuses and their descriptions. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum'>eBay API documentation</a>
    */
    private ?string $emailCampaignStatus = null;
    
    /**
     * Instantiates a new UpdateEmailCampaignResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateEmailCampaignResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateEmailCampaignResponse {
        return new UpdateEmailCampaignResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the emailCampaignId property value. The unique eBay-assigned ID to the email campaign that is generated when the email campaign is created.
     * @return string|null
    */
    public function getEmailCampaignId(): ?string {
        return $this->emailCampaignId;
    }

    /**
     * Gets the emailCampaignStatus property value. The email campaign status. See <a href="/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum">EmailCampaignStatusEnum</a> for a list of email campaign statuses and their descriptions. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getEmailCampaignStatus(): ?string {
        return $this->emailCampaignStatus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'emailCampaignId' => fn(ParseNode $n) => $o->setEmailCampaignId($n->getStringValue()),
            'emailCampaignStatus' => fn(ParseNode $n) => $o->setEmailCampaignStatus($n->getStringValue()),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('emailCampaignId', $this->getEmailCampaignId());
        $writer->writeStringValue('emailCampaignStatus', $this->getEmailCampaignStatus());
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
     * Sets the emailCampaignId property value. The unique eBay-assigned ID to the email campaign that is generated when the email campaign is created.
     * @param string|null $value Value to set for the emailCampaignId property.
    */
    public function setEmailCampaignId(?string $value): void {
        $this->emailCampaignId = $value;
    }

    /**
     * Sets the emailCampaignStatus property value. The email campaign status. See <a href="/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum">EmailCampaignStatusEnum</a> for a list of email campaign statuses and their descriptions. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the emailCampaignStatus property.
    */
    public function setEmailCampaignStatus(?string $value): void {
        $this->emailCampaignStatus = $value;
    }

}
