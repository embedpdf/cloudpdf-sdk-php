<?php

namespace CloudPDF\Documents\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocumentsImportFromRequestSource extends JsonSerializableType
{
    /**
     * @var (
     *    'url'
     *   |'connection'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    DocumentsImportFromRequestSourceUrl
     *   |DocumentsImportFromRequestSourceConnection
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'url'
     *   |'connection'
     *   |'_unknown'
     * ),
     *   value: (
     *    DocumentsImportFromRequestSourceUrl
     *   |DocumentsImportFromRequestSourceConnection
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
     * @param DocumentsImportFromRequestSourceUrl $url
     * @return DocumentsImportFromRequestSource
     */
    public static function url(DocumentsImportFromRequestSourceUrl $url): DocumentsImportFromRequestSource
    {
        return new DocumentsImportFromRequestSource([
            'kind' => 'url',
            'value' => $url,
        ]);
    }

    /**
     * @param DocumentsImportFromRequestSourceConnection $connection
     * @return DocumentsImportFromRequestSource
     */
    public static function connection(DocumentsImportFromRequestSourceConnection $connection): DocumentsImportFromRequestSource
    {
        return new DocumentsImportFromRequestSource([
            'kind' => 'connection',
            'value' => $connection,
        ]);
    }

    /**
     * @return bool
     */
    public function isUrl(): bool
    {
        return $this->value instanceof DocumentsImportFromRequestSourceUrl && $this->kind === 'url';
    }

    /**
     * @return DocumentsImportFromRequestSourceUrl
     */
    public function asUrl(): DocumentsImportFromRequestSourceUrl
    {
        if (!($this->value instanceof DocumentsImportFromRequestSourceUrl && $this->kind === 'url')) {
            throw new Exception(
                "Expected url; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isConnection(): bool
    {
        return $this->value instanceof DocumentsImportFromRequestSourceConnection && $this->kind === 'connection';
    }

    /**
     * @return DocumentsImportFromRequestSourceConnection
     */
    public function asConnection(): DocumentsImportFromRequestSourceConnection
    {
        if (!($this->value instanceof DocumentsImportFromRequestSourceConnection && $this->kind === 'connection')) {
            throw new Exception(
                "Expected connection; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
            case 'url':
                $value = $this->asUrl()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'connection':
                $value = $this->asConnection()->jsonSerialize();
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
            case 'url':
                $args['value'] = DocumentsImportFromRequestSourceUrl::jsonDeserialize($data);
                break;
            case 'connection':
                $args['value'] = DocumentsImportFromRequestSourceConnection::jsonDeserialize($data);
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
