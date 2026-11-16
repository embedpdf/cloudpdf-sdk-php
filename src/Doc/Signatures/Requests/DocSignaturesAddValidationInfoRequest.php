<?php

namespace CloudPDF\Doc\Signatures\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocSignaturesAddValidationInfoRequest extends JsonSerializableType
{
    /**
     * @var ?string $documentPassword Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
     */
    public ?string $documentPassword;

    /**
     * @var ?string $idempotencyKey Names the change: 1 to 255 printable ASCII characters. A retry under the same key on the same layer answers with what the first request committed, and changes nothing.
     */
    public ?string $idempotencyKey;

    /**
     * @var ?array<string> $certificates
     */
    #[JsonProperty('certificates'), ArrayType(['string'])]
    public ?array $certificates;

    /**
     * @var ?array<string> $ocspResponses
     */
    #[JsonProperty('ocspResponses'), ArrayType(['string'])]
    public ?array $ocspResponses;

    /**
     * @var ?array<string> $crls
     */
    #[JsonProperty('crls'), ArrayType(['string'])]
    public ?array $crls;

    /**
     * @param array{
     *   documentPassword?: ?string,
     *   idempotencyKey?: ?string,
     *   certificates?: ?array<string>,
     *   ocspResponses?: ?array<string>,
     *   crls?: ?array<string>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->documentPassword = $values['documentPassword'] ?? null;
        $this->idempotencyKey = $values['idempotencyKey'] ?? null;
        $this->certificates = $values['certificates'] ?? null;
        $this->ocspResponses = $values['ocspResponses'] ?? null;
        $this->crls = $values['crls'] ?? null;
    }
}
