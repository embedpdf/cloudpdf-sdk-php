<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class PdfActionTargetRefObjectNumber extends JsonSerializableType
{
    /**
     * @var int $objectNumber
     */
    #[JsonProperty('objectNumber')]
    public int $objectNumber;

    /**
     * @param array{
     *   objectNumber: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->objectNumber = $values['objectNumber'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
