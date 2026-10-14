<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocFormsReset200Response extends JsonSerializableType
{
    /**
     * @var array<FormField> $fields
     */
    #[JsonProperty('fields'), ArrayType([FormField::class])]
    public array $fields;

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
     *   fields: array<FormField>,
     *   widgets: array<WidgetAnnotation>,
     *   meta: FormMutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fields = $values['fields'];
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
