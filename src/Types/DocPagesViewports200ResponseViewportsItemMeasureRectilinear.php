<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocPagesViewports200ResponseViewportsItemMeasureRectilinear extends JsonSerializableType
{
    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<DocPagesViewports200ResponseViewportsItemMeasureRectilinearXItem> $x
     */
    #[JsonProperty('x'), ArrayType([DocPagesViewports200ResponseViewportsItemMeasureRectilinearXItem::class])]
    public array $x;

    /**
     * @var ?array<DocPagesViewports200ResponseViewportsItemMeasureRectilinearYItem> $y
     */
    #[JsonProperty('y'), ArrayType([DocPagesViewports200ResponseViewportsItemMeasureRectilinearYItem::class])]
    public ?array $y;

    /**
     * @var array<DocPagesViewports200ResponseViewportsItemMeasureRectilinearDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([DocPagesViewports200ResponseViewportsItemMeasureRectilinearDistanceItem::class])]
    public array $distance;

    /**
     * @var array<DocPagesViewports200ResponseViewportsItemMeasureRectilinearAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([DocPagesViewports200ResponseViewportsItemMeasureRectilinearAreaItem::class])]
    public array $area;

    /**
     * @var ?array<DocPagesViewports200ResponseViewportsItemMeasureRectilinearAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([DocPagesViewports200ResponseViewportsItemMeasureRectilinearAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<DocPagesViewports200ResponseViewportsItemMeasureRectilinearSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([DocPagesViewports200ResponseViewportsItemMeasureRectilinearSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?DocPagesViewports200ResponseViewportsItemMeasureRectilinearOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?DocPagesViewports200ResponseViewportsItemMeasureRectilinearOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   x: array<DocPagesViewports200ResponseViewportsItemMeasureRectilinearXItem>,
     *   distance: array<DocPagesViewports200ResponseViewportsItemMeasureRectilinearDistanceItem>,
     *   area: array<DocPagesViewports200ResponseViewportsItemMeasureRectilinearAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<DocPagesViewports200ResponseViewportsItemMeasureRectilinearYItem>,
     *   angle?: ?array<DocPagesViewports200ResponseViewportsItemMeasureRectilinearAngleItem>,
     *   slope?: ?array<DocPagesViewports200ResponseViewportsItemMeasureRectilinearSlopeItem>,
     *   origin?: ?DocPagesViewports200ResponseViewportsItemMeasureRectilinearOrigin,
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
