<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class DocumentsInit200ResponseCreatedUpload extends JsonSerializableType
{
    /**
     * @var (
     *    'presigned'
     *   |'direct'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    DocumentsInit200ResponseCreatedUploadPresigned
     *   |DocumentsInit200ResponseCreatedUploadDirect
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'presigned'
     *   |'direct'
     *   |'_unknown'
     * ),
     *   value: (
     *    DocumentsInit200ResponseCreatedUploadPresigned
     *   |DocumentsInit200ResponseCreatedUploadDirect
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
     * @param DocumentsInit200ResponseCreatedUploadPresigned $presigned
     * @return DocumentsInit200ResponseCreatedUpload
     */
    public static function presigned(DocumentsInit200ResponseCreatedUploadPresigned $presigned): DocumentsInit200ResponseCreatedUpload
    {
        return new DocumentsInit200ResponseCreatedUpload([
            'kind' => 'presigned',
            'value' => $presigned,
        ]);
    }

    /**
     * @param DocumentsInit200ResponseCreatedUploadDirect $direct
     * @return DocumentsInit200ResponseCreatedUpload
     */
    public static function direct(DocumentsInit200ResponseCreatedUploadDirect $direct): DocumentsInit200ResponseCreatedUpload
    {
        return new DocumentsInit200ResponseCreatedUpload([
            'kind' => 'direct',
            'value' => $direct,
        ]);
    }

    /**
     * @return bool
     */
    public function isPresigned(): bool
    {
        return $this->value instanceof DocumentsInit200ResponseCreatedUploadPresigned && $this->kind === 'presigned';
    }

    /**
     * @return DocumentsInit200ResponseCreatedUploadPresigned
     */
    public function asPresigned(): DocumentsInit200ResponseCreatedUploadPresigned
    {
        if (!($this->value instanceof DocumentsInit200ResponseCreatedUploadPresigned && $this->kind === 'presigned')) {
            throw new Exception(
                "Expected presigned; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isDirect(): bool
    {
        return $this->value instanceof DocumentsInit200ResponseCreatedUploadDirect && $this->kind === 'direct';
    }

    /**
     * @return DocumentsInit200ResponseCreatedUploadDirect
     */
    public function asDirect(): DocumentsInit200ResponseCreatedUploadDirect
    {
        if (!($this->value instanceof DocumentsInit200ResponseCreatedUploadDirect && $this->kind === 'direct')) {
            throw new Exception(
                "Expected direct; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
            case 'direct':
                $value = $this->asDirect()->jsonSerialize();
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
                $args['value'] = DocumentsInit200ResponseCreatedUploadPresigned::jsonDeserialize($data);
                break;
            case 'direct':
                $args['value'] = DocumentsInit200ResponseCreatedUploadDirect::jsonDeserialize($data);
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
