<?php

namespace Cloudpdf\Doc\Pages\Requests;

use Cloudpdf\Core\Json\JsonSerializableType;

class FlattenPagesRequest extends JsonSerializableType
{
    /**
     * @var ?string $documentPassword Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
     */
    public ?string $documentPassword;

    /**
     * @var array<string, mixed> $body
     */
    public array $body;

    /**
     * @param array{
     *   body: array<string, mixed>,
     *   documentPassword?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->documentPassword = $values['documentPassword'] ?? null;
        $this->body = $values['body'];
    }
}
