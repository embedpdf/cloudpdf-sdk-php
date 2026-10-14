<?php

namespace CloudPDF\Doc\Forms\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Types\FormFieldRef;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;
use CloudPDF\Types\FieldPositionZero;
use CloudPDF\Types\FieldPositionAfter;
use CloudPDF\Core\Types\Union;

class DocFormsReorderCalculationsRequest extends JsonSerializableType
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
     * @var array<FormFieldRef> $fields
     */
    #[JsonProperty('fields'), ArrayType([FormFieldRef::class])]
    public array $fields;

    /**
     * @var (
     *    value-of<FieldPositionZero>
     *   |FieldPositionAfter
     * ) $position
     */
    #[JsonProperty('position'), Union('string', FieldPositionAfter::class)]
    public string|FieldPositionAfter $position;

    /**
     * @param array{
     *   fields: array<FormFieldRef>,
     *   position: (
     *    value-of<FieldPositionZero>
     *   |FieldPositionAfter
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
        $this->fields = $values['fields'];
        $this->position = $values['position'];
    }
}
