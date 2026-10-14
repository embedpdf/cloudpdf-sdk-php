<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class AnnotationPolygonMeasureRectilinear extends JsonSerializableType
{
    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<AnnotationPolygonMeasureRectilinearXItem> $x
     */
    #[JsonProperty('x'), ArrayType([AnnotationPolygonMeasureRectilinearXItem::class])]
    public array $x;

    /**
     * @var ?array<AnnotationPolygonMeasureRectilinearYItem> $y
     */
    #[JsonProperty('y'), ArrayType([AnnotationPolygonMeasureRectilinearYItem::class])]
    public ?array $y;

    /**
     * @var array<AnnotationPolygonMeasureRectilinearDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([AnnotationPolygonMeasureRectilinearDistanceItem::class])]
    public array $distance;

    /**
     * @var array<AnnotationPolygonMeasureRectilinearAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([AnnotationPolygonMeasureRectilinearAreaItem::class])]
    public array $area;

    /**
     * @var ?array<AnnotationPolygonMeasureRectilinearAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([AnnotationPolygonMeasureRectilinearAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<AnnotationPolygonMeasureRectilinearSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([AnnotationPolygonMeasureRectilinearSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?AnnotationPolygonMeasureRectilinearOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?AnnotationPolygonMeasureRectilinearOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   x: array<AnnotationPolygonMeasureRectilinearXItem>,
     *   distance: array<AnnotationPolygonMeasureRectilinearDistanceItem>,
     *   area: array<AnnotationPolygonMeasureRectilinearAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<AnnotationPolygonMeasureRectilinearYItem>,
     *   angle?: ?array<AnnotationPolygonMeasureRectilinearAngleItem>,
     *   slope?: ?array<AnnotationPolygonMeasureRectilinearSlopeItem>,
     *   origin?: ?AnnotationPolygonMeasureRectilinearOrigin,
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
