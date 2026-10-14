<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormFieldComboboxDefaultValueEntry extends JsonSerializableType
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
     *    FormFieldComboboxDefaultValueEntryNone
     *   |FormFieldComboboxDefaultValueEntryScalar
     *   |FormFieldComboboxDefaultValueEntryArray
     *   |FormFieldComboboxDefaultValueEntryUnsupported
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
     *    FormFieldComboboxDefaultValueEntryNone
     *   |FormFieldComboboxDefaultValueEntryScalar
     *   |FormFieldComboboxDefaultValueEntryArray
     *   |FormFieldComboboxDefaultValueEntryUnsupported
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
     * @param FormFieldComboboxDefaultValueEntryNone $none
     * @return FormFieldComboboxDefaultValueEntry
     */
    public static function none(FormFieldComboboxDefaultValueEntryNone $none): FormFieldComboboxDefaultValueEntry
    {
        return new FormFieldComboboxDefaultValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param FormFieldComboboxDefaultValueEntryScalar $scalar
     * @return FormFieldComboboxDefaultValueEntry
     */
    public static function scalar(FormFieldComboboxDefaultValueEntryScalar $scalar): FormFieldComboboxDefaultValueEntry
    {
        return new FormFieldComboboxDefaultValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param FormFieldComboboxDefaultValueEntryArray $array
     * @return FormFieldComboboxDefaultValueEntry
     */
    public static function array(FormFieldComboboxDefaultValueEntryArray $array): FormFieldComboboxDefaultValueEntry
    {
        return new FormFieldComboboxDefaultValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param FormFieldComboboxDefaultValueEntryUnsupported $unsupported
     * @return FormFieldComboboxDefaultValueEntry
     */
    public static function unsupported(FormFieldComboboxDefaultValueEntryUnsupported $unsupported): FormFieldComboboxDefaultValueEntry
    {
        return new FormFieldComboboxDefaultValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof FormFieldComboboxDefaultValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return FormFieldComboboxDefaultValueEntryNone
     */
    public function asNone(): FormFieldComboboxDefaultValueEntryNone
    {
        if (!($this->value instanceof FormFieldComboboxDefaultValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof FormFieldComboboxDefaultValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return FormFieldComboboxDefaultValueEntryScalar
     */
    public function asScalar(): FormFieldComboboxDefaultValueEntryScalar
    {
        if (!($this->value instanceof FormFieldComboboxDefaultValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof FormFieldComboboxDefaultValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return FormFieldComboboxDefaultValueEntryArray
     */
    public function asArray(): FormFieldComboboxDefaultValueEntryArray
    {
        if (!($this->value instanceof FormFieldComboboxDefaultValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof FormFieldComboboxDefaultValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return FormFieldComboboxDefaultValueEntryUnsupported
     */
    public function asUnsupported(): FormFieldComboboxDefaultValueEntryUnsupported
    {
        if (!($this->value instanceof FormFieldComboboxDefaultValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = FormFieldComboboxDefaultValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = FormFieldComboboxDefaultValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = FormFieldComboboxDefaultValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = FormFieldComboboxDefaultValueEntryUnsupported::jsonDeserialize($data);
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
