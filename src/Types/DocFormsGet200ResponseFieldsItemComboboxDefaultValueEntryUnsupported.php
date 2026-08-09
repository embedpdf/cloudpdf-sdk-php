<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;

class DocFormsGet200ResponseFieldsItemComboboxDefaultValueEntryUnsupported extends JsonSerializableType
{
    /**
     * @param array{
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        unset($values);
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
