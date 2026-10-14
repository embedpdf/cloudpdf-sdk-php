<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class AnnotationLineMeasureRectilinear extends JsonSerializableType
{
    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<AnnotationLineMeasureRectilinearXItem> $x
     */
    #[JsonProperty('x'), ArrayType([AnnotationLineMeasureRectilinearXItem::class])]
    public array $x;

    /**
     * @var ?array<AnnotationLineMeasureRectilinearYItem> $y
     */
    #[JsonProperty('y'), ArrayType([AnnotationLineMeasureRectilinearYItem::class])]
    public ?array $y;

    /**
     * @var array<AnnotationLineMeasureRectilinearDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([AnnotationLineMeasureRectilinearDistanceItem::class])]
    public array $distance;

    /**
     * @var array<AnnotationLineMeasureRectilinearAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([AnnotationLineMeasureRectilinearAreaItem::class])]
    public array $area;

    /**
     * @var ?array<AnnotationLineMeasureRectilinearAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([AnnotationLineMeasureRectilinearAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<AnnotationLineMeasureRectilinearSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([AnnotationLineMeasureRectilinearSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?AnnotationLineMeasureRectilinearOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?AnnotationLineMeasureRectilinearOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   x: array<AnnotationLineMeasureRectilinearXItem>,
     *   distance: array<AnnotationLineMeasureRectilinearDistanceItem>,
     *   area: array<AnnotationLineMeasureRectilinearAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<AnnotationLineMeasureRectilinearYItem>,
     *   angle?: ?array<AnnotationLineMeasureRectilinearAngleItem>,
     *   slope?: ?array<AnnotationLineMeasureRectilinearSlopeItem>,
     *   origin?: ?AnnotationLineMeasureRectilinearOrigin,
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
