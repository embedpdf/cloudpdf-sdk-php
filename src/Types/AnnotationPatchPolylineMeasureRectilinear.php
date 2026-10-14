<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class AnnotationPatchPolylineMeasureRectilinear extends JsonSerializableType
{
    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<AnnotationPatchPolylineMeasureRectilinearXItem> $x
     */
    #[JsonProperty('x'), ArrayType([AnnotationPatchPolylineMeasureRectilinearXItem::class])]
    public array $x;

    /**
     * @var ?array<AnnotationPatchPolylineMeasureRectilinearYItem> $y
     */
    #[JsonProperty('y'), ArrayType([AnnotationPatchPolylineMeasureRectilinearYItem::class])]
    public ?array $y;

    /**
     * @var array<AnnotationPatchPolylineMeasureRectilinearDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([AnnotationPatchPolylineMeasureRectilinearDistanceItem::class])]
    public array $distance;

    /**
     * @var array<AnnotationPatchPolylineMeasureRectilinearAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([AnnotationPatchPolylineMeasureRectilinearAreaItem::class])]
    public array $area;

    /**
     * @var ?array<AnnotationPatchPolylineMeasureRectilinearAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([AnnotationPatchPolylineMeasureRectilinearAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<AnnotationPatchPolylineMeasureRectilinearSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([AnnotationPatchPolylineMeasureRectilinearSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?AnnotationPatchPolylineMeasureRectilinearOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?AnnotationPatchPolylineMeasureRectilinearOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   x: array<AnnotationPatchPolylineMeasureRectilinearXItem>,
     *   distance: array<AnnotationPatchPolylineMeasureRectilinearDistanceItem>,
     *   area: array<AnnotationPatchPolylineMeasureRectilinearAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<AnnotationPatchPolylineMeasureRectilinearYItem>,
     *   angle?: ?array<AnnotationPatchPolylineMeasureRectilinearAngleItem>,
     *   slope?: ?array<AnnotationPatchPolylineMeasureRectilinearSlopeItem>,
     *   origin?: ?AnnotationPatchPolylineMeasureRectilinearOrigin,
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
