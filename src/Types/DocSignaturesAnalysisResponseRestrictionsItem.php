<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocSignaturesAnalysisResponseRestrictionsItem extends JsonSerializableType
{
    /**
     * @var int $signatureIndex
     */
    #[JsonProperty('signatureIndex')]
    public int $signatureIndex;

    /**
     * @var int $revisionIndex
     */
    #[JsonProperty('revisionIndex')]
    public int $revisionIndex;

    /**
     * @var value-of<DocSignaturesAnalysisResponseRestrictionsItemSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var bool $own
     */
    #[JsonProperty('own')]
    public bool $own;

    /**
     * @var ?int $permission
     */
    #[JsonProperty('permission')]
    public ?int $permission;

    /**
     * @var mixed $fields
     */
    #[JsonProperty('fields')]
    public mixed $fields;

    /**
     * @param array{
     *   signatureIndex: int,
     *   revisionIndex: int,
     *   source: value-of<DocSignaturesAnalysisResponseRestrictionsItemSource>,
     *   own: bool,
     *   permission?: ?int,
     *   fields?: mixed,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->signatureIndex = $values['signatureIndex'];
        $this->revisionIndex = $values['revisionIndex'];
        $this->source = $values['source'];
        $this->own = $values['own'];
        $this->permission = $values['permission'] ?? null;
        $this->fields = $values['fields'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
