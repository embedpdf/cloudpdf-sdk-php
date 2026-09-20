<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocPagesViewports200ResponseItemMeasureRlSlopeItem extends JsonSerializableType
{
    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var ?float $conversion
     */
    #[JsonProperty('conversion')]
    public ?float $conversion;

    /**
     * @var ?value-of<DocPagesViewports200ResponseItemMeasureRlSlopeItemFraction> $fraction
     */
    #[JsonProperty('fraction')]
    public ?string $fraction;

    /**
     * @var ?int $precision
     */
    #[JsonProperty('precision')]
    public ?int $precision;

    /**
     * @var ?bool $fixed
     */
    #[JsonProperty('fixed')]
    public ?bool $fixed;

    /**
     * @var ?string $thousands
     */
    #[JsonProperty('thousands')]
    public ?string $thousands;

    /**
     * @var ?string $decimal
     */
    #[JsonProperty('decimal')]
    public ?string $decimal;

    /**
     * @var ?string $prefixSpacing
     */
    #[JsonProperty('prefixSpacing')]
    public ?string $prefixSpacing;

    /**
     * @var ?string $suffixSpacing
     */
    #[JsonProperty('suffixSpacing')]
    public ?string $suffixSpacing;

    /**
     * @var ?value-of<DocPagesViewports200ResponseItemMeasureRlSlopeItemLabelPosition> $labelPosition
     */
    #[JsonProperty('labelPosition')]
    public ?string $labelPosition;

    /**
     * @param array{
     *   unit: string,
     *   conversion?: ?float,
     *   fraction?: ?value-of<DocPagesViewports200ResponseItemMeasureRlSlopeItemFraction>,
     *   precision?: ?int,
     *   fixed?: ?bool,
     *   thousands?: ?string,
     *   decimal?: ?string,
     *   prefixSpacing?: ?string,
     *   suffixSpacing?: ?string,
     *   labelPosition?: ?value-of<DocPagesViewports200ResponseItemMeasureRlSlopeItemLabelPosition>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->unit = $values['unit'];
        $this->conversion = $values['conversion'] ?? null;
        $this->fraction = $values['fraction'] ?? null;
        $this->precision = $values['precision'] ?? null;
        $this->fixed = $values['fixed'] ?? null;
        $this->thousands = $values['thousands'] ?? null;
        $this->decimal = $values['decimal'] ?? null;
        $this->prefixSpacing = $values['prefixSpacing'] ?? null;
        $this->suffixSpacing = $values['suffixSpacing'] ?? null;
        $this->labelPosition = $values['labelPosition'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
