<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRl extends JsonSerializableType
{
    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlXItem> $x
     */
    #[JsonProperty('x'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlXItem::class])]
    public array $x;

    /**
     * @var ?array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlYItem> $y
     */
    #[JsonProperty('y'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlYItem::class])]
    public ?array $y;

    /**
     * @var array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlDistanceItem::class])]
    public array $distance;

    /**
     * @var array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlAreaItem::class])]
    public array $area;

    /**
     * @var ?array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   x: array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlXItem>,
     *   distance: array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlDistanceItem>,
     *   area: array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlYItem>,
     *   angle?: ?array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlAngleItem>,
     *   slope?: ?array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlSlopeItem>,
     *   origin?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlOrigin,
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
