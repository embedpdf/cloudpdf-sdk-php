<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsImportFrom403Response extends JsonSerializableType
{
    /**
     * @var DocumentsImportFrom403ResponseError $error
     */
    #[JsonProperty('error')]
    public DocumentsImportFrom403ResponseError $error;

    /**
     * @param array{
     *   error: DocumentsImportFrom403ResponseError,
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
