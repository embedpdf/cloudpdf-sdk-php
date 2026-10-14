<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormFieldListboxDefaultValueEntry extends JsonSerializableType
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
     *    FormFieldListboxDefaultValueEntryNone
     *   |FormFieldListboxDefaultValueEntryScalar
     *   |FormFieldListboxDefaultValueEntryArray
     *   |FormFieldListboxDefaultValueEntryUnsupported
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
     *    FormFieldListboxDefaultValueEntryNone
     *   |FormFieldListboxDefaultValueEntryScalar
     *   |FormFieldListboxDefaultValueEntryArray
     *   |FormFieldListboxDefaultValueEntryUnsupported
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
     * @param FormFieldListboxDefaultValueEntryNone $none
     * @return FormFieldListboxDefaultValueEntry
     */
    public static function none(FormFieldListboxDefaultValueEntryNone $none): FormFieldListboxDefaultValueEntry
    {
        return new FormFieldListboxDefaultValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param FormFieldListboxDefaultValueEntryScalar $scalar
     * @return FormFieldListboxDefaultValueEntry
     */
    public static function scalar(FormFieldListboxDefaultValueEntryScalar $scalar): FormFieldListboxDefaultValueEntry
    {
        return new FormFieldListboxDefaultValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param FormFieldListboxDefaultValueEntryArray $array
     * @return FormFieldListboxDefaultValueEntry
     */
    public static function array(FormFieldListboxDefaultValueEntryArray $array): FormFieldListboxDefaultValueEntry
    {
        return new FormFieldListboxDefaultValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param FormFieldListboxDefaultValueEntryUnsupported $unsupported
     * @return FormFieldListboxDefaultValueEntry
     */
    public static function unsupported(FormFieldListboxDefaultValueEntryUnsupported $unsupported): FormFieldListboxDefaultValueEntry
    {
        return new FormFieldListboxDefaultValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof FormFieldListboxDefaultValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return FormFieldListboxDefaultValueEntryNone
     */
    public function asNone(): FormFieldListboxDefaultValueEntryNone
    {
        if (!($this->value instanceof FormFieldListboxDefaultValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof FormFieldListboxDefaultValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return FormFieldListboxDefaultValueEntryScalar
     */
    public function asScalar(): FormFieldListboxDefaultValueEntryScalar
    {
        if (!($this->value instanceof FormFieldListboxDefaultValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof FormFieldListboxDefaultValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return FormFieldListboxDefaultValueEntryArray
     */
    public function asArray(): FormFieldListboxDefaultValueEntryArray
    {
        if (!($this->value instanceof FormFieldListboxDefaultValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof FormFieldListboxDefaultValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return FormFieldListboxDefaultValueEntryUnsupported
     */
    public function asUnsupported(): FormFieldListboxDefaultValueEntryUnsupported
    {
        if (!($this->value instanceof FormFieldListboxDefaultValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = FormFieldListboxDefaultValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = FormFieldListboxDefaultValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = FormFieldListboxDefaultValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = FormFieldListboxDefaultValueEntryUnsupported::jsonDeserialize($data);
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
