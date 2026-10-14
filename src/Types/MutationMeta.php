<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class MutationMeta extends JsonSerializableType
{
    /**
     * @var array<PageRef> $affectedPages
     */
    #[JsonProperty('affectedPages'), ArrayType([PageRef::class])]
    public array $affectedPages;

    /**
     * @var ?CacheDelta $cacheDelta
     */
    #[JsonProperty('cacheDelta')]
    public ?CacheDelta $cacheDelta;

    /**
     * @var string $opId
     */
    #[JsonProperty('opId')]
    public string $opId;

    /**
     * @var bool $undoable
     */
    #[JsonProperty('undoable')]
    public bool $undoable;

    /**
     * @param array{
     *   affectedPages: array<PageRef>,
     *   opId: string,
     *   undoable: bool,
     *   cacheDelta?: ?CacheDelta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->affectedPages = $values['affectedPages'];
        $this->cacheDelta = $values['cacheDelta'] ?? null;
        $this->opId = $values['opId'];
        $this->undoable = $values['undoable'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
