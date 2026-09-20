<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRl extends JsonSerializableType
{
    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlXItem> $x
     */
    #[JsonProperty('x'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlXItem::class])]
    public array $x;

    /**
     * @var ?array<DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlYItem> $y
     */
    #[JsonProperty('y'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlYItem::class])]
    public ?array $y;

    /**
     * @var array<DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlDistanceItem::class])]
    public array $distance;

    /**
     * @var array<DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlAreaItem::class])]
    public array $area;

    /**
     * @var ?array<DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   x: array<DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlXItem>,
     *   distance: array<DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlDistanceItem>,
     *   area: array<DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlYItem>,
     *   angle?: ?array<DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlAngleItem>,
     *   slope?: ?array<DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlSlopeItem>,
     *   origin?: ?DocAnnotationsList200ResponseAnnotationsItemPolygonMeasureRlOrigin,
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
