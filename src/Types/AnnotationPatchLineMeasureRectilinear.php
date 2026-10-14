<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class AnnotationPatchLineMeasureRectilinear extends JsonSerializableType
{
    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<AnnotationPatchLineMeasureRectilinearXItem> $x
     */
    #[JsonProperty('x'), ArrayType([AnnotationPatchLineMeasureRectilinearXItem::class])]
    public array $x;

    /**
     * @var ?array<AnnotationPatchLineMeasureRectilinearYItem> $y
     */
    #[JsonProperty('y'), ArrayType([AnnotationPatchLineMeasureRectilinearYItem::class])]
    public ?array $y;

    /**
     * @var array<AnnotationPatchLineMeasureRectilinearDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([AnnotationPatchLineMeasureRectilinearDistanceItem::class])]
    public array $distance;

    /**
     * @var array<AnnotationPatchLineMeasureRectilinearAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([AnnotationPatchLineMeasureRectilinearAreaItem::class])]
    public array $area;

    /**
     * @var ?array<AnnotationPatchLineMeasureRectilinearAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([AnnotationPatchLineMeasureRectilinearAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<AnnotationPatchLineMeasureRectilinearSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([AnnotationPatchLineMeasureRectilinearSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?AnnotationPatchLineMeasureRectilinearOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?AnnotationPatchLineMeasureRectilinearOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   x: array<AnnotationPatchLineMeasureRectilinearXItem>,
     *   distance: array<AnnotationPatchLineMeasureRectilinearDistanceItem>,
     *   area: array<AnnotationPatchLineMeasureRectilinearAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<AnnotationPatchLineMeasureRectilinearYItem>,
     *   angle?: ?array<AnnotationPatchLineMeasureRectilinearAngleItem>,
     *   slope?: ?array<AnnotationPatchLineMeasureRectilinearSlopeItem>,
     *   origin?: ?AnnotationPatchLineMeasureRectilinearOrigin,
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
