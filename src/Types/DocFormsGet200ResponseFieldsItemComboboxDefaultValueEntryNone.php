<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;

class DocFormsGet200ResponseFieldsItemComboboxDefaultValueEntryNone extends JsonSerializableType
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
