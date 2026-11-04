<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class RichTextDocumentInput extends JsonSerializableType
{
    /**
     * @var ?RichTextDocumentInputBody $body
     */
    #[JsonProperty('body')]
    public ?RichTextDocumentInputBody $body;

    /**
     * @var array<RichTextDocumentInputParagraphsItem> $paragraphs
     */
    #[JsonProperty('paragraphs'), ArrayType([RichTextDocumentInputParagraphsItem::class])]
    public array $paragraphs;

    /**
     * @param array{
     *   paragraphs: array<RichTextDocumentInputParagraphsItem>,
     *   body?: ?RichTextDocumentInputBody,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'] ?? null;
        $this->paragraphs = $values['paragraphs'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
