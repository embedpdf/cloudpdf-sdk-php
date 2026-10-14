<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;
use CloudPDF\Core\Types\Union;

class ChangeOpMetadataUpdateCustom extends JsonSerializableType
{
    /**
     * @var array<string, ?string> $patch
     */
    #[JsonProperty('patch'), ArrayType(['string' => new Union('string', 'null')])]
    public array $patch;

    /**
     * @param array{
     *   patch: array<string, ?string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->patch = $values['patch'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
