<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormFieldRadioDefaultValueEntry extends JsonSerializableType
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
     *    FormFieldRadioDefaultValueEntryNone
     *   |FormFieldRadioDefaultValueEntryScalar
     *   |FormFieldRadioDefaultValueEntryArray
     *   |FormFieldRadioDefaultValueEntryUnsupported
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
     *    FormFieldRadioDefaultValueEntryNone
     *   |FormFieldRadioDefaultValueEntryScalar
     *   |FormFieldRadioDefaultValueEntryArray
     *   |FormFieldRadioDefaultValueEntryUnsupported
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
     * @param FormFieldRadioDefaultValueEntryNone $none
     * @return FormFieldRadioDefaultValueEntry
     */
    public static function none(FormFieldRadioDefaultValueEntryNone $none): FormFieldRadioDefaultValueEntry
    {
        return new FormFieldRadioDefaultValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param FormFieldRadioDefaultValueEntryScalar $scalar
     * @return FormFieldRadioDefaultValueEntry
     */
    public static function scalar(FormFieldRadioDefaultValueEntryScalar $scalar): FormFieldRadioDefaultValueEntry
    {
        return new FormFieldRadioDefaultValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param FormFieldRadioDefaultValueEntryArray $array
     * @return FormFieldRadioDefaultValueEntry
     */
    public static function array(FormFieldRadioDefaultValueEntryArray $array): FormFieldRadioDefaultValueEntry
    {
        return new FormFieldRadioDefaultValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param FormFieldRadioDefaultValueEntryUnsupported $unsupported
     * @return FormFieldRadioDefaultValueEntry
     */
    public static function unsupported(FormFieldRadioDefaultValueEntryUnsupported $unsupported): FormFieldRadioDefaultValueEntry
    {
        return new FormFieldRadioDefaultValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof FormFieldRadioDefaultValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return FormFieldRadioDefaultValueEntryNone
     */
    public function asNone(): FormFieldRadioDefaultValueEntryNone
    {
        if (!($this->value instanceof FormFieldRadioDefaultValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof FormFieldRadioDefaultValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return FormFieldRadioDefaultValueEntryScalar
     */
    public function asScalar(): FormFieldRadioDefaultValueEntryScalar
    {
        if (!($this->value instanceof FormFieldRadioDefaultValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof FormFieldRadioDefaultValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return FormFieldRadioDefaultValueEntryArray
     */
    public function asArray(): FormFieldRadioDefaultValueEntryArray
    {
        if (!($this->value instanceof FormFieldRadioDefaultValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof FormFieldRadioDefaultValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return FormFieldRadioDefaultValueEntryUnsupported
     */
    public function asUnsupported(): FormFieldRadioDefaultValueEntryUnsupported
    {
        if (!($this->value instanceof FormFieldRadioDefaultValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = FormFieldRadioDefaultValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = FormFieldRadioDefaultValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = FormFieldRadioDefaultValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = FormFieldRadioDefaultValueEntryUnsupported::jsonDeserialize($data);
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
