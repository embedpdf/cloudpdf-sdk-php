<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class PdfLinkTargetWritableGoto extends JsonSerializableType
{
    /**
     * @var PageDestination $destination
     */
    #[JsonProperty('destination')]
    public PageDestination $destination;

    /**
     * @param array{
     *   destination: PageDestination,
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
