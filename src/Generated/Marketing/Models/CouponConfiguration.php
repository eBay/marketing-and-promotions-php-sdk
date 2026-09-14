<?php

// Copyright 2026 eBay Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The configuration of a coded coupon discount.
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
     * @var CouponTypeEnum|null $couponType This indicates the type of Coded Coupon discount, and is required when the discount type is <b>CODED_COUPON</b>.<br><br>Supported types:<ul><li><b>PRIVATE_SINGLE_SELLER_COUPON:</b> Anyone can use and share the coupon code, but it isn't posted on eBay.</li><li><b>PUBLIC_SINGLE_SELLER_COUPON:</b> Anyone can find the coupon code on eBay and use it.</li></ul>
    */
    private ?CouponTypeEnum $couponType = null;
    
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
     * Gets the couponType property value. This indicates the type of Coded Coupon discount, and is required when the discount type is <b>CODED_COUPON</b>.<br><br>Supported types:<ul><li><b>PRIVATE_SINGLE_SELLER_COUPON:</b> Anyone can use and share the coupon code, but it isn't posted on eBay.</li><li><b>PUBLIC_SINGLE_SELLER_COUPON:</b> Anyone can find the coupon code on eBay and use it.</li></ul>
     * @return CouponTypeEnum|null
    */
    public function getCouponType(): ?CouponTypeEnum {
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
            'couponType' => fn(ParseNode $n) => $o->setCouponType($n->getEnumValue(CouponTypeEnum::class)),
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
        $writer->writeEnumValue('couponType', $this->getCouponType());
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
     * Sets the couponType property value. This indicates the type of Coded Coupon discount, and is required when the discount type is <b>CODED_COUPON</b>.<br><br>Supported types:<ul><li><b>PRIVATE_SINGLE_SELLER_COUPON:</b> Anyone can use and share the coupon code, but it isn't posted on eBay.</li><li><b>PUBLIC_SINGLE_SELLER_COUPON:</b> Anyone can find the coupon code on eBay and use it.</li></ul>
     * @param CouponTypeEnum|null $value Value to set for the couponType property.
    */
    public function setCouponType(?CouponTypeEnum $value): void {
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
