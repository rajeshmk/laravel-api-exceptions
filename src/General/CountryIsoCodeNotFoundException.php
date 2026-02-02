<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\General;

use Hatchyu\ApiExceptions\Http\NotFoundException;

class CountryIsoCodeNotFoundException extends NotFoundException
{
    public function __construct(string $isoCode)
    {
        // @TODO - Send an email to the admin user informing that the requested country does not exist.

        $message = "Country not found for ISO code {$isoCode}.";

        parent::__construct($message);
    }
}
