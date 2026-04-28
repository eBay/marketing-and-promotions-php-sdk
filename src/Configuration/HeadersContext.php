<?php

namespace EBay\MarketingAndPromotions\Configuration;

/**
 * Thread-local storage for per-request headers, mirroring the pattern of TokenContext.
 * The facade injects a Guzzle middleware that reads from this context on every request.
 */
final class HeadersContext
{
    /** @var array<string,string> */
    private static array $current = [];

    /** @param array<string,string> $headers */
    public static function set(array $headers): void
    {
        self::$current = $headers;
    }

    /** @return array<string,string> */
    public static function get(): array
    {
        return self::$current;
    }

    public static function clear(): void
    {
        self::$current = [];
    }
}
