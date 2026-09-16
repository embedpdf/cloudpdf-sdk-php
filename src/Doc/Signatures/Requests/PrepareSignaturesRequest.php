<?php

namespace CloudPDF\Doc\Signatures\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Utils\File;

class PrepareSignaturesRequest extends JsonSerializableType
{
    /**
     * @var ?string $documentPassword Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
     */
    public ?string $documentPassword;

    /**
     * @var File $file
     */
    public File $file;

    /**
     * @param array{
     *   file: File,
     *   documentPassword?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->documentPassword = $values['documentPassword'] ?? null;
        $this->file = $values['file'];
    }
}
