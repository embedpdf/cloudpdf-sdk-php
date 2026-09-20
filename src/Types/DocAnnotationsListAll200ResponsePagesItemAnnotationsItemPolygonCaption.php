<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonCaption extends JsonSerializableType
{
    /**
     * @var bool $enabled
     */
    #[JsonProperty('enabled')]
    public bool $enabled;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonCaptionCenter $center
     */
    #[JsonProperty('center')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonCaptionCenter $center;

    /**
     * @param array{
     *   enabled: bool,
     *   center?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygonCaptionCenter,
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
