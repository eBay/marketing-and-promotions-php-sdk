<?php

namespace EBay\MarketingAndPromotions\Configuration;

final class MarketingAndPromotionsConfiguration
{
    public string $marketingBaseUrl      = 'https://api.ebay.com/sell/marketing/v1';
    public string $recommendationBaseUrl = 'https://api.ebay.com/sell/recommendation/v1';

    /** Static fallback; per-call token takes precedence. */
    public ?string $accessToken = null;

    public bool $diagnosticLogging = false;

    public RequestOptions $defaultRequestOptions;

    public function __construct()
    {
        $this->defaultRequestOptions = new RequestOptions();
    }

    /** Hostnames tokens may be sent to — passed to AllowedHostsValidator. */
    public function getAllowedHosts(): array
    {
        return array_unique(array_map(
            fn(string $url) => parse_url($url, PHP_URL_HOST),
            [$this->marketingBaseUrl, $this->recommendationBaseUrl]
        ));
    }
}
