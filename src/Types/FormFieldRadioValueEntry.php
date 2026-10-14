<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormFieldRadioValueEntry extends JsonSerializableType
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
     *    FormFieldRadioValueEntryNone
     *   |FormFieldRadioValueEntryScalar
     *   |FormFieldRadioValueEntryArray
     *   |FormFieldRadioValueEntryUnsupported
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
     *    FormFieldRadioValueEntryNone
     *   |FormFieldRadioValueEntryScalar
     *   |FormFieldRadioValueEntryArray
     *   |FormFieldRadioValueEntryUnsupported
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
     * @param FormFieldRadioValueEntryNone $none
     * @return FormFieldRadioValueEntry
     */
    public static function none(FormFieldRadioValueEntryNone $none): FormFieldRadioValueEntry
    {
        return new FormFieldRadioValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param FormFieldRadioValueEntryScalar $scalar
     * @return FormFieldRadioValueEntry
     */
    public static function scalar(FormFieldRadioValueEntryScalar $scalar): FormFieldRadioValueEntry
    {
        return new FormFieldRadioValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param FormFieldRadioValueEntryArray $array
     * @return FormFieldRadioValueEntry
     */
    public static function array(FormFieldRadioValueEntryArray $array): FormFieldRadioValueEntry
    {
        return new FormFieldRadioValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param FormFieldRadioValueEntryUnsupported $unsupported
     * @return FormFieldRadioValueEntry
     */
    public static function unsupported(FormFieldRadioValueEntryUnsupported $unsupported): FormFieldRadioValueEntry
    {
        return new FormFieldRadioValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof FormFieldRadioValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return FormFieldRadioValueEntryNone
     */
    public function asNone(): FormFieldRadioValueEntryNone
    {
        if (!($this->value instanceof FormFieldRadioValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof FormFieldRadioValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return FormFieldRadioValueEntryScalar
     */
    public function asScalar(): FormFieldRadioValueEntryScalar
    {
        if (!($this->value instanceof FormFieldRadioValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof FormFieldRadioValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return FormFieldRadioValueEntryArray
     */
    public function asArray(): FormFieldRadioValueEntryArray
    {
        if (!($this->value instanceof FormFieldRadioValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof FormFieldRadioValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return FormFieldRadioValueEntryUnsupported
     */
    public function asUnsupported(): FormFieldRadioValueEntryUnsupported
    {
        if (!($this->value instanceof FormFieldRadioValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = FormFieldRadioValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = FormFieldRadioValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = FormFieldRadioValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = FormFieldRadioValueEntryUnsupported::jsonDeserialize($data);
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
