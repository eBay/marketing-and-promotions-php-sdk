<?php

namespace EBay\MarketingAndPromotions\Generated\Marketing\Promotion\Item;

use EBay\MarketingAndPromotions\Generated\Marketing\Promotion\Item\Get_listing_set\Get_listing_setRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Promotion\Item\Pause\PauseRequestBuilder;
use EBay\MarketingAndPromotions\Generated\Marketing\Promotion\Item\Resume\ResumeRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /promotion/{promotion_id}
*/
class WithPromotion_ItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The get_listing_set property
    */
    public function get_listing_set(): Get_listing_setRequestBuilder {
        return new Get_listing_setRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The pause property
    */
    public function pause(): PauseRequestBuilder {
        return new PauseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The resume property
    */
    public function resume(): ResumeRequestBuilder {
        return new ResumeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithPromotion_ItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/promotion/{promotion_id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
