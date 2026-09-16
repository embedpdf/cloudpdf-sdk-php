<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsList200ResponseAnnotationsItemFreeTextRichText extends JsonSerializableType
{
    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextBody $body
     */
    #[JsonProperty('body')]
    public DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextBody $body;

    /**
     * @var array<DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItem> $paragraphs
     */
    #[JsonProperty('paragraphs'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItem::class])]
    public array $paragraphs;

    /**
     * @param array{
     *   body: DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextBody,
     *   paragraphs: array<DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItem>,
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
