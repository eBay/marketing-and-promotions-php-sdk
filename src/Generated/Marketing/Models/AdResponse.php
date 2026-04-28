<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the fields returned in an ad response.
*/
class AdResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adGroupId A unique eBay-assigned ID for an ad group in a priority strategy campaign that uses the Cost Per Click (CPC) funding model.<span class="tablenote"><b>Note:</b> This field will always be returned for  campaigns that use the CPC funding model. It will not be returned for campaigns that use the Cost Per Sale (CPS) funding model.</span>
    */
    private ?string $adGroupId = null;
    
    /**
     * @var string|null $adId A unique eBay-assigned ID for an ad. This ID is generated when an ad is created.<span class="tablenote"><b>Note:</b>This field is only returned when an ad is successfully created for the corresponding listing.</span>
    */
    private ?string $adId = null;
    
    /**
     * @var array<Error>|null $errors An array of errors associated with the request.
    */
    private ?array $errors = null;
    
    /**
     * @var string|null $href The getAd URI that points to the ad.<span class="tablenote"><b>Note:</b>This field is only returned when an ad is successfully created for the corresponding listing.</span>
    */
    private ?string $href = null;
    
    /**
     * @var string|null $listingId A unique eBay-assigned ID for a listing that is generated when the listing is created.
    */
    private ?string $listingId = null;
    
    /**
     * @var int|null $statusCode An HTTP status code indicating if the corresponding ad was successfully created or not. <code>200 Successful</code> should be returned for successfully created ads.<span class="tablenote"><b>Note:</b>A status code is returned for each ad that the seller creates, or attempts to create.</span>
    */
    private ?int $statusCode = null;
    
    /**
     * Instantiates a new AdResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdResponse {
        return new AdResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adGroupId property value. A unique eBay-assigned ID for an ad group in a priority strategy campaign that uses the Cost Per Click (CPC) funding model.<span class="tablenote"><b>Note:</b> This field will always be returned for  campaigns that use the CPC funding model. It will not be returned for campaigns that use the Cost Per Sale (CPS) funding model.</span>
     * @return string|null
    */
    public function getAdGroupId(): ?string {
        return $this->adGroupId;
    }

    /**
     * Gets the adId property value. A unique eBay-assigned ID for an ad. This ID is generated when an ad is created.<span class="tablenote"><b>Note:</b>This field is only returned when an ad is successfully created for the corresponding listing.</span>
     * @return string|null
    */
    public function getAdId(): ?string {
        return $this->adId;
    }

    /**
     * Gets the errors property value. An array of errors associated with the request.
     * @return array<Error>|null
    */
    public function getErrors(): ?array {
        return $this->errors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adGroupId' => fn(ParseNode $n) => $o->setAdGroupId($n->getStringValue()),
            'adId' => fn(ParseNode $n) => $o->setAdId($n->getStringValue()),
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getCollectionOfObjectValues([Error::class, 'createFromDiscriminatorValue'])),
            'href' => fn(ParseNode $n) => $o->setHref($n->getStringValue()),
            'listingId' => fn(ParseNode $n) => $o->setListingId($n->getStringValue()),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the href property value. The getAd URI that points to the ad.<span class="tablenote"><b>Note:</b>This field is only returned when an ad is successfully created for the corresponding listing.</span>
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the listingId property value. A unique eBay-assigned ID for a listing that is generated when the listing is created.
     * @return string|null
    */
    public function getListingId(): ?string {
        return $this->listingId;
    }

    /**
     * Gets the statusCode property value. An HTTP status code indicating if the corresponding ad was successfully created or not. <code>200 Successful</code> should be returned for successfully created ads.<span class="tablenote"><b>Note:</b>A status code is returned for each ad that the seller creates, or attempts to create.</span>
     * @return int|null
    */
    public function getStatusCode(): ?int {
        return $this->statusCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adGroupId', $this->getAdGroupId());
        $writer->writeStringValue('adId', $this->getAdId());
        $writer->writeCollectionOfObjectValues('errors', $this->getErrors());
        $writer->writeStringValue('href', $this->getHref());
        $writer->writeStringValue('listingId', $this->getListingId());
        $writer->writeIntegerValue('statusCode', $this->getStatusCode());
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
     * Sets the adGroupId property value. A unique eBay-assigned ID for an ad group in a priority strategy campaign that uses the Cost Per Click (CPC) funding model.<span class="tablenote"><b>Note:</b> This field will always be returned for  campaigns that use the CPC funding model. It will not be returned for campaigns that use the Cost Per Sale (CPS) funding model.</span>
     * @param string|null $value Value to set for the adGroupId property.
    */
    public function setAdGroupId(?string $value): void {
        $this->adGroupId = $value;
    }

    /**
     * Sets the adId property value. A unique eBay-assigned ID for an ad. This ID is generated when an ad is created.<span class="tablenote"><b>Note:</b>This field is only returned when an ad is successfully created for the corresponding listing.</span>
     * @param string|null $value Value to set for the adId property.
    */
    public function setAdId(?string $value): void {
        $this->adId = $value;
    }

    /**
     * Sets the errors property value. An array of errors associated with the request.
     * @param array<Error>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value): void {
        $this->errors = $value;
    }

    /**
     * Sets the href property value. The getAd URI that points to the ad.<span class="tablenote"><b>Note:</b>This field is only returned when an ad is successfully created for the corresponding listing.</span>
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the listingId property value. A unique eBay-assigned ID for a listing that is generated when the listing is created.
     * @param string|null $value Value to set for the listingId property.
    */
    public function setListingId(?string $value): void {
        $this->listingId = $value;
    }

    /**
     * Sets the statusCode property value. An HTTP status code indicating if the corresponding ad was successfully created or not. <code>200 Successful</code> should be returned for successfully created ads.<span class="tablenote"><b>Note:</b>A status code is returned for each ad that the seller creates, or attempts to create.</span>
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

}
