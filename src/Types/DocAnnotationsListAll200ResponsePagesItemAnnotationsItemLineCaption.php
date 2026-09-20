<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineCaption extends JsonSerializableType
{
    /**
     * @var bool $enabled
     */
    #[JsonProperty('enabled')]
    public bool $enabled;

    /**
     * @var ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineCaptionPosition> $position
     */
    #[JsonProperty('position')]
    public ?string $position;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineCaptionOffset $offset
     */
    #[JsonProperty('offset')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineCaptionOffset $offset;

    /**
     * @param array{
     *   enabled: bool,
     *   position?: ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineCaptionPosition>,
     *   offset?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineCaptionOffset,
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
