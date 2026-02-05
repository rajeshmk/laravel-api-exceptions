<?php

declare(strict_types=1);

namespace Hatchyu\ApiExceptions\General;

/**
 * (422 Unprocessable Entity): Indicates that the document
 * upload could not be processed.
 *
 * @deprecated use FileUploadException instead
 */
class DocumentUploadException extends FileUploadException
{
    public static function forReason(string $reason): self
    {
        return new self($reason);
    }

    public static function for(string $filename): self
    {
        return self::forFile($filename);
    }

    public static function forFile(string $filename): self
    {
        return new self(__('api-exceptions::messages.document_upload_failed', [
            'file' => $filename,
        ]));
    }
}
