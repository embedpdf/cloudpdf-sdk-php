<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemFormsSetDisplay extends JsonSerializableType
{
    /**
     * @var FormField $field
     */
    #[JsonProperty('field')]
    public FormField $field;

    /**
     * @var array<WidgetAnnotation> $widgets
     */
    #[JsonProperty('widgets'), ArrayType([WidgetAnnotation::class])]
    public array $widgets;

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
     *   field: FormField,
     *   widgets: array<WidgetAnnotation>,
     *   meta: FormMutationMeta,
     *   calculationOrder?: ?array<FormFieldRef>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->field = $values['field'];
        $this->widgets = $values['widgets'];
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
