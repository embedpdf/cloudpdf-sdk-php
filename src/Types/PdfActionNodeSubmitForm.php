<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class PdfActionNodeSubmitForm extends JsonSerializableType
{
    /**
     * @var string $subtype
     */
    #[JsonProperty('subtype')]
    public string $subtype;

    /**
     * @var array<mixed> $next
     */
    #[JsonProperty('next'), ArrayType(['mixed'])]
    public array $next;

    /**
     * @var ?PdfActionNodeSubmitFormPayload $payload
     */
    #[JsonProperty('payload')]
    public ?PdfActionNodeSubmitFormPayload $payload;

    /**
     * @param array{
     *   subtype: string,
     *   next: array<mixed>,
     *   payload?: ?PdfActionNodeSubmitFormPayload,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->subtype = $values['subtype'];
        $this->next = $values['next'];
        $this->payload = $values['payload'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
