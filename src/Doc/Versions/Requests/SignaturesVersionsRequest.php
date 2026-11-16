<?php

namespace CloudPDF\Doc\Versions\Requests;

use CloudPDF\Core\Json\JsonSerializableType;

class SignaturesVersionsRequest extends JsonSerializableType
{
    /**
     * @var ?string $engine The `signatures` engine value from the layer's head (`engine.signatures`): what the answer is computed with besides the file. With it, the answer is cached.
     */
    public ?string $engine;

    /**
     * @var ?string $documentPassword Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
     */
    public ?string $documentPassword;

    /**
     * @param array{
     *   engine?: ?string,
     *   documentPassword?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->engine = $values['engine'] ?? null;
        $this->documentPassword = $values['documentPassword'] ?? null;
    }
}
