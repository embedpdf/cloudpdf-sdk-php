<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocSignaturesComplete200ResponseProtectionFieldLocksItem extends JsonSerializableType
{
    /**
     * @var int $signatureIndex
     */
    #[JsonProperty('signatureIndex')]
    public int $signatureIndex;

    /**
     * @var value-of<DocSignaturesComplete200ResponseProtectionFieldLocksItemSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var ?DocSignaturesComplete200ResponseProtectionFieldLocksItemSpec $spec
     */
    #[JsonProperty('spec')]
    public ?DocSignaturesComplete200ResponseProtectionFieldLocksItemSpec $spec;

    /**
     * @param array{
     *   signatureIndex: int,
     *   source: value-of<DocSignaturesComplete200ResponseProtectionFieldLocksItemSource>,
     *   spec?: ?DocSignaturesComplete200ResponseProtectionFieldLocksItemSpec,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->signatureIndex = $values['signatureIndex'];
        $this->source = $values['source'];
        $this->spec = $values['spec'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
