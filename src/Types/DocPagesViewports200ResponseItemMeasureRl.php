<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocPagesViewports200ResponseItemMeasureRl extends JsonSerializableType
{
    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<DocPagesViewports200ResponseItemMeasureRlXItem> $x
     */
    #[JsonProperty('x'), ArrayType([DocPagesViewports200ResponseItemMeasureRlXItem::class])]
    public array $x;

    /**
     * @var ?array<DocPagesViewports200ResponseItemMeasureRlYItem> $y
     */
    #[JsonProperty('y'), ArrayType([DocPagesViewports200ResponseItemMeasureRlYItem::class])]
    public ?array $y;

    /**
     * @var array<DocPagesViewports200ResponseItemMeasureRlDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([DocPagesViewports200ResponseItemMeasureRlDistanceItem::class])]
    public array $distance;

    /**
     * @var array<DocPagesViewports200ResponseItemMeasureRlAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([DocPagesViewports200ResponseItemMeasureRlAreaItem::class])]
    public array $area;

    /**
     * @var ?array<DocPagesViewports200ResponseItemMeasureRlAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([DocPagesViewports200ResponseItemMeasureRlAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<DocPagesViewports200ResponseItemMeasureRlSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([DocPagesViewports200ResponseItemMeasureRlSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?DocPagesViewports200ResponseItemMeasureRlOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?DocPagesViewports200ResponseItemMeasureRlOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   x: array<DocPagesViewports200ResponseItemMeasureRlXItem>,
     *   distance: array<DocPagesViewports200ResponseItemMeasureRlDistanceItem>,
     *   area: array<DocPagesViewports200ResponseItemMeasureRlAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<DocPagesViewports200ResponseItemMeasureRlYItem>,
     *   angle?: ?array<DocPagesViewports200ResponseItemMeasureRlAngleItem>,
     *   slope?: ?array<DocPagesViewports200ResponseItemMeasureRlSlopeItem>,
     *   origin?: ?DocPagesViewports200ResponseItemMeasureRlOrigin,
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
