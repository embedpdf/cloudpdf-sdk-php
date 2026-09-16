<?php

namespace CloudPDF\Doc\Versions\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Doc\Versions\Types\AnalysisVersionsRequestLevel;

class AnalysisVersionsRequest extends JsonSerializableType
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
     * @var ?value-of<AnalysisVersionsRequestLevel> $level
     */
    public ?string $level;

    /**
     * @var ?int $until
     */
    public ?int $until;

    /**
     * @var ?int $policy
     */
    public ?int $policy;

    /**
     * @var ?string $documentPassword Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
     */
    public ?string $documentPassword;

    /**
     * @param array{
     *   sinceSignature?: ?int,
     *   sinceRevision?: ?int,
     *   level?: ?value-of<AnalysisVersionsRequestLevel>,
     *   until?: ?int,
     *   policy?: ?int,
     *   documentPassword?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->sinceSignature = $values['sinceSignature'] ?? null;
        $this->sinceRevision = $values['sinceRevision'] ?? null;
        $this->level = $values['level'] ?? null;
        $this->until = $values['until'] ?? null;
        $this->policy = $values['policy'] ?? null;
        $this->documentPassword = $values['documentPassword'] ?? null;
    }
}
