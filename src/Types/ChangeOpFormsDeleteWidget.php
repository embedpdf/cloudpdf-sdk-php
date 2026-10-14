<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeOpFormsDeleteWidget extends JsonSerializableType
{
    /**
     * @var AnnotationRef $widget
     */
    #[JsonProperty('widget')]
    public AnnotationRef $widget;

    /**
     * @var ?WidgetPatch $expect
     */
    #[JsonProperty('expect')]
    public ?WidgetPatch $expect;

    /**
     * @param array{
     *   widget: AnnotationRef,
     *   expect?: ?WidgetPatch,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->widget = $values['widget'];
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
