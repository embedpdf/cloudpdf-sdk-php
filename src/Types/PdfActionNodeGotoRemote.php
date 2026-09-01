<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class PdfActionNodeGotoRemote extends JsonSerializableType
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
     * @var string $filePath
     */
    #[JsonProperty('filePath')]
    public string $filePath;

    /**
     * @param array{
     *   subtype: string,
     *   next: array<mixed>,
     *   filePath: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->subtype = $values['subtype'];
        $this->next = $values['next'];
        $this->filePath = $values['filePath'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
