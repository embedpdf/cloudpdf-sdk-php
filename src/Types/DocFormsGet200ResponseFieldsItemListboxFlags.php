<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocFormsGet200ResponseFieldsItemListboxFlags extends JsonSerializableType
{
    /**
     * @var bool $readOnly
     */
    #[JsonProperty('readOnly')]
    public bool $readOnly;

    /**
     * @var bool $required
     */
    #[JsonProperty('required')]
    public bool $required;

    /**
     * @var bool $noExport
     */
    #[JsonProperty('noExport')]
    public bool $noExport;

    /**
     * @var int $raw
     */
    #[JsonProperty('raw')]
    public int $raw;

    /**
     * @param array{
     *   readOnly: bool,
     *   required: bool,
     *   noExport: bool,
     *   raw: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->readOnly = $values['readOnly'];
        $this->required = $values['required'];
        $this->noExport = $values['noExport'];
        $this->raw = $values['raw'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
