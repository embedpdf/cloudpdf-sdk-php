<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsInit200ResponseCreated extends JsonSerializableType
{
    /**
     * @var DocumentsInit200ResponseCreatedDocument $document
     */
    #[JsonProperty('document')]
    public DocumentsInit200ResponseCreatedDocument $document;

    /**
     * @var DocumentsInit200ResponseCreatedUpload $upload
     */
    #[JsonProperty('upload')]
    public DocumentsInit200ResponseCreatedUpload $upload;

    /**
     * @param array{
     *   document: DocumentsInit200ResponseCreatedDocument,
     *   upload: DocumentsInit200ResponseCreatedUpload,
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
