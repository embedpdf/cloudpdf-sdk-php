<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class DocFormsGet200ResponseFieldsItemTextDefaultValueEntry extends JsonSerializableType
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
     *    DocFormsGet200ResponseFieldsItemTextDefaultValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemTextDefaultValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemTextDefaultValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemTextDefaultValueEntryUnsupported
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
     *    DocFormsGet200ResponseFieldsItemTextDefaultValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemTextDefaultValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemTextDefaultValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemTextDefaultValueEntryUnsupported
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
     * @param DocFormsGet200ResponseFieldsItemTextDefaultValueEntryNone $none
     * @return DocFormsGet200ResponseFieldsItemTextDefaultValueEntry
     */
    public static function none(DocFormsGet200ResponseFieldsItemTextDefaultValueEntryNone $none): DocFormsGet200ResponseFieldsItemTextDefaultValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemTextDefaultValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemTextDefaultValueEntryScalar $scalar
     * @return DocFormsGet200ResponseFieldsItemTextDefaultValueEntry
     */
    public static function scalar(DocFormsGet200ResponseFieldsItemTextDefaultValueEntryScalar $scalar): DocFormsGet200ResponseFieldsItemTextDefaultValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemTextDefaultValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemTextDefaultValueEntryArray $array
     * @return DocFormsGet200ResponseFieldsItemTextDefaultValueEntry
     */
    public static function array(DocFormsGet200ResponseFieldsItemTextDefaultValueEntryArray $array): DocFormsGet200ResponseFieldsItemTextDefaultValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemTextDefaultValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemTextDefaultValueEntryUnsupported $unsupported
     * @return DocFormsGet200ResponseFieldsItemTextDefaultValueEntry
     */
    public static function unsupported(DocFormsGet200ResponseFieldsItemTextDefaultValueEntryUnsupported $unsupported): DocFormsGet200ResponseFieldsItemTextDefaultValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemTextDefaultValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemTextDefaultValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemTextDefaultValueEntryNone
     */
    public function asNone(): DocFormsGet200ResponseFieldsItemTextDefaultValueEntryNone
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemTextDefaultValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemTextDefaultValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemTextDefaultValueEntryScalar
     */
    public function asScalar(): DocFormsGet200ResponseFieldsItemTextDefaultValueEntryScalar
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemTextDefaultValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemTextDefaultValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemTextDefaultValueEntryArray
     */
    public function asArray(): DocFormsGet200ResponseFieldsItemTextDefaultValueEntryArray
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemTextDefaultValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemTextDefaultValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemTextDefaultValueEntryUnsupported
     */
    public function asUnsupported(): DocFormsGet200ResponseFieldsItemTextDefaultValueEntryUnsupported
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemTextDefaultValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = DocFormsGet200ResponseFieldsItemTextDefaultValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = DocFormsGet200ResponseFieldsItemTextDefaultValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = DocFormsGet200ResponseFieldsItemTextDefaultValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = DocFormsGet200ResponseFieldsItemTextDefaultValueEntryUnsupported::jsonDeserialize($data);
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
