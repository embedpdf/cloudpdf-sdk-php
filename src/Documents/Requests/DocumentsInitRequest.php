<?php

namespace CloudPDF\Documents\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;
use CloudPDF\Documents\Types\DocumentsInitRequestDedupMode;
use CloudPDF\Documents\Types\DocumentsInitRequestUploadPreference;

class DocumentsInitRequest extends JsonSerializableType
{
    /**
     * @var int $sizeBytes
     */
    #[JsonProperty('sizeBytes')]
    public int $sizeBytes;

    /**
     * @var string $contentSha256
     */
    #[JsonProperty('contentSha256')]
    public string $contentSha256;

    /**
     * @var ?string $name What people call the document: shown in dashboards, searched and sorted by. 1 to 255 characters, no control characters, no leading or trailing whitespace. Names need not be unique.
     */
    #[JsonProperty('name')]
    public ?string $name;

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
     * @var ?string $idempotencyKey
     */
    #[JsonProperty('idempotencyKey')]
    public ?string $idempotencyKey;

    /**
     * @var ?value-of<DocumentsInitRequestDedupMode> $dedupMode always-create (default) creates a new document every time. reuse-existing returns a document that already holds the same content instead of storing it twice.
     */
    #[JsonProperty('dedupMode')]
    public ?string $dedupMode;

    /**
     * @var ?string $docId
     */
    #[JsonProperty('docId')]
    public ?string $docId;

    /**
     * @var ?int $uploadTtlSeconds
     */
    #[JsonProperty('uploadTtlSeconds')]
    public ?int $uploadTtlSeconds;

    /**
     * @var ?value-of<DocumentsInitRequestUploadPreference> $uploadPreference
     */
    #[JsonProperty('uploadPreference')]
    public ?string $uploadPreference;

    /**
     * @param array{
     *   sizeBytes: int,
     *   contentSha256: string,
     *   name?: ?string,
     *   folderId?: ?string,
     *   metadata?: ?array<string, mixed>,
     *   idempotencyKey?: ?string,
     *   dedupMode?: ?value-of<DocumentsInitRequestDedupMode>,
     *   docId?: ?string,
     *   uploadTtlSeconds?: ?int,
     *   uploadPreference?: ?value-of<DocumentsInitRequestUploadPreference>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->sizeBytes = $values['sizeBytes'];
        $this->contentSha256 = $values['contentSha256'];
        $this->name = $values['name'] ?? null;
        $this->folderId = $values['folderId'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->idempotencyKey = $values['idempotencyKey'] ?? null;
        $this->dedupMode = $values['dedupMode'] ?? null;
        $this->docId = $values['docId'] ?? null;
        $this->uploadTtlSeconds = $values['uploadTtlSeconds'] ?? null;
        $this->uploadPreference = $values['uploadPreference'] ?? null;
    }
}
