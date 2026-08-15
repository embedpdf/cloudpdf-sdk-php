<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsUploadProxy409Response extends JsonSerializableType
{
    /**
     * @var DocumentsUploadProxy409ResponseError $error
     */
    #[JsonProperty('error')]
    public DocumentsUploadProxy409ResponseError $error;

    /**
     * @param array{
     *   error: DocumentsUploadProxy409ResponseError,
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
