<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocChangesResponseChangesItemRefused extends JsonSerializableType
{
    /**
     * @var string $opId
     */
    #[JsonProperty('opId')]
    public string $opId;

    /**
     * @var EngineError $error
     */
    #[JsonProperty('error')]
    public EngineError $error;

    /**
     * @param array{
     *   opId: string,
     *   error: EngineError,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->opId = $values['opId'];
        $this->error = $values['error'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
