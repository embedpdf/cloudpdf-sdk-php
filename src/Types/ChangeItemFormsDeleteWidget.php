<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemFormsDeleteWidget extends JsonSerializableType
{
    /**
     * @var AnnotationRef $widget
     */
    #[JsonProperty('widget')]
    public AnnotationRef $widget;

    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var ?FormField $field
     */
    #[JsonProperty('field')]
    public ?FormField $field;

    /**
     * @var FormMutationMeta $meta
     */
    #[JsonProperty('meta')]
    public FormMutationMeta $meta;

    /**
     * @param array{
     *   widget: AnnotationRef,
     *   page: PageRef,
     *   meta: FormMutationMeta,
     *   field?: ?FormField,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->widget = $values['widget'];
        $this->page = $values['page'];
        $this->field = $values['field'] ?? null;
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
