<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A container for the details of a paged collection of ad groups.<br /><br /><span class="tablenote"><b>Note:</b> This type only applies to the Cost Per Click (CPC) funding model; it does not apply to the Cost Per Sale (CPS) funding model.</span>
*/
class AdGroupPagedCollectionResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<AdGroup>|null $adGroups The details of existing ad groups, such as the name, ID, and status of the ad groups.
    */
    private ?array $adGroups = null;
    
    /**
     * @var string|null $href The URI of the current page of results from the result set.
    */
    private ?string $href = null;
    
    /**
     * @var int|null $limit The number of items returned on a single page from the result set. This value can be set in the request with the <b>limit</b> query parameter.
    */
    private ?int $limit = null;
    
    /**
     * @var string|null $next The call URI that can be used to retrieve the next page in the result set. This value is returned only if there is an additional page of results to display from the result set.
    */
    private ?string $next = null;
    
    /**
     * @var int|null $offset The number of results skipped in the result set before listing the first returned result. This value can be set in the request with the <b>offset</b> query parameter. <p><b>Default:</b> 0</p><br><span class="tablenote"><b>Note: </b>The items in a paginated result set use a zero-based list, where the first item in the list has an offset of <code>0</code>.</span>
    */
    private ?int $offset = null;
    
    /**
     * @var string|null $prev The call URI that can be used to retrieve the previous page in the result set. Basically, all of the request parameters will remain the same except the offset value, which will be decreased to retrieve the previous page of results.
    */
    private ?string $prev = null;
    
    /**
     * @var int|null $total The total number of items retrieved in the result set.<br /><br /><span class="tablenote"><b>Note: </b>If no items are found, this field is returned with a value of <code>0</code>.</span>
    */
    private ?int $total = null;
    
    /**
     * Instantiates a new AdGroupPagedCollectionResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdGroupPagedCollectionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdGroupPagedCollectionResponse {
        return new AdGroupPagedCollectionResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the adGroups property value. The details of existing ad groups, such as the name, ID, and status of the ad groups.
     * @return array<AdGroup>|null
    */
    public function getAdGroups(): ?array {
        return $this->adGroups;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'adGroups' => fn(ParseNode $n) => $o->setAdGroups($n->getCollectionOfObjectValues([AdGroup::class, 'createFromDiscriminatorValue'])),
            'href' => fn(ParseNode $n) => $o->setHref($n->getStringValue()),
            'limit' => fn(ParseNode $n) => $o->setLimit($n->getIntegerValue()),
            'next' => fn(ParseNode $n) => $o->setNext($n->getStringValue()),
            'offset' => fn(ParseNode $n) => $o->setOffset($n->getIntegerValue()),
            'prev' => fn(ParseNode $n) => $o->setPrev($n->getStringValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the href property value. The URI of the current page of results from the result set.
     * @return string|null
    */
    public function getHref(): ?string {
        return $this->href;
    }

    /**
     * Gets the limit property value. The number of items returned on a single page from the result set. This value can be set in the request with the <b>limit</b> query parameter.
     * @return int|null
    */
    public function getLimit(): ?int {
        return $this->limit;
    }

    /**
     * Gets the next property value. The call URI that can be used to retrieve the next page in the result set. This value is returned only if there is an additional page of results to display from the result set.
     * @return string|null
    */
    public function getNext(): ?string {
        return $this->next;
    }

    /**
     * Gets the offset property value. The number of results skipped in the result set before listing the first returned result. This value can be set in the request with the <b>offset</b> query parameter. <p><b>Default:</b> 0</p><br><span class="tablenote"><b>Note: </b>The items in a paginated result set use a zero-based list, where the first item in the list has an offset of <code>0</code>.</span>
     * @return int|null
    */
    public function getOffset(): ?int {
        return $this->offset;
    }

    /**
     * Gets the prev property value. The call URI that can be used to retrieve the previous page in the result set. Basically, all of the request parameters will remain the same except the offset value, which will be decreased to retrieve the previous page of results.
     * @return string|null
    */
    public function getPrev(): ?string {
        return $this->prev;
    }

    /**
     * Gets the total property value. The total number of items retrieved in the result set.<br /><br /><span class="tablenote"><b>Note: </b>If no items are found, this field is returned with a value of <code>0</code>.</span>
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
        $writer->writeCollectionOfObjectValues('adGroups', $this->getAdGroups());
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
     * Sets the adGroups property value. The details of existing ad groups, such as the name, ID, and status of the ad groups.
     * @param array<AdGroup>|null $value Value to set for the adGroups property.
    */
    public function setAdGroups(?array $value): void {
        $this->adGroups = $value;
    }

    /**
     * Sets the href property value. The URI of the current page of results from the result set.
     * @param string|null $value Value to set for the href property.
    */
    public function setHref(?string $value): void {
        $this->href = $value;
    }

    /**
     * Sets the limit property value. The number of items returned on a single page from the result set. This value can be set in the request with the <b>limit</b> query parameter.
     * @param int|null $value Value to set for the limit property.
    */
    public function setLimit(?int $value): void {
        $this->limit = $value;
    }

    /**
     * Sets the next property value. The call URI that can be used to retrieve the next page in the result set. This value is returned only if there is an additional page of results to display from the result set.
     * @param string|null $value Value to set for the next property.
    */
    public function setNext(?string $value): void {
        $this->next = $value;
    }

    /**
     * Sets the offset property value. The number of results skipped in the result set before listing the first returned result. This value can be set in the request with the <b>offset</b> query parameter. <p><b>Default:</b> 0</p><br><span class="tablenote"><b>Note: </b>The items in a paginated result set use a zero-based list, where the first item in the list has an offset of <code>0</code>.</span>
     * @param int|null $value Value to set for the offset property.
    */
    public function setOffset(?int $value): void {
        $this->offset = $value;
    }

    /**
     * Sets the prev property value. The call URI that can be used to retrieve the previous page in the result set. Basically, all of the request parameters will remain the same except the offset value, which will be decreased to retrieve the previous page of results.
     * @param string|null $value Value to set for the prev property.
    */
    public function setPrev(?string $value): void {
        $this->prev = $value;
    }

    /**
     * Sets the total property value. The total number of items retrieved in the result set.<br /><br /><span class="tablenote"><b>Note: </b>If no items are found, this field is returned with a value of <code>0</code>.</span>
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->total = $value;
    }

}
