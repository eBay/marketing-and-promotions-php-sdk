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
 * This type defines all rules/inclusion filters used to add listings to campaigns or discounts. Use of the specific fields is different for campaigns or discounts. See <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html ">Using the selectionRules container</a>.
*/
class SelectionRule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<string>|null $brands An array of product brands. For more details, see <a href="/api-docs/sell/static/marketing/using-the-selectionrules-container.html ">Using the selectionRules container</a>.
    */
    private ?array $brands = null;
    
    /**
     * @var array<string>|null $categoryIds This field contains an array of the associated category ID(s).<br><br>For <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Promotio ">Item discounts</a>, a single-item array containing the category ID associated with the discounts. Required when used in an Item discount and either specifying a <b>selectionRules</b> container or when <b>inventoryCriterionType</b> is set to <code>INVENTORY_BY_RULE</code>.<br><br>For <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Campaign ">Promoted Listing campaigns</a>, an array of category ID(s) associated with the campaign. <br><br>For information on how to get category IDs, see <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#eBay ">eBay Marketplace category IDs</a> and <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Seller ">Seller store category IDs</a>
    */
    private ?array $categoryIds = null;
    
    /**
     * @var string|null $categoryScope This enumerated value indicates if the category ID for the item is an identifier for eBay categories or for a seller's eBay store categories. <br><br>For <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Campaign ">Promoted Listing campaigns</a>, this field includes the type of the category ID for the item(s) to be included in the campaign.<br><br>For <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Promotio ">Item discounts</a>, this field identifies the scope for the corresponding array as eBay categories or for a seller's eBay store categories. Required when used in an Item discount and <b>inventoryCriterionType</b> is set to <code>INVENTORY_BY_RULE</code>.  For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:CategoryScopeEnum'>eBay API documentation</a>
    */
    private ?string $categoryScope = null;
    
    /**
     * @var array<string>|null $listingConditionIds A comma-separated list of unique identifiers for the conditions of listings to be included<br><br>For <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Campaign ">Promoted Listing campaigns</a>, refer to <a href= "/api-docs/sell/static/marketing/pl-campaign-flow-pls.html#add-by-rule ">Add items to the campaign</a>. Up to four IDs can be specified.<br><br>For <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Promotio ">Item discounts</a>, refer to <a href= "/api-docs/sell/static/metadata/condition-id-values.html ">Item condition ID and name values</a>.
    */
    private ?array $listingConditionIds = null;
    
    /**
     * @var Amount|null $maxPrice A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $maxPrice = null;
    
    /**
     * @var Amount|null $minPrice A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $minPrice = null;
    
    /**
     * Instantiates a new SelectionRule and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SelectionRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SelectionRule {
        return new SelectionRule();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the brands property value. An array of product brands. For more details, see <a href="/api-docs/sell/static/marketing/using-the-selectionrules-container.html ">Using the selectionRules container</a>.
     * @return array<string>|null
    */
    public function getBrands(): ?array {
        return $this->brands;
    }

    /**
     * Gets the categoryIds property value. This field contains an array of the associated category ID(s).<br><br>For <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Promotio ">Item discounts</a>, a single-item array containing the category ID associated with the discounts. Required when used in an Item discount and either specifying a <b>selectionRules</b> container or when <b>inventoryCriterionType</b> is set to <code>INVENTORY_BY_RULE</code>.<br><br>For <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Campaign ">Promoted Listing campaigns</a>, an array of category ID(s) associated with the campaign. <br><br>For information on how to get category IDs, see <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#eBay ">eBay Marketplace category IDs</a> and <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Seller ">Seller store category IDs</a>
     * @return array<string>|null
    */
    public function getCategoryIds(): ?array {
        return $this->categoryIds;
    }

    /**
     * Gets the categoryScope property value. This enumerated value indicates if the category ID for the item is an identifier for eBay categories or for a seller's eBay store categories. <br><br>For <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Campaign ">Promoted Listing campaigns</a>, this field includes the type of the category ID for the item(s) to be included in the campaign.<br><br>For <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Promotio ">Item discounts</a>, this field identifies the scope for the corresponding array as eBay categories or for a seller's eBay store categories. Required when used in an Item discount and <b>inventoryCriterionType</b> is set to <code>INVENTORY_BY_RULE</code>.  For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:CategoryScopeEnum'>eBay API documentation</a>
     * @return string|null
    */
    public function getCategoryScope(): ?string {
        return $this->categoryScope;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'brands' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBrands($val);
            },
            'categoryIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCategoryIds($val);
            },
            'categoryScope' => fn(ParseNode $n) => $o->setCategoryScope($n->getStringValue()),
            'listingConditionIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setListingConditionIds($val);
            },
            'maxPrice' => fn(ParseNode $n) => $o->setMaxPrice($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'minPrice' => fn(ParseNode $n) => $o->setMinPrice($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the listingConditionIds property value. A comma-separated list of unique identifiers for the conditions of listings to be included<br><br>For <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Campaign ">Promoted Listing campaigns</a>, refer to <a href= "/api-docs/sell/static/marketing/pl-campaign-flow-pls.html#add-by-rule ">Add items to the campaign</a>. Up to four IDs can be specified.<br><br>For <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Promotio ">Item discounts</a>, refer to <a href= "/api-docs/sell/static/metadata/condition-id-values.html ">Item condition ID and name values</a>.
     * @return array<string>|null
    */
    public function getListingConditionIds(): ?array {
        return $this->listingConditionIds;
    }

    /**
     * Gets the maxPrice property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getMaxPrice(): ?Amount {
        return $this->maxPrice;
    }

    /**
     * Gets the minPrice property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getMinPrice(): ?Amount {
        return $this->minPrice;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('brands', $this->getBrands());
        $writer->writeCollectionOfPrimitiveValues('categoryIds', $this->getCategoryIds());
        $writer->writeStringValue('categoryScope', $this->getCategoryScope());
        $writer->writeCollectionOfPrimitiveValues('listingConditionIds', $this->getListingConditionIds());
        $writer->writeObjectValue('maxPrice', $this->getMaxPrice());
        $writer->writeObjectValue('minPrice', $this->getMinPrice());
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
     * Sets the brands property value. An array of product brands. For more details, see <a href="/api-docs/sell/static/marketing/using-the-selectionrules-container.html ">Using the selectionRules container</a>.
     * @param array<string>|null $value Value to set for the brands property.
    */
    public function setBrands(?array $value): void {
        $this->brands = $value;
    }

    /**
     * Sets the categoryIds property value. This field contains an array of the associated category ID(s).<br><br>For <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Promotio ">Item discounts</a>, a single-item array containing the category ID associated with the discounts. Required when used in an Item discount and either specifying a <b>selectionRules</b> container or when <b>inventoryCriterionType</b> is set to <code>INVENTORY_BY_RULE</code>.<br><br>For <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Campaign ">Promoted Listing campaigns</a>, an array of category ID(s) associated with the campaign. <br><br>For information on how to get category IDs, see <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#eBay ">eBay Marketplace category IDs</a> and <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Seller ">Seller store category IDs</a>
     * @param array<string>|null $value Value to set for the categoryIds property.
    */
    public function setCategoryIds(?array $value): void {
        $this->categoryIds = $value;
    }

    /**
     * Sets the categoryScope property value. This enumerated value indicates if the category ID for the item is an identifier for eBay categories or for a seller's eBay store categories. <br><br>For <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Campaign ">Promoted Listing campaigns</a>, this field includes the type of the category ID for the item(s) to be included in the campaign.<br><br>For <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Promotio ">Item discounts</a>, this field identifies the scope for the corresponding array as eBay categories or for a seller's eBay store categories. Required when used in an Item discount and <b>inventoryCriterionType</b> is set to <code>INVENTORY_BY_RULE</code>.  For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:CategoryScopeEnum'>eBay API documentation</a>
     * @param string|null $value Value to set for the categoryScope property.
    */
    public function setCategoryScope(?string $value): void {
        $this->categoryScope = $value;
    }

    /**
     * Sets the listingConditionIds property value. A comma-separated list of unique identifiers for the conditions of listings to be included<br><br>For <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Campaign ">Promoted Listing campaigns</a>, refer to <a href= "/api-docs/sell/static/marketing/pl-campaign-flow-pls.html#add-by-rule ">Add items to the campaign</a>. Up to four IDs can be specified.<br><br>For <a href= "/api-docs/sell/static/marketing/using-the-selectionrules-container.html#Promotio ">Item discounts</a>, refer to <a href= "/api-docs/sell/static/metadata/condition-id-values.html ">Item condition ID and name values</a>.
     * @param array<string>|null $value Value to set for the listingConditionIds property.
    */
    public function setListingConditionIds(?array $value): void {
        $this->listingConditionIds = $value;
    }

    /**
     * Sets the maxPrice property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the maxPrice property.
    */
    public function setMaxPrice(?Amount $value): void {
        $this->maxPrice = $value;
    }

    /**
     * Sets the minPrice property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the minPrice property.
    */
    public function setMinPrice(?Amount $value): void {
        $this->minPrice = $value;
    }

}
