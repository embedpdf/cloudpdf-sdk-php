<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;
use CloudPDF\Core\Types\Union;

class ChangeOpFormsReorderCalculations extends JsonSerializableType
{
    /**
     * @var array<FormFieldRef> $fields
     */
    #[JsonProperty('fields'), ArrayType([FormFieldRef::class])]
    public array $fields;

    /**
     * @var (
     *    value-of<FieldPositionZero>
     *   |FieldPositionAfter
     * ) $position
     */
    #[JsonProperty('position'), Union('string', FieldPositionAfter::class)]
    public string|FieldPositionAfter $position;

    /**
     * @param array{
     *   fields: array<FormFieldRef>,
     *   position: (
     *    value-of<FieldPositionZero>
     *   |FieldPositionAfter
     * ),
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fields = $values['fields'];
        $this->position = $values['position'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
