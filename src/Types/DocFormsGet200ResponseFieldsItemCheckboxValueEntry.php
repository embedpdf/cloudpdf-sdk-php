<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class DocFormsGet200ResponseFieldsItemCheckboxValueEntry extends JsonSerializableType
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
     *    DocFormsGet200ResponseFieldsItemCheckboxValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemCheckboxValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemCheckboxValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemCheckboxValueEntryUnsupported
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
     *    DocFormsGet200ResponseFieldsItemCheckboxValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemCheckboxValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemCheckboxValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemCheckboxValueEntryUnsupported
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
     * @param DocFormsGet200ResponseFieldsItemCheckboxValueEntryNone $none
     * @return DocFormsGet200ResponseFieldsItemCheckboxValueEntry
     */
    public static function none(DocFormsGet200ResponseFieldsItemCheckboxValueEntryNone $none): DocFormsGet200ResponseFieldsItemCheckboxValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemCheckboxValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemCheckboxValueEntryScalar $scalar
     * @return DocFormsGet200ResponseFieldsItemCheckboxValueEntry
     */
    public static function scalar(DocFormsGet200ResponseFieldsItemCheckboxValueEntryScalar $scalar): DocFormsGet200ResponseFieldsItemCheckboxValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemCheckboxValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemCheckboxValueEntryArray $array
     * @return DocFormsGet200ResponseFieldsItemCheckboxValueEntry
     */
    public static function array(DocFormsGet200ResponseFieldsItemCheckboxValueEntryArray $array): DocFormsGet200ResponseFieldsItemCheckboxValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemCheckboxValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemCheckboxValueEntryUnsupported $unsupported
     * @return DocFormsGet200ResponseFieldsItemCheckboxValueEntry
     */
    public static function unsupported(DocFormsGet200ResponseFieldsItemCheckboxValueEntryUnsupported $unsupported): DocFormsGet200ResponseFieldsItemCheckboxValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemCheckboxValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemCheckboxValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemCheckboxValueEntryNone
     */
    public function asNone(): DocFormsGet200ResponseFieldsItemCheckboxValueEntryNone
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemCheckboxValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemCheckboxValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemCheckboxValueEntryScalar
     */
    public function asScalar(): DocFormsGet200ResponseFieldsItemCheckboxValueEntryScalar
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemCheckboxValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemCheckboxValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemCheckboxValueEntryArray
     */
    public function asArray(): DocFormsGet200ResponseFieldsItemCheckboxValueEntryArray
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemCheckboxValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemCheckboxValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemCheckboxValueEntryUnsupported
     */
    public function asUnsupported(): DocFormsGet200ResponseFieldsItemCheckboxValueEntryUnsupported
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemCheckboxValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = DocFormsGet200ResponseFieldsItemCheckboxValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = DocFormsGet200ResponseFieldsItemCheckboxValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = DocFormsGet200ResponseFieldsItemCheckboxValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = DocFormsGet200ResponseFieldsItemCheckboxValueEntryUnsupported::jsonDeserialize($data);
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
