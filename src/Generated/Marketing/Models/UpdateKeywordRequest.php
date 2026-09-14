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
 * A type that defines the fields for the request to update a keyword.
*/
class UpdateKeywordRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var Amount|null $bid This container is used to set or change the bid for the keyword. Each time a listing is retrieved in search results using this keyword and clicked on, the seller will be charged this amount. Each click goes toward the daily budget set up for the CPC campaign. If the bid is not provided, then the default bid associated with the ad group is used.
    */
    private ?Amount $bid = null;
    
    /**
     * @var KeywordStatusEnum|null $keywordStatus Include this field if you wish to change the status of the keyword. The status value specified here must be different than the keyword's current status. To confirm the current status of a keyword, you can use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-keyword-getkeyword">getKeyword</a> method.</p><p>If the status of the ad is currently <code>ACTIVE</code>, you can change status to <code>PAUSED</code> or <code>ARCHIVED</code>. If ad group is currently in <code>PAUSED</code> status, you can change the status back to <code>ACTIVE</code>. Ads that are currently in <code>ARCHIVED</code> status cannot be made <code>ACTIVE</code> again.
    */
    private ?KeywordStatusEnum $keywordStatus = null;
    
    /**
     * Instantiates a new UpdateKeywordRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateKeywordRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateKeywordRequest {
        return new UpdateKeywordRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the bid property value. This container is used to set or change the bid for the keyword. Each time a listing is retrieved in search results using this keyword and clicked on, the seller will be charged this amount. Each click goes toward the daily budget set up for the CPC campaign. If the bid is not provided, then the default bid associated with the ad group is used.
     * @return Amount|null
    */
    public function getBid(): ?Amount {
        return $this->bid;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bid' => fn(ParseNode $n) => $o->setBid($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
            'keywordStatus' => fn(ParseNode $n) => $o->setKeywordStatus($n->getEnumValue(KeywordStatusEnum::class)),
        ];
    }

    /**
     * Gets the keywordStatus property value. Include this field if you wish to change the status of the keyword. The status value specified here must be different than the keyword's current status. To confirm the current status of a keyword, you can use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-keyword-getkeyword">getKeyword</a> method.</p><p>If the status of the ad is currently <code>ACTIVE</code>, you can change status to <code>PAUSED</code> or <code>ARCHIVED</code>. If ad group is currently in <code>PAUSED</code> status, you can change the status back to <code>ACTIVE</code>. Ads that are currently in <code>ARCHIVED</code> status cannot be made <code>ACTIVE</code> again.
     * @return KeywordStatusEnum|null
    */
    public function getKeywordStatus(): ?KeywordStatusEnum {
        return $this->keywordStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('bid', $this->getBid());
        $writer->writeEnumValue('keywordStatus', $this->getKeywordStatus());
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
     * Sets the bid property value. This container is used to set or change the bid for the keyword. Each time a listing is retrieved in search results using this keyword and clicked on, the seller will be charged this amount. Each click goes toward the daily budget set up for the CPC campaign. If the bid is not provided, then the default bid associated with the ad group is used.
     * @param Amount|null $value Value to set for the bid property.
    */
    public function setBid(?Amount $value): void {
        $this->bid = $value;
    }

    /**
     * Sets the keywordStatus property value. Include this field if you wish to change the status of the keyword. The status value specified here must be different than the keyword's current status. To confirm the current status of a keyword, you can use the <a href="/develop/api/sell/marketing_api#sell-marketing_api-keyword-getkeyword">getKeyword</a> method.</p><p>If the status of the ad is currently <code>ACTIVE</code>, you can change status to <code>PAUSED</code> or <code>ARCHIVED</code>. If ad group is currently in <code>PAUSED</code> status, you can change the status back to <code>ACTIVE</code>. Ads that are currently in <code>ARCHIVED</code> status cannot be made <code>ACTIVE</code> again.
     * @param KeywordStatusEnum|null $value Value to set for the keywordStatus property.
    */
    public function setKeywordStatus(?KeywordStatusEnum $value): void {
        $this->keywordStatus = $value;
    }

}
