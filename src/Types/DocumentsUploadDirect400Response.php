<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsUploadDirect400Response extends JsonSerializableType
{
    /**
     * @var DocumentsUploadDirect400ResponseError $error
     */
    #[JsonProperty('error')]
    public DocumentsUploadDirect400ResponseError $error;

    /**
     * @param array{
     *   error: DocumentsUploadDirect400ResponseError,
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
