<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocVersionsListResponse extends JsonSerializableType
{
    /**
     * @var string $baseSha256
     */
    #[JsonProperty('baseSha256')]
    public string $baseSha256;

    /**
     * @var array<DocVersionsListResponseVersionsItem> $versions
     */
    #[JsonProperty('versions'), ArrayType([DocVersionsListResponseVersionsItem::class])]
    public array $versions;

    /**
     * @param array{
     *   baseSha256: string,
     *   versions: array<DocVersionsListResponseVersionsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->baseSha256 = $values['baseSha256'];
        $this->versions = $values['versions'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
