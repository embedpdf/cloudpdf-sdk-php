<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemFormsReorderCalculations extends JsonSerializableType
{
    /**
     * @var array<FormFieldRef> $calculationOrder
     */
    #[JsonProperty('calculationOrder'), ArrayType([FormFieldRef::class])]
    public array $calculationOrder;

    /**
     * @var FormMutationMeta $meta
     */
    #[JsonProperty('meta')]
    public FormMutationMeta $meta;

    /**
     * @param array{
     *   calculationOrder: array<FormFieldRef>,
     *   meta: FormMutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->calculationOrder = $values['calculationOrder'];
        $this->meta = $values['meta'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
