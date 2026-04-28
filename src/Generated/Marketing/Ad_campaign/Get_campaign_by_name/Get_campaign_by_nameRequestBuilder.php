<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Ad_campaign\Get_campaign_by_name;

use EBay\MarketingAndPromotions\Generated\Marketing\Models\Campaign;
use Exception;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /ad_campaign/get_campaign_by_name
*/
class Get_campaign_by_nameRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new Get_campaign_by_nameRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/ad_campaign/get_campaign_by_name?campaign_name={campaign_name}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This method retrieves the details of a single campaign, as specified with the <b>campaign_name</b> query parameter. Note that the campaign name you specify must be an exact, case-sensitive match of the name of the campaign you want to retrieve.</p><p>Call <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a> to retrieve a list of the seller's campaign names.</p>
     * @param Get_campaign_by_nameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Campaign|null>
     * @throws Exception
    */
    public function get(?Get_campaign_by_nameRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Campaign::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * This method retrieves the details of a single campaign, as specified with the <b>campaign_name</b> query parameter. Note that the campaign name you specify must be an exact, case-sensitive match of the name of the campaign you want to retrieve.</p><p>Call <a href="/api-docs/sell/marketing/resources/campaign/methods/getCampaigns">getCampaigns</a> to retrieve a list of the seller's campaign names.</p>
     * @param Get_campaign_by_nameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?Get_campaign_by_nameRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return Get_campaign_by_nameRequestBuilder
    */
    public function withUrl(string $rawUrl): Get_campaign_by_nameRequestBuilder {
        return new Get_campaign_by_nameRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
