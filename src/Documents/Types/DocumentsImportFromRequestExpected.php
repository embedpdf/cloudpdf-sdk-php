<?php

namespace CloudPDF\Documents\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocumentsImportFromRequestExpected extends JsonSerializableType
{
    /**
     * @var ?int $sizeBytes
     */
    #[JsonProperty('sizeBytes')]
    public ?int $sizeBytes;

    /**
     * @var ?string $sha256
     */
    #[JsonProperty('sha256')]
    public ?string $sha256;

    /**
     * @param array{
     *   sizeBytes?: ?int,
     *   sha256?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->sizeBytes = $values['sizeBytes'] ?? null;
        $this->sha256 = $values['sha256'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
