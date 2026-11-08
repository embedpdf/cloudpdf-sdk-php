<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeOpPagesSetScaleMeasure extends JsonSerializableType
{
    /**
     * @var value-of<ChangeOpPagesSetScaleMeasureSubtype> $subtype
     */
    #[JsonProperty('subtype')]
    public string $subtype;

    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<ChangeOpPagesSetScaleMeasureXItem> $x
     */
    #[JsonProperty('x'), ArrayType([ChangeOpPagesSetScaleMeasureXItem::class])]
    public array $x;

    /**
     * @var ?array<ChangeOpPagesSetScaleMeasureYItem> $y
     */
    #[JsonProperty('y'), ArrayType([ChangeOpPagesSetScaleMeasureYItem::class])]
    public ?array $y;

    /**
     * @var array<ChangeOpPagesSetScaleMeasureDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([ChangeOpPagesSetScaleMeasureDistanceItem::class])]
    public array $distance;

    /**
     * @var array<ChangeOpPagesSetScaleMeasureAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([ChangeOpPagesSetScaleMeasureAreaItem::class])]
    public array $area;

    /**
     * @var ?array<ChangeOpPagesSetScaleMeasureAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([ChangeOpPagesSetScaleMeasureAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<ChangeOpPagesSetScaleMeasureSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([ChangeOpPagesSetScaleMeasureSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?ChangeOpPagesSetScaleMeasureOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?ChangeOpPagesSetScaleMeasureOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   subtype: value-of<ChangeOpPagesSetScaleMeasureSubtype>,
     *   x: array<ChangeOpPagesSetScaleMeasureXItem>,
     *   distance: array<ChangeOpPagesSetScaleMeasureDistanceItem>,
     *   area: array<ChangeOpPagesSetScaleMeasureAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<ChangeOpPagesSetScaleMeasureYItem>,
     *   angle?: ?array<ChangeOpPagesSetScaleMeasureAngleItem>,
     *   slope?: ?array<ChangeOpPagesSetScaleMeasureSlopeItem>,
     *   origin?: ?ChangeOpPagesSetScaleMeasureOrigin,
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
