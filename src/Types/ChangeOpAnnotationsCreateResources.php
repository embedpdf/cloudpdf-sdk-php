<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeOpAnnotationsCreateResources extends JsonSerializableType
{
    /**
     * @var ?string $appearance
     */
    #[JsonProperty('appearance')]
    public ?string $appearance;

    /**
     * @var ?string $file
     */
    #[JsonProperty('file')]
    public ?string $file;

    /**
     * @param array{
     *   appearance?: ?string,
     *   file?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->appearance = $values['appearance'] ?? null;
        $this->file = $values['file'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
