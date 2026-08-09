<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsInit200ResponseResumedUploadPresigned extends JsonSerializableType
{
    /**
     * @var DocumentsInit200ResponseResumedUploadPresignedPresigned $presigned
     */
    #[JsonProperty('presigned')]
    public DocumentsInit200ResponseResumedUploadPresignedPresigned $presigned;

    /**
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @param array{
     *   presigned: DocumentsInit200ResponseResumedUploadPresignedPresigned,
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
