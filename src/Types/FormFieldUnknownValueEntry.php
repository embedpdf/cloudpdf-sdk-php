<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormFieldUnknownValueEntry extends JsonSerializableType
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
     *    FormFieldUnknownValueEntryNone
     *   |FormFieldUnknownValueEntryScalar
     *   |FormFieldUnknownValueEntryArray
     *   |FormFieldUnknownValueEntryUnsupported
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
     *    FormFieldUnknownValueEntryNone
     *   |FormFieldUnknownValueEntryScalar
     *   |FormFieldUnknownValueEntryArray
     *   |FormFieldUnknownValueEntryUnsupported
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
     * @param FormFieldUnknownValueEntryNone $none
     * @return FormFieldUnknownValueEntry
     */
    public static function none(FormFieldUnknownValueEntryNone $none): FormFieldUnknownValueEntry
    {
        return new FormFieldUnknownValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param FormFieldUnknownValueEntryScalar $scalar
     * @return FormFieldUnknownValueEntry
     */
    public static function scalar(FormFieldUnknownValueEntryScalar $scalar): FormFieldUnknownValueEntry
    {
        return new FormFieldUnknownValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param FormFieldUnknownValueEntryArray $array
     * @return FormFieldUnknownValueEntry
     */
    public static function array(FormFieldUnknownValueEntryArray $array): FormFieldUnknownValueEntry
    {
        return new FormFieldUnknownValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param FormFieldUnknownValueEntryUnsupported $unsupported
     * @return FormFieldUnknownValueEntry
     */
    public static function unsupported(FormFieldUnknownValueEntryUnsupported $unsupported): FormFieldUnknownValueEntry
    {
        return new FormFieldUnknownValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof FormFieldUnknownValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return FormFieldUnknownValueEntryNone
     */
    public function asNone(): FormFieldUnknownValueEntryNone
    {
        if (!($this->value instanceof FormFieldUnknownValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof FormFieldUnknownValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return FormFieldUnknownValueEntryScalar
     */
    public function asScalar(): FormFieldUnknownValueEntryScalar
    {
        if (!($this->value instanceof FormFieldUnknownValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof FormFieldUnknownValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return FormFieldUnknownValueEntryArray
     */
    public function asArray(): FormFieldUnknownValueEntryArray
    {
        if (!($this->value instanceof FormFieldUnknownValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof FormFieldUnknownValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return FormFieldUnknownValueEntryUnsupported
     */
    public function asUnsupported(): FormFieldUnknownValueEntryUnsupported
    {
        if (!($this->value instanceof FormFieldUnknownValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = FormFieldUnknownValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = FormFieldUnknownValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = FormFieldUnknownValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = FormFieldUnknownValueEntryUnsupported::jsonDeserialize($data);
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
