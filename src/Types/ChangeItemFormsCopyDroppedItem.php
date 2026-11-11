<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemFormsCopyDroppedItem extends JsonSerializableType
{
    /**
     * @var ?FormFieldRef $ref
     */
    #[JsonProperty('ref')]
    public ?FormFieldRef $ref;

    /**
     * @var ?AnnotationRef $widget
     */
    #[JsonProperty('widget')]
    public ?AnnotationRef $widget;

    /**
     * @var ?string $field
     */
    #[JsonProperty('field')]
    public ?string $field;

    /**
     * @var value-of<ChangeItemFormsCopyDroppedItemReason> $reason
     */
    #[JsonProperty('reason')]
    public string $reason;

    /**
     * @param array{
     *   reason: value-of<ChangeItemFormsCopyDroppedItemReason>,
     *   ref?: ?FormFieldRef,
     *   widget?: ?AnnotationRef,
     *   field?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ref = $values['ref'] ?? null;
        $this->widget = $values['widget'] ?? null;
        $this->field = $values['field'] ?? null;
        $this->reason = $values['reason'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
