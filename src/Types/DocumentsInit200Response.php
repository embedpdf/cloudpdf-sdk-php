<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocumentsInit200Response extends JsonSerializableType
{
    /**
     * @var (
     *    'created'
     *   |'resumed'
     *   |'deduped'
     *   |'_unknown'
     * ) $tag
     */
    public readonly string $tag;

    /**
     * @var (
     *    DocumentsInit200ResponseCreated
     *   |DocumentsInit200ResponseResumed
     *   |DocumentsInit200ResponseDeduped
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   tag: (
     *    'created'
     *   |'resumed'
     *   |'deduped'
     *   |'_unknown'
     * ),
     *   value: (
     *    DocumentsInit200ResponseCreated
     *   |DocumentsInit200ResponseResumed
     *   |DocumentsInit200ResponseDeduped
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->tag = $values['tag'];
        $this->value = $values['value'];
    }

    /**
     * @param DocumentsInit200ResponseCreated $created
     * @return DocumentsInit200Response
     */
    public static function created(DocumentsInit200ResponseCreated $created): DocumentsInit200Response
    {
        return new DocumentsInit200Response([
            'tag' => 'created',
            'value' => $created,
        ]);
    }

    /**
     * @param DocumentsInit200ResponseResumed $resumed
     * @return DocumentsInit200Response
     */
    public static function resumed(DocumentsInit200ResponseResumed $resumed): DocumentsInit200Response
    {
        return new DocumentsInit200Response([
            'tag' => 'resumed',
            'value' => $resumed,
        ]);
    }

    /**
     * @param DocumentsInit200ResponseDeduped $deduped
     * @return DocumentsInit200Response
     */
    public static function deduped(DocumentsInit200ResponseDeduped $deduped): DocumentsInit200Response
    {
        return new DocumentsInit200Response([
            'tag' => 'deduped',
            'value' => $deduped,
        ]);
    }

    /**
     * @return bool
     */
    public function isCreated(): bool
    {
        return $this->value instanceof DocumentsInit200ResponseCreated && $this->tag === 'created';
    }

    /**
     * @return DocumentsInit200ResponseCreated
     */
    public function asCreated(): DocumentsInit200ResponseCreated
    {
        if (!($this->value instanceof DocumentsInit200ResponseCreated && $this->tag === 'created')) {
            throw new Exception(
                "Expected created; got " . $this->tag . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isResumed(): bool
    {
        return $this->value instanceof DocumentsInit200ResponseResumed && $this->tag === 'resumed';
    }

    /**
     * @return DocumentsInit200ResponseResumed
     */
    public function asResumed(): DocumentsInit200ResponseResumed
    {
        if (!($this->value instanceof DocumentsInit200ResponseResumed && $this->tag === 'resumed')) {
            throw new Exception(
                "Expected resumed; got " . $this->tag . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isDeduped(): bool
    {
        return $this->value instanceof DocumentsInit200ResponseDeduped && $this->tag === 'deduped';
    }

    /**
     * @return DocumentsInit200ResponseDeduped
     */
    public function asDeduped(): DocumentsInit200ResponseDeduped
    {
        if (!($this->value instanceof DocumentsInit200ResponseDeduped && $this->tag === 'deduped')) {
            throw new Exception(
                "Expected deduped; got " . $this->tag . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }

    /**
     * @return array<mixed>
     */
    public function jsonSerialize(): array
    {
        $result = [];
        $result['tag'] = $this->tag;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->tag) {
            case 'created':
                $value = $this->asCreated()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'resumed':
                $value = $this->asResumed()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'deduped':
                $value = $this->asDeduped()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case '_unknown':
            default:
                if (is_null($this->value)) {
                    break;
                }
                if ($this->value instanceof JsonSerializableType) {
                    $value = $this->value->jsonSerialize();
                    $result = array_merge($value, $result);
                } elseif (is_array($this->value)) {
                    $result = array_merge($this->value, $result);
                }
        }

        return $result;
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function jsonDeserialize(array $data): static
    {
        $args = [];
        if (!array_key_exists('tag', $data)) {
            throw new Exception(
                "JSON data is missing property 'tag'",
            );
        }
        $tag = $data['tag'];
        if (!(is_string($tag))) {
            throw new Exception(
                "Expected property 'tag' in JSON data to be string, instead received " . get_debug_type($data['tag']),
            );
        }

        $args['tag'] = $tag;
        switch ($tag) {
            case 'created':
                $args['value'] = DocumentsInit200ResponseCreated::jsonDeserialize($data);
                break;
            case 'resumed':
                $args['value'] = DocumentsInit200ResponseResumed::jsonDeserialize($data);
                break;
            case 'deduped':
                $args['value'] = DocumentsInit200ResponseDeduped::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['tag'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
