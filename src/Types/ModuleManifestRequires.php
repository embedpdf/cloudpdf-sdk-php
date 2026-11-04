<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ModuleManifestRequires extends JsonSerializableType
{
    /**
     * @var array<string> $document
     */
    #[JsonProperty('document'), ArrayType(['string'])]
    public array $document;

    /**
     * @param array{
     *   document: array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->document = $values['document'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
