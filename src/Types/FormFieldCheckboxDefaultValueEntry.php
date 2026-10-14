<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormFieldCheckboxDefaultValueEntry extends JsonSerializableType
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
     *    FormFieldCheckboxDefaultValueEntryNone
     *   |FormFieldCheckboxDefaultValueEntryScalar
     *   |FormFieldCheckboxDefaultValueEntryArray
     *   |FormFieldCheckboxDefaultValueEntryUnsupported
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
     *    FormFieldCheckboxDefaultValueEntryNone
     *   |FormFieldCheckboxDefaultValueEntryScalar
     *   |FormFieldCheckboxDefaultValueEntryArray
     *   |FormFieldCheckboxDefaultValueEntryUnsupported
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
     * @param FormFieldCheckboxDefaultValueEntryNone $none
     * @return FormFieldCheckboxDefaultValueEntry
     */
    public static function none(FormFieldCheckboxDefaultValueEntryNone $none): FormFieldCheckboxDefaultValueEntry
    {
        return new FormFieldCheckboxDefaultValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param FormFieldCheckboxDefaultValueEntryScalar $scalar
     * @return FormFieldCheckboxDefaultValueEntry
     */
    public static function scalar(FormFieldCheckboxDefaultValueEntryScalar $scalar): FormFieldCheckboxDefaultValueEntry
    {
        return new FormFieldCheckboxDefaultValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param FormFieldCheckboxDefaultValueEntryArray $array
     * @return FormFieldCheckboxDefaultValueEntry
     */
    public static function array(FormFieldCheckboxDefaultValueEntryArray $array): FormFieldCheckboxDefaultValueEntry
    {
        return new FormFieldCheckboxDefaultValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param FormFieldCheckboxDefaultValueEntryUnsupported $unsupported
     * @return FormFieldCheckboxDefaultValueEntry
     */
    public static function unsupported(FormFieldCheckboxDefaultValueEntryUnsupported $unsupported): FormFieldCheckboxDefaultValueEntry
    {
        return new FormFieldCheckboxDefaultValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof FormFieldCheckboxDefaultValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return FormFieldCheckboxDefaultValueEntryNone
     */
    public function asNone(): FormFieldCheckboxDefaultValueEntryNone
    {
        if (!($this->value instanceof FormFieldCheckboxDefaultValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof FormFieldCheckboxDefaultValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return FormFieldCheckboxDefaultValueEntryScalar
     */
    public function asScalar(): FormFieldCheckboxDefaultValueEntryScalar
    {
        if (!($this->value instanceof FormFieldCheckboxDefaultValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof FormFieldCheckboxDefaultValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return FormFieldCheckboxDefaultValueEntryArray
     */
    public function asArray(): FormFieldCheckboxDefaultValueEntryArray
    {
        if (!($this->value instanceof FormFieldCheckboxDefaultValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof FormFieldCheckboxDefaultValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return FormFieldCheckboxDefaultValueEntryUnsupported
     */
    public function asUnsupported(): FormFieldCheckboxDefaultValueEntryUnsupported
    {
        if (!($this->value instanceof FormFieldCheckboxDefaultValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = FormFieldCheckboxDefaultValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = FormFieldCheckboxDefaultValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = FormFieldCheckboxDefaultValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = FormFieldCheckboxDefaultValueEntryUnsupported::jsonDeserialize($data);
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
