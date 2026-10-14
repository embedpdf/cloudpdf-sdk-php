<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocChanges200ResponseChangesItemRefused extends JsonSerializableType
{
    /**
     * @var string $opId
     */
    #[JsonProperty('opId')]
    public string $opId;

    /**
     * @var EngineErrorPayload $error
     */
    #[JsonProperty('error')]
    public EngineErrorPayload $error;

    /**
     * @param array{
     *   opId: string,
     *   error: EngineErrorPayload,
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
