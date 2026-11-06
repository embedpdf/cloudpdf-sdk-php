<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocVersionsSignaturesResponseProtectionFieldLocksItem extends JsonSerializableType
{
    /**
     * @var int $signatureIndex
     */
    #[JsonProperty('signatureIndex')]
    public int $signatureIndex;

    /**
     * @var value-of<DocVersionsSignaturesResponseProtectionFieldLocksItemSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var FieldLockSpec $spec
     */
    #[JsonProperty('spec')]
    public FieldLockSpec $spec;

    /**
     * @param array{
     *   signatureIndex: int,
     *   source: value-of<DocVersionsSignaturesResponseProtectionFieldLocksItemSource>,
     *   spec: FieldLockSpec,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->signatureIndex = $values['signatureIndex'];
        $this->source = $values['source'];
        $this->spec = $values['spec'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
