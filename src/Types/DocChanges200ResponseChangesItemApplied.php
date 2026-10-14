<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocChanges200ResponseChangesItemApplied extends JsonSerializableType
{
    /**
     * @var string $opId
     */
    #[JsonProperty('opId')]
    public string $opId;

    /**
     * @var ChangeResult $result
     */
    #[JsonProperty('result')]
    public ChangeResult $result;

    /**
     * @param array{
     *   opId: string,
     *   result: ChangeResult,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->opId = $values['opId'];
        $this->result = $values['result'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
