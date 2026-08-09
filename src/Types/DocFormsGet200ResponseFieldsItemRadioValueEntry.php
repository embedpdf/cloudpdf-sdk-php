<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocFormsGet200ResponseFieldsItemRadioValueEntry extends JsonSerializableType
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
     *    DocFormsGet200ResponseFieldsItemRadioValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemRadioValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemRadioValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemRadioValueEntryUnsupported
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
     *    DocFormsGet200ResponseFieldsItemRadioValueEntryNone
     *   |DocFormsGet200ResponseFieldsItemRadioValueEntryScalar
     *   |DocFormsGet200ResponseFieldsItemRadioValueEntryArray
     *   |DocFormsGet200ResponseFieldsItemRadioValueEntryUnsupported
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
     * @param DocFormsGet200ResponseFieldsItemRadioValueEntryNone $none
     * @return DocFormsGet200ResponseFieldsItemRadioValueEntry
     */
    public static function none(DocFormsGet200ResponseFieldsItemRadioValueEntryNone $none): DocFormsGet200ResponseFieldsItemRadioValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemRadioValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemRadioValueEntryScalar $scalar
     * @return DocFormsGet200ResponseFieldsItemRadioValueEntry
     */
    public static function scalar(DocFormsGet200ResponseFieldsItemRadioValueEntryScalar $scalar): DocFormsGet200ResponseFieldsItemRadioValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemRadioValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemRadioValueEntryArray $array
     * @return DocFormsGet200ResponseFieldsItemRadioValueEntry
     */
    public static function array(DocFormsGet200ResponseFieldsItemRadioValueEntryArray $array): DocFormsGet200ResponseFieldsItemRadioValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemRadioValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemRadioValueEntryUnsupported $unsupported
     * @return DocFormsGet200ResponseFieldsItemRadioValueEntry
     */
    public static function unsupported(DocFormsGet200ResponseFieldsItemRadioValueEntryUnsupported $unsupported): DocFormsGet200ResponseFieldsItemRadioValueEntry
    {
        return new DocFormsGet200ResponseFieldsItemRadioValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemRadioValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemRadioValueEntryNone
     */
    public function asNone(): DocFormsGet200ResponseFieldsItemRadioValueEntryNone
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemRadioValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemRadioValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemRadioValueEntryScalar
     */
    public function asScalar(): DocFormsGet200ResponseFieldsItemRadioValueEntryScalar
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemRadioValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemRadioValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemRadioValueEntryArray
     */
    public function asArray(): DocFormsGet200ResponseFieldsItemRadioValueEntryArray
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemRadioValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemRadioValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemRadioValueEntryUnsupported
     */
    public function asUnsupported(): DocFormsGet200ResponseFieldsItemRadioValueEntryUnsupported
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemRadioValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = DocFormsGet200ResponseFieldsItemRadioValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = DocFormsGet200ResponseFieldsItemRadioValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = DocFormsGet200ResponseFieldsItemRadioValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = DocFormsGet200ResponseFieldsItemRadioValueEntryUnsupported::jsonDeserialize($data);
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
