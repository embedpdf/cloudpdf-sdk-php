<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsUploadDirect200Response extends JsonSerializableType
{
    /**
     * @var string $sha256
     */
    #[JsonProperty('sha256')]
    public string $sha256;

    /**
     * @param array{
     *   sha256: string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sha256 = $values['sha256'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
