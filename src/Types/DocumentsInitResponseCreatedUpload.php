<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocumentsInitResponseCreatedUpload extends JsonSerializableType
{
    /**
     * @var (
     *    'presigned'
     *   |'proxy'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    DocumentsInitResponseCreatedUploadPresigned
     *   |DocumentsInitResponseCreatedUploadProxy
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'presigned'
     *   |'proxy'
     *   |'_unknown'
     * ),
     *   value: (
     *    DocumentsInitResponseCreatedUploadPresigned
     *   |DocumentsInitResponseCreatedUploadProxy
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->kind = $values['kind'];
        $this->value = $values['value'];
    }

    /**
     * @param DocumentsInitResponseCreatedUploadPresigned $presigned
     * @return DocumentsInitResponseCreatedUpload
     */
    public static function presigned(DocumentsInitResponseCreatedUploadPresigned $presigned): DocumentsInitResponseCreatedUpload
    {
        return new DocumentsInitResponseCreatedUpload([
            'kind' => 'presigned',
            'value' => $presigned,
        ]);
    }

    /**
     * @param DocumentsInitResponseCreatedUploadProxy $proxy
     * @return DocumentsInitResponseCreatedUpload
     */
    public static function proxy(DocumentsInitResponseCreatedUploadProxy $proxy): DocumentsInitResponseCreatedUpload
    {
        return new DocumentsInitResponseCreatedUpload([
            'kind' => 'proxy',
            'value' => $proxy,
        ]);
    }

    /**
     * @return bool
     */
    public function isPresigned(): bool
    {
        return $this->value instanceof DocumentsInitResponseCreatedUploadPresigned && $this->kind === 'presigned';
    }

    /**
     * @return DocumentsInitResponseCreatedUploadPresigned
     */
    public function asPresigned(): DocumentsInitResponseCreatedUploadPresigned
    {
        if (!($this->value instanceof DocumentsInitResponseCreatedUploadPresigned && $this->kind === 'presigned')) {
            throw new Exception(
                "Expected presigned; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isProxy(): bool
    {
        return $this->value instanceof DocumentsInitResponseCreatedUploadProxy && $this->kind === 'proxy';
    }

    /**
     * @return DocumentsInitResponseCreatedUploadProxy
     */
    public function asProxy(): DocumentsInitResponseCreatedUploadProxy
    {
        if (!($this->value instanceof DocumentsInitResponseCreatedUploadProxy && $this->kind === 'proxy')) {
            throw new Exception(
                "Expected proxy; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
        $result['kind'] = $this->kind;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->kind) {
            case 'presigned':
                $value = $this->asPresigned()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'proxy':
                $value = $this->asProxy()->jsonSerialize();
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
        if (!array_key_exists('kind', $data)) {
            throw new Exception(
                "JSON data is missing property 'kind'",
            );
        }
        $kind = $data['kind'];
        if (!(is_string($kind))) {
            throw new Exception(
                "Expected property 'kind' in JSON data to be string, instead received " . get_debug_type($data['kind']),
            );
        }

        $args['kind'] = $kind;
        switch ($kind) {
            case 'presigned':
                $args['value'] = DocumentsInitResponseCreatedUploadPresigned::jsonDeserialize($data);
                break;
            case 'proxy':
                $args['value'] = DocumentsInitResponseCreatedUploadProxy::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['kind'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
