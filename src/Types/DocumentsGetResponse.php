<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsGetResponse extends JsonSerializableType
{
    /**
     * @var DocumentsGetResponseDocument $document
     */
    #[JsonProperty('document')]
    public DocumentsGetResponseDocument $document;

    /**
     * @param array{
     *   document: DocumentsGetResponseDocument,
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
