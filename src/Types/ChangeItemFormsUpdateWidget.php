<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemFormsUpdateWidget extends JsonSerializableType
{
    /**
     * @var ?array<string> $skipped
     */
    #[JsonProperty('skipped'), ArrayType(['string'])]
    public ?array $skipped;

    /**
     * @var WidgetAnnotation $widget
     */
    #[JsonProperty('widget')]
    public WidgetAnnotation $widget;

    /**
     * @var ChangeItemFormsUpdateWidgetAppearance $appearance
     */
    #[JsonProperty('appearance')]
    public ChangeItemFormsUpdateWidgetAppearance $appearance;

    /**
     * @var FormMutationMeta $meta
     */
    #[JsonProperty('meta')]
    public FormMutationMeta $meta;

    /**
     * @param array{
     *   widget: WidgetAnnotation,
     *   appearance: ChangeItemFormsUpdateWidgetAppearance,
     *   meta: FormMutationMeta,
     *   skipped?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->skipped = $values['skipped'] ?? null;
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
