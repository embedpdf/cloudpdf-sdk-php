<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeOpFormsUpdate extends JsonSerializableType
{
    /**
     * @var FormFieldRef $field
     */
    #[JsonProperty('field')]
    public FormFieldRef $field;

    /**
     * @var FormFieldPatch $patch
     */
    #[JsonProperty('patch')]
    public FormFieldPatch $patch;

    /**
     * @var ?FormFieldPatch $expect
     */
    #[JsonProperty('expect')]
    public ?FormFieldPatch $expect;

    /**
     * @param array{
     *   field: FormFieldRef,
     *   patch: FormFieldPatch,
     *   expect?: ?FormFieldPatch,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->field = $values['field'];
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
