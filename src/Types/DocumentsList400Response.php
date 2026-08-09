<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsList400Response extends JsonSerializableType
{
    /**
     * @var DocumentsList400ResponseError $error
     */
    #[JsonProperty('error')]
    public DocumentsList400ResponseError $error;

    /**
     * @param array{
     *   error: DocumentsList400ResponseError,
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
