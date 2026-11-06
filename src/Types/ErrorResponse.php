<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class ErrorResponse extends JsonSerializableType
{
    /**
     * @var EngineError $error
     */
    #[JsonProperty('error')]
    public EngineError $error;

    /**
     * @param array{
     *   error: EngineError,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
