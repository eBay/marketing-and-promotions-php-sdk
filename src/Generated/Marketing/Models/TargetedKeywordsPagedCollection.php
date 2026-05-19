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
 * A type that defines the keywords of the paged collection.
*/
class TargetedKeywordsPagedCollection implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<SuggestedKeywords>|null $suggestedKeywords A list of suggested keywords in the paged collection. <p> <span class="tablenote"><strong>Note:</strong> A relevancy check with items already present in the ad-group is performed even if item IDs associated with the ad-group are not explicitly passed in the request.</span></p> 
    */
    private ?array $suggestedKeywords = null;
    
    /**
     * Instantiates a new TargetedKeywordsPagedCollection and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TargetedKeywordsPagedCollection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TargetedKeywordsPagedCollection {
        return new TargetedKeywordsPagedCollection();
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
            'suggestedKeywords' => fn(ParseNode $n) => $o->setSuggestedKeywords($n->getCollectionOfObjectValues([SuggestedKeywords::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the suggestedKeywords property value. A list of suggested keywords in the paged collection. <p> <span class="tablenote"><strong>Note:</strong> A relevancy check with items already present in the ad-group is performed even if item IDs associated with the ad-group are not explicitly passed in the request.</span></p> 
     * @return array<SuggestedKeywords>|null
    */
    public function getSuggestedKeywords(): ?array {
        return $this->suggestedKeywords;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('suggestedKeywords', $this->getSuggestedKeywords());
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
     * Sets the suggestedKeywords property value. A list of suggested keywords in the paged collection. <p> <span class="tablenote"><strong>Note:</strong> A relevancy check with items already present in the ad-group is performed even if item IDs associated with the ad-group are not explicitly passed in the request.</span></p> 
     * @param array<SuggestedKeywords>|null $value Value to set for the suggestedKeywords property.
    */
    public function setSuggestedKeywords(?array $value): void {
        $this->suggestedKeywords = $value;
    }

}
