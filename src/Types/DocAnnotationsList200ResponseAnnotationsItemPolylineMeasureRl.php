<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRl extends JsonSerializableType
{
    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlXItem> $x
     */
    #[JsonProperty('x'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlXItem::class])]
    public array $x;

    /**
     * @var ?array<DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlYItem> $y
     */
    #[JsonProperty('y'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlYItem::class])]
    public ?array $y;

    /**
     * @var array<DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlDistanceItem::class])]
    public array $distance;

    /**
     * @var array<DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlAreaItem::class])]
    public array $area;

    /**
     * @var ?array<DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   x: array<DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlXItem>,
     *   distance: array<DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlDistanceItem>,
     *   area: array<DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlYItem>,
     *   angle?: ?array<DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlAngleItem>,
     *   slope?: ?array<DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlSlopeItem>,
     *   origin?: ?DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlOrigin,
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
