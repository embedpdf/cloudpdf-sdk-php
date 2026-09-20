<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemLineCaptionOffset extends JsonSerializableType
{
    /**
     * @var float $along
     */
    #[JsonProperty('along')]
    public float $along;

    /**
     * @var float $perpendicular
     */
    #[JsonProperty('perpendicular')]
    public float $perpendicular;

    /**
     * @param array{
     *   along: float,
     *   perpendicular: float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->along = $values['along'];
        $this->perpendicular = $values['perpendicular'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
