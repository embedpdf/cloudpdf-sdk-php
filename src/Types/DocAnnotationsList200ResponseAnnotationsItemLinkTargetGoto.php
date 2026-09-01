<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocAnnotationsList200ResponseAnnotationsItemLinkTargetGoto extends JsonSerializableType
{
    /**
     * @var PdfDestination $destination
     */
    #[JsonProperty('destination')]
    public PdfDestination $destination;

    /**
     * @param array{
     *   destination: PdfDestination,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->destination = $values['destination'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
