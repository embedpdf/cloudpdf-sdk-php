<?php

namespace CloudPDF\Doc\Signatures\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Doc\Signatures\Types\AnalysisSignaturesRequestLevel;

class AnalysisSignaturesRequest extends JsonSerializableType
{
    /**
     * @var ?int $sinceSignature
     */
    public ?int $sinceSignature;

    /**
     * @var ?int $sinceRevision
     */
    public ?int $sinceRevision;

    /**
     * @var ?value-of<AnalysisSignaturesRequestLevel> $level
     */
    public ?string $level;

    /**
     * @var ?string $documentPassword Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
     */
    public ?string $documentPassword;

    /**
     * @param array{
     *   sinceSignature?: ?int,
     *   sinceRevision?: ?int,
     *   level?: ?value-of<AnalysisSignaturesRequestLevel>,
     *   documentPassword?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->sinceSignature = $values['sinceSignature'] ?? null;
        $this->sinceRevision = $values['sinceRevision'] ?? null;
        $this->level = $values['level'] ?? null;
        $this->documentPassword = $values['documentPassword'] ?? null;
    }
}
