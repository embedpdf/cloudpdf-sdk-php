<?php

namespace CloudPDF\Doc\Forms\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Types\FormFieldRef;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocFormsResetRequest extends JsonSerializableType
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
     * @var ?array<FormFieldRef> $refs
     */
    #[JsonProperty('refs'), ArrayType([FormFieldRef::class])]
    public ?array $refs;

    /**
     * @param array{
     *   documentPassword?: ?string,
     *   idempotencyKey?: ?string,
     *   refs?: ?array<FormFieldRef>,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->documentPassword = $values['documentPassword'] ?? null;
        $this->idempotencyKey = $values['idempotencyKey'] ?? null;
        $this->refs = $values['refs'] ?? null;
    }
}
