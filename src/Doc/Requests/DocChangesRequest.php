<?php

namespace CloudPDF\Doc\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Doc\Types\DocChangesRequestChangesItem;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class DocChangesRequest extends JsonSerializableType
{
    /**
     * @var ?string $documentPassword Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
     */
    public ?string $documentPassword;

    /**
     * @var array<DocChangesRequestChangesItem> $changes
     */
    #[JsonProperty('changes'), ArrayType([DocChangesRequestChangesItem::class])]
    public array $changes;

    /**
     * @param array{
     *   changes: array<DocChangesRequestChangesItem>,
     *   documentPassword?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->documentPassword = $values['documentPassword'] ?? null;
        $this->changes = $values['changes'];
    }
}
