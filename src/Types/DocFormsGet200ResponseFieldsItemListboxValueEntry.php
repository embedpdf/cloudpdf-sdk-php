<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocFormsGet200ResponseFieldsItemListboxValueEntry extends JsonSerializableType
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
     *    DocFormsGet200ResponseFieldsItemListboxValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemListboxValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemListboxValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemListboxValueEntryUnsupported
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
     *    DocFormsGet200ResponseFieldsItemListboxValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemListboxValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemListboxValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemListboxValueEntryUnsupported
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
     * @param DocFormsGet200ResponseFieldsItemListboxValueEntryNone $none
     * @return DocFormsGet200ResponseFieldsItemListboxValueEntry
     */
    public static function none(DocFormsGet200ResponseFieldsItemListboxValueEntryNone $none): DocFormsGet200ResponseFieldsItemListboxValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemListboxValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemListboxValueEntryScalar $scalar
     * @return DocFormsGet200ResponseFieldsItemListboxValueEntry
     */
    public static function scalar(DocFormsGet200ResponseFieldsItemListboxValueEntryScalar $scalar): DocFormsGet200ResponseFieldsItemListboxValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemListboxValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemListboxValueEntryArray $array
     * @return DocFormsGet200ResponseFieldsItemListboxValueEntry
     */
    public static function array(DocFormsGet200ResponseFieldsItemListboxValueEntryArray $array): DocFormsGet200ResponseFieldsItemListboxValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemListboxValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemListboxValueEntryUnsupported $unsupported
     * @return DocFormsGet200ResponseFieldsItemListboxValueEntry
     */
    public static function unsupported(DocFormsGet200ResponseFieldsItemListboxValueEntryUnsupported $unsupported): DocFormsGet200ResponseFieldsItemListboxValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemListboxValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemListboxValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemListboxValueEntryNone
     */
    public function asNone(): DocFormsGet200ResponseFieldsItemListboxValueEntryNone
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemListboxValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemListboxValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemListboxValueEntryScalar
     */
    public function asScalar(): DocFormsGet200ResponseFieldsItemListboxValueEntryScalar
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemListboxValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemListboxValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemListboxValueEntryArray
     */
    public function asArray(): DocFormsGet200ResponseFieldsItemListboxValueEntryArray
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemListboxValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemListboxValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemListboxValueEntryUnsupported
     */
    public function asUnsupported(): DocFormsGet200ResponseFieldsItemListboxValueEntryUnsupported
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemListboxValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = DocFormsGet200ResponseFieldsItemListboxValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = DocFormsGet200ResponseFieldsItemListboxValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = DocFormsGet200ResponseFieldsItemListboxValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = DocFormsGet200ResponseFieldsItemListboxValueEntryUnsupported::jsonDeserialize($data);
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
