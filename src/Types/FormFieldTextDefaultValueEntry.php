<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormFieldTextDefaultValueEntry extends JsonSerializableType
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
     *    FormFieldTextDefaultValueEntryNone
     *   |FormFieldTextDefaultValueEntryScalar
     *   |FormFieldTextDefaultValueEntryArray
     *   |FormFieldTextDefaultValueEntryUnsupported
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
     *    FormFieldTextDefaultValueEntryNone
     *   |FormFieldTextDefaultValueEntryScalar
     *   |FormFieldTextDefaultValueEntryArray
     *   |FormFieldTextDefaultValueEntryUnsupported
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
     * @param FormFieldTextDefaultValueEntryNone $none
     * @return FormFieldTextDefaultValueEntry
     */
    public static function none(FormFieldTextDefaultValueEntryNone $none): FormFieldTextDefaultValueEntry
    {
        return new FormFieldTextDefaultValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param FormFieldTextDefaultValueEntryScalar $scalar
     * @return FormFieldTextDefaultValueEntry
     */
    public static function scalar(FormFieldTextDefaultValueEntryScalar $scalar): FormFieldTextDefaultValueEntry
    {
        return new FormFieldTextDefaultValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param FormFieldTextDefaultValueEntryArray $array
     * @return FormFieldTextDefaultValueEntry
     */
    public static function array(FormFieldTextDefaultValueEntryArray $array): FormFieldTextDefaultValueEntry
    {
        return new FormFieldTextDefaultValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param FormFieldTextDefaultValueEntryUnsupported $unsupported
     * @return FormFieldTextDefaultValueEntry
     */
    public static function unsupported(FormFieldTextDefaultValueEntryUnsupported $unsupported): FormFieldTextDefaultValueEntry
    {
        return new FormFieldTextDefaultValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof FormFieldTextDefaultValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return FormFieldTextDefaultValueEntryNone
     */
    public function asNone(): FormFieldTextDefaultValueEntryNone
    {
        if (!($this->value instanceof FormFieldTextDefaultValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof FormFieldTextDefaultValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return FormFieldTextDefaultValueEntryScalar
     */
    public function asScalar(): FormFieldTextDefaultValueEntryScalar
    {
        if (!($this->value instanceof FormFieldTextDefaultValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof FormFieldTextDefaultValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return FormFieldTextDefaultValueEntryArray
     */
    public function asArray(): FormFieldTextDefaultValueEntryArray
    {
        if (!($this->value instanceof FormFieldTextDefaultValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof FormFieldTextDefaultValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return FormFieldTextDefaultValueEntryUnsupported
     */
    public function asUnsupported(): FormFieldTextDefaultValueEntryUnsupported
    {
        if (!($this->value instanceof FormFieldTextDefaultValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = FormFieldTextDefaultValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = FormFieldTextDefaultValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = FormFieldTextDefaultValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = FormFieldTextDefaultValueEntryUnsupported::jsonDeserialize($data);
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
