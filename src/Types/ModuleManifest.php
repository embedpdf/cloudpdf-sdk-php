<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ModuleManifest extends JsonSerializableType
{
    /**
     * @var string $id
     */
    #[JsonProperty('id')]
    public string $id;

    /**
     * @var string $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var ?string $description
     */
    #[JsonProperty('description')]
    public ?string $description;

    /**
     * @var array<ModulePermission> $permissions
     */
    #[JsonProperty('permissions'), ArrayType([ModulePermission::class])]
    public array $permissions;

    /**
     * @var array<ModuleMeter> $meters
     */
    #[JsonProperty('meters'), ArrayType([ModuleMeter::class])]
    public array $meters;

    /**
     * @var ModuleManifestRequires $requires
     */
    #[JsonProperty('requires')]
    public ModuleManifestRequires $requires;

    /**
     * @param array{
     *   id: string,
     *   name: string,
     *   permissions: array<ModulePermission>,
     *   meters: array<ModuleMeter>,
     *   requires: ModuleManifestRequires,
     *   description?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->id = $values['id'];
        $this->name = $values['name'];
        $this->description = $values['description'] ?? null;
        $this->permissions = $values['permissions'];
        $this->meters = $values['meters'];
        $this->requires = $values['requires'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
