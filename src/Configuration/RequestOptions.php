<?php
declare(strict_types=1);

namespace EBay\MarketingAndPromotions\Configuration;

class RequestOptions
{
    /** @param array<string,string> $headers */
    public function __construct(public array $headers = []) {}
}
