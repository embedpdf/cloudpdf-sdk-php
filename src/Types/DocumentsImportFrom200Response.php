<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsImportFrom200Response extends JsonSerializableType
{
    /**
     * @var value-of<DocumentsImportFrom200ResponseTag> $tag
     */
    #[JsonProperty('tag')]
    public string $tag;

    /**
     * @var DocumentsImportFrom200ResponseDocument $document
     */
    #[JsonProperty('document')]
    public DocumentsImportFrom200ResponseDocument $document;

    /**
     * @param array{
     *   tag: value-of<DocumentsImportFrom200ResponseTag>,
     *   document: DocumentsImportFrom200ResponseDocument,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->tag = $values['tag'];
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
