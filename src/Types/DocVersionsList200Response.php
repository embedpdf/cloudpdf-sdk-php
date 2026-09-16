<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocVersionsList200Response extends JsonSerializableType
{
    /**
     * @var string $head
     */
    #[JsonProperty('head')]
    public string $head;

    /**
     * @var array<DocVersionsList200ResponseVersionsItem> $versions
     */
    #[JsonProperty('versions'), ArrayType([DocVersionsList200ResponseVersionsItem::class])]
    public array $versions;

    /**
     * @param array{
     *   head: string,
     *   versions: array<DocVersionsList200ResponseVersionsItem>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->head = $values['head'];
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
