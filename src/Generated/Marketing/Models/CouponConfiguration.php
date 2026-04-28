<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * This container defines a coded coupon discount. It is required if the discount type is CODED_COUPON.
*/
class CouponConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $couponCode A unique code that buyers can use during checkout to receive a discount. The code must be unique across eBay. <br><br>The code must be from 8-15 alphanumeric characters and can contain no more than two dashes ( - ).<br><br>This is required when the discount type is CODED_COUPON.
    */
    private ?string $couponCode = null;
    
    /**
     * @var string|null $couponType This indicates the type of Coded Coupon discount, and is required when the discount type is <b>CODED_COUPON</b>.<br><br>Supported types:<ul><li><b>PRIVATE_SINGLE_SELLER_COUPON:</b> Anyone can use and share the coupon code, but it isn't posted on eBay.</li><li><b>PUBLIC_SINGLE_SELLER_COUPON:</b> Anyone can find the coupon code on eBay and use it.</li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:CouponTypeEnum'>eBay API documentation</a>
    */
    private ?string $couponType = null;
    
    /**
     * @var int|null $maxCouponRedemptionPerUser This sets the limit on the number of times a buyer can use this coupon. The range of values is 1-10. If no value is provided, a buyer can use the coupon an unlimited number of times.
    */
    private ?int $maxCouponRedemptionPerUser = null;
    
    /**
     * Instantiates a new CouponConfiguration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CouponConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CouponConfiguration {
        return new CouponConfiguration();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the couponCode property value. A unique code that buyers can use during checkout to receive a discount. The code must be unique across eBay. <br><br>The code must be from 8-15 alphanumeric characters and can contain no more than two dashes ( - ).<br><br>This is required when the discount type is CODED_COUPON.
     * @return string|null
    */
    public function getCouponCode(): ?string {
        return $this->couponCode;
    }

    /**
     * Gets the couponType property value. This indicates the type of Coded Coupon discount, and is required when the discount type is <b>CODED_COUPON</b>.<br><br>Supported types:<ul><li><b>PRIVATE_SINGLE_SELLER_COUPON:</b> Anyone can use and share the coupon code, but it isn't posted on eBay.</li><li><b>PUBLIC_SINGLE_SELLER_COUPON:</b> Anyone can find the coupon code on eBay and use it.</li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:CouponTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCouponType(): ?string {
        return $this->couponType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'couponCode' => fn(ParseNode $n) => $o->setCouponCode($n->getStringValue()),
            'couponType' => fn(ParseNode $n) => $o->setCouponType($n->getStringValue()),
            'maxCouponRedemptionPerUser' => fn(ParseNode $n) => $o->setMaxCouponRedemptionPerUser($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the maxCouponRedemptionPerUser property value. This sets the limit on the number of times a buyer can use this coupon. The range of values is 1-10. If no value is provided, a buyer can use the coupon an unlimited number of times.
     * @return int|null
    */
    public function getMaxCouponRedemptionPerUser(): ?int {
        return $this->maxCouponRedemptionPerUser;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('couponCode', $this->getCouponCode());
        $writer->writeStringValue('couponType', $this->getCouponType());
        $writer->writeIntegerValue('maxCouponRedemptionPerUser', $this->getMaxCouponRedemptionPerUser());
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
     * Sets the couponCode property value. A unique code that buyers can use during checkout to receive a discount. The code must be unique across eBay. <br><br>The code must be from 8-15 alphanumeric characters and can contain no more than two dashes ( - ).<br><br>This is required when the discount type is CODED_COUPON.
     * @param string|null $value Value to set for the couponCode property.
    */
    public function setCouponCode(?string $value): void {
        $this->couponCode = $value;
    }

    /**
     * Sets the couponType property value. This indicates the type of Coded Coupon discount, and is required when the discount type is <b>CODED_COUPON</b>.<br><br>Supported types:<ul><li><b>PRIVATE_SINGLE_SELLER_COUPON:</b> Anyone can use and share the coupon code, but it isn't posted on eBay.</li><li><b>PUBLIC_SINGLE_SELLER_COUPON:</b> Anyone can find the coupon code on eBay and use it.</li></ul> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/sme:CouponTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the couponType property.
    */
    public function setCouponType(?string $value): void {
        $this->couponType = $value;
    }

    /**
     * Sets the maxCouponRedemptionPerUser property value. This sets the limit on the number of times a buyer can use this coupon. The range of values is 1-10. If no value is provided, a buyer can use the coupon an unlimited number of times.
     * @param int|null $value Value to set for the maxCouponRedemptionPerUser property.
    */
    public function setMaxCouponRedemptionPerUser(?int $value): void {
        $this->maxCouponRedemptionPerUser = $value;
    }

}
