<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocumentsInitResponse extends JsonSerializableType
{
    /**
     * @var (
     *    'created'
     *   |'resumed'
     *   |'deduped'
     *   |'_unknown'
     * ) $status
     */
    public readonly string $status;

    /**
     * @var (
     *    DocumentsInitResponseCreated
     *   |DocumentsInitResponseResumed
     *   |DocumentsInitResponseDeduped
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   status: (
     *    'created'
     *   |'resumed'
     *   |'deduped'
     *   |'_unknown'
     * ),
     *   value: (
     *    DocumentsInitResponseCreated
     *   |DocumentsInitResponseResumed
     *   |DocumentsInitResponseDeduped
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->status = $values['status'];
        $this->value = $values['value'];
    }

    /**
     * @param DocumentsInitResponseCreated $created
     * @return DocumentsInitResponse
     */
    public static function created(DocumentsInitResponseCreated $created): DocumentsInitResponse
    {
        return new DocumentsInitResponse([
            'status' => 'created',
            'value' => $created,
        ]);
    }

    /**
     * @param DocumentsInitResponseResumed $resumed
     * @return DocumentsInitResponse
     */
    public static function resumed(DocumentsInitResponseResumed $resumed): DocumentsInitResponse
    {
        return new DocumentsInitResponse([
            'status' => 'resumed',
            'value' => $resumed,
        ]);
    }

    /**
     * @param DocumentsInitResponseDeduped $deduped
     * @return DocumentsInitResponse
     */
    public static function deduped(DocumentsInitResponseDeduped $deduped): DocumentsInitResponse
    {
        return new DocumentsInitResponse([
            'status' => 'deduped',
            'value' => $deduped,
        ]);
    }

    /**
     * @return bool
     */
    public function isCreated(): bool
    {
        return $this->value instanceof DocumentsInitResponseCreated && $this->status === 'created';
    }

    /**
     * @return DocumentsInitResponseCreated
     */
    public function asCreated(): DocumentsInitResponseCreated
    {
        if (!($this->value instanceof DocumentsInitResponseCreated && $this->status === 'created')) {
            throw new Exception(
                "Expected created; got " . $this->status . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isResumed(): bool
    {
        return $this->value instanceof DocumentsInitResponseResumed && $this->status === 'resumed';
    }

    /**
     * @return DocumentsInitResponseResumed
     */
    public function asResumed(): DocumentsInitResponseResumed
    {
        if (!($this->value instanceof DocumentsInitResponseResumed && $this->status === 'resumed')) {
            throw new Exception(
                "Expected resumed; got " . $this->status . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isDeduped(): bool
    {
        return $this->value instanceof DocumentsInitResponseDeduped && $this->status === 'deduped';
    }

    /**
     * @return DocumentsInitResponseDeduped
     */
    public function asDeduped(): DocumentsInitResponseDeduped
    {
        if (!($this->value instanceof DocumentsInitResponseDeduped && $this->status === 'deduped')) {
            throw new Exception(
                "Expected deduped; got " . $this->status . " with value of type " . get_debug_type($this->value),
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
        $result['status'] = $this->status;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->status) {
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
        if (!array_key_exists('status', $data)) {
            throw new Exception(
                "JSON data is missing property 'status'",
            );
        }
        $status = $data['status'];
        if (!(is_string($status))) {
            throw new Exception(
                "Expected property 'status' in JSON data to be string, instead received " . get_debug_type($data['status']),
            );
        }

        $args['status'] = $status;
        switch ($status) {
            case 'created':
                $args['value'] = DocumentsInitResponseCreated::jsonDeserialize($data);
                break;
            case 'resumed':
                $args['value'] = DocumentsInitResponseResumed::jsonDeserialize($data);
                break;
            case 'deduped':
                $args['value'] = DocumentsInitResponseDeduped::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['status'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
