<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocFormsGet200ResponseFieldsItemRadioWidgetsItem extends JsonSerializableType
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
     * @var string $onState
     */
    #[JsonProperty('onState')]
    public string $onState;

    /**
     * @var string $exportValue
     */
    #[JsonProperty('exportValue')]
    public string $exportValue;

    /**
     * @var bool $checked
     */
    #[JsonProperty('checked')]
    public bool $checked;

    /**
     * @param array{
     *   annotObjectNumber: int,
     *   pageObjectNumber: int,
     *   onState: string,
     *   exportValue: string,
     *   checked: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->annotObjectNumber = $values['annotObjectNumber'];
        $this->pageObjectNumber = $values['pageObjectNumber'];
        $this->onState = $values['onState'];
        $this->exportValue = $values['exportValue'];
        $this->checked = $values['checked'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
