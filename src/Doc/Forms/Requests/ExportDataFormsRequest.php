<?php

namespace CloudPDF\Doc\Forms\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Doc\Forms\Types\ExportDataFormsRequestFormat;

class ExportDataFormsRequest extends JsonSerializableType
{
    /**
     * @var ?value-of<ExportDataFormsRequestFormat> $format
     */
    public ?string $format;

    /**
     * @var ?string $documentPassword Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
     */
    public ?string $documentPassword;

    /**
     * @param array{
     *   format?: ?value-of<ExportDataFormsRequestFormat>,
     *   documentPassword?: ?string,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->format = $values['format'] ?? null;
        $this->documentPassword = $values['documentPassword'] ?? null;
    }
}
