<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocFormsGet200ResponseFieldsItemListboxDefaultValueEntry extends JsonSerializableType
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
     *    DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryUnsupported
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
     *    DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryUnsupported
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
     * @param DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryNone $none
     * @return DocFormsGet200ResponseFieldsItemListboxDefaultValueEntry
     */
    public static function none(DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryNone $none): DocFormsGet200ResponseFieldsItemListboxDefaultValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemListboxDefaultValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryScalar $scalar
     * @return DocFormsGet200ResponseFieldsItemListboxDefaultValueEntry
     */
    public static function scalar(DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryScalar $scalar): DocFormsGet200ResponseFieldsItemListboxDefaultValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemListboxDefaultValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryArray $array
     * @return DocFormsGet200ResponseFieldsItemListboxDefaultValueEntry
     */
    public static function array(DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryArray $array): DocFormsGet200ResponseFieldsItemListboxDefaultValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemListboxDefaultValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryUnsupported $unsupported
     * @return DocFormsGet200ResponseFieldsItemListboxDefaultValueEntry
     */
    public static function unsupported(DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryUnsupported $unsupported): DocFormsGet200ResponseFieldsItemListboxDefaultValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemListboxDefaultValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryNone
     */
    public function asNone(): DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryNone
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryScalar
     */
    public function asScalar(): DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryScalar
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryArray
     */
    public function asArray(): DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryArray
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryUnsupported
     */
    public function asUnsupported(): DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryUnsupported
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = DocFormsGet200ResponseFieldsItemListboxDefaultValueEntryUnsupported::jsonDeserialize($data);
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
