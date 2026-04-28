<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Item\Create_ads_by_inventory_reference;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\AdReferences;
use EBay\MarketingAndPromotions\Generated\Marketing\Models\CreateAdsByInventoryReferenceRequest;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign/{campaign_id}/create_ads_by_inventory_reference
*/
class Create_ads_by_inventory_referenceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Create_ads_by_inventory_referenceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign/{campaign_id}/create_ads_by_inventory_reference');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method adds a listing that is managed with the <a href="/api-docs/sell/inventory/resources/methods" title="Inventory API Reference">Inventory API</a> to an existing Promoted Listings campaign.<br /><br />For general strategy campaigns using the Cost Per Sale (CPS) funding model, an ad may be directly created for the listing.<br /><br />For each listing specified in the request, this method:<br /><ul><li>Creates an ad for the listing.</li> <li>Sets the bid percentage (also known as the <i>ad rate</i>) for the ads created.</li> <li>Associates the created ad with the specified campaign.</li></ul><br />To create an ad for a listing, specify its <b>inventoryReferenceId</b> and <b>inventoryReferenceType</b>, plus the <b>bidPercentage</b> for the ad in the payload of the request. Specify the campaign to associate the ad with using the <b>campaign_id</b> path parameter.<br /><br /><span class="tablenote"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href="/api-docs/sell/static/marketing/pl-overview.html#funding-model">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span><br /><br />Use <a href="/api-docs/sell/marketing/resources/campaign/methods/createCampaign">createCampaign</a> to create a new campaign and use <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a> to get a list of existing campaigns.
     * @param CreateAdsByInventoryReferenceRequest $body This type defines the fields needed to create ads by inventory reference ID request.
     * @param Create_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AdReferences|null>
     * @throws Exception
    */
    public function post(CreateAdsByInventoryReferenceRequest $body, ?Create_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [AdReferences::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method adds a listing that is managed with the <a href="/api-docs/sell/inventory/resources/methods" title="Inventory API Reference">Inventory API</a> to an existing Promoted Listings campaign.<br /><br />For general strategy campaigns using the Cost Per Sale (CPS) funding model, an ad may be directly created for the listing.<br /><br />For each listing specified in the request, this method:<br /><ul><li>Creates an ad for the listing.</li> <li>Sets the bid percentage (also known as the <i>ad rate</i>) for the ads created.</li> <li>Associates the created ad with the specified campaign.</li></ul><br />To create an ad for a listing, specify its <b>inventoryReferenceId</b> and <b>inventoryReferenceType</b>, plus the <b>bidPercentage</b> for the ad in the payload of the request. Specify the campaign to associate the ad with using the <b>campaign_id</b> path parameter.<br /><br /><span class="tablenote"><b>Note:</b> This method only applies to the Cost Per Sale (CPS) funding model; it does not apply to the Cost Per Click (CPC) funding model. See <a href="/api-docs/sell/static/marketing/pl-overview.html#funding-model">Funding Models</a> in the <i>Promoted Listings Playbook</i> for more information.</span><br /><br />Use <a href="/api-docs/sell/marketing/resources/campaign/methods/createCampaign">createCampaign</a> to create a new campaign and use <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a> to get a list of existing campaigns.
     * @param CreateAdsByInventoryReferenceRequest $body This type defines the fields needed to create ads by inventory reference ID request.
     * @param Create_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateAdsByInventoryReferenceRequest $body, ?Create_ads_by_inventory_referenceRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return Create_ads_by_inventory_referenceRequestBuilder
    */
    public function withUrl(string $rawUrl): Create_ads_by_inventory_referenceRequestBuilder {
        return new Create_ads_by_inventory_referenceRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
