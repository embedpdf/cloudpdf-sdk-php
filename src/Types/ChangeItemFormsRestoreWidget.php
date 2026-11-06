<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemFormsRestoreWidget extends JsonSerializableType
{
    /**
     * @var ?FormField $field A form field, by its `family`. A newer server can add families: read one your client doesn't know as `unknown`, keeping the fields every field has, with `rawValue` an empty string when the body has none.
     */
    #[JsonProperty('field')]
    public ?FormField $field;

    /**
     * @var array<WidgetAnnotation> $widgets
     */
    #[JsonProperty('widgets'), ArrayType([WidgetAnnotation::class])]
    public array $widgets;

    /**
     * @var FormMutationMeta $meta
     */
    #[JsonProperty('meta')]
    public FormMutationMeta $meta;

    /**
     * @param array{
     *   widgets: array<WidgetAnnotation>,
     *   meta: FormMutationMeta,
     *   field?: ?FormField,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->field = $values['field'] ?? null;
        $this->widgets = $values['widgets'];
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
