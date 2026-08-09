<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsGet200Response extends JsonSerializableType
{
    /**
     * @var DocumentsGet200ResponseDocument $document
     */
    #[JsonProperty('document')]
    public DocumentsGet200ResponseDocument $document;

    /**
     * @param array{
     *   document: DocumentsGet200ResponseDocument,
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
