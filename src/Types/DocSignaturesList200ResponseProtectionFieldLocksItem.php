<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocSignaturesList200ResponseProtectionFieldLocksItem extends JsonSerializableType
{
    /**
     * @var int $signatureIndex
     */
    #[JsonProperty('signatureIndex')]
    public int $signatureIndex;

    /**
     * @var value-of<DocSignaturesList200ResponseProtectionFieldLocksItemSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var ?DocSignaturesList200ResponseProtectionFieldLocksItemSpec $spec
     */
    #[JsonProperty('spec')]
    public ?DocSignaturesList200ResponseProtectionFieldLocksItemSpec $spec;

    /**
     * @param array{
     *   signatureIndex: int,
     *   source: value-of<DocSignaturesList200ResponseProtectionFieldLocksItemSource>,
     *   spec?: ?DocSignaturesList200ResponseProtectionFieldLocksItemSpec,
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
