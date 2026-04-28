<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The price range.
*/
class PriceRange implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $currency Specifies the currency of the listings in an email campaign using one of the three-digit codes of the <a href="/api-docs/sell/marketing/types/ba:CurrencyCodeEnum" target="_blank">CurrencyCodeEnum</a> type.
    */
    private ?string $currency = null;
    
    /**
     * @var float|null $gte The listings selected will be greater than or equal to this value. The value entered must be given in number format, such as 20.00.<br><br>Either <code>gte</code>, <code>lte</code>, or both must contain a value if the seller wishes to use a price range.
    */
    private ?float $gte = null;
    
    /**
     * @var float|null $lte The listings selected will be less than or equal to this value. The value entered must be given in number format, such as 100.00.<br><br>Either <code>gte</code>, <code>lte</code>, or both must contain a value if the seller wishes to use a price range.
    */
    private ?float $lte = null;
    
    /**
     * Instantiates a new PriceRange and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PriceRange
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PriceRange {
        return new PriceRange();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the currency property value. Specifies the currency of the listings in an email campaign using one of the three-digit codes of the <a href="/api-docs/sell/marketing/types/ba:CurrencyCodeEnum" target="_blank">CurrencyCodeEnum</a> type.
     * @return string|null
    */
    public function getCurrency(): ?string {
        return $this->currency;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'currency' => fn(ParseNode $n) => $o->setCurrency($n->getStringValue()),
            'gte' => fn(ParseNode $n) => $o->setGte($n->getFloatValue()),
            'lte' => fn(ParseNode $n) => $o->setLte($n->getFloatValue()),
        ];
    }

    /**
     * Gets the gte property value. The listings selected will be greater than or equal to this value. The value entered must be given in number format, such as 20.00.<br><br>Either <code>gte</code>, <code>lte</code>, or both must contain a value if the seller wishes to use a price range.
     * @return float|null
    */
    public function getGte(): ?float {
        return $this->gte;
    }

    /**
     * Gets the lte property value. The listings selected will be less than or equal to this value. The value entered must be given in number format, such as 100.00.<br><br>Either <code>gte</code>, <code>lte</code>, or both must contain a value if the seller wishes to use a price range.
     * @return float|null
    */
    public function getLte(): ?float {
        return $this->lte;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('currency', $this->getCurrency());
        $writer->writeFloatValue('gte', $this->getGte());
        $writer->writeFloatValue('lte', $this->getLte());
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
     * Sets the currency property value. Specifies the currency of the listings in an email campaign using one of the three-digit codes of the <a href="/api-docs/sell/marketing/types/ba:CurrencyCodeEnum" target="_blank">CurrencyCodeEnum</a> type.
     * @param string|null $value Value to set for the currency property.
    */
    public function setCurrency(?string $value): void {
        $this->currency = $value;
    }

    /**
     * Sets the gte property value. The listings selected will be greater than or equal to this value. The value entered must be given in number format, such as 20.00.<br><br>Either <code>gte</code>, <code>lte</code>, or both must contain a value if the seller wishes to use a price range.
     * @param float|null $value Value to set for the gte property.
    */
    public function setGte(?float $value): void {
        $this->gte = $value;
    }

    /**
     * Sets the lte property value. The listings selected will be less than or equal to this value. The value entered must be given in number format, such as 100.00.<br><br>Either <code>gte</code>, <code>lte</code>, or both must contain a value if the seller wishes to use a price range.
     * @param float|null $value Value to set for the lte property.
    */
    public function setLte(?float $value): void {
        $this->lte = $value;
    }

}
