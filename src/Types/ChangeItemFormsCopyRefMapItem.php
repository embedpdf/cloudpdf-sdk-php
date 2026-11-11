<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ChangeItemFormsCopyRefMapItem extends JsonSerializableType
{
    /**
     * @var FormFieldRef $from
     */
    #[JsonProperty('from')]
    public FormFieldRef $from;

    /**
     * @var FormFieldRef $to
     */
    #[JsonProperty('to')]
    public FormFieldRef $to;

    /**
     * @param array{
     *   from: FormFieldRef,
     *   to: FormFieldRef,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->from = $values['from'];
        $this->to = $values['to'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
