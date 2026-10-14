<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormFieldCheckboxValueEntry extends JsonSerializableType
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
     *    FormFieldCheckboxValueEntryNone
     *   |FormFieldCheckboxValueEntryScalar
     *   |FormFieldCheckboxValueEntryArray
     *   |FormFieldCheckboxValueEntryUnsupported
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
     *    FormFieldCheckboxValueEntryNone
     *   |FormFieldCheckboxValueEntryScalar
     *   |FormFieldCheckboxValueEntryArray
     *   |FormFieldCheckboxValueEntryUnsupported
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
     * @param FormFieldCheckboxValueEntryNone $none
     * @return FormFieldCheckboxValueEntry
     */
    public static function none(FormFieldCheckboxValueEntryNone $none): FormFieldCheckboxValueEntry
    {
        return new FormFieldCheckboxValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param FormFieldCheckboxValueEntryScalar $scalar
     * @return FormFieldCheckboxValueEntry
     */
    public static function scalar(FormFieldCheckboxValueEntryScalar $scalar): FormFieldCheckboxValueEntry
    {
        return new FormFieldCheckboxValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param FormFieldCheckboxValueEntryArray $array
     * @return FormFieldCheckboxValueEntry
     */
    public static function array(FormFieldCheckboxValueEntryArray $array): FormFieldCheckboxValueEntry
    {
        return new FormFieldCheckboxValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param FormFieldCheckboxValueEntryUnsupported $unsupported
     * @return FormFieldCheckboxValueEntry
     */
    public static function unsupported(FormFieldCheckboxValueEntryUnsupported $unsupported): FormFieldCheckboxValueEntry
    {
        return new FormFieldCheckboxValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof FormFieldCheckboxValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return FormFieldCheckboxValueEntryNone
     */
    public function asNone(): FormFieldCheckboxValueEntryNone
    {
        if (!($this->value instanceof FormFieldCheckboxValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof FormFieldCheckboxValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return FormFieldCheckboxValueEntryScalar
     */
    public function asScalar(): FormFieldCheckboxValueEntryScalar
    {
        if (!($this->value instanceof FormFieldCheckboxValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof FormFieldCheckboxValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return FormFieldCheckboxValueEntryArray
     */
    public function asArray(): FormFieldCheckboxValueEntryArray
    {
        if (!($this->value instanceof FormFieldCheckboxValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof FormFieldCheckboxValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return FormFieldCheckboxValueEntryUnsupported
     */
    public function asUnsupported(): FormFieldCheckboxValueEntryUnsupported
    {
        if (!($this->value instanceof FormFieldCheckboxValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = FormFieldCheckboxValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = FormFieldCheckboxValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = FormFieldCheckboxValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = FormFieldCheckboxValueEntryUnsupported::jsonDeserialize($data);
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
