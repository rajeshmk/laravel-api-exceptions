<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\General;

use Hatchyu\ApiExceptions\Http\NotFoundException;

/**
 * (404 Not Found): Indicates that a country could not
 * be found for the provided ISO code.
 */
class CountryIsoCodeNotFoundException extends NotFoundException
{
    private string $isoCode;

    public function __construct(string $isoCode)
    {
        $this->isoCode = $isoCode;

        $message = __('api-exceptions::messages.country_not_found_for_iso', [
            'iso_code' => $isoCode,
        ]);

        parent::__construct($message);
    }

    public static function forIsoCode(string $isoCode): self
    {
        return new self($isoCode);
    }

    public static function for(string $isoCode): self
    {
        return self::forIsoCode($isoCode);
    }

    /**
     * Get the ISO code that was used in the lookup.
     */
    public function getIsoCode(): string
    {
        return $this->isoCode;
    }
}
