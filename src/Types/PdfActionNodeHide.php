<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class PdfActionNodeHide extends JsonSerializableType
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
     * @param array{
     *   subtype: string,
     *   next: array<mixed>,
     *   targets: array<PdfActionTargetRef>,
     *   hide: bool,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->subtype = $values['subtype'];
        $this->next = $values['next'];
        $this->targets = $values['targets'];
        $this->hide = $values['hide'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
