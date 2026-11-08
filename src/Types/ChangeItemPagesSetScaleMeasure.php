<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemPagesSetScaleMeasure extends JsonSerializableType
{
    /**
     * @var value-of<ChangeItemPagesSetScaleMeasureSubtype> $subtype
     */
    #[JsonProperty('subtype')]
    public string $subtype;

    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<ChangeItemPagesSetScaleMeasureXItem> $x
     */
    #[JsonProperty('x'), ArrayType([ChangeItemPagesSetScaleMeasureXItem::class])]
    public array $x;

    /**
     * @var ?array<ChangeItemPagesSetScaleMeasureYItem> $y
     */
    #[JsonProperty('y'), ArrayType([ChangeItemPagesSetScaleMeasureYItem::class])]
    public ?array $y;

    /**
     * @var array<ChangeItemPagesSetScaleMeasureDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([ChangeItemPagesSetScaleMeasureDistanceItem::class])]
    public array $distance;

    /**
     * @var array<ChangeItemPagesSetScaleMeasureAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([ChangeItemPagesSetScaleMeasureAreaItem::class])]
    public array $area;

    /**
     * @var ?array<ChangeItemPagesSetScaleMeasureAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([ChangeItemPagesSetScaleMeasureAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<ChangeItemPagesSetScaleMeasureSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([ChangeItemPagesSetScaleMeasureSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?ChangeItemPagesSetScaleMeasureOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?ChangeItemPagesSetScaleMeasureOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   subtype: value-of<ChangeItemPagesSetScaleMeasureSubtype>,
     *   x: array<ChangeItemPagesSetScaleMeasureXItem>,
     *   distance: array<ChangeItemPagesSetScaleMeasureDistanceItem>,
     *   area: array<ChangeItemPagesSetScaleMeasureAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<ChangeItemPagesSetScaleMeasureYItem>,
     *   angle?: ?array<ChangeItemPagesSetScaleMeasureAngleItem>,
     *   slope?: ?array<ChangeItemPagesSetScaleMeasureSlopeItem>,
     *   origin?: ?ChangeItemPagesSetScaleMeasureOrigin,
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
