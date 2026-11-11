<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemAnnotationsCopyDroppedItem extends JsonSerializableType
{
    /**
     * @var AnnotationRef $ref
     */
    #[JsonProperty('ref')]
    public AnnotationRef $ref;

    /**
     * @var ?string $field
     */
    #[JsonProperty('field')]
    public ?string $field;

    /**
     * @var value-of<ChangeItemAnnotationsCopyDroppedItemReason> $reason
     */
    #[JsonProperty('reason')]
    public string $reason;

    /**
     * @param array{
     *   ref: AnnotationRef,
     *   reason: value-of<ChangeItemAnnotationsCopyDroppedItemReason>,
     *   field?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ref = $values['ref'];
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
