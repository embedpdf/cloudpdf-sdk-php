<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class AnnotationDraftPolygonMeasureRectilinear extends JsonSerializableType
{
    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<AnnotationDraftPolygonMeasureRectilinearXItem> $x
     */
    #[JsonProperty('x'), ArrayType([AnnotationDraftPolygonMeasureRectilinearXItem::class])]
    public array $x;

    /**
     * @var ?array<AnnotationDraftPolygonMeasureRectilinearYItem> $y
     */
    #[JsonProperty('y'), ArrayType([AnnotationDraftPolygonMeasureRectilinearYItem::class])]
    public ?array $y;

    /**
     * @var array<AnnotationDraftPolygonMeasureRectilinearDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([AnnotationDraftPolygonMeasureRectilinearDistanceItem::class])]
    public array $distance;

    /**
     * @var array<AnnotationDraftPolygonMeasureRectilinearAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([AnnotationDraftPolygonMeasureRectilinearAreaItem::class])]
    public array $area;

    /**
     * @var ?array<AnnotationDraftPolygonMeasureRectilinearAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([AnnotationDraftPolygonMeasureRectilinearAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<AnnotationDraftPolygonMeasureRectilinearSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([AnnotationDraftPolygonMeasureRectilinearSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?AnnotationDraftPolygonMeasureRectilinearOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?AnnotationDraftPolygonMeasureRectilinearOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   x: array<AnnotationDraftPolygonMeasureRectilinearXItem>,
     *   distance: array<AnnotationDraftPolygonMeasureRectilinearDistanceItem>,
     *   area: array<AnnotationDraftPolygonMeasureRectilinearAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<AnnotationDraftPolygonMeasureRectilinearYItem>,
     *   angle?: ?array<AnnotationDraftPolygonMeasureRectilinearAngleItem>,
     *   slope?: ?array<AnnotationDraftPolygonMeasureRectilinearSlopeItem>,
     *   origin?: ?AnnotationDraftPolygonMeasureRectilinearOrigin,
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
