<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsInitResponseCreatedUploadPresigned extends JsonSerializableType
{
    /**
     * @var DocumentsInitResponseCreatedUploadPresignedPresigned $presigned
     */
    #[JsonProperty('presigned')]
    public DocumentsInitResponseCreatedUploadPresignedPresigned $presigned;

    /**
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @param array{
     *   presigned: DocumentsInitResponseCreatedUploadPresignedPresigned,
     *   key: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->presigned = $values['presigned'];
        $this->key = $values['key'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
