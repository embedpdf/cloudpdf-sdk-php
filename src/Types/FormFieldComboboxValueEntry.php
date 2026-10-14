<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormFieldComboboxValueEntry extends JsonSerializableType
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
     *    FormFieldComboboxValueEntryNone
     *   |FormFieldComboboxValueEntryScalar
     *   |FormFieldComboboxValueEntryArray
     *   |FormFieldComboboxValueEntryUnsupported
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
     *    FormFieldComboboxValueEntryNone
     *   |FormFieldComboboxValueEntryScalar
     *   |FormFieldComboboxValueEntryArray
     *   |FormFieldComboboxValueEntryUnsupported
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
     * @param FormFieldComboboxValueEntryNone $none
     * @return FormFieldComboboxValueEntry
     */
    public static function none(FormFieldComboboxValueEntryNone $none): FormFieldComboboxValueEntry
    {
        return new FormFieldComboboxValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param FormFieldComboboxValueEntryScalar $scalar
     * @return FormFieldComboboxValueEntry
     */
    public static function scalar(FormFieldComboboxValueEntryScalar $scalar): FormFieldComboboxValueEntry
    {
        return new FormFieldComboboxValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param FormFieldComboboxValueEntryArray $array
     * @return FormFieldComboboxValueEntry
     */
    public static function array(FormFieldComboboxValueEntryArray $array): FormFieldComboboxValueEntry
    {
        return new FormFieldComboboxValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param FormFieldComboboxValueEntryUnsupported $unsupported
     * @return FormFieldComboboxValueEntry
     */
    public static function unsupported(FormFieldComboboxValueEntryUnsupported $unsupported): FormFieldComboboxValueEntry
    {
        return new FormFieldComboboxValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof FormFieldComboboxValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return FormFieldComboboxValueEntryNone
     */
    public function asNone(): FormFieldComboboxValueEntryNone
    {
        if (!($this->value instanceof FormFieldComboboxValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof FormFieldComboboxValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return FormFieldComboboxValueEntryScalar
     */
    public function asScalar(): FormFieldComboboxValueEntryScalar
    {
        if (!($this->value instanceof FormFieldComboboxValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof FormFieldComboboxValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return FormFieldComboboxValueEntryArray
     */
    public function asArray(): FormFieldComboboxValueEntryArray
    {
        if (!($this->value instanceof FormFieldComboboxValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof FormFieldComboboxValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return FormFieldComboboxValueEntryUnsupported
     */
    public function asUnsupported(): FormFieldComboboxValueEntryUnsupported
    {
        if (!($this->value instanceof FormFieldComboboxValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = FormFieldComboboxValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = FormFieldComboboxValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = FormFieldComboboxValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = FormFieldComboboxValueEntryUnsupported::jsonDeserialize($data);
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
