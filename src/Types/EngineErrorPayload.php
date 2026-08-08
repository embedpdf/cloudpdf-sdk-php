<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use Cloudpdf\Core\Types\ArrayType;

class EngineErrorPayload extends JsonSerializableType
{
    /**
     * @var value-of<EngineErrorPayloadName> $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<EngineErrorPayloadCode> $code
     */
    #[JsonProperty('code')]
    public string $code;

    /**
     * @var string $message
     */
    #[JsonProperty('message')]
    public string $message;

    /**
     * @var ?array<string, mixed> $details
     */
    #[JsonProperty('details'), ArrayType(['string' => 'mixed'])]
    public ?array $details;

    /**
     * @param array{
     *   name: value-of<EngineErrorPayloadName>,
     *   code: value-of<EngineErrorPayloadCode>,
     *   message: string,
     *   details?: ?array<string, mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->name = $values['name'];
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
