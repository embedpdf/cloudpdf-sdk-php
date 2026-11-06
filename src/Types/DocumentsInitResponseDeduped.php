<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsInitResponseDeduped extends JsonSerializableType
{
    /**
     * @var DocumentsInitResponseDedupedDocument $document
     */
    #[JsonProperty('document')]
    public DocumentsInitResponseDedupedDocument $document;

    /**
     * @param array{
     *   document: DocumentsInitResponseDedupedDocument,
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
