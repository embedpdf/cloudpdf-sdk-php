<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsUploadProxy400Response extends JsonSerializableType
{
    /**
     * @var DocumentsUploadProxy400ResponseError $error
     */
    #[JsonProperty('error')]
    public DocumentsUploadProxy400ResponseError $error;

    /**
     * @param array{
     *   error: DocumentsUploadProxy400ResponseError,
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
