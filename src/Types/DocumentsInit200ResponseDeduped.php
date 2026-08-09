<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsInit200ResponseDeduped extends JsonSerializableType
{
    /**
     * @var DocumentsInit200ResponseDedupedDocument $document
     */
    #[JsonProperty('document')]
    public DocumentsInit200ResponseDedupedDocument $document;

    /**
     * @param array{
     *   document: DocumentsInit200ResponseDedupedDocument,
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
