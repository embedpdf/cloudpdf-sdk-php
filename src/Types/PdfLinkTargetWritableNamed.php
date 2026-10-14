<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class PdfLinkTargetWritableNamed extends JsonSerializableType
{
    /**
     * @var value-of<PdfLinkTargetWritableNamedName> $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @param array{
     *   name: value-of<PdfLinkTargetWritableNamedName>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
