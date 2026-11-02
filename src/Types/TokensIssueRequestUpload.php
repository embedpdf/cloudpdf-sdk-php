<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class TokensIssueRequestUpload extends JsonSerializableType
{
    /**
     * @var string $sub
     */
    #[JsonProperty('sub')]
    public string $sub;

    /**
     * @var ?string $folderId A folder id, or root for the top level.
     */
    #[JsonProperty('folderId')]
    public ?string $folderId;

    /**
     * @var ?array<string, mixed> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @var ?int $maxFiles
     */
    #[JsonProperty('maxFiles')]
    public ?int $maxFiles;

    /**
     * @var ?int $maxBytes
     */
    #[JsonProperty('maxBytes')]
    public ?int $maxBytes;

    /**
     * @var ?array<string> $origins
     */
    #[JsonProperty('origins'), ArrayType(['string'])]
    public ?array $origins;

    /**
     * @var int $expiresIn
     */
    #[JsonProperty('expiresIn')]
    public int $expiresIn;

    /**
     * @param array{
     *   sub: string,
     *   expiresIn: int,
     *   folderId?: ?string,
     *   metadata?: ?array<string, mixed>,
     *   maxFiles?: ?int,
     *   maxBytes?: ?int,
     *   origins?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sub = $values['sub'];
        $this->folderId = $values['folderId'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->maxFiles = $values['maxFiles'] ?? null;
        $this->maxBytes = $values['maxBytes'] ?? null;
        $this->origins = $values['origins'] ?? null;
        $this->expiresIn = $values['expiresIn'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
