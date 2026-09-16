<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocVersionsSignatures200ResponseProtectionFieldLocksItem extends JsonSerializableType
{
    /**
     * @var int $signatureIndex
     */
    #[JsonProperty('signatureIndex')]
    public int $signatureIndex;

    /**
     * @var value-of<DocVersionsSignatures200ResponseProtectionFieldLocksItemSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var ?DocVersionsSignatures200ResponseProtectionFieldLocksItemSpec $spec
     */
    #[JsonProperty('spec')]
    public ?DocVersionsSignatures200ResponseProtectionFieldLocksItemSpec $spec;

    /**
     * @param array{
     *   signatureIndex: int,
     *   source: value-of<DocVersionsSignatures200ResponseProtectionFieldLocksItemSource>,
     *   spec?: ?DocVersionsSignatures200ResponseProtectionFieldLocksItemSpec,
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
