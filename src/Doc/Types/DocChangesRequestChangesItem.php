<?php

namespace CloudPDF\Doc\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Types\ChangeOp;
use CloudPDF\Core\Types\ArrayType;

class DocChangesRequestChangesItem extends JsonSerializableType
{
    /**
     * @var string $opId
     */
    #[JsonProperty('opId')]
    public string $opId;

    /**
     * @var ?array<ChangeOp> $ops
     */
    #[JsonProperty('ops'), ArrayType([ChangeOp::class])]
    public ?array $ops;

    /**
     * @var ?string $undoOf
     */
    #[JsonProperty('undoOf')]
    public ?string $undoOf;

    /**
     * @param array{
     *   opId: string,
     *   ops?: ?array<ChangeOp>,
     *   undoOf?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->opId = $values['opId'];
        $this->ops = $values['ops'] ?? null;
        $this->undoOf = $values['undoOf'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
