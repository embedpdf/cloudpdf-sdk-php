<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsGet403Response extends JsonSerializableType
{
    /**
     * @var DocumentsGet403ResponseError $error
     */
    #[JsonProperty('error')]
    public DocumentsGet403ResponseError $error;

    /**
     * @param array{
     *   error: DocumentsGet403ResponseError,
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
