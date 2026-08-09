<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocFormsGet200ResponseFieldsItemPushbuttonRefObjectNumber extends JsonSerializableType
{
    /**
     * @var int $fieldObjectNumber
     */
    #[JsonProperty('fieldObjectNumber')]
    public int $fieldObjectNumber;

    /**
     * @param array{
     *   fieldObjectNumber: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->fieldObjectNumber = $values['fieldObjectNumber'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
