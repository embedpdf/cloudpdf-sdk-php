<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class AnnotationDraftFreeTextRichText extends JsonSerializableType
{
    /**
     * @var ?AnnotationDraftFreeTextRichTextBody $body
     */
    #[JsonProperty('body')]
    public ?AnnotationDraftFreeTextRichTextBody $body;

    /**
     * @var array<AnnotationDraftFreeTextRichTextParagraphsItem> $paragraphs
     */
    #[JsonProperty('paragraphs'), ArrayType([AnnotationDraftFreeTextRichTextParagraphsItem::class])]
    public array $paragraphs;

    /**
     * @param array{
     *   paragraphs: array<AnnotationDraftFreeTextRichTextParagraphsItem>,
     *   body?: ?AnnotationDraftFreeTextRichTextBody,
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
