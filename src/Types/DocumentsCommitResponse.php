<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsCommitResponse extends JsonSerializableType
{
    /**
     * @var DocumentsCommitResponseDocument $document
     */
    #[JsonProperty('document')]
    public DocumentsCommitResponseDocument $document;

    /**
     * @param array{
     *   document: DocumentsCommitResponseDocument,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
