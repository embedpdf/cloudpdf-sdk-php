<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeOpMetadataUpdate extends JsonSerializableType
{
    /**
     * @var MetadataPatch $patch
     */
    #[JsonProperty('patch')]
    public MetadataPatch $patch;

    /**
     * @var ?MetadataPatch $expect
     */
    #[JsonProperty('expect')]
    public ?MetadataPatch $expect;

    /**
     * @param array{
     *   patch: MetadataPatch,
     *   expect?: ?MetadataPatch,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->patch = $values['patch'];
        $this->expect = $values['expect'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
