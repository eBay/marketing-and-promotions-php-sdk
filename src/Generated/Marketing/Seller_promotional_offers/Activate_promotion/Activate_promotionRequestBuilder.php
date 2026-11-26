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

namespace EBay\MarketingAndPromotions\Generated\Marketing\Seller_promotional_offers\Activate_promotion;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\Error;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\PromotionSignUpRequest;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\PromotionSignUpResponse;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Activate a seller promotion
*/
class Activate_promotionRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Activate_promotionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/seller_promotional_offers/activate_promotion');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> When implementing the eBay Promotions API, partners are required to surface links to eBay's promotion terms and conditions for sellers before allowing sellers to activate the promotions. The link should remain surfaced once the promotion has been activated. eBay will provide the relevant promotion link(s) and instructions. Additionally, Partners are required to ask sellers to take action to activate a promotion themselves.</p></div><br>This method can be used to activate a promotion on a seller's account.<br><br>The promotion to activate is specified through its <b>promotionHash</b> and <b>promotionId</b> fields. The values can be retrieved using the <a href="/api-docs/marketing-private/sell/marketing/resources/seller_promotional_offers/methods/getSellerPromotionalOffers" target="_blank ">getSellerPromotionalOffers</a> method.<br><br>If the call is successful, HTTP status code <b>200 OK</b> will be returned, and the promotion will be activated on the seller's account.
     * @param PromotionSignUpRequest $body This type defines the fields required to activate a specific promotion for a seller.
     * @param Activate_promotionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PromotionSignUpResponse|null>
     * @throws Exception
    */
    public function post(PromotionSignUpRequest $body, ?Activate_promotionRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [Error::class, 'createFromDiscriminatorValue'],
                '500' => [Error::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PromotionSignUpResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * <div class="msgbox_important"><p class="msgbox_importantInDiv" data-mc-autonum="&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;"><span class="autonumber"><span><b><span style="color: #dd1e31;" class="mcFormatColor">Important!</span></b></span></span> When implementing the eBay Promotions API, partners are required to surface links to eBay's promotion terms and conditions for sellers before allowing sellers to activate the promotions. The link should remain surfaced once the promotion has been activated. eBay will provide the relevant promotion link(s) and instructions. Additionally, Partners are required to ask sellers to take action to activate a promotion themselves.</p></div><br>This method can be used to activate a promotion on a seller's account.<br><br>The promotion to activate is specified through its <b>promotionHash</b> and <b>promotionId</b> fields. The values can be retrieved using the <a href="/api-docs/marketing-private/sell/marketing/resources/seller_promotional_offers/methods/getSellerPromotionalOffers" target="_blank ">getSellerPromotionalOffers</a> method.<br><br>If the call is successful, HTTP status code <b>200 OK</b> will be returned, and the promotion will be activated on the seller's account.
     * @param PromotionSignUpRequest $body This type defines the fields required to activate a specific promotion for a seller.
     * @param Activate_promotionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PromotionSignUpRequest $body, ?Activate_promotionRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Activate_promotionRequestBuilder
    */
    public function withUrl(string $rawUrl): Activate_promotionRequestBuilder {
        return new Activate_promotionRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
