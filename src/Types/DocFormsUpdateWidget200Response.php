<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocFormsUpdateWidget200Response extends JsonSerializableType
{
    /**
     * @var WidgetAnnotation $widget
     */
    #[JsonProperty('widget')]
    public WidgetAnnotation $widget;

    /**
     * @var DocFormsUpdateWidget200ResponseAppearance $appearance
     */
    #[JsonProperty('appearance')]
    public DocFormsUpdateWidget200ResponseAppearance $appearance;

    /**
     * @var FormMutationMeta $meta
     */
    #[JsonProperty('meta')]
    public FormMutationMeta $meta;

    /**
     * @param array{
     *   widget: WidgetAnnotation,
     *   appearance: DocFormsUpdateWidget200ResponseAppearance,
     *   meta: FormMutationMeta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->widget = $values['widget'];
        $this->appearance = $values['appearance'];
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
