<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A container for the details of an existing ad group.<br /><br />An ad group can be added to a campaign that uses the Cost Per Click (CPC) funding model. A campaign may have multiple ad groups. All listings that are promoted in the campaign are included in the ad group.<br /><br /><span class="tablenote"><b>Note:</b> This type only applies to the CPC funding model; it does not apply to the Cost Per Sale (CPS) funding model.</span>
*/
class AdGroup implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $adGroupId A unique eBay-assigned ID for an ad group in a campaign that uses the Cost Per Click (CPC) funding model.
    */
    private ?string $adGroupId = null;
    
    /**
     * @var string|null $adGroupStatus An enumeration value representing the current status of the ad group.<br /><br /><b>Valid Values:</b><ul><li><code>ACTIVE</code></li><li><code>PAUSED</code></li><li><code>ARCHIVED</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:AdGroupStatusEnum'>eBay API documentation</a>
    */
    private ?string $adGroupStatus = null;
    
    /**
     * @var Amount|null $defaultBid A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $defaultBid = null;
    
    /**
     * @var string|null $name The seller-defined name of the ad group.
    */
    private ?string $name = null;
    
    /**
     * Instantiates a new AdGroup and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdGroup {
        return new AdGroup();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adGroupId property value. A unique eBay-assigned ID for an ad group in a campaign that uses the Cost Per Click (CPC) funding model.
     * @return string|null
    */
    public function getAdGroupId(): ?string {
        return $this->adGroupId;
    }

    /**
     * Gets the adGroupStatus property value. An enumeration value representing the current status of the ad group.<br /><br /><b>Valid Values:</b><ul><li><code>ACTIVE</code></li><li><code>PAUSED</code></li><li><code>ARCHIVED</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:AdGroupStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getAdGroupStatus(): ?string {
        return $this->adGroupStatus;
    }

    /**
     * Gets the defaultBid property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getDefaultBid(): ?Amount {
        return $this->defaultBid;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adGroupId' => fn(ParseNode $n) => $o->setAdGroupId($n->getStringValue()),
            'adGroupStatus' => fn(ParseNode $n) => $o->setAdGroupStatus($n->getStringValue()),
            'defaultBid' => fn(ParseNode $n) => $o->setDefaultBid($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ];
    }

    /**
     * Gets the name property value. The seller-defined name of the ad group.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('adGroupId', $this->getAdGroupId());
        $writer->writeStringValue('adGroupStatus', $this->getAdGroupStatus());
        $writer->writeObjectValue('defaultBid', $this->getDefaultBid());
        $writer->writeStringValue('name', $this->getName());
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
     * Sets the adGroupId property value. A unique eBay-assigned ID for an ad group in a campaign that uses the Cost Per Click (CPC) funding model.
     * @param string|null $value Value to set for the adGroupId property.
    */
    public function setAdGroupId(?string $value): void {
        $this->adGroupId = $value;
    }

    /**
     * Sets the adGroupStatus property value. An enumeration value representing the current status of the ad group.<br /><br /><b>Valid Values:</b><ul><li><code>ACTIVE</code></li><li><code>PAUSED</code></li><li><code>ARCHIVED</code></li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:AdGroupStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the adGroupStatus property.
    */
    public function setAdGroupStatus(?string $value): void {
        $this->adGroupStatus = $value;
    }

    /**
     * Sets the defaultBid property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the defaultBid property.
    */
    public function setDefaultBid(?Amount $value): void {
        $this->defaultBid = $value;
    }

    /**
     * Sets the name property value. The seller-defined name of the ad group.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->name = $value;
    }

}
