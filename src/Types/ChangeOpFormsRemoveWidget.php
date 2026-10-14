<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeOpFormsRemoveWidget extends JsonSerializableType
{
    /**
     * @var FormFieldRef $field
     */
    #[JsonProperty('field')]
    public FormFieldRef $field;

    /**
     * @var AnnotationRef $widget
     */
    #[JsonProperty('widget')]
    public AnnotationRef $widget;

    /**
     * @param array{
     *   field: FormFieldRef,
     *   widget: AnnotationRef,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->field = $values['field'];
        $this->widget = $values['widget'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
