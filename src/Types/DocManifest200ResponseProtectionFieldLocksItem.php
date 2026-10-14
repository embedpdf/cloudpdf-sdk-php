<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocManifest200ResponseProtectionFieldLocksItem extends JsonSerializableType
{
    /**
     * @var int $signatureIndex
     */
    #[JsonProperty('signatureIndex')]
    public int $signatureIndex;

    /**
     * @var value-of<DocManifest200ResponseProtectionFieldLocksItemSource> $source
     */
    #[JsonProperty('source')]
    public string $source;

    /**
     * @var DocManifest200ResponseProtectionFieldLocksItemSpec $spec
     */
    #[JsonProperty('spec')]
    public DocManifest200ResponseProtectionFieldLocksItemSpec $spec;

    /**
     * @param array{
     *   signatureIndex: int,
     *   source: value-of<DocManifest200ResponseProtectionFieldLocksItemSource>,
     *   spec: DocManifest200ResponseProtectionFieldLocksItemSpec,
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
