<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocFormsGet200ResponseFieldsItemComboboxRefObjectNumber extends JsonSerializableType
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
