<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ModulePermission extends JsonSerializableType
{
    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<ModulePermissionLevel> $level
     */
    #[JsonProperty('level')]
    public string $level;

    /**
     * @var string $label
     */
    #[JsonProperty('label')]
    public string $label;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var ?string $replaces
     */
    #[JsonProperty('replaces')]
    public ?string $replaces;

    /**
     * @var ?array<string> $bypassedBy
     */
    #[JsonProperty('bypassedBy'), ArrayType(['string'])]
    public ?array $bypassedBy;

    /**
     * @param array{
     *   name: string,
     *   level: value-of<ModulePermissionLevel>,
     *   label: string,
     *   description?: ?string,
     *   replaces?: ?string,
     *   bypassedBy?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
        $this->level = $values['level'];
        $this->label = $values['label'];
        $this->description = $values['description'] ?? null;
        $this->replaces = $values['replaces'] ?? null;
        $this->bypassedBy = $values['bypassedBy'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
