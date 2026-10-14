<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class ChangeItemMetadataUpdate extends JsonSerializableType
{
    /**
     * @var ?array<string> $skipped
     */
    #[JsonProperty('skipped'), ArrayType(['string'])]
    public ?array $skipped;

    /**
     * @var DocumentMetadata $metadata
     */
    #[JsonProperty('metadata')]
    public DocumentMetadata $metadata;

    /**
     * @var MutationMeta $meta
     */
    #[JsonProperty('meta')]
    public MutationMeta $meta;

    /**
     * @param array{
     *   metadata: DocumentMetadata,
     *   meta: MutationMeta,
     *   skipped?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->skipped = $values['skipped'] ?? null;
        $this->metadata = $values['metadata'];
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
