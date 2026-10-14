<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class AnnotationDraftLineMeasureRectilinear extends JsonSerializableType
{
    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<AnnotationDraftLineMeasureRectilinearXItem> $x
     */
    #[JsonProperty('x'), ArrayType([AnnotationDraftLineMeasureRectilinearXItem::class])]
    public array $x;

    /**
     * @var ?array<AnnotationDraftLineMeasureRectilinearYItem> $y
     */
    #[JsonProperty('y'), ArrayType([AnnotationDraftLineMeasureRectilinearYItem::class])]
    public ?array $y;

    /**
     * @var array<AnnotationDraftLineMeasureRectilinearDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([AnnotationDraftLineMeasureRectilinearDistanceItem::class])]
    public array $distance;

    /**
     * @var array<AnnotationDraftLineMeasureRectilinearAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([AnnotationDraftLineMeasureRectilinearAreaItem::class])]
    public array $area;

    /**
     * @var ?array<AnnotationDraftLineMeasureRectilinearAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([AnnotationDraftLineMeasureRectilinearAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<AnnotationDraftLineMeasureRectilinearSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([AnnotationDraftLineMeasureRectilinearSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?AnnotationDraftLineMeasureRectilinearOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?AnnotationDraftLineMeasureRectilinearOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   x: array<AnnotationDraftLineMeasureRectilinearXItem>,
     *   distance: array<AnnotationDraftLineMeasureRectilinearDistanceItem>,
     *   area: array<AnnotationDraftLineMeasureRectilinearAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<AnnotationDraftLineMeasureRectilinearYItem>,
     *   angle?: ?array<AnnotationDraftLineMeasureRectilinearAngleItem>,
     *   slope?: ?array<AnnotationDraftLineMeasureRectilinearSlopeItem>,
     *   origin?: ?AnnotationDraftLineMeasureRectilinearOrigin,
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
