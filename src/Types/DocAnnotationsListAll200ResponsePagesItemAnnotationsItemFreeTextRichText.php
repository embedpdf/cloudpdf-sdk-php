<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichText extends JsonSerializableType
{
    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextBody $body
     */
    #[JsonProperty('body')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextBody $body;

    /**
     * @var array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextParagraphsItem> $paragraphs
     */
    #[JsonProperty('paragraphs'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextParagraphsItem::class])]
    public array $paragraphs;

    /**
     * @param array{
     *   body: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextBody,
     *   paragraphs: array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRichTextParagraphsItem>,
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
