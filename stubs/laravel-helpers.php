<?php

/**
 * IDE support stubs for Laravel helper functions.
 *
 * These functions exist only for static analysis and editor tooling. The
 * application uses Laravel's runtime implementations instead of these stubs.
 */
declare(strict_types=1);

if (! function_exists('__')) {
    /**
     * @param string               $key
     * @param array<string, mixed> $replace
     * @param string|null          $locale
     */
    function __($key, $replace = [], $locale = null): string
    {
        // Stub return to satisfy static analysis.
        return (string) $key;
    }
}
