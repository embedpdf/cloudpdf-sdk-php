<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ModuleMeter extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var string $label
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var string $unit
     */
    #[JsonProperty('unit')]
    public string $unit;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @param array{
     *   name: string,
     *   label: string,
     *   unit: string,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->label = $values['label'];
        $this->unit = $values['unit'];
        $this->description = $values['description'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
