<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormFieldUnknownDefaultValueEntry extends JsonSerializableType
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
     *    FormFieldUnknownDefaultValueEntryNone
     *   |FormFieldUnknownDefaultValueEntryScalar
     *   |FormFieldUnknownDefaultValueEntryArray
     *   |FormFieldUnknownDefaultValueEntryUnsupported
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
     *    FormFieldUnknownDefaultValueEntryNone
     *   |FormFieldUnknownDefaultValueEntryScalar
     *   |FormFieldUnknownDefaultValueEntryArray
     *   |FormFieldUnknownDefaultValueEntryUnsupported
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
     * @param FormFieldUnknownDefaultValueEntryNone $none
     * @return FormFieldUnknownDefaultValueEntry
     */
    public static function none(FormFieldUnknownDefaultValueEntryNone $none): FormFieldUnknownDefaultValueEntry
    {
        return new FormFieldUnknownDefaultValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param FormFieldUnknownDefaultValueEntryScalar $scalar
     * @return FormFieldUnknownDefaultValueEntry
     */
    public static function scalar(FormFieldUnknownDefaultValueEntryScalar $scalar): FormFieldUnknownDefaultValueEntry
    {
        return new FormFieldUnknownDefaultValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param FormFieldUnknownDefaultValueEntryArray $array
     * @return FormFieldUnknownDefaultValueEntry
     */
    public static function array(FormFieldUnknownDefaultValueEntryArray $array): FormFieldUnknownDefaultValueEntry
    {
        return new FormFieldUnknownDefaultValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param FormFieldUnknownDefaultValueEntryUnsupported $unsupported
     * @return FormFieldUnknownDefaultValueEntry
     */
    public static function unsupported(FormFieldUnknownDefaultValueEntryUnsupported $unsupported): FormFieldUnknownDefaultValueEntry
    {
        return new FormFieldUnknownDefaultValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof FormFieldUnknownDefaultValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return FormFieldUnknownDefaultValueEntryNone
     */
    public function asNone(): FormFieldUnknownDefaultValueEntryNone
    {
        if (!($this->value instanceof FormFieldUnknownDefaultValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof FormFieldUnknownDefaultValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return FormFieldUnknownDefaultValueEntryScalar
     */
    public function asScalar(): FormFieldUnknownDefaultValueEntryScalar
    {
        if (!($this->value instanceof FormFieldUnknownDefaultValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof FormFieldUnknownDefaultValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return FormFieldUnknownDefaultValueEntryArray
     */
    public function asArray(): FormFieldUnknownDefaultValueEntryArray
    {
        if (!($this->value instanceof FormFieldUnknownDefaultValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof FormFieldUnknownDefaultValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return FormFieldUnknownDefaultValueEntryUnsupported
     */
    public function asUnsupported(): FormFieldUnknownDefaultValueEntryUnsupported
    {
        if (!($this->value instanceof FormFieldUnknownDefaultValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = FormFieldUnknownDefaultValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = FormFieldUnknownDefaultValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = FormFieldUnknownDefaultValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = FormFieldUnknownDefaultValueEntryUnsupported::jsonDeserialize($data);
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
