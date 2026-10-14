<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class AnnotationPatchPolygonMeasureRectilinear extends JsonSerializableType
{
    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<AnnotationPatchPolygonMeasureRectilinearXItem> $x
     */
    #[JsonProperty('x'), ArrayType([AnnotationPatchPolygonMeasureRectilinearXItem::class])]
    public array $x;

    /**
     * @var ?array<AnnotationPatchPolygonMeasureRectilinearYItem> $y
     */
    #[JsonProperty('y'), ArrayType([AnnotationPatchPolygonMeasureRectilinearYItem::class])]
    public ?array $y;

    /**
     * @var array<AnnotationPatchPolygonMeasureRectilinearDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([AnnotationPatchPolygonMeasureRectilinearDistanceItem::class])]
    public array $distance;

    /**
     * @var array<AnnotationPatchPolygonMeasureRectilinearAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([AnnotationPatchPolygonMeasureRectilinearAreaItem::class])]
    public array $area;

    /**
     * @var ?array<AnnotationPatchPolygonMeasureRectilinearAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([AnnotationPatchPolygonMeasureRectilinearAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<AnnotationPatchPolygonMeasureRectilinearSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([AnnotationPatchPolygonMeasureRectilinearSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?AnnotationPatchPolygonMeasureRectilinearOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?AnnotationPatchPolygonMeasureRectilinearOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   x: array<AnnotationPatchPolygonMeasureRectilinearXItem>,
     *   distance: array<AnnotationPatchPolygonMeasureRectilinearDistanceItem>,
     *   area: array<AnnotationPatchPolygonMeasureRectilinearAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<AnnotationPatchPolygonMeasureRectilinearYItem>,
     *   angle?: ?array<AnnotationPatchPolygonMeasureRectilinearAngleItem>,
     *   slope?: ?array<AnnotationPatchPolygonMeasureRectilinearSlopeItem>,
     *   origin?: ?AnnotationPatchPolygonMeasureRectilinearOrigin,
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
