<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRl extends JsonSerializableType
{
    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlXItem> $x
     */
    #[JsonProperty('x'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlXItem::class])]
    public array $x;

    /**
     * @var ?array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlYItem> $y
     */
    #[JsonProperty('y'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlYItem::class])]
    public ?array $y;

    /**
     * @var array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlDistanceItem::class])]
    public array $distance;

    /**
     * @var array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlAreaItem::class])]
    public array $area;

    /**
     * @var ?array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   x: array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlXItem>,
     *   distance: array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlDistanceItem>,
     *   area: array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlYItem>,
     *   angle?: ?array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlAngleItem>,
     *   slope?: ?array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlSlopeItem>,
     *   origin?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlOrigin,
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
