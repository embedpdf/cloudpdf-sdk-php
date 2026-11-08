<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class PageMeasurementViewport extends JsonSerializableType
{
    /**
     * @var PageMeasurementViewportBbox $bbox
     */
    #[JsonProperty('bbox')]
    public PageMeasurementViewportBbox $bbox;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?PdfMeasurement $measure A measure, by its `subtype`. A newer server can add subtypes: read one your client doesn't know as `unknown`.
     */
    #[JsonProperty('measure')]
    public ?PdfMeasurement $measure;

    /**
     * @var bool $owned
     */
    #[JsonProperty('owned')]
    public bool $owned;

    /**
     * @param array{
     *   bbox: PageMeasurementViewportBbox,
     *   owned: bool,
     *   name?: ?string,
     *   measure?: ?PdfMeasurement,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->bbox = $values['bbox'];
        $this->name = $values['name'] ?? null;
        $this->measure = $values['measure'] ?? null;
        $this->owned = $values['owned'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
