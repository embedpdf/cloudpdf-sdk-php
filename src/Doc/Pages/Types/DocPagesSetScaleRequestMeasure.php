<?php

namespace CloudPDF\Doc\Pages\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocPagesSetScaleRequestMeasure extends JsonSerializableType
{
    /**
     * @var value-of<DocPagesSetScaleRequestMeasureSubtype> $subtype
     */
    #[JsonProperty('subtype')]
    public string $subtype;

    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<DocPagesSetScaleRequestMeasureXItem> $x
     */
    #[JsonProperty('x'), ArrayType([DocPagesSetScaleRequestMeasureXItem::class])]
    public array $x;

    /**
     * @var ?array<DocPagesSetScaleRequestMeasureYItem> $y
     */
    #[JsonProperty('y'), ArrayType([DocPagesSetScaleRequestMeasureYItem::class])]
    public ?array $y;

    /**
     * @var array<DocPagesSetScaleRequestMeasureDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([DocPagesSetScaleRequestMeasureDistanceItem::class])]
    public array $distance;

    /**
     * @var array<DocPagesSetScaleRequestMeasureAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([DocPagesSetScaleRequestMeasureAreaItem::class])]
    public array $area;

    /**
     * @var ?array<DocPagesSetScaleRequestMeasureAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([DocPagesSetScaleRequestMeasureAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<DocPagesSetScaleRequestMeasureSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([DocPagesSetScaleRequestMeasureSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?DocPagesSetScaleRequestMeasureOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?DocPagesSetScaleRequestMeasureOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   subtype: value-of<DocPagesSetScaleRequestMeasureSubtype>,
     *   x: array<DocPagesSetScaleRequestMeasureXItem>,
     *   distance: array<DocPagesSetScaleRequestMeasureDistanceItem>,
     *   area: array<DocPagesSetScaleRequestMeasureAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<DocPagesSetScaleRequestMeasureYItem>,
     *   angle?: ?array<DocPagesSetScaleRequestMeasureAngleItem>,
     *   slope?: ?array<DocPagesSetScaleRequestMeasureSlopeItem>,
     *   origin?: ?DocPagesSetScaleRequestMeasureOrigin,
     *   cyx?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->subtype = $values['subtype'];
        $this->ratio = $values['ratio'] ?? null;
        $this->x = $values['x'];
        $this->y = $values['y'] ?? null;
        $this->distance = $values['distance'];
        $this->area = $values['area'];
        $this->angle = $values['angle'] ?? null;
        $this->slope = $values['slope'] ?? null;
        $this->origin = $values['origin'] ?? null;
        $this->cyx = $values['cyx'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
