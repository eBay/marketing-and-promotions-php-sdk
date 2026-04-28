<?php

namespace EBay\MarketingAndPromotions\Generated\Recommendation\Find;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FindRequestBuilderPostRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FindRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public ?FindRequestBuilderPostQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FindRequestBuilderPostRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FindRequestBuilderPostQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FindRequestBuilderPostQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FindRequestBuilderPostQueryParameters.
     * @param string|null $filter Provide a list of key-value pairs to specify the criteria you want to use to filter the response.  <br><br>In the list, separate each filter key from its associated value with a colon ("<code>:</code>").  <br><br>Currently, the only supported filter value is <b>recommendationTypes</b> and it supports only the ("<code>AD</code>") type. Follow the <b>recommendationTypes</b> specifier with the filter type(s) enclosed in curly braces ("<code>{ }</code>"), and separate multiple types with commas.  <br><br><b>Example:</b> <code>filter=recommendationTypes:{AD}</code>  <br><br><b>Default:</b> <code>recommendationTypes:{AD}</code>
     * @param string|null $limit Use this query parameter to set the maximum number of ads to return on a page from the paginated response.  <br><br><b>Default: </b>10 <br><b>Maximum:</b> 500
     * @param string|null $offset Specifies the number of ads to skip in the result set before returning the first ad in the paginated response.  <p>Combine <b>offset</b> with the <b>limit</b> query parameter to control the items returned in the response. For example, if you supply an <b>offset</b> of <code>0</code> and a <b>limit</b> of <code>10</code>, the first page of the response contains the first 10 items from the complete list of items retrieved by the call. If <b>offset</b> is <code>10</code> and <b>limit</b> is <code>20</code>, the first page of the response contains items 11-30 from the complete result set.</p> <p><b>Default:</b> 0</p>
     * @return FindRequestBuilderPostQueryParameters
    */
    public static function createQueryParameters(?string $filter = null, ?string $limit = null, ?string $offset = null): FindRequestBuilderPostQueryParameters {
        return new FindRequestBuilderPostQueryParameters($filter, $limit, $offset);
    }

}
