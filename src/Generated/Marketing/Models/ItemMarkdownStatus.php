<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the status of a markdown discount.
*/
class ItemMarkdownStatus implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $listingMarkdownStatus Indicates the state assigned to the markdown discount using one of the <b>status</b> values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:ItemMarkdownStatusEnum'>eBay API documentation</a>
    */
    private ?string $listingMarkdownStatus = null;
    
    /**
     * @var string|null $statusChangedDate Identifies the date the last time the state of the discount changed. Both both markdown and markup events can trigger a status change.
    */
    private ?string $statusChangedDate = null;
    
    /**
     * @var string|null $statusMessage An eBay-assigned text string that describes the status of the discount.
    */
    private ?string $statusMessage = null;
    
    /**
     * Instantiates a new ItemMarkdownStatus and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemMarkdownStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemMarkdownStatus {
        return new ItemMarkdownStatus();
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
            'listingMarkdownStatus' => fn(ParseNode $n) => $o->setListingMarkdownStatus($n->getStringValue()),
            'statusChangedDate' => fn(ParseNode $n) => $o->setStatusChangedDate($n->getStringValue()),
            'statusMessage' => fn(ParseNode $n) => $o->setStatusMessage($n->getStringValue()),
        ];
    }

    /**
     * Gets the listingMarkdownStatus property value. Indicates the state assigned to the markdown discount using one of the <b>status</b> values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:ItemMarkdownStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getListingMarkdownStatus(): ?string {
        return $this->listingMarkdownStatus;
    }

    /**
     * Gets the statusChangedDate property value. Identifies the date the last time the state of the discount changed. Both both markdown and markup events can trigger a status change.
     * @return string|null
    */
    public function getStatusChangedDate(): ?string {
        return $this->statusChangedDate;
    }

    /**
     * Gets the statusMessage property value. An eBay-assigned text string that describes the status of the discount.
     * @return string|null
    */
    public function getStatusMessage(): ?string {
        return $this->statusMessage;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('listingMarkdownStatus', $this->getListingMarkdownStatus());
        $writer->writeStringValue('statusChangedDate', $this->getStatusChangedDate());
        $writer->writeStringValue('statusMessage', $this->getStatusMessage());
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
     * Sets the listingMarkdownStatus property value. Indicates the state assigned to the markdown discount using one of the <b>status</b> values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:ItemMarkdownStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the listingMarkdownStatus property.
    */
    public function setListingMarkdownStatus(?string $value): void {
        $this->listingMarkdownStatus = $value;
    }

    /**
     * Sets the statusChangedDate property value. Identifies the date the last time the state of the discount changed. Both both markdown and markup events can trigger a status change.
     * @param string|null $value Value to set for the statusChangedDate property.
    */
    public function setStatusChangedDate(?string $value): void {
        $this->statusChangedDate = $value;
    }

    /**
     * Sets the statusMessage property value. An eBay-assigned text string that describes the status of the discount.
     * @param string|null $value Value to set for the statusMessage property.
    */
    public function setStatusMessage(?string $value): void {
        $this->statusMessage = $value;
    }

}
