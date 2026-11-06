<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocManifestResponseProtectionCertification extends JsonSerializableType
{
    /**
     * @var int $signatureIndex
     */
    #[JsonProperty('signatureIndex')]
    public int $signatureIndex;

    /**
     * @var int $permission
     */
    #[JsonProperty('permission')]
    public int $permission;

    /**
     * @param array{
     *   signatureIndex: int,
     *   permission: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->signatureIndex = $values['signatureIndex'];
        $this->permission = $values['permission'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
