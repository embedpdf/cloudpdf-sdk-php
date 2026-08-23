<?php

namespace CloudPDF\Documents\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

/**
 * Integrity pins, enforced when present. When absent, the server-observed values become authoritative.
 */
class DocumentsImportFromRequestExpected extends JsonSerializableType
{
    /**
     * @var ?int $sizeBytes Checked against the source's declared Content-Length before the transfer.
     */
    #[JsonProperty('sizeBytes')]
    public ?int $sizeBytes;

    /**
     * @var ?string $sha256 Checked against the server-observed digest after the transfer. Required when dedupMode is reuse-existing.
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
