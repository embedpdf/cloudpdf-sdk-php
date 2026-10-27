<?php

namespace CloudPDF\Doc\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocDownloadLinkRequest extends JsonSerializableType
{
    /**
     * @var ?string $documentPassword Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
     */
    public ?string $documentPassword;

    /**
     * @var ?int $expiresIn
     */
    #[JsonProperty('expiresIn')]
    public ?int $expiresIn;

    /**
     * @param array{
     *   documentPassword?: ?string,
     *   expiresIn?: ?int,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->documentPassword = $values['documentPassword'] ?? null;
        $this->expiresIn = $values['expiresIn'] ?? null;
    }
}
