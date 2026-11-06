<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class PdfMeasurementRectilinear extends JsonSerializableType
{
    /**
     * @var ?string $ratio
     */
    #[JsonProperty('ratio')]
    public ?string $ratio;

    /**
     * @var array<PdfMeasurementRectilinearXItem> $x
     */
    #[JsonProperty('x'), ArrayType([PdfMeasurementRectilinearXItem::class])]
    public array $x;

    /**
     * @var ?array<PdfMeasurementRectilinearYItem> $y
     */
    #[JsonProperty('y'), ArrayType([PdfMeasurementRectilinearYItem::class])]
    public ?array $y;

    /**
     * @var array<PdfMeasurementRectilinearDistanceItem> $distance
     */
    #[JsonProperty('distance'), ArrayType([PdfMeasurementRectilinearDistanceItem::class])]
    public array $distance;

    /**
     * @var array<PdfMeasurementRectilinearAreaItem> $area
     */
    #[JsonProperty('area'), ArrayType([PdfMeasurementRectilinearAreaItem::class])]
    public array $area;

    /**
     * @var ?array<PdfMeasurementRectilinearAngleItem> $angle
     */
    #[JsonProperty('angle'), ArrayType([PdfMeasurementRectilinearAngleItem::class])]
    public ?array $angle;

    /**
     * @var ?array<PdfMeasurementRectilinearSlopeItem> $slope
     */
    #[JsonProperty('slope'), ArrayType([PdfMeasurementRectilinearSlopeItem::class])]
    public ?array $slope;

    /**
     * @var ?PdfMeasurementRectilinearOrigin $origin
     */
    #[JsonProperty('origin')]
    public ?PdfMeasurementRectilinearOrigin $origin;

    /**
     * @var ?float $cyx
     */
    #[JsonProperty('cyx')]
    public ?float $cyx;

    /**
     * @param array{
     *   x: array<PdfMeasurementRectilinearXItem>,
     *   distance: array<PdfMeasurementRectilinearDistanceItem>,
     *   area: array<PdfMeasurementRectilinearAreaItem>,
     *   ratio?: ?string,
     *   y?: ?array<PdfMeasurementRectilinearYItem>,
     *   angle?: ?array<PdfMeasurementRectilinearAngleItem>,
     *   slope?: ?array<PdfMeasurementRectilinearSlopeItem>,
     *   origin?: ?PdfMeasurementRectilinearOrigin,
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
