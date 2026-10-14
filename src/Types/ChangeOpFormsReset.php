<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeOpFormsReset extends JsonSerializableType
{
    /**
     * @var ?array<FormFieldRef> $fields
     */
    #[JsonProperty('fields'), ArrayType([FormFieldRef::class])]
    public ?array $fields;

    /**
     * @param array{
     *   fields?: ?array<FormFieldRef>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->fields = $values['fields'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
