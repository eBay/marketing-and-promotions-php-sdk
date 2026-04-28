<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetEmailCampaignsResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CampaignDTO>|null $campaigns A list of email campaigns that match the search criteria.
    */
    private ?array $campaigns = null;
    
    /**
     * @var string|null $href The URL to the current page of store email campaigns.
    */
    private ?string $href = null;
    
    /**
     * @var int|null $limit The value of the limit parameter submitted in the request, which is the maximum number of store email campaigns to return on a page from the result set.
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $next The URI for the next page of results. This value is returned if there is an additional page of results to return from the result set.
    */
    private ?string $next = null;
    
    /**
     * @var int|null $offset This value indicates the offset used for current page of store email campaigns being returned.
    */
    private ?int $offset = null;
    
    /**
     * @var string|null $prev The URI for the previous page of results. This is returned if there is a previous page of results from the result set.
    */
    private ?string $prev = null;
    
    /**
     * @var int|null $total Total number of available results returned under the filter criteria submitted in the request.
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new GetEmailCampaignsResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetEmailCampaignsResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetEmailCampaignsResponse {
        return new GetEmailCampaignsResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the campaigns property value. A list of email campaigns that match the search criteria.
     * @return array<CampaignDTO>|null
    */
    public function getCampaigns(): ?array {
        return $this->campaigns;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'campaigns' => fn(ParseNode $n) => $o->setCampaigns($n->getCollectionOfObjectValues([CampaignDTO::class, 'createFromDiscriminatorValue'])),
            'href' => fn(ParseNode $n) => $o->setHref($n->getStringValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'next' => fn(ParseNode $n) => $o->setNext($n->getStringValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'prev' => fn(ParseNode $n) => $o->setPrev($n->getStringValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the href property value. The URL to the current page of store email campaigns.
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the limit property value. The value of the limit parameter submitted in the request, which is the maximum number of store email campaigns to return on a page from the result set.
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the next property value. The URI for the next page of results. This value is returned if there is an additional page of results to return from the result set.
     * @return string|null
    */
    public function getNext(): ?string {
        return $this->next;
    }

    /**
     * Gets the offset property value. This value indicates the offset used for current page of store email campaigns being returned.
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the prev property value. The URI for the previous page of results. This is returned if there is a previous page of results from the result set.
     * @return string|null
    */
    public function getPrev(): ?string {
        return $this->prev;
    }

    /**
     * Gets the total property value. Total number of available results returned under the filter criteria submitted in the request.
     * @return int|null
    */
    public function getTotal(): ?int {
        return $this->total;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('campaigns', $this->getCampaigns());
        $writer->writeStringValue('href', $this->getHref());
        $writer->writeIntegerValue('limit', $this->getLimit());
        $writer->writeStringValue('next', $this->getNext());
        $writer->writeIntegerValue('offset', $this->getOffset());
        $writer->writeStringValue('prev', $this->getPrev());
        $writer->writeIntegerValue('total', $this->getTotal());
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
     * Sets the campaigns property value. A list of email campaigns that match the search criteria.
     * @param array<CampaignDTO>|null $value Value to set for the campaigns property.
    */
    public function setCampaigns(?array $value): void {
        $this->campaigns = $value;
    }

    /**
     * Sets the href property value. The URL to the current page of store email campaigns.
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the limit property value. The value of the limit parameter submitted in the request, which is the maximum number of store email campaigns to return on a page from the result set.
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the next property value. The URI for the next page of results. This value is returned if there is an additional page of results to return from the result set.
     * @param string|null $value Value to set for the next property.
    */
    public function setNext(?string $value): void {
        $this->next = $value;
    }

    /**
     * Sets the offset property value. This value indicates the offset used for current page of store email campaigns being returned.
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the prev property value. The URI for the previous page of results. This is returned if there is a previous page of results from the result set.
     * @param string|null $value Value to set for the prev property.
    */
    public function setPrev(?string $value): void {
        $this->prev = $value;
    }

    /**
     * Sets the total property value. Total number of available results returned under the filter criteria submitted in the request.
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
