<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemFormsDelete extends JsonSerializableType
{
    /**
     * @var ?array<FormFieldRef> $calculationOrder
     */
    #[JsonProperty('calculationOrder'), ArrayType([FormFieldRef::class])]
    public ?array $calculationOrder;

    /**
     * @var FormMutationMeta $meta
     */
    #[JsonProperty('meta')]
    public FormMutationMeta $meta;

    /**
     * @param array{
     *   meta: FormMutationMeta,
     *   calculationOrder?: ?array<FormFieldRef>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->calculationOrder = $values['calculationOrder'] ?? null;
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
