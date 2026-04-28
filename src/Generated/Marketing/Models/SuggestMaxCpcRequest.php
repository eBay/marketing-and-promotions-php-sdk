<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This type defines the fields used in the <b>suggestMaxCpc</b> request. To retrieve the suggested <b>maxCpc</b> value for a smart targeting campaign, a seller must specify the listings associated with the campaign, as well as the marketplace on which the campaign is hosted.
*/
class SuggestMaxCpcRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $listingIds A comma delimited array of listing Ids the seller plans to associate with the smart targeting campaign for which the <b>maxCpc</b> will be suggested.
    */
    private ?array $listingIds = null;
    
    /**
     * @var string|null $marketplaceId The unique identifier of the marketplace where the listings are hosted. See <a href="/api-docs/sell/marketing/types/api:MarketplaceIdEnum" target="_blank ">MarketplaceIdEnum</a> for supported values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
    */
    private ?string $marketplaceId = null;
    
    /**
     * Instantiates a new SuggestMaxCpcRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SuggestMaxCpcRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SuggestMaxCpcRequest {
        return new SuggestMaxCpcRequest();
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
            'listingIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setListingIds($val);
            },
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getStringValue()),
        ];
    }

    /**
     * Gets the listingIds property value. A comma delimited array of listing Ids the seller plans to associate with the smart targeting campaign for which the <b>maxCpc</b> will be suggested.
     * @return array<string>|null
    */
    public function getListingIds(): ?array {
        return $this->listingIds;
    }

    /**
     * Gets the marketplaceId property value. The unique identifier of the marketplace where the listings are hosted. See <a href="/api-docs/sell/marketing/types/api:MarketplaceIdEnum" target="_blank ">MarketplaceIdEnum</a> for supported values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
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
        $writer->writeCollectionOfPrimitiveValues('listingIds', $this->getListingIds());
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
     * Sets the listingIds property value. A comma delimited array of listing Ids the seller plans to associate with the smart targeting campaign for which the <b>maxCpc</b> will be suggested.
     * @param array<string>|null $value Value to set for the listingIds property.
    */
    public function setListingIds(?array $value): void {
        $this->listingIds = $value;
    }

    /**
     * Sets the marketplaceId property value. The unique identifier of the marketplace where the listings are hosted. See <a href="/api-docs/sell/marketing/types/api:MarketplaceIdEnum" target="_blank ">MarketplaceIdEnum</a> for supported values. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/ba:MarketplaceIdEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?string $value): void {
        $this->marketplaceId = $value;
    }

}
