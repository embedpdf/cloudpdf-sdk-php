<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsImportFrom502Response extends JsonSerializableType
{
    /**
     * @var DocumentsImportFrom502ResponseError $error
     */
    #[JsonProperty('error')]
    public DocumentsImportFrom502ResponseError $error;

    /**
     * @param array{
     *   error: DocumentsImportFrom502ResponseError,
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
