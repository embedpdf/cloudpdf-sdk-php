<?php

namespace Cloudpdf\Documents\Requests;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use Cloudpdf\Core\Types\ArrayType;
use Cloudpdf\Documents\Types\DocumentsInitRequestDedupMode;

class DocumentsInitRequest extends JsonSerializableType
{
    /**
     * @var float $contentLength
     */
    #[JsonProperty('contentLength')]
    public float $contentLength;

    /**
     * @var string $contentSha256
     */
    #[JsonProperty('contentSha256')]
    public string $contentSha256;

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
     * @var ?value-of<DocumentsInitRequestDedupMode> $dedupMode
     */
    #[JsonProperty('dedupMode')]
    public ?string $dedupMode;

    /**
     * @var ?string $docId
     */
    #[JsonProperty('docId')]
    public ?string $docId;

    /**
     * @var ?float $uploadTtlSec
     */
    #[JsonProperty('uploadTtlSec')]
    public ?float $uploadTtlSec;

    /**
     * @param array{
     *   contentLength: float,
     *   contentSha256: string,
     *   metadata?: ?array<string, mixed>,
     *   idempotencyKey?: ?string,
     *   dedupMode?: ?value-of<DocumentsInitRequestDedupMode>,
     *   docId?: ?string,
     *   uploadTtlSec?: ?float,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->contentLength = $values['contentLength'];
        $this->contentSha256 = $values['contentSha256'];
        $this->metadata = $values['metadata'] ?? null;
        $this->idempotencyKey = $values['idempotencyKey'] ?? null;
        $this->dedupMode = $values['dedupMode'] ?? null;
        $this->docId = $values['docId'] ?? null;
        $this->uploadTtlSec = $values['uploadTtlSec'] ?? null;
    }
}
