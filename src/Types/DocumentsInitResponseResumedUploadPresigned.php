<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsInitResponseResumedUploadPresigned extends JsonSerializableType
{
    /**
     * @var DocumentsInitResponseResumedUploadPresignedPresigned $presigned
     */
    #[JsonProperty('presigned')]
    public DocumentsInitResponseResumedUploadPresignedPresigned $presigned;

    /**
     * @var string $key
     */
    #[JsonProperty('key')]
    public string $key;

    /**
     * @param array{
     *   presigned: DocumentsInitResponseResumedUploadPresignedPresigned,
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
