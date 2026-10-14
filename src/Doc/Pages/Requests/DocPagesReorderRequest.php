<?php

namespace CloudPDF\Doc\Pages\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Types\PageRef;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;
use CloudPDF\Types\PagePositionZero;
use CloudPDF\Types\PagePositionAfter;
use CloudPDF\Core\Types\Union;

class DocPagesReorderRequest extends JsonSerializableType
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
     * @var array<PageRef> $pages
     */
    #[JsonProperty('pages'), ArrayType([PageRef::class])]
    public array $pages;

    /**
     * @var (
     *    value-of<PagePositionZero>
     *   |PagePositionAfter
     * ) $position
     */
    #[JsonProperty('position'), Union('string', PagePositionAfter::class)]
    public string|PagePositionAfter $position;

    /**
     * @param array{
     *   pages: array<PageRef>,
     *   position: (
     *    value-of<PagePositionZero>
     *   |PagePositionAfter
     * ),
     *   documentPassword?: ?string,
     *   idempotencyKey?: ?string,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->documentPassword = $values['documentPassword'] ?? null;
        $this->idempotencyKey = $values['idempotencyKey'] ?? null;
        $this->pages = $values['pages'];
        $this->position = $values['position'];
    }
}
