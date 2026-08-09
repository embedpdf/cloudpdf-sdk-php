<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsThumbnailResponse extends JsonSerializableType
{
    /**
     * @var DocumentsThumbnailResponseError $error
     */
    #[JsonProperty('error')]
    public DocumentsThumbnailResponseError $error;

    /**
     * @param array{
     *   error: DocumentsThumbnailResponseError,
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
