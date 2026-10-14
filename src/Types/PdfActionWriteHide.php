<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class PdfActionWriteHide extends JsonSerializableType
{
    /**
     * @var array<PdfActionTargetRef> $targets
     */
    #[JsonProperty('targets'), ArrayType([PdfActionTargetRef::class])]
    public array $targets;

    /**
     * @var bool $hide
     */
    #[JsonProperty('hide')]
    public bool $hide;

    /**
     * @var ?array<mixed> $next
     */
    #[JsonProperty('next'), ArrayType(['mixed'])]
    public ?array $next;

    /**
     * @param array{
     *   targets: array<PdfActionTargetRef>,
     *   hide: bool,
     *   next?: ?array<mixed>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->targets = $values['targets'];
        $this->hide = $values['hide'];
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
