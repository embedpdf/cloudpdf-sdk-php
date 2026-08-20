<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsImportFrom202Response extends JsonSerializableType
{
    /**
     * @var value-of<DocumentsImportFrom202ResponseTag> $tag
     */
    #[JsonProperty('tag')]
    public string $tag;

    /**
     * @var DocumentsImportFrom202ResponseDocument $document
     */
    #[JsonProperty('document')]
    public DocumentsImportFrom202ResponseDocument $document;

    /**
     * @param array{
     *   tag: value-of<DocumentsImportFrom202ResponseTag>,
     *   document: DocumentsImportFrom202ResponseDocument,
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
