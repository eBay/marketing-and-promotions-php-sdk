<?php

namespace EBay\MarketingAndPromotions\Configuration;

final class MarketingAndPromotionsConfiguration
{
    public string $marketingBaseUrl      = 'https://api.ebay.com';
    public string $recommendationBaseUrl = 'https://api.ebay.com';

    /** Static fallback; per-call token takes precedence. */
    public ?string $accessToken = null;

    public bool $diagnosticLogging = false;

    /** Hostnames tokens may be sent to — passed to AllowedHostsValidator. */
    public function getAllowedHosts(): array
    {
        return array_unique(array_map(
            fn(string $url) => parse_url($url, PHP_URL_HOST),
            [$this->marketingBaseUrl, $this->recommendationBaseUrl]
        ));
    }
}
