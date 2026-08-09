<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsDelete403Response extends JsonSerializableType
{
    /**
     * @var DocumentsDelete403ResponseError $error
     */
    #[JsonProperty('error')]
    public DocumentsDelete403ResponseError $error;

    /**
     * @param array{
     *   error: DocumentsDelete403ResponseError,
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
