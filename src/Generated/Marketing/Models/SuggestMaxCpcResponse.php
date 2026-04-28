<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This type defines the fields used in the <b>suggestMaxCpc</b> response.
*/
class SuggestMaxCpcResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $amount A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $amount = null;
    
    /**
     * @var string|null $marketplaceId The unique identifier of the marketplace where the listings are hosted. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
    */
    private ?string $marketplaceId = null;
    
    /**
     * Instantiates a new SuggestMaxCpcResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SuggestMaxCpcResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SuggestMaxCpcResponse {
        return new SuggestMaxCpcResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the amount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getAmount(): ?Amount {
        return $this->amount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'amount' => fn(ParseNode $n) => $o->setAmount($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getStringValue()),
        ];
    }

    /**
     * Gets the marketplaceId property value. The unique identifier of the marketplace where the listings are hosted. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getMarketplaceId(): ?string {
        return $this->marketplaceId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('amount', $this->getAmount());
        $writer->writeStringValue('marketplaceId', $this->getMarketplaceId());
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
     * Sets the amount property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the amount property.
    */
    public function setAmount(?Amount $value): void {
        $this->amount = $value;
    }

    /**
     * Sets the marketplaceId property value. The unique identifier of the marketplace where the listings are hosted. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?string $value): void {
        $this->marketplaceId = $value;
    }

}
