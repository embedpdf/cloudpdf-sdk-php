<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsImportFrom200Response extends JsonSerializableType
{
    /**
     * @var value-of<DocumentsImportFrom200ResponseStatus> $status
     */
    #[JsonProperty('status')]
    public string $status;

    /**
     * @var DocumentsImportFrom200ResponseDocument $document
     */
    #[JsonProperty('document')]
    public DocumentsImportFrom200ResponseDocument $document;

    /**
     * @param array{
     *   status: value-of<DocumentsImportFrom200ResponseStatus>,
     *   document: DocumentsImportFrom200ResponseDocument,
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
