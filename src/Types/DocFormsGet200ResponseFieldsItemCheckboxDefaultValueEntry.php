<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntry extends JsonSerializableType
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
     *    DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryUnsupported
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
     *    DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryUnsupported
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
     * @param DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryNone $none
     * @return DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntry
     */
    public static function none(DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryNone $none): DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryScalar $scalar
     * @return DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntry
     */
    public static function scalar(DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryScalar $scalar): DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryArray $array
     * @return DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntry
     */
    public static function array(DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryArray $array): DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryUnsupported $unsupported
     * @return DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntry
     */
    public static function unsupported(DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryUnsupported $unsupported): DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryNone
     */
    public function asNone(): DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryNone
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryScalar
     */
    public function asScalar(): DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryScalar
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryArray
     */
    public function asArray(): DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryArray
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryUnsupported
     */
    public function asUnsupported(): DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryUnsupported
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = DocFormsGet200ResponseFieldsItemCheckboxDefaultValueEntryUnsupported::jsonDeserialize($data);
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
