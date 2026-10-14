<?php

namespace CloudPDF\Doc\Forms\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Types\WidgetPatch;
use CloudPDF\Core\Json\JsonProperty;

class DocFormsUpdateWidgetRequest extends JsonSerializableType
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
     * @var WidgetPatch $patch
     */
    #[JsonProperty('patch')]
    public WidgetPatch $patch;

    /**
     * @param array{
     *   patch: WidgetPatch,
     *   documentPassword?: ?string,
     *   idempotencyKey?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->documentPassword = $values['documentPassword'] ?? null;
        $this->idempotencyKey = $values['idempotencyKey'] ?? null;
        $this->patch = $values['patch'];
    }
}
