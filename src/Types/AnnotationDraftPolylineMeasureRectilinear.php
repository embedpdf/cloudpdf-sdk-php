<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class AnnotationDraftPolylineMeasureRectilinear extends JsonSerializableType
{
    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<AnnotationDraftPolylineMeasureRectilinearXItem> $x
     */
    #[JsonProperty('x'), ArrayType([AnnotationDraftPolylineMeasureRectilinearXItem::class])]
    public array $x;

    /**
     * @var ?array<AnnotationDraftPolylineMeasureRectilinearYItem> $y
     */
    #[JsonProperty('y'), ArrayType([AnnotationDraftPolylineMeasureRectilinearYItem::class])]
    public ?array $y;

    /**
     * @var array<AnnotationDraftPolylineMeasureRectilinearDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([AnnotationDraftPolylineMeasureRectilinearDistanceItem::class])]
    public array $distance;

    /**
     * @var array<AnnotationDraftPolylineMeasureRectilinearAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([AnnotationDraftPolylineMeasureRectilinearAreaItem::class])]
    public array $area;

    /**
     * @var ?array<AnnotationDraftPolylineMeasureRectilinearAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([AnnotationDraftPolylineMeasureRectilinearAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<AnnotationDraftPolylineMeasureRectilinearSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([AnnotationDraftPolylineMeasureRectilinearSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?AnnotationDraftPolylineMeasureRectilinearOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?AnnotationDraftPolylineMeasureRectilinearOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   x: array<AnnotationDraftPolylineMeasureRectilinearXItem>,
     *   distance: array<AnnotationDraftPolylineMeasureRectilinearDistanceItem>,
     *   area: array<AnnotationDraftPolylineMeasureRectilinearAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<AnnotationDraftPolylineMeasureRectilinearYItem>,
     *   angle?: ?array<AnnotationDraftPolylineMeasureRectilinearAngleItem>,
     *   slope?: ?array<AnnotationDraftPolylineMeasureRectilinearSlopeItem>,
     *   origin?: ?AnnotationDraftPolylineMeasureRectilinearOrigin,
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
