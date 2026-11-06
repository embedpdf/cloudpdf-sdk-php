<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsImportFrom202Response extends JsonSerializableType
{
    /**
     * @var value-of<DocumentsImportFrom202ResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var DocumentsImportFrom202ResponseDocument $document
     */
    #[JsonProperty('document')]
    public DocumentsImportFrom202ResponseDocument $document;

    /**
     * @param array{
     *   status: value-of<DocumentsImportFrom202ResponseStatus>,
     *   document: DocumentsImportFrom202ResponseDocument,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->document = $values['document'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
