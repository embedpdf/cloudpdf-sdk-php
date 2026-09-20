<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsList200ResponseAnnotationsItemLineMeasureRl extends JsonSerializableType
{
    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlXItem> $x
     */
    #[JsonProperty('x'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlXItem::class])]
    public array $x;

    /**
     * @var ?array<DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlYItem> $y
     */
    #[JsonProperty('y'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlYItem::class])]
    public ?array $y;

    /**
     * @var array<DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlDistanceItem::class])]
    public array $distance;

    /**
     * @var array<DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlAreaItem::class])]
    public array $area;

    /**
     * @var ?array<DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   x: array<DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlXItem>,
     *   distance: array<DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlDistanceItem>,
     *   area: array<DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlYItem>,
     *   angle?: ?array<DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlAngleItem>,
     *   slope?: ?array<DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlSlopeItem>,
     *   origin?: ?DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlOrigin,
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
