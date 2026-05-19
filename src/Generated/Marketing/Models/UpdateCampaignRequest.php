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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The update email campaign request payload
*/
class UpdateCampaignRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $audienceCodes An array of audience codes for the audiences of the email campaign. At least one audience code is required. There is no limit to the number of audience codes that may be entered.<br><br><b>Example: </b> if the current email campaign contains <code>"audienceCodes": "code1", "code2"</code> and the user wishes to add an audience code <code>code3</code>, set the <code>audienceCodes</code> value to <code>"audienceCodes": "code1", "code2", "code3"</code>.<br><br>To retrieve seller audiences, call <a href="/api-docs/sell/marketing/resources/email_campaign/methods/getAudiences" target="_blank">getAudiences</a>. Use the code values in the response to populate audienceCodes.
    */
    private ?array $audienceCodes = null;
    
    /**
     * @var string|null $categoryId The unique identifier of either an eBay category or a store category.<br><br>This field is used if a seller wants to apply an email campaign to a specific eBay category or store category. The <b>categoryType</b> determines whether the <b>categoryId</b> value is an eBay category or store category.<br><br>Use the <a href="/api-docs/commerce/taxonomy/overview.html"  target="_blank">Taxonomy API</a> to retrieve eBay categories. To retrieve seller store categories, use the <a href="/devzone/xml/docs/reference/ebay/GetStore.html" target="_blank">getStore</a> call. Use the <b>categoryId</b> value of the desired category from the results as the value in the request.<br><br><b>itemSelectMode</b> must be set to <code>AUTO</code> in order to use a category ID.
    */
    private ?string $categoryId = null;
    
    /**
     * @var string|null $categoryType This field must be set when applying an email campaign to a specific eBay category or store category. The enumeration value used indicates which type of category the <b>categoryId</b> belongs to. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:CategoryTypeEnum'>eBay API documentation</a>
    */
    private ?string $categoryType = null;
    
    /**
     * @var array<string>|null $itemIds An array of unique identifiers for the listings displayed in an email campaign. Used if the seller wishes to select the eBay listings in the email campaign rather than have eBay automatically select them.<br><br>Call <a href="/DevZone/XML/docs/Reference/eBay/GetSellerList.html#GetSellerList">getSellerList</a> to retrieve all seller listings. Each <b>Item</b> result contains an <b>ItemID</b> value. Use this value in <b>itemIds</b> to feature that listing.<br><br>The maximum number of <b>itemIds</b> for the <code>COUPON</code> campaign type is 4, and for every other campaign type is 10.<br><br><b>itemSelectMode</b> must be set to <code>MANUAL</code> in order to use this field.
    */
    private ?array $itemIds = null;
    
    /**
     * @var string|null $itemSelectMode Determines whether listings featured in an email campaign are selected by the seller or by eBay.<br><br>If <b>itemSelectMode</b> is set to <code>AUTO</code>, eBay automatically choses listings based on values set for <b>sort</b>, <b>categoryType</b>, <b>categoryId</b>, and <b>priceRange</b>.<br><br>If <b>itemSelectMode</b> is set to <code>MANUAL</code>, listings are set by the seller by populating the <code>itemIds</code> array.<br><br><span class="tablenote"><b>Note: </b><b>itemSelectMode</b> is always set to <code>AUTO</code> for <code>WELCOME</code> email campaigns.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ItemSelectModeEnum'>eBay API documentation</a>
    */
    private ?string $itemSelectMode = null;
    
    /**
     * @var string|null $personalizedMessage The body of the email campaign. Accepts HTML and CSS. The maximum length is 1000 characters
    */
    private ?string $personalizedMessage = null;
    
    /**
     * @var PriceRange|null $priceRange The price range.
    */
    private ?PriceRange $priceRange = null;
    
    /**
     * @var string|null $promotionId The ID of the discount used for an email campaign if the <b>emailCampaignType</b> is set to <code>COUPON</code>, <code>SALE_EVENT</code>, or <code>ORDER_DISCOUNT</code>, and <b>promotionSelectModeEnum</b> is set to <code>MANUAL</code>.<br><br>To find a discount, call <a href="/api-docs/sell/marketing/resources/promotion/methods/getPromotions" target="_blank">getPromotions</a> to retrieve a list of the seller's discounts. Use the <b>promotionId</b> from an individual <b>PromotionDetail</b> result for the request.
    */
    private ?string $promotionId = null;
    
    /**
     * @var string|null $promotionSelectModeEnum The selection mode for the discount used. If set to <code>AUTO</code>, eBay will choose the discount to include in the email campaign. If set to <code>MANUAL</code>, the seller must specify the discount in the <b>promotionId</b> field.<br><br>This field is required if the <b>emailCampaignType</b> is set to <code>COUPON</code>, <code>SALE_EVENT</code>, or <code>ORDER_DISCOUNT</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:PromotionSelectModeEnum'>eBay API documentation</a>
    */
    private ?string $promotionSelectModeEnum = null;
    
    /**
     * @var string|null $scheduleDate The date and time that the email campaign newsletter will be sent, given in UTC format. Example: 2023-05-20T03:13:35Z<br><br>This field should be used if the seller wishes to send the email campaign on a future date. If no <b>scheduleDate</b> is set, the email campaign will send once it is created or updated.
    */
    private ?string $scheduleDate = null;
    
    /**
     * @var string|null $sort The sort rule is used to display the listings featured in the email campaign.<br><br>Sort rules are only used if <b>itemSelectMode</b> is set to <code>AUTO</code>. If <b>itemSelectMode</b> is <code>MANUAL</code>, listings are displayed in the order in which they are listed in the <b>itemIds</b> array.<br><br>The following sort rules are available:<ul><li><code>ENDING_FIRST</code> displays listings by ending date, from soonest to latest.</li><li><code>LOWEST_PRICED</code> displays listings by price, from lowest to highest.</li><li><code>HIGHEST_PRICED</code> displays listings by price, from highest to lowest.</li><li><code>NEWLY_LISTED</code> displays listings by date listed, with the newest first.</li></ul><br><br>The default sort rule is <code>NEWLY_LISTED</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ItemSortEnum'>eBay API documentation</a>
    */
    private ?string $sort = null;
    
    /**
     * @var string|null $subject The email campaign subject. The maximum length is 70 characters.
    */
    private ?string $subject = null;
    
    /**
     * Instantiates a new UpdateCampaignRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateCampaignRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateCampaignRequest {
        return new UpdateCampaignRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the audienceCodes property value. An array of audience codes for the audiences of the email campaign. At least one audience code is required. There is no limit to the number of audience codes that may be entered.<br><br><b>Example: </b> if the current email campaign contains <code>"audienceCodes": "code1", "code2"</code> and the user wishes to add an audience code <code>code3</code>, set the <code>audienceCodes</code> value to <code>"audienceCodes": "code1", "code2", "code3"</code>.<br><br>To retrieve seller audiences, call <a href="/api-docs/sell/marketing/resources/email_campaign/methods/getAudiences" target="_blank">getAudiences</a>. Use the code values in the response to populate audienceCodes.
     * @return array<string>|null
    */
    public function getAudienceCodes(): ?array {
        return $this->audienceCodes;
    }

    /**
     * Gets the categoryId property value. The unique identifier of either an eBay category or a store category.<br><br>This field is used if a seller wants to apply an email campaign to a specific eBay category or store category. The <b>categoryType</b> determines whether the <b>categoryId</b> value is an eBay category or store category.<br><br>Use the <a href="/api-docs/commerce/taxonomy/overview.html"  target="_blank">Taxonomy API</a> to retrieve eBay categories. To retrieve seller store categories, use the <a href="/devzone/xml/docs/reference/ebay/GetStore.html" target="_blank">getStore</a> call. Use the <b>categoryId</b> value of the desired category from the results as the value in the request.<br><br><b>itemSelectMode</b> must be set to <code>AUTO</code> in order to use a category ID.
     * @return string|null
    */
    public function getCategoryId(): ?string {
        return $this->categoryId;
    }

    /**
     * Gets the categoryType property value. This field must be set when applying an email campaign to a specific eBay category or store category. The enumeration value used indicates which type of category the <b>categoryId</b> belongs to. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:CategoryTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCategoryType(): ?string {
        return $this->categoryType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'audienceCodes' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAudienceCodes($val);
            },
            'categoryId' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'categoryType' => fn(ParseNode $n) => $o->setCategoryType($n->getStringValue()),
            'itemIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setItemIds($val);
            },
            'itemSelectMode' => fn(ParseNode $n) => $o->setItemSelectMode($n->getStringValue()),
            'personalizedMessage' => fn(ParseNode $n) => $o->setPersonalizedMessage($n->getStringValue()),
            'priceRange' => fn(ParseNode $n) => $o->setPriceRange($n->getObjectValue([PriceRange::class, 'createFromDiscriminatorValue'])),
            'promotionId' => fn(ParseNode $n) => $o->setPromotionId($n->getStringValue()),
            'promotionSelectModeEnum' => fn(ParseNode $n) => $o->setPromotionSelectModeEnum($n->getStringValue()),
            'scheduleDate' => fn(ParseNode $n) => $o->setScheduleDate($n->getStringValue()),
            'sort' => fn(ParseNode $n) => $o->setSort($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
        ];
    }

    /**
     * Gets the itemIds property value. An array of unique identifiers for the listings displayed in an email campaign. Used if the seller wishes to select the eBay listings in the email campaign rather than have eBay automatically select them.<br><br>Call <a href="/DevZone/XML/docs/Reference/eBay/GetSellerList.html#GetSellerList">getSellerList</a> to retrieve all seller listings. Each <b>Item</b> result contains an <b>ItemID</b> value. Use this value in <b>itemIds</b> to feature that listing.<br><br>The maximum number of <b>itemIds</b> for the <code>COUPON</code> campaign type is 4, and for every other campaign type is 10.<br><br><b>itemSelectMode</b> must be set to <code>MANUAL</code> in order to use this field.
     * @return array<string>|null
    */
    public function getItemIds(): ?array {
        return $this->itemIds;
    }

    /**
     * Gets the itemSelectMode property value. Determines whether listings featured in an email campaign are selected by the seller or by eBay.<br><br>If <b>itemSelectMode</b> is set to <code>AUTO</code>, eBay automatically choses listings based on values set for <b>sort</b>, <b>categoryType</b>, <b>categoryId</b>, and <b>priceRange</b>.<br><br>If <b>itemSelectMode</b> is set to <code>MANUAL</code>, listings are set by the seller by populating the <code>itemIds</code> array.<br><br><span class="tablenote"><b>Note: </b><b>itemSelectMode</b> is always set to <code>AUTO</code> for <code>WELCOME</code> email campaigns.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ItemSelectModeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getItemSelectMode(): ?string {
        return $this->itemSelectMode;
    }

    /**
     * Gets the personalizedMessage property value. The body of the email campaign. Accepts HTML and CSS. The maximum length is 1000 characters
     * @return string|null
    */
    public function getPersonalizedMessage(): ?string {
        return $this->personalizedMessage;
    }

    /**
     * Gets the priceRange property value. The price range.
     * @return PriceRange|null
    */
    public function getPriceRange(): ?PriceRange {
        return $this->priceRange;
    }

    /**
     * Gets the promotionId property value. The ID of the discount used for an email campaign if the <b>emailCampaignType</b> is set to <code>COUPON</code>, <code>SALE_EVENT</code>, or <code>ORDER_DISCOUNT</code>, and <b>promotionSelectModeEnum</b> is set to <code>MANUAL</code>.<br><br>To find a discount, call <a href="/api-docs/sell/marketing/resources/promotion/methods/getPromotions" target="_blank">getPromotions</a> to retrieve a list of the seller's discounts. Use the <b>promotionId</b> from an individual <b>PromotionDetail</b> result for the request.
     * @return string|null
    */
    public function getPromotionId(): ?string {
        return $this->promotionId;
    }

    /**
     * Gets the promotionSelectModeEnum property value. The selection mode for the discount used. If set to <code>AUTO</code>, eBay will choose the discount to include in the email campaign. If set to <code>MANUAL</code>, the seller must specify the discount in the <b>promotionId</b> field.<br><br>This field is required if the <b>emailCampaignType</b> is set to <code>COUPON</code>, <code>SALE_EVENT</code>, or <code>ORDER_DISCOUNT</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:PromotionSelectModeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getPromotionSelectModeEnum(): ?string {
        return $this->promotionSelectModeEnum;
    }

    /**
     * Gets the scheduleDate property value. The date and time that the email campaign newsletter will be sent, given in UTC format. Example: 2023-05-20T03:13:35Z<br><br>This field should be used if the seller wishes to send the email campaign on a future date. If no <b>scheduleDate</b> is set, the email campaign will send once it is created or updated.
     * @return string|null
    */
    public function getScheduleDate(): ?string {
        return $this->scheduleDate;
    }

    /**
     * Gets the sort property value. The sort rule is used to display the listings featured in the email campaign.<br><br>Sort rules are only used if <b>itemSelectMode</b> is set to <code>AUTO</code>. If <b>itemSelectMode</b> is <code>MANUAL</code>, listings are displayed in the order in which they are listed in the <b>itemIds</b> array.<br><br>The following sort rules are available:<ul><li><code>ENDING_FIRST</code> displays listings by ending date, from soonest to latest.</li><li><code>LOWEST_PRICED</code> displays listings by price, from lowest to highest.</li><li><code>HIGHEST_PRICED</code> displays listings by price, from highest to lowest.</li><li><code>NEWLY_LISTED</code> displays listings by date listed, with the newest first.</li></ul><br><br>The default sort rule is <code>NEWLY_LISTED</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ItemSortEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getSort(): ?string {
        return $this->sort;
    }

    /**
     * Gets the subject property value. The email campaign subject. The maximum length is 70 characters.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('audienceCodes', $this->getAudienceCodes());
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeStringValue('categoryType', $this->getCategoryType());
        $writer->writeCollectionOfPrimitiveValues('itemIds', $this->getItemIds());
        $writer->writeStringValue('itemSelectMode', $this->getItemSelectMode());
        $writer->writeStringValue('personalizedMessage', $this->getPersonalizedMessage());
        $writer->writeObjectValue('priceRange', $this->getPriceRange());
        $writer->writeStringValue('promotionId', $this->getPromotionId());
        $writer->writeStringValue('promotionSelectModeEnum', $this->getPromotionSelectModeEnum());
        $writer->writeStringValue('scheduleDate', $this->getScheduleDate());
        $writer->writeStringValue('sort', $this->getSort());
        $writer->writeStringValue('subject', $this->getSubject());
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
     * Sets the audienceCodes property value. An array of audience codes for the audiences of the email campaign. At least one audience code is required. There is no limit to the number of audience codes that may be entered.<br><br><b>Example: </b> if the current email campaign contains <code>"audienceCodes": "code1", "code2"</code> and the user wishes to add an audience code <code>code3</code>, set the <code>audienceCodes</code> value to <code>"audienceCodes": "code1", "code2", "code3"</code>.<br><br>To retrieve seller audiences, call <a href="/api-docs/sell/marketing/resources/email_campaign/methods/getAudiences" target="_blank">getAudiences</a>. Use the code values in the response to populate audienceCodes.
     * @param array<string>|null $value Value to set for the audienceCodes property.
    */
    public function setAudienceCodes(?array $value): void {
        $this->audienceCodes = $value;
    }

    /**
     * Sets the categoryId property value. The unique identifier of either an eBay category or a store category.<br><br>This field is used if a seller wants to apply an email campaign to a specific eBay category or store category. The <b>categoryType</b> determines whether the <b>categoryId</b> value is an eBay category or store category.<br><br>Use the <a href="/api-docs/commerce/taxonomy/overview.html"  target="_blank">Taxonomy API</a> to retrieve eBay categories. To retrieve seller store categories, use the <a href="/devzone/xml/docs/reference/ebay/GetStore.html" target="_blank">getStore</a> call. Use the <b>categoryId</b> value of the desired category from the results as the value in the request.<br><br><b>itemSelectMode</b> must be set to <code>AUTO</code> in order to use a category ID.
     * @param string|null $value Value to set for the categoryId property.
    */
    public function setCategoryId(?string $value): void {
        $this->categoryId = $value;
    }

    /**
     * Sets the categoryType property value. This field must be set when applying an email campaign to a specific eBay category or store category. The enumeration value used indicates which type of category the <b>categoryId</b> belongs to. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:CategoryTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the categoryType property.
    */
    public function setCategoryType(?string $value): void {
        $this->categoryType = $value;
    }

    /**
     * Sets the itemIds property value. An array of unique identifiers for the listings displayed in an email campaign. Used if the seller wishes to select the eBay listings in the email campaign rather than have eBay automatically select them.<br><br>Call <a href="/DevZone/XML/docs/Reference/eBay/GetSellerList.html#GetSellerList">getSellerList</a> to retrieve all seller listings. Each <b>Item</b> result contains an <b>ItemID</b> value. Use this value in <b>itemIds</b> to feature that listing.<br><br>The maximum number of <b>itemIds</b> for the <code>COUPON</code> campaign type is 4, and for every other campaign type is 10.<br><br><b>itemSelectMode</b> must be set to <code>MANUAL</code> in order to use this field.
     * @param array<string>|null $value Value to set for the itemIds property.
    */
    public function setItemIds(?array $value): void {
        $this->itemIds = $value;
    }

    /**
     * Sets the itemSelectMode property value. Determines whether listings featured in an email campaign are selected by the seller or by eBay.<br><br>If <b>itemSelectMode</b> is set to <code>AUTO</code>, eBay automatically choses listings based on values set for <b>sort</b>, <b>categoryType</b>, <b>categoryId</b>, and <b>priceRange</b>.<br><br>If <b>itemSelectMode</b> is set to <code>MANUAL</code>, listings are set by the seller by populating the <code>itemIds</code> array.<br><br><span class="tablenote"><b>Note: </b><b>itemSelectMode</b> is always set to <code>AUTO</code> for <code>WELCOME</code> email campaigns.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ItemSelectModeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the itemSelectMode property.
    */
    public function setItemSelectMode(?string $value): void {
        $this->itemSelectMode = $value;
    }

    /**
     * Sets the personalizedMessage property value. The body of the email campaign. Accepts HTML and CSS. The maximum length is 1000 characters
     * @param string|null $value Value to set for the personalizedMessage property.
    */
    public function setPersonalizedMessage(?string $value): void {
        $this->personalizedMessage = $value;
    }

    /**
     * Sets the priceRange property value. The price range.
     * @param PriceRange|null $value Value to set for the priceRange property.
    */
    public function setPriceRange(?PriceRange $value): void {
        $this->priceRange = $value;
    }

    /**
     * Sets the promotionId property value. The ID of the discount used for an email campaign if the <b>emailCampaignType</b> is set to <code>COUPON</code>, <code>SALE_EVENT</code>, or <code>ORDER_DISCOUNT</code>, and <b>promotionSelectModeEnum</b> is set to <code>MANUAL</code>.<br><br>To find a discount, call <a href="/api-docs/sell/marketing/resources/promotion/methods/getPromotions" target="_blank">getPromotions</a> to retrieve a list of the seller's discounts. Use the <b>promotionId</b> from an individual <b>PromotionDetail</b> result for the request.
     * @param string|null $value Value to set for the promotionId property.
    */
    public function setPromotionId(?string $value): void {
        $this->promotionId = $value;
    }

    /**
     * Sets the promotionSelectModeEnum property value. The selection mode for the discount used. If set to <code>AUTO</code>, eBay will choose the discount to include in the email campaign. If set to <code>MANUAL</code>, the seller must specify the discount in the <b>promotionId</b> field.<br><br>This field is required if the <b>emailCampaignType</b> is set to <code>COUPON</code>, <code>SALE_EVENT</code>, or <code>ORDER_DISCOUNT</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:PromotionSelectModeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the promotionSelectModeEnum property.
    */
    public function setPromotionSelectModeEnum(?string $value): void {
        $this->promotionSelectModeEnum = $value;
    }

    /**
     * Sets the scheduleDate property value. The date and time that the email campaign newsletter will be sent, given in UTC format. Example: 2023-05-20T03:13:35Z<br><br>This field should be used if the seller wishes to send the email campaign on a future date. If no <b>scheduleDate</b> is set, the email campaign will send once it is created or updated.
     * @param string|null $value Value to set for the scheduleDate property.
    */
    public function setScheduleDate(?string $value): void {
        $this->scheduleDate = $value;
    }

    /**
     * Sets the sort property value. The sort rule is used to display the listings featured in the email campaign.<br><br>Sort rules are only used if <b>itemSelectMode</b> is set to <code>AUTO</code>. If <b>itemSelectMode</b> is <code>MANUAL</code>, listings are displayed in the order in which they are listed in the <b>itemIds</b> array.<br><br>The following sort rules are available:<ul><li><code>ENDING_FIRST</code> displays listings by ending date, from soonest to latest.</li><li><code>LOWEST_PRICED</code> displays listings by price, from lowest to highest.</li><li><code>HIGHEST_PRICED</code> displays listings by price, from highest to lowest.</li><li><code>NEWLY_LISTED</code> displays listings by date listed, with the newest first.</li></ul><br><br>The default sort rule is <code>NEWLY_LISTED</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ItemSortEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the sort property.
    */
    public function setSort(?string $value): void {
        $this->sort = $value;
    }

    /**
     * Sets the subject property value. The email campaign subject. The maximum length is 70 characters.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->subject = $value;
    }

}
