<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsInit200ResponseCreatedUploadPresigned extends JsonSerializableType
{
    /**
     * @var DocumentsInit200ResponseCreatedUploadPresignedPresigned $presigned
     */
    #[JsonProperty('presigned')]
    public DocumentsInit200ResponseCreatedUploadPresignedPresigned $presigned;

    /**
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @param array{
     *   presigned: DocumentsInit200ResponseCreatedUploadPresignedPresigned,
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
