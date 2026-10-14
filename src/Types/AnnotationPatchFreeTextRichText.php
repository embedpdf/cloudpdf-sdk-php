<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class AnnotationPatchFreeTextRichText extends JsonSerializableType
{
    /**
     * @var ?AnnotationPatchFreeTextRichTextBody $body
     */
    #[JsonProperty('body')]
    public ?AnnotationPatchFreeTextRichTextBody $body;

    /**
     * @var array<AnnotationPatchFreeTextRichTextParagraphsItem> $paragraphs
     */
    #[JsonProperty('paragraphs'), ArrayType([AnnotationPatchFreeTextRichTextParagraphsItem::class])]
    public array $paragraphs;

    /**
     * @param array{
     *   paragraphs: array<AnnotationPatchFreeTextRichTextParagraphsItem>,
     *   body?: ?AnnotationPatchFreeTextRichTextBody,
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
