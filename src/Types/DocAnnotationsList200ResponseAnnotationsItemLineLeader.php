<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemLineLeader extends JsonSerializableType
{
    /**
     * @var float $length
     */
    #[JsonProperty('length')]
    public float $length;

    /**
     * @var ?float $extension
     */
    #[JsonProperty('extension')]
    public ?float $extension;

    /**
     * @var ?float $offset
     */
    #[JsonProperty('offset')]
    public ?float $offset;

    /**
     * @param array{
     *   length: float,
     *   extension?: ?float,
     *   offset?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->length = $values['length'];
        $this->extension = $values['extension'] ?? null;
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
