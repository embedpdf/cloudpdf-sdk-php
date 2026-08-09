<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntry extends JsonSerializableType
{
    /**
     * @var (
     *    'none'
     *   |'scalar'
     *   |'array'
     *   |'unsupported'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryUnsupported
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'none'
     *   |'scalar'
     *   |'array'
     *   |'unsupported'
     *   |'_unknown'
     * ),
     *   value: (
     *    DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryUnsupported
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
     * @param DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryNone $none
     * @return DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntry
     */
    public static function none(DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryNone $none): DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryScalar $scalar
     * @return DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntry
     */
    public static function scalar(DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryScalar $scalar): DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryArray $array
     * @return DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntry
     */
    public static function array(DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryArray $array): DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryUnsupported $unsupported
     * @return DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntry
     */
    public static function unsupported(DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryUnsupported $unsupported): DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryNone
     */
    public function asNone(): DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryNone
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryNone && $this->kind === 'none')) {
            throw new Exception(
                "Expected none; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isScalar(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryScalar
     */
    public function asScalar(): DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryScalar
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryScalar && $this->kind === 'scalar')) {
            throw new Exception(
                "Expected scalar; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isArray(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryArray
     */
    public function asArray(): DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryArray
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryArray && $this->kind === 'array')) {
            throw new Exception(
                "Expected array; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isUnsupported(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryUnsupported
     */
    public function asUnsupported(): DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryUnsupported
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryUnsupported && $this->kind === 'unsupported')) {
            throw new Exception(
                "Expected unsupported; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
            case 'none':
                $value = $this->asNone()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'scalar':
                $value = $this->asScalar()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'array':
                $value = $this->asArray()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'unsupported':
                $value = $this->asUnsupported()->jsonSerialize();
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
            case 'none':
                $args['value'] = DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = DocFormsGet200ResponseFieldsItemSignatureDefaultValueEntryUnsupported::jsonDeserialize($data);
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
