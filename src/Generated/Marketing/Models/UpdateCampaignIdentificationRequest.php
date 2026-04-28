<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type specifies the updated name, and start and end dates for an update-campaign request.
*/
class UpdateCampaignIdentificationRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $campaignName The new seller-defined name for the campaign. This value must be unique for the seller. <p>If you don't want to change the name of the campaign, specify the current campaign name in this field.<p>You can use any alphanumeric characters in the name, except the less than (&lt;) or greater than (&gt;) characters.</p><b>Max length: </b>80 characters.
    */
    private ?string $campaignName = null;
    
    /**
     * @var string|null $endDate The date and time the campaign ends, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>). If this field is omitted, the campaign will have no defined end date, and will not end until the seller makes a decision to end the campaign with an <a href="/api-docs/sell/marketing/resources/campaign/methods/endCampaign">endCampaign</a> call, or if they update the campaign at a later time with an end date.<p>If you want to change only the end date of the campaign, you must specify the current campaign name, set the <b>endDate</b> as desired, and set the <b>startDate</b> to the actual start date of the campaign. This applies if the campaign status is <code>RUNNING</code> or <code>PAUSED</code>. You can retrieve the <b>startDate</b> using the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaign#response.startDate">getCampaign</a> method.</p> <p>Note that if you do not set a new end date in this call, any current endDate value will be set to null. To preserve the currently-set end date, you must specify the value again in your request.</p>
    */
    private ?string $endDate = null;
    
    /**
     * @var string|null $startDate The new start date for the campaign, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>).<p>If the campaign status is <code>RUNNING</code> or <code>PAUSED</code>, the <b>startDate</b> must be specified and must be the actual start date of the campaign, even if you are only changing the <b>endDate</b>. You can retrieve the campaign's <b>startDate</b> using the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaign#response.startDate">getCampaign</a> method.</p><p>On the date specified, the service derives the keywords for each listing in the campaign, creates an ad for each listing, and associates each new ad with the campaign. The campaign starts after this process is completed. The amount of time it takes the service to start the campaign depends on the number of listings in the campaign.</p>  <p>Call <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a> to retrieve the <b>campaign_id</b> and the campaign status (<code>RUNNING</code>, <code>PAUSED</code>, <code>ENDED</code>, and so on) for all the seller's campaigns.</p>
    */
    private ?string $startDate = null;
    
    /**
     * Instantiates a new UpdateCampaignIdentificationRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateCampaignIdentificationRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateCampaignIdentificationRequest {
        return new UpdateCampaignIdentificationRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the campaignName property value. The new seller-defined name for the campaign. This value must be unique for the seller. <p>If you don't want to change the name of the campaign, specify the current campaign name in this field.<p>You can use any alphanumeric characters in the name, except the less than (&lt;) or greater than (&gt;) characters.</p><b>Max length: </b>80 characters.
     * @return string|null
    */
    public function getCampaignName(): ?string {
        return $this->campaignName;
    }

    /**
     * Gets the endDate property value. The date and time the campaign ends, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>). If this field is omitted, the campaign will have no defined end date, and will not end until the seller makes a decision to end the campaign with an <a href="/api-docs/sell/marketing/resources/campaign/methods/endCampaign">endCampaign</a> call, or if they update the campaign at a later time with an end date.<p>If you want to change only the end date of the campaign, you must specify the current campaign name, set the <b>endDate</b> as desired, and set the <b>startDate</b> to the actual start date of the campaign. This applies if the campaign status is <code>RUNNING</code> or <code>PAUSED</code>. You can retrieve the <b>startDate</b> using the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaign#response.startDate">getCampaign</a> method.</p> <p>Note that if you do not set a new end date in this call, any current endDate value will be set to null. To preserve the currently-set end date, you must specify the value again in your request.</p>
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
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getStringValue()),
        ];
    }

    /**
     * Gets the startDate property value. The new start date for the campaign, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>).<p>If the campaign status is <code>RUNNING</code> or <code>PAUSED</code>, the <b>startDate</b> must be specified and must be the actual start date of the campaign, even if you are only changing the <b>endDate</b>. You can retrieve the campaign's <b>startDate</b> using the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaign#response.startDate">getCampaign</a> method.</p><p>On the date specified, the service derives the keywords for each listing in the campaign, creates an ad for each listing, and associates each new ad with the campaign. The campaign starts after this process is completed. The amount of time it takes the service to start the campaign depends on the number of listings in the campaign.</p>  <p>Call <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a> to retrieve the <b>campaign_id</b> and the campaign status (<code>RUNNING</code>, <code>PAUSED</code>, <code>ENDED</code>, and so on) for all the seller's campaigns.</p>
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
     * Sets the campaignName property value. The new seller-defined name for the campaign. This value must be unique for the seller. <p>If you don't want to change the name of the campaign, specify the current campaign name in this field.<p>You can use any alphanumeric characters in the name, except the less than (&lt;) or greater than (&gt;) characters.</p><b>Max length: </b>80 characters.
     * @param string|null $value Value to set for the campaignName property.
    */
    public function setCampaignName(?string $value): void {
        $this->campaignName = $value;
    }

    /**
     * Sets the endDate property value. The date and time the campaign ends, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>). If this field is omitted, the campaign will have no defined end date, and will not end until the seller makes a decision to end the campaign with an <a href="/api-docs/sell/marketing/resources/campaign/methods/endCampaign">endCampaign</a> call, or if they update the campaign at a later time with an end date.<p>If you want to change only the end date of the campaign, you must specify the current campaign name, set the <b>endDate</b> as desired, and set the <b>startDate</b> to the actual start date of the campaign. This applies if the campaign status is <code>RUNNING</code> or <code>PAUSED</code>. You can retrieve the <b>startDate</b> using the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaign#response.startDate">getCampaign</a> method.</p> <p>Note that if you do not set a new end date in this call, any current endDate value will be set to null. To preserve the currently-set end date, you must specify the value again in your request.</p>
     * @param string|null $value Value to set for the endDate property.
    */
    public function setEndDate(?string $value): void {
        $this->endDate = $value;
    }

    /**
     * Sets the startDate property value. The new start date for the campaign, in UTC format (<code>yyyy-MM-ddThh:mm:ssZ</code>).<p>If the campaign status is <code>RUNNING</code> or <code>PAUSED</code>, the <b>startDate</b> must be specified and must be the actual start date of the campaign, even if you are only changing the <b>endDate</b>. You can retrieve the campaign's <b>startDate</b> using the <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaign#response.startDate">getCampaign</a> method.</p><p>On the date specified, the service derives the keywords for each listing in the campaign, creates an ad for each listing, and associates each new ad with the campaign. The campaign starts after this process is completed. The amount of time it takes the service to start the campaign depends on the number of listings in the campaign.</p>  <p>Call <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a> to retrieve the <b>campaign_id</b> and the campaign status (<code>RUNNING</code>, <code>PAUSED</code>, <code>ENDED</code>, and so on) for all the seller's campaigns.</p>
     * @param string|null $value Value to set for the startDate property.
    */
    public function setStartDate(?string $value): void {
        $this->startDate = $value;
    }

}
