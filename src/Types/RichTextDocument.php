<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class RichTextDocument extends JsonSerializableType
{
    /**
     * @var RichTextDocumentBody $body
     */
    #[JsonProperty('body')]
    public RichTextDocumentBody $body;

    /**
     * @var array<RichTextDocumentParagraphsItem> $paragraphs
     */
    #[JsonProperty('paragraphs'), ArrayType([RichTextDocumentParagraphsItem::class])]
    public array $paragraphs;

    /**
     * @param array{
     *   body: RichTextDocumentBody,
     *   paragraphs: array<RichTextDocumentParagraphsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->body = $values['body'];
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
