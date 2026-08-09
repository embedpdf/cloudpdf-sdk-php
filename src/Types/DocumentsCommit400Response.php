<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsCommit400Response extends JsonSerializableType
{
    /**
     * @var DocumentsCommit400ResponseError $error
     */
    #[JsonProperty('error')]
    public DocumentsCommit400ResponseError $error;

    /**
     * @param array{
     *   error: DocumentsCommit400ResponseError,
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
