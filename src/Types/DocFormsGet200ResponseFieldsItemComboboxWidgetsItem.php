<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocFormsGet200ResponseFieldsItemComboboxWidgetsItem extends JsonSerializableType
{
    /**
     * @var int $annotObjectNumber
     */
    #[JsonProperty('annotObjectNumber')]
    public int $annotObjectNumber;

    /**
     * @var int $pageObjectNumber
     */
    #[JsonProperty('pageObjectNumber')]
    public int $pageObjectNumber;

    /**
     * @param array{
     *   annotObjectNumber: int,
     *   pageObjectNumber: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->annotObjectNumber = $values['annotObjectNumber'];
        $this->pageObjectNumber = $values['pageObjectNumber'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
