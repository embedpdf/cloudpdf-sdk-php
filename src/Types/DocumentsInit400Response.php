<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsInit400Response extends JsonSerializableType
{
    /**
     * @var DocumentsInit400ResponseError $error
     */
    #[JsonProperty('error')]
    public DocumentsInit400ResponseError $error;

    /**
     * @param array{
     *   error: DocumentsInit400ResponseError,
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
