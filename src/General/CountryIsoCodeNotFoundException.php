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
    public function __construct(string $isoCode)
    {
        $message = "Country not found for ISO code {$isoCode}.";

        parent::__construct($message);
    }

    public static function forIsoCode(string $isoCode): self
    {
        return new self($isoCode);
    }
}
