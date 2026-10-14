<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class AnnotationFreeTextRichText extends JsonSerializableType
{
    /**
     * @var AnnotationFreeTextRichTextBody $body
     */
    #[JsonProperty('body')]
    public AnnotationFreeTextRichTextBody $body;

    /**
     * @var array<AnnotationFreeTextRichTextParagraphsItem> $paragraphs
     */
    #[JsonProperty('paragraphs'), ArrayType([AnnotationFreeTextRichTextParagraphsItem::class])]
    public array $paragraphs;

    /**
     * @param array{
     *   body: AnnotationFreeTextRichTextBody,
     *   paragraphs: array<AnnotationFreeTextRichTextParagraphsItem>,
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
