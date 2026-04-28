<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class GetEmailCampaignResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CampaignAudience>|null $audiences An array of one or more audiences associated with the email campaign.
    */
    private ?array $audiences = null;
    
    /**
     * @var string|null $categoryId The unique identifier of an eBay category or an eBay store category. This field is returned if a seller has applied the email campaign to a specific category.<br><br>The <b>categoryType</b> value will indicate if the category ID is for an eBay category or an eBay store category.
    */
    private ?string $categoryId = null;
    
    /**
     * @var string|null $categoryType The enumeration value returned here indicates if the <b>categoryId</b> value is the identifier of an eBay category or an eBay store category.<br><br>This field is returned if a seller has applied the email campaign to a specific category. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:CategoryTypeEnum'>eBay API documentation</a>
    */
    private ?string $categoryType = null;
    
    /**
     * @var string|null $creationDate The date and time that the email campaign was created, given in UTC format.
    */
    private ?string $creationDate = null;
    
    /**
     * @var string|null $emailCampaignId The unique identifier of the email campaign.
    */
    private ?string $emailCampaignId = null;
    
    /**
     * @var string|null $emailCampaignStatus The email campaign status. See <a href="/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum">EmailCampaignStatusEnum</a> for a list of valid statuses. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum'>eBay API documentation</a>
    */
    private ?string $emailCampaignStatus = null;
    
    /**
     * @var string|null $emailCampaignType The email campaign type. See <a href="/api-docs/sell/marketing/types/api:CampaignTypeEnum">CampaignTypeEnum</a> for valid email campaign types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:CampaignTypeEnum'>eBay API documentation</a>
    */
    private ?string $emailCampaignType = null;
    
    /**
     * @var array<string>|null $itemIds The listing IDs of the items that were manually added to the email campaign.<br><br>Only listings added manually by the seller are returned. Returns a null array if no listings were added.
    */
    private ?array $itemIds = null;
    
    /**
     * @var string|null $itemSelectMode The mode used to select the items listed in the email campaign. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ItemSelectModeEnum'>eBay API documentation</a>
    */
    private ?string $itemSelectMode = null;
    
    /**
     * @var string|null $marketplaceId The eBay marketplace where the email campaign is active. See <a href="/api-docs/sell/marketing/types/ba:MarketplaceIdEnum">MarketplaceIdEnum</a> for a list of marketplace IDs.
    */
    private ?string $marketplaceId = null;
    
    /**
     * @var string|null $modificationDate The date and time the email campaign was last modified, given in UTC format.
    */
    private ?string $modificationDate = null;
    
    /**
     * @var string|null $personalizedMessage The body of the email campaign sent to the audience.
    */
    private ?string $personalizedMessage = null;
    
    /**
     * @var PriceRange|null $priceRange The price range.
    */
    private ?PriceRange $priceRange = null;
    
    /**
     * @var string|null $promotionId The ID of the discount that was assigned to the email campaign.
    */
    private ?string $promotionId = null;
    
    /**
     * @var string|null $promotionSelectMode Indicates whether the listings that the discount was applied to were selected manually or automatically.<br><br>This field will only return if a discount was applied. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:PromotionSelectModeEnum'>eBay API documentation</a>
    */
    private ?string $promotionSelectMode = null;
    
    /**
     * @var string|null $scheduleDate The date and time that the email campaign newsletter is scheduled to send, given in UTC format. This field is only returned if the seller set the start of the email campaign to a date in the future.
    */
    private ?string $scheduleDate = null;
    
    /**
     * @var string|null $scheduleDateType The schedule type of the email campaign. See <a href="/api-docs/sell/marketing/types/api:ScheduleDateTypeEnum">ScheduleDateTypeEnum</a>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ScheduleDateTypeEnum'>eBay API documentation</a>
    */
    private ?string $scheduleDateType = null;
    
    /**
     * @var string|null $sentDate The date and time that the email campaign was sent, given in UTC format.
    */
    private ?string $sentDate = null;
    
    /**
     * @var string|null $sort The sort rule is used to display the items in the email campaign. If no sort rule was selected, the default will be <code>NEWLY_LISTED</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ItemSortEnum'>eBay API documentation</a>
    */
    private ?string $sort = null;
    
    /**
     * @var string|null $subject The email campaign subject.
    */
    private ?string $subject = null;
    
    /**
     * Instantiates a new GetEmailCampaignResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetEmailCampaignResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetEmailCampaignResponse {
        return new GetEmailCampaignResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the audiences property value. An array of one or more audiences associated with the email campaign.
     * @return array<CampaignAudience>|null
    */
    public function getAudiences(): ?array {
        return $this->audiences;
    }

    /**
     * Gets the categoryId property value. The unique identifier of an eBay category or an eBay store category. This field is returned if a seller has applied the email campaign to a specific category.<br><br>The <b>categoryType</b> value will indicate if the category ID is for an eBay category or an eBay store category.
     * @return string|null
    */
    public function getCategoryId(): ?string {
        return $this->categoryId;
    }

    /**
     * Gets the categoryType property value. The enumeration value returned here indicates if the <b>categoryId</b> value is the identifier of an eBay category or an eBay store category.<br><br>This field is returned if a seller has applied the email campaign to a specific category. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:CategoryTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCategoryType(): ?string {
        return $this->categoryType;
    }

    /**
     * Gets the creationDate property value. The date and time that the email campaign was created, given in UTC format.
     * @return string|null
    */
    public function getCreationDate(): ?string {
        return $this->creationDate;
    }

    /**
     * Gets the emailCampaignId property value. The unique identifier of the email campaign.
     * @return string|null
    */
    public function getEmailCampaignId(): ?string {
        return $this->emailCampaignId;
    }

    /**
     * Gets the emailCampaignStatus property value. The email campaign status. See <a href="/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum">EmailCampaignStatusEnum</a> for a list of valid statuses. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getEmailCampaignStatus(): ?string {
        return $this->emailCampaignStatus;
    }

    /**
     * Gets the emailCampaignType property value. The email campaign type. See <a href="/api-docs/sell/marketing/types/api:CampaignTypeEnum">CampaignTypeEnum</a> for valid email campaign types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:CampaignTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getEmailCampaignType(): ?string {
        return $this->emailCampaignType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'audiences' => fn(ParseNode $n) => $o->setAudiences($n->getCollectionOfObjectValues([CampaignAudience::class, 'createFromDiscriminatorValue'])),
            'categoryId' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'categoryType' => fn(ParseNode $n) => $o->setCategoryType($n->getStringValue()),
            'creationDate' => fn(ParseNode $n) => $o->setCreationDate($n->getStringValue()),
            'emailCampaignId' => fn(ParseNode $n) => $o->setEmailCampaignId($n->getStringValue()),
            'emailCampaignStatus' => fn(ParseNode $n) => $o->setEmailCampaignStatus($n->getStringValue()),
            'emailCampaignType' => fn(ParseNode $n) => $o->setEmailCampaignType($n->getStringValue()),
            'itemIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setItemIds($val);
            },
            'itemSelectMode' => fn(ParseNode $n) => $o->setItemSelectMode($n->getStringValue()),
            'marketplaceId' => fn(ParseNode $n) => $o->setMarketplaceId($n->getStringValue()),
            'modificationDate' => fn(ParseNode $n) => $o->setModificationDate($n->getStringValue()),
            'personalizedMessage' => fn(ParseNode $n) => $o->setPersonalizedMessage($n->getStringValue()),
            'priceRange' => fn(ParseNode $n) => $o->setPriceRange($n->getObjectValue([PriceRange::class, 'createFromDiscriminatorValue'])),
            'promotionId' => fn(ParseNode $n) => $o->setPromotionId($n->getStringValue()),
            'promotionSelectMode' => fn(ParseNode $n) => $o->setPromotionSelectMode($n->getStringValue()),
            'scheduleDate' => fn(ParseNode $n) => $o->setScheduleDate($n->getStringValue()),
            'scheduleDateType' => fn(ParseNode $n) => $o->setScheduleDateType($n->getStringValue()),
            'sentDate' => fn(ParseNode $n) => $o->setSentDate($n->getStringValue()),
            'sort' => fn(ParseNode $n) => $o->setSort($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
        ];
    }

    /**
     * Gets the itemIds property value. The listing IDs of the items that were manually added to the email campaign.<br><br>Only listings added manually by the seller are returned. Returns a null array if no listings were added.
     * @return array<string>|null
    */
    public function getItemIds(): ?array {
        return $this->itemIds;
    }

    /**
     * Gets the itemSelectMode property value. The mode used to select the items listed in the email campaign. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ItemSelectModeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getItemSelectMode(): ?string {
        return $this->itemSelectMode;
    }

    /**
     * Gets the marketplaceId property value. The eBay marketplace where the email campaign is active. See <a href="/api-docs/sell/marketing/types/ba:MarketplaceIdEnum">MarketplaceIdEnum</a> for a list of marketplace IDs.
     * @return string|null
    */
    public function getMarketplaceId(): ?string {
        return $this->marketplaceId;
    }

    /**
     * Gets the modificationDate property value. The date and time the email campaign was last modified, given in UTC format.
     * @return string|null
    */
    public function getModificationDate(): ?string {
        return $this->modificationDate;
    }

    /**
     * Gets the personalizedMessage property value. The body of the email campaign sent to the audience.
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
     * Gets the promotionId property value. The ID of the discount that was assigned to the email campaign.
     * @return string|null
    */
    public function getPromotionId(): ?string {
        return $this->promotionId;
    }

    /**
     * Gets the promotionSelectMode property value. Indicates whether the listings that the discount was applied to were selected manually or automatically.<br><br>This field will only return if a discount was applied. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:PromotionSelectModeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getPromotionSelectMode(): ?string {
        return $this->promotionSelectMode;
    }

    /**
     * Gets the scheduleDate property value. The date and time that the email campaign newsletter is scheduled to send, given in UTC format. This field is only returned if the seller set the start of the email campaign to a date in the future.
     * @return string|null
    */
    public function getScheduleDate(): ?string {
        return $this->scheduleDate;
    }

    /**
     * Gets the scheduleDateType property value. The schedule type of the email campaign. See <a href="/api-docs/sell/marketing/types/api:ScheduleDateTypeEnum">ScheduleDateTypeEnum</a>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ScheduleDateTypeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getScheduleDateType(): ?string {
        return $this->scheduleDateType;
    }

    /**
     * Gets the sentDate property value. The date and time that the email campaign was sent, given in UTC format.
     * @return string|null
    */
    public function getSentDate(): ?string {
        return $this->sentDate;
    }

    /**
     * Gets the sort property value. The sort rule is used to display the items in the email campaign. If no sort rule was selected, the default will be <code>NEWLY_LISTED</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ItemSortEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getSort(): ?string {
        return $this->sort;
    }

    /**
     * Gets the subject property value. The email campaign subject.
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
        $writer->writeCollectionOfObjectValues('audiences', $this->getAudiences());
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeStringValue('categoryType', $this->getCategoryType());
        $writer->writeStringValue('creationDate', $this->getCreationDate());
        $writer->writeStringValue('emailCampaignId', $this->getEmailCampaignId());
        $writer->writeStringValue('emailCampaignStatus', $this->getEmailCampaignStatus());
        $writer->writeStringValue('emailCampaignType', $this->getEmailCampaignType());
        $writer->writeCollectionOfPrimitiveValues('itemIds', $this->getItemIds());
        $writer->writeStringValue('itemSelectMode', $this->getItemSelectMode());
        $writer->writeStringValue('marketplaceId', $this->getMarketplaceId());
        $writer->writeStringValue('modificationDate', $this->getModificationDate());
        $writer->writeStringValue('personalizedMessage', $this->getPersonalizedMessage());
        $writer->writeObjectValue('priceRange', $this->getPriceRange());
        $writer->writeStringValue('promotionId', $this->getPromotionId());
        $writer->writeStringValue('promotionSelectMode', $this->getPromotionSelectMode());
        $writer->writeStringValue('scheduleDate', $this->getScheduleDate());
        $writer->writeStringValue('scheduleDateType', $this->getScheduleDateType());
        $writer->writeStringValue('sentDate', $this->getSentDate());
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
     * Sets the audiences property value. An array of one or more audiences associated with the email campaign.
     * @param array<CampaignAudience>|null $value Value to set for the audiences property.
    */
    public function setAudiences(?array $value): void {
        $this->audiences = $value;
    }

    /**
     * Sets the categoryId property value. The unique identifier of an eBay category or an eBay store category. This field is returned if a seller has applied the email campaign to a specific category.<br><br>The <b>categoryType</b> value will indicate if the category ID is for an eBay category or an eBay store category.
     * @param string|null $value Value to set for the categoryId property.
    */
    public function setCategoryId(?string $value): void {
        $this->categoryId = $value;
    }

    /**
     * Sets the categoryType property value. The enumeration value returned here indicates if the <b>categoryId</b> value is the identifier of an eBay category or an eBay store category.<br><br>This field is returned if a seller has applied the email campaign to a specific category. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:CategoryTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the categoryType property.
    */
    public function setCategoryType(?string $value): void {
        $this->categoryType = $value;
    }

    /**
     * Sets the creationDate property value. The date and time that the email campaign was created, given in UTC format.
     * @param string|null $value Value to set for the creationDate property.
    */
    public function setCreationDate(?string $value): void {
        $this->creationDate = $value;
    }

    /**
     * Sets the emailCampaignId property value. The unique identifier of the email campaign.
     * @param string|null $value Value to set for the emailCampaignId property.
    */
    public function setEmailCampaignId(?string $value): void {
        $this->emailCampaignId = $value;
    }

    /**
     * Sets the emailCampaignStatus property value. The email campaign status. See <a href="/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum">EmailCampaignStatusEnum</a> for a list of valid statuses. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:EmailCampaignStatusEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the emailCampaignStatus property.
    */
    public function setEmailCampaignStatus(?string $value): void {
        $this->emailCampaignStatus = $value;
    }

    /**
     * Sets the emailCampaignType property value. The email campaign type. See <a href="/api-docs/sell/marketing/types/api:CampaignTypeEnum">CampaignTypeEnum</a> for valid email campaign types. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:CampaignTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the emailCampaignType property.
    */
    public function setEmailCampaignType(?string $value): void {
        $this->emailCampaignType = $value;
    }

    /**
     * Sets the itemIds property value. The listing IDs of the items that were manually added to the email campaign.<br><br>Only listings added manually by the seller are returned. Returns a null array if no listings were added.
     * @param array<string>|null $value Value to set for the itemIds property.
    */
    public function setItemIds(?array $value): void {
        $this->itemIds = $value;
    }

    /**
     * Sets the itemSelectMode property value. The mode used to select the items listed in the email campaign. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ItemSelectModeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the itemSelectMode property.
    */
    public function setItemSelectMode(?string $value): void {
        $this->itemSelectMode = $value;
    }

    /**
     * Sets the marketplaceId property value. The eBay marketplace where the email campaign is active. See <a href="/api-docs/sell/marketing/types/ba:MarketplaceIdEnum">MarketplaceIdEnum</a> for a list of marketplace IDs.
     * @param string|null $value Value to set for the marketplaceId property.
    */
    public function setMarketplaceId(?string $value): void {
        $this->marketplaceId = $value;
    }

    /**
     * Sets the modificationDate property value. The date and time the email campaign was last modified, given in UTC format.
     * @param string|null $value Value to set for the modificationDate property.
    */
    public function setModificationDate(?string $value): void {
        $this->modificationDate = $value;
    }

    /**
     * Sets the personalizedMessage property value. The body of the email campaign sent to the audience.
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
     * Sets the promotionId property value. The ID of the discount that was assigned to the email campaign.
     * @param string|null $value Value to set for the promotionId property.
    */
    public function setPromotionId(?string $value): void {
        $this->promotionId = $value;
    }

    /**
     * Sets the promotionSelectMode property value. Indicates whether the listings that the discount was applied to were selected manually or automatically.<br><br>This field will only return if a discount was applied. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:PromotionSelectModeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the promotionSelectMode property.
    */
    public function setPromotionSelectMode(?string $value): void {
        $this->promotionSelectMode = $value;
    }

    /**
     * Sets the scheduleDate property value. The date and time that the email campaign newsletter is scheduled to send, given in UTC format. This field is only returned if the seller set the start of the email campaign to a date in the future.
     * @param string|null $value Value to set for the scheduleDate property.
    */
    public function setScheduleDate(?string $value): void {
        $this->scheduleDate = $value;
    }

    /**
     * Sets the scheduleDateType property value. The schedule type of the email campaign. See <a href="/api-docs/sell/marketing/types/api:ScheduleDateTypeEnum">ScheduleDateTypeEnum</a>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ScheduleDateTypeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the scheduleDateType property.
    */
    public function setScheduleDateType(?string $value): void {
        $this->scheduleDateType = $value;
    }

    /**
     * Sets the sentDate property value. The date and time that the email campaign was sent, given in UTC format.
     * @param string|null $value Value to set for the sentDate property.
    */
    public function setSentDate(?string $value): void {
        $this->sentDate = $value;
    }

    /**
     * Sets the sort property value. The sort rule is used to display the items in the email campaign. If no sort rule was selected, the default will be <code>NEWLY_LISTED</code>. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/api:ItemSortEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the sort property.
    */
    public function setSort(?string $value): void {
        $this->sort = $value;
    }

    /**
     * Sets the subject property value. The email campaign subject.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->subject = $value;
    }

}
