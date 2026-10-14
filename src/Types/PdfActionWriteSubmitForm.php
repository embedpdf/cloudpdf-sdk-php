<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class PdfActionWriteSubmitForm extends JsonSerializableType
{
    /**
     * @var string $url
     */
    #[JsonProperty('url')]
    public string $url;

    /**
     * @var ?array<PdfActionTargetRef> $fields
     */
    #[JsonProperty('fields'), ArrayType([PdfActionTargetRef::class])]
    public ?array $fields;

    /**
     * @var ?int $flags
     */
    #[JsonProperty('flags')]
    public ?int $flags;

    /**
     * @var ?array<mixed> $next
     */
    #[JsonProperty('next'), ArrayType(['mixed'])]
    public ?array $next;

    /**
     * @param array{
     *   url: string,
     *   fields?: ?array<PdfActionTargetRef>,
     *   flags?: ?int,
     *   next?: ?array<mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->url = $values['url'];
        $this->fields = $values['fields'] ?? null;
        $this->flags = $values['flags'] ?? null;
        $this->next = $values['next'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
