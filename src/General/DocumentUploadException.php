<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\General;

use Hatchyu\ApiExceptions\Http\UnprocessableEntityException;

/**
 * (422 Unprocessable Entity): Indicates that the document
 * upload could not be processed.
 */
class DocumentUploadException extends UnprocessableEntityException
{
    public static function forReason(string $reason): self
    {
        return new self($reason);
    }

    public static function forFile(string $filename): self
    {
        return new self("Document upload failed for {$filename}.");
    }
}
