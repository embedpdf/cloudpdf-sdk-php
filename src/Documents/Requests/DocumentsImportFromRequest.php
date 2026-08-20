<?php

namespace CloudPDF\Documents\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Documents\Types\DocumentsImportFromRequestSource;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Documents\Types\DocumentsImportFromRequestExpected;
use CloudPDF\Core\Types\ArrayType;
use CloudPDF\Documents\Types\DocumentsImportFromRequestDedupMode;
use CloudPDF\Documents\Types\DocumentsImportFromRequestMode;

class DocumentsImportFromRequest extends JsonSerializableType
{
    /**
     * @var DocumentsImportFromRequestSource $source
     */
    #[JsonProperty('source')]
    public DocumentsImportFromRequestSource $source;

    /**
     * @var ?DocumentsImportFromRequestExpected $expected
     */
    #[JsonProperty('expected')]
    public ?DocumentsImportFromRequestExpected $expected;

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
     * @var ?value-of<DocumentsImportFromRequestDedupMode> $dedupMode
     */
    #[JsonProperty('dedupMode')]
    public ?string $dedupMode;

    /**
     * @var ?string $docId
     */
    #[JsonProperty('docId')]
    public ?string $docId;

    /**
     * @var ?value-of<DocumentsImportFromRequestMode> $mode
     */
    #[JsonProperty('mode')]
    public ?string $mode;

    /**
     * @param array{
     *   source: DocumentsImportFromRequestSource,
     *   expected?: ?DocumentsImportFromRequestExpected,
     *   metadata?: ?array<string, mixed>,
     *   idempotencyKey?: ?string,
     *   dedupMode?: ?value-of<DocumentsImportFromRequestDedupMode>,
     *   docId?: ?string,
     *   mode?: ?value-of<DocumentsImportFromRequestMode>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->source = $values['source'];
        $this->expected = $values['expected'] ?? null;
        $this->metadata = $values['metadata'] ?? null;
        $this->idempotencyKey = $values['idempotencyKey'] ?? null;
        $this->dedupMode = $values['dedupMode'] ?? null;
        $this->docId = $values['docId'] ?? null;
        $this->mode = $values['mode'] ?? null;
    }
}
