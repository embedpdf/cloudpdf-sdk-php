<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocVersionsList200Response extends JsonSerializableType
{
    /**
     * @var string $baseSha
     */
    #[JsonProperty('baseSha')]
    public string $baseSha;

    /**
     * @var array<DocVersionsList200ResponseVersionsItem> $versions
     */
    #[JsonProperty('versions'), ArrayType([DocVersionsList200ResponseVersionsItem::class])]
    public array $versions;

    /**
     * @param array{
     *   baseSha: string,
     *   versions: array<DocVersionsList200ResponseVersionsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->baseSha = $values['baseSha'];
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
