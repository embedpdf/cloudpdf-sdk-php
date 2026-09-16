<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItemRunsItemStyle extends JsonSerializableType
{
    /**
     * @var ?string $family
     */
    #[JsonProperty('family')]
    public ?string $family;

    /**
     * @var ?int $weight
     */
    #[JsonProperty('weight')]
    public ?int $weight;

    /**
     * @var ?bool $italic
     */
    #[JsonProperty('italic')]
    public ?bool $italic;

    /**
     * @var ?float $size
     */
    #[JsonProperty('size')]
    public ?float $size;

    /**
     * @var ?string $color
     */
    #[JsonProperty('color')]
    public ?string $color;

    /**
     * @var ?array<value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItemRunsItemStyleDecorationItem>> $decoration
     */
    #[JsonProperty('decoration'), ArrayType(['string'])]
    public ?array $decoration;

    /**
     * @var ?value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItemRunsItemStyleScript> $script
     */
    #[JsonProperty('script')]
    public ?string $script;

    /**
     * @var ?float $letterSpacing
     */
    #[JsonProperty('letterSpacing')]
    public ?float $letterSpacing;

    /**
     * @var ?float $horizontalScale
     */
    #[JsonProperty('horizontalScale')]
    public ?float $horizontalScale;

    /**
     * @var ?string $unknown
     */
    #[JsonProperty('unknown')]
    public ?string $unknown;

    /**
     * @param array{
     *   family?: ?string,
     *   weight?: ?int,
     *   italic?: ?bool,
     *   size?: ?float,
     *   color?: ?string,
     *   decoration?: ?array<value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItemRunsItemStyleDecorationItem>>,
     *   script?: ?value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextRichTextParagraphsItemRunsItemStyleScript>,
     *   letterSpacing?: ?float,
     *   horizontalScale?: ?float,
     *   unknown?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->family = $values['family'] ?? null;
        $this->weight = $values['weight'] ?? null;
        $this->italic = $values['italic'] ?? null;
        $this->size = $values['size'] ?? null;
        $this->color = $values['color'] ?? null;
        $this->decoration = $values['decoration'] ?? null;
        $this->script = $values['script'] ?? null;
        $this->letterSpacing = $values['letterSpacing'] ?? null;
        $this->horizontalScale = $values['horizontalScale'] ?? null;
        $this->unknown = $values['unknown'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
