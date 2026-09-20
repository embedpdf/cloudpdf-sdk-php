<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemPolygonCaption extends JsonSerializableType
{
    /**
     * @var bool $enabled
     */
    #[JsonProperty('enabled')]
    public bool $enabled;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemPolygonCaptionCenter $center
     */
    #[JsonProperty('center')]
    public ?DocAnnotationsList200ResponseAnnotationsItemPolygonCaptionCenter $center;

    /**
     * @param array{
     *   enabled: bool,
     *   center?: ?DocAnnotationsList200ResponseAnnotationsItemPolygonCaptionCenter,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->enabled = $values['enabled'];
        $this->center = $values['center'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
