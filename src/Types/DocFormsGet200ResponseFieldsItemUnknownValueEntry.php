<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocFormsGet200ResponseFieldsItemUnknownValueEntry extends JsonSerializableType
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
     *    DocFormsGet200ResponseFieldsItemUnknownValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemUnknownValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemUnknownValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemUnknownValueEntryUnsupported
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
     *    DocFormsGet200ResponseFieldsItemUnknownValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemUnknownValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemUnknownValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemUnknownValueEntryUnsupported
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
     * @param DocFormsGet200ResponseFieldsItemUnknownValueEntryNone $none
     * @return DocFormsGet200ResponseFieldsItemUnknownValueEntry
     */
    public static function none(DocFormsGet200ResponseFieldsItemUnknownValueEntryNone $none): DocFormsGet200ResponseFieldsItemUnknownValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemUnknownValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemUnknownValueEntryScalar $scalar
     * @return DocFormsGet200ResponseFieldsItemUnknownValueEntry
     */
    public static function scalar(DocFormsGet200ResponseFieldsItemUnknownValueEntryScalar $scalar): DocFormsGet200ResponseFieldsItemUnknownValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemUnknownValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemUnknownValueEntryArray $array
     * @return DocFormsGet200ResponseFieldsItemUnknownValueEntry
     */
    public static function array(DocFormsGet200ResponseFieldsItemUnknownValueEntryArray $array): DocFormsGet200ResponseFieldsItemUnknownValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemUnknownValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemUnknownValueEntryUnsupported $unsupported
     * @return DocFormsGet200ResponseFieldsItemUnknownValueEntry
     */
    public static function unsupported(DocFormsGet200ResponseFieldsItemUnknownValueEntryUnsupported $unsupported): DocFormsGet200ResponseFieldsItemUnknownValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemUnknownValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemUnknownValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemUnknownValueEntryNone
     */
    public function asNone(): DocFormsGet200ResponseFieldsItemUnknownValueEntryNone
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemUnknownValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemUnknownValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemUnknownValueEntryScalar
     */
    public function asScalar(): DocFormsGet200ResponseFieldsItemUnknownValueEntryScalar
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemUnknownValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemUnknownValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemUnknownValueEntryArray
     */
    public function asArray(): DocFormsGet200ResponseFieldsItemUnknownValueEntryArray
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemUnknownValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemUnknownValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemUnknownValueEntryUnsupported
     */
    public function asUnsupported(): DocFormsGet200ResponseFieldsItemUnknownValueEntryUnsupported
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemUnknownValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = DocFormsGet200ResponseFieldsItemUnknownValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = DocFormsGet200ResponseFieldsItemUnknownValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = DocFormsGet200ResponseFieldsItemUnknownValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = DocFormsGet200ResponseFieldsItemUnknownValueEntryUnsupported::jsonDeserialize($data);
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
