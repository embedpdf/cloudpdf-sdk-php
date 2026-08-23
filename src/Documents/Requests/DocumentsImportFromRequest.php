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
     * @var DocumentsImportFromRequestSource $source Where CloudPDF pulls the bytes from. The two shapes differ in WHO supplies the authority to read, not in which storage vendor holds the file.
     */
    #[JsonProperty('source')]
    public DocumentsImportFromRequestSource $source;

    /**
     * @var ?DocumentsImportFromRequestExpected $expected Integrity pins, enforced when present. When absent, the server-observed values become authoritative.
     */
    #[JsonProperty('expected')]
    public ?DocumentsImportFromRequestExpected $expected;

    /**
     * @var ?array<string, mixed> $metadata
     */
    #[JsonProperty('metadata'), ArrayType(['string' => 'mixed'])]
    public ?array $metadata;

    /**
     * @var ?string $idempotencyKey Retrying with the same key resumes the same document rather than importing a second copy — including after a 502.
     */
    #[JsonProperty('idempotencyKey')]
    public ?string $idempotencyKey;

    /**
     * @var ?value-of<DocumentsImportFromRequestDedupMode> $dedupMode always-create (default) creates a new document every time. reuse-existing returns a document that already holds the same content instead of storing it twice.
     */
    #[JsonProperty('dedupMode')]
    public ?string $dedupMode;

    /**
     * @var ?string $docId
     */
    #[JsonProperty('docId')]
    public ?string $docId;

    /**
     * @var ?value-of<DocumentsImportFromRequestMode> $mode sync (default) holds the response open for the whole transfer. async answers 202 with the document pending and transfers in the background; it requires a connection source, and filesystem connections additionally require expected.sha256.
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
