<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRl extends JsonSerializableType
{
    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlXItem> $x
     */
    #[JsonProperty('x'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlXItem::class])]
    public array $x;

    /**
     * @var ?array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlYItem> $y
     */
    #[JsonProperty('y'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlYItem::class])]
    public ?array $y;

    /**
     * @var array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlDistanceItem::class])]
    public array $distance;

    /**
     * @var array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlAreaItem::class])]
    public array $area;

    /**
     * @var ?array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   x: array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlXItem>,
     *   distance: array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlDistanceItem>,
     *   area: array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlYItem>,
     *   angle?: ?array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlAngleItem>,
     *   slope?: ?array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlSlopeItem>,
     *   origin?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonMeasureRlOrigin,
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
