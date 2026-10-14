<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemMetadataUpdateCustom extends JsonSerializableType
{
    /**
     * @var ?array<string> $skipped
     */
    #[JsonProperty('skipped'), ArrayType(['string'])]
    public ?array $skipped;

    /**
     * @var array<string, string> $custom
     */
    #[JsonProperty('custom'), ArrayType(['string' => 'string'])]
    public array $custom;

    /**
     * @var MutationMeta $meta
     */
    #[JsonProperty('meta')]
    public MutationMeta $meta;

    /**
     * @param array{
     *   custom: array<string, string>,
     *   meta: MutationMeta,
     *   skipped?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->skipped = $values['skipped'] ?? null;
        $this->custom = $values['custom'];
        $this->meta = $values['meta'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
