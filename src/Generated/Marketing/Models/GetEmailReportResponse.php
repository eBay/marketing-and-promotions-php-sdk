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

class GetEmailReportResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $clickCount The number of item listing links clicked from the body of campaign emails for the time range specified by the query.
    */
    private ?int $clickCount = null;
    
    /**
     * @var int|null $openCount The total email opened count for all email campaigns from a seller for the time range specified by the query.
    */
    private ?int $openCount = null;
    
    /**
     * @var Amount|null $totalSales A complex type that describes the value of a monetary amount as represented by a global currency.
    */
    private ?Amount $totalSales = null;
    
    /**
     * Instantiates a new GetEmailReportResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetEmailReportResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetEmailReportResponse {
        return new GetEmailReportResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the clickCount property value. The number of item listing links clicked from the body of campaign emails for the time range specified by the query.
     * @return int|null
    */
    public function getClickCount(): ?int {
        return $this->clickCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'clickCount' => fn(ParseNode $n) => $o->setClickCount($n->getIntegerValue()),
            'openCount' => fn(ParseNode $n) => $o->setOpenCount($n->getIntegerValue()),
            'totalSales' => fn(ParseNode $n) => $o->setTotalSales($n->getObjectValue([Amount::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the openCount property value. The total email opened count for all email campaigns from a seller for the time range specified by the query.
     * @return int|null
    */
    public function getOpenCount(): ?int {
        return $this->openCount;
    }

    /**
     * Gets the totalSales property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @return Amount|null
    */
    public function getTotalSales(): ?Amount {
        return $this->totalSales;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('clickCount', $this->getClickCount());
        $writer->writeIntegerValue('openCount', $this->getOpenCount());
        $writer->writeObjectValue('totalSales', $this->getTotalSales());
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
     * Sets the clickCount property value. The number of item listing links clicked from the body of campaign emails for the time range specified by the query.
     * @param int|null $value Value to set for the clickCount property.
    */
    public function setClickCount(?int $value): void {
        $this->clickCount = $value;
    }

    /**
     * Sets the openCount property value. The total email opened count for all email campaigns from a seller for the time range specified by the query.
     * @param int|null $value Value to set for the openCount property.
    */
    public function setOpenCount(?int $value): void {
        $this->openCount = $value;
    }

    /**
     * Sets the totalSales property value. A complex type that describes the value of a monetary amount as represented by a global currency.
     * @param Amount|null $value Value to set for the totalSales property.
    */
    public function setTotalSales(?Amount $value): void {
        $this->totalSales = $value;
    }

}
