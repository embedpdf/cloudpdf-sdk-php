<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsInitResponseCreated extends JsonSerializableType
{
    /**
     * @var DocumentsInitResponseCreatedDocument $document
     */
    #[JsonProperty('document')]
    public DocumentsInitResponseCreatedDocument $document;

    /**
     * @var DocumentsInitResponseCreatedUpload $upload
     */
    #[JsonProperty('upload')]
    public DocumentsInitResponseCreatedUpload $upload;

    /**
     * @param array{
     *   document: DocumentsInitResponseCreatedDocument,
     *   upload: DocumentsInitResponseCreatedUpload,
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
