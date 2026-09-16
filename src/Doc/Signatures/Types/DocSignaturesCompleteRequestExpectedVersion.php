<?php

namespace CloudPDF\Doc\Signatures\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocSignaturesCompleteRequestExpectedVersion extends JsonSerializableType
{
    /**
     * @var string $baseSha256
     */
    #[JsonProperty('baseSha256')]
    public string $baseSha256;

    /**
     * @var int $editsVersion
     */
    #[JsonProperty('editsVersion')]
    public int $editsVersion;

    /**
     * @param array{
     *   baseSha256: string,
     *   editsVersion: int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->baseSha256 = $values['baseSha256'];
        $this->editsVersion = $values['editsVersion'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
