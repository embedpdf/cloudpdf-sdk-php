<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsInitResponseResumed extends JsonSerializableType
{
    /**
     * @var DocumentsInitResponseResumedDocument $document
     */
    #[JsonProperty('document')]
    public DocumentsInitResponseResumedDocument $document;

    /**
     * @var DocumentsInitResponseResumedUpload $upload
     */
    #[JsonProperty('upload')]
    public DocumentsInitResponseResumedUpload $upload;

    /**
     * @param array{
     *   document: DocumentsInitResponseResumedDocument,
     *   upload: DocumentsInitResponseResumedUpload,
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
