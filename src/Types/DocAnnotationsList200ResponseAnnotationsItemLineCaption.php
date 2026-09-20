<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemLineCaption extends JsonSerializableType
{
    /**
     * @var bool $enabled
     */
    #[JsonProperty('enabled')]
    public bool $enabled;

    /**
     * @var ?value-of<DocAnnotationsList200ResponseAnnotationsItemLineCaptionPosition> $position
     */
    #[JsonProperty('position')]
    public ?string $position;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLineCaptionOffset $offset
     */
    #[JsonProperty('offset')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLineCaptionOffset $offset;

    /**
     * @param array{
     *   enabled: bool,
     *   position?: ?value-of<DocAnnotationsList200ResponseAnnotationsItemLineCaptionPosition>,
     *   offset?: ?DocAnnotationsList200ResponseAnnotationsItemLineCaptionOffset,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->enabled = $values['enabled'];
        $this->position = $values['position'] ?? null;
        $this->offset = $values['offset'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
