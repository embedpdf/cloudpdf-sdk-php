<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class EngineError extends JsonSerializableType
{
    /**
     * @var value-of<EngineErrorCode> $code Why the request failed. A newer server can add codes: read one your client doesn't know as `Unknown`.
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $message
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @var ?array<string, mixed> $details What a code carries besides its message, as each code says.
     */
    #[JsonProperty('details'), ArrayType(['string' => 'mixed'])]
    public ?array $details;

    /**
     * @param array{
     *   code: value-of<EngineErrorCode>,
     *   message: string,
     *   details?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->code = $values['code'];
        $this->message = $values['message'];
        $this->details = $values['details'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
