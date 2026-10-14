<?php

namespace CloudPDF\Doc\Annotations\Requests;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Types\AnnotationRef;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;
use CloudPDF\Types\AnnotationPositionZero;
use CloudPDF\Types\AnnotationPositionAfter;
use CloudPDF\Core\Types\Union;

class DocAnnotationsReorderRequest extends JsonSerializableType
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
     * @var array<AnnotationRef> $refs
     */
    #[JsonProperty('refs'), ArrayType([AnnotationRef::class])]
    public array $refs;

    /**
     * @var (
     *    value-of<AnnotationPositionZero>
     *   |AnnotationPositionAfter
     * ) $position
     */
    #[JsonProperty('position'), Union('string', AnnotationPositionAfter::class)]
    public string|AnnotationPositionAfter $position;

    /**
     * @param array{
     *   refs: array<AnnotationRef>,
     *   position: (
     *    value-of<AnnotationPositionZero>
     *   |AnnotationPositionAfter
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
        $this->refs = $values['refs'];
        $this->position = $values['position'];
    }
}
