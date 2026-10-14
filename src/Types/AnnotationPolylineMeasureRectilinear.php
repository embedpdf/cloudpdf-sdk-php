<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class AnnotationPolylineMeasureRectilinear extends JsonSerializableType
{
    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<AnnotationPolylineMeasureRectilinearXItem> $x
     */
    #[JsonProperty('x'), ArrayType([AnnotationPolylineMeasureRectilinearXItem::class])]
    public array $x;

    /**
     * @var ?array<AnnotationPolylineMeasureRectilinearYItem> $y
     */
    #[JsonProperty('y'), ArrayType([AnnotationPolylineMeasureRectilinearYItem::class])]
    public ?array $y;

    /**
     * @var array<AnnotationPolylineMeasureRectilinearDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([AnnotationPolylineMeasureRectilinearDistanceItem::class])]
    public array $distance;

    /**
     * @var array<AnnotationPolylineMeasureRectilinearAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([AnnotationPolylineMeasureRectilinearAreaItem::class])]
    public array $area;

    /**
     * @var ?array<AnnotationPolylineMeasureRectilinearAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([AnnotationPolylineMeasureRectilinearAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<AnnotationPolylineMeasureRectilinearSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([AnnotationPolylineMeasureRectilinearSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?AnnotationPolylineMeasureRectilinearOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?AnnotationPolylineMeasureRectilinearOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   x: array<AnnotationPolylineMeasureRectilinearXItem>,
     *   distance: array<AnnotationPolylineMeasureRectilinearDistanceItem>,
     *   area: array<AnnotationPolylineMeasureRectilinearAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<AnnotationPolylineMeasureRectilinearYItem>,
     *   angle?: ?array<AnnotationPolylineMeasureRectilinearAngleItem>,
     *   slope?: ?array<AnnotationPolylineMeasureRectilinearSlopeItem>,
     *   origin?: ?AnnotationPolylineMeasureRectilinearOrigin,
     *   cyx?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
