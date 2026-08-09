<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsDownload403Response extends JsonSerializableType
{
    /**
     * @var DocumentsDownload403ResponseError $error
     */
    #[JsonProperty('error')]
    public DocumentsDownload403ResponseError $error;

    /**
     * @param array{
     *   error: DocumentsDownload403ResponseError,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->error = $values['error'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
