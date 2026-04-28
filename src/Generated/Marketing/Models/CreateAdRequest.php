<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the fields for the create ad request.
*/
class CreateAdRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adGroupId A unique eBay-assigned identifier for an ad group in a campaign that uses the Cost Per Click (CPC) funding model.<br><br>Use the <a href="/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups">getAdGroups</a> method to retrieve the ad group IDs for a seller.<br><br><span class="tablenote"><b>Note:</b> This field is required for manual targeting campaigns using the Cost Per Click (CPC) funding model.</span>
    */
    private ?string $adGroupId = null;
    
    /**
     * @var string|null $bidPercentage The user-defined <b>bid percentage</b> (also known as the <i>ad rate</i>) sets the level that eBay increases the visibility in search results for the associated listing. The higher the <b>bidPercentage</b> value, the more eBay promotes the listing.<br><br><i>Required if</i> the campaign's funding model is Cost Per Sale (CPS).  <br><br>The value specified here is also used to calculate the Promoted Listings fee. This percentage value is multiplied by the final sales price to determine the fee. <br><br>The Promoted Listings fee is determined at the time the transaction completes and the seller is assessed the fee only when an item sells through a Promoted Listings ad campaign. <br><br>The <b>bidPercentage</b> is a single precision value that is guided by the following rules: <ul><li>These values are <b>valid</b>:<br>&nbsp;&nbsp;&nbsp;<code>4.1</code>,&nbsp;&nbsp;&nbsp;<code>5.0</code>, &nbsp;&nbsp;&nbsp;<code>5.5</code>, ...</li>  <li>These values are <b>not valid</b>:<br /> &nbsp;&nbsp;&nbsp;<code>0.01</code>, &nbsp;&nbsp;&nbsp;<code>10.75</code>, &nbsp;&nbsp;&nbsp;<code>99.99</code>,<br /> &nbsp;&nbsp;&nbsp;and so on.</li></ul><br />If a bid percentage is not provided for an ad, eBay uses the default bid percentage of the associated campaign.<br><br><span class="tablenote"><b>Note:</b> This field has a minimum value of <code>2.0</code> and a maximum value of <code>100.0</code>.</span>
    */
    private ?string $bidPercentage = null;
    
    /**
     * @var string|null $listingId A unique identifier of an eBay listing.
    */
    private ?string $listingId = null;
    
    /**
     * Instantiates a new CreateAdRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateAdRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateAdRequest {
        return new CreateAdRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adGroupId property value. A unique eBay-assigned identifier for an ad group in a campaign that uses the Cost Per Click (CPC) funding model.<br><br>Use the <a href="/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups">getAdGroups</a> method to retrieve the ad group IDs for a seller.<br><br><span class="tablenote"><b>Note:</b> This field is required for manual targeting campaigns using the Cost Per Click (CPC) funding model.</span>
     * @return string|null
    */
    public function getAdGroupId(): ?string {
        return $this->adGroupId;
    }

    /**
     * Gets the bidPercentage property value. The user-defined <b>bid percentage</b> (also known as the <i>ad rate</i>) sets the level that eBay increases the visibility in search results for the associated listing. The higher the <b>bidPercentage</b> value, the more eBay promotes the listing.<br><br><i>Required if</i> the campaign's funding model is Cost Per Sale (CPS).  <br><br>The value specified here is also used to calculate the Promoted Listings fee. This percentage value is multiplied by the final sales price to determine the fee. <br><br>The Promoted Listings fee is determined at the time the transaction completes and the seller is assessed the fee only when an item sells through a Promoted Listings ad campaign. <br><br>The <b>bidPercentage</b> is a single precision value that is guided by the following rules: <ul><li>These values are <b>valid</b>:<br>&nbsp;&nbsp;&nbsp;<code>4.1</code>,&nbsp;&nbsp;&nbsp;<code>5.0</code>, &nbsp;&nbsp;&nbsp;<code>5.5</code>, ...</li>  <li>These values are <b>not valid</b>:<br /> &nbsp;&nbsp;&nbsp;<code>0.01</code>, &nbsp;&nbsp;&nbsp;<code>10.75</code>, &nbsp;&nbsp;&nbsp;<code>99.99</code>,<br /> &nbsp;&nbsp;&nbsp;and so on.</li></ul><br />If a bid percentage is not provided for an ad, eBay uses the default bid percentage of the associated campaign.<br><br><span class="tablenote"><b>Note:</b> This field has a minimum value of <code>2.0</code> and a maximum value of <code>100.0</code>.</span>
     * @return string|null
    */
    public function getBidPercentage(): ?string {
        return $this->bidPercentage;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adGroupId' => fn(ParseNode $n) => $o->setAdGroupId($n->getStringValue()),
            'bidPercentage' => fn(ParseNode $n) => $o->setBidPercentage($n->getStringValue()),
            'listingId' => fn(ParseNode $n) => $o->setListingId($n->getStringValue()),
        ];
    }

    /**
     * Gets the listingId property value. A unique identifier of an eBay listing.
     * @return string|null
    */
    public function getListingId(): ?string {
        return $this->listingId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adGroupId', $this->getAdGroupId());
        $writer->writeStringValue('bidPercentage', $this->getBidPercentage());
        $writer->writeStringValue('listingId', $this->getListingId());
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
     * Sets the adGroupId property value. A unique eBay-assigned identifier for an ad group in a campaign that uses the Cost Per Click (CPC) funding model.<br><br>Use the <a href="/api-docs/sell/marketing/resources/adgroup/methods/getAdGroups">getAdGroups</a> method to retrieve the ad group IDs for a seller.<br><br><span class="tablenote"><b>Note:</b> This field is required for manual targeting campaigns using the Cost Per Click (CPC) funding model.</span>
     * @param string|null $value Value to set for the adGroupId property.
    */
    public function setAdGroupId(?string $value): void {
        $this->adGroupId = $value;
    }

    /**
     * Sets the bidPercentage property value. The user-defined <b>bid percentage</b> (also known as the <i>ad rate</i>) sets the level that eBay increases the visibility in search results for the associated listing. The higher the <b>bidPercentage</b> value, the more eBay promotes the listing.<br><br><i>Required if</i> the campaign's funding model is Cost Per Sale (CPS).  <br><br>The value specified here is also used to calculate the Promoted Listings fee. This percentage value is multiplied by the final sales price to determine the fee. <br><br>The Promoted Listings fee is determined at the time the transaction completes and the seller is assessed the fee only when an item sells through a Promoted Listings ad campaign. <br><br>The <b>bidPercentage</b> is a single precision value that is guided by the following rules: <ul><li>These values are <b>valid</b>:<br>&nbsp;&nbsp;&nbsp;<code>4.1</code>,&nbsp;&nbsp;&nbsp;<code>5.0</code>, &nbsp;&nbsp;&nbsp;<code>5.5</code>, ...</li>  <li>These values are <b>not valid</b>:<br /> &nbsp;&nbsp;&nbsp;<code>0.01</code>, &nbsp;&nbsp;&nbsp;<code>10.75</code>, &nbsp;&nbsp;&nbsp;<code>99.99</code>,<br /> &nbsp;&nbsp;&nbsp;and so on.</li></ul><br />If a bid percentage is not provided for an ad, eBay uses the default bid percentage of the associated campaign.<br><br><span class="tablenote"><b>Note:</b> This field has a minimum value of <code>2.0</code> and a maximum value of <code>100.0</code>.</span>
     * @param string|null $value Value to set for the bidPercentage property.
    */
    public function setBidPercentage(?string $value): void {
        $this->bidPercentage = $value;
    }

    /**
     * Sets the listingId property value. A unique identifier of an eBay listing.
     * @param string|null $value Value to set for the listingId property.
    */
    public function setListingId(?string $value): void {
        $this->listingId = $value;
    }

}
