<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsInit200ResponseResumed extends JsonSerializableType
{
    /**
     * @var DocumentsInit200ResponseResumedDocument $document
     */
    #[JsonProperty('document')]
    public DocumentsInit200ResponseResumedDocument $document;

    /**
     * @var DocumentsInit200ResponseResumedUpload $upload
     */
    #[JsonProperty('upload')]
    public DocumentsInit200ResponseResumedUpload $upload;

    /**
     * @param array{
     *   document: DocumentsInit200ResponseResumedDocument,
     *   upload: DocumentsInit200ResponseResumedUpload,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->document = $values['document'];
        $this->upload = $values['upload'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
