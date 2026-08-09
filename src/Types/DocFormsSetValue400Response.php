<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocFormsSetValue400Response extends JsonSerializableType
{
    /**
     * @var value-of<DocFormsSetValue400ResponseName> $name
     */
    #[JsonProperty('name')]
    public string $name;

    /**
     * @var value-of<DocFormsSetValue400ResponseCode> $code
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
     *   name: value-of<DocFormsSetValue400ResponseName>,
     *   code: value-of<DocFormsSetValue400ResponseCode>,
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
