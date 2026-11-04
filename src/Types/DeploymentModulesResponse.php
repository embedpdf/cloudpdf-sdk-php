<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DeploymentModulesResponse extends JsonSerializableType
{
    /**
     * @var array<ModuleManifest> $modules
     */
    #[JsonProperty('modules'), ArrayType([ModuleManifest::class])]
    public array $modules;

    /**
     * @param array{
     *   modules: array<ModuleManifest>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->modules = $values['modules'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
