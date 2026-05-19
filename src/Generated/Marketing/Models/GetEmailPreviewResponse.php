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

class GetEmailPreviewResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $content The raw HTML code of the email campaign contents. The client side can use this HTML output directly.<br><br>Because the contents of an email campaign are subject to change, these contents are a "snapshot" of the email campaign at a specific time and date, indicated by the <b>renderDate</b> field.
    */
    private ?string $content = null;
    
    /**
     * @var string|null $renderDate The date and time when a "snapshot" of the email campaign contents contained in the <b>content</b> result was taken. Given in UTC format.
    */
    private ?string $renderDate = null;
    
    /**
     * Instantiates a new GetEmailPreviewResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetEmailPreviewResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetEmailPreviewResponse {
        return new GetEmailPreviewResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the content property value. The raw HTML code of the email campaign contents. The client side can use this HTML output directly.<br><br>Because the contents of an email campaign are subject to change, these contents are a "snapshot" of the email campaign at a specific time and date, indicated by the <b>renderDate</b> field.
     * @return string|null
    */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            'renderDate' => fn(ParseNode $n) => $o->setRenderDate($n->getStringValue()),
        ];
    }

    /**
     * Gets the renderDate property value. The date and time when a "snapshot" of the email campaign contents contained in the <b>content</b> result was taken. Given in UTC format.
     * @return string|null
    */
    public function getRenderDate(): ?string {
        return $this->renderDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeStringValue('renderDate', $this->getRenderDate());
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
     * Sets the content property value. The raw HTML code of the email campaign contents. The client side can use this HTML output directly.<br><br>Because the contents of an email campaign are subject to change, these contents are a "snapshot" of the email campaign at a specific time and date, indicated by the <b>renderDate</b> field.
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->content = $value;
    }

    /**
     * Sets the renderDate property value. The date and time when a "snapshot" of the email campaign contents contained in the <b>content</b> result was taken. Given in UTC format.
     * @param string|null $value Value to set for the renderDate property.
    */
    public function setRenderDate(?string $value): void {
        $this->renderDate = $value;
    }

}
