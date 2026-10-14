<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormFieldTextValueEntry extends JsonSerializableType
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
     *    FormFieldTextValueEntryNone
     *   |FormFieldTextValueEntryScalar
     *   |FormFieldTextValueEntryArray
     *   |FormFieldTextValueEntryUnsupported
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
     *    FormFieldTextValueEntryNone
     *   |FormFieldTextValueEntryScalar
     *   |FormFieldTextValueEntryArray
     *   |FormFieldTextValueEntryUnsupported
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
     * @param FormFieldTextValueEntryNone $none
     * @return FormFieldTextValueEntry
     */
    public static function none(FormFieldTextValueEntryNone $none): FormFieldTextValueEntry
    {
        return new FormFieldTextValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param FormFieldTextValueEntryScalar $scalar
     * @return FormFieldTextValueEntry
     */
    public static function scalar(FormFieldTextValueEntryScalar $scalar): FormFieldTextValueEntry
    {
        return new FormFieldTextValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param FormFieldTextValueEntryArray $array
     * @return FormFieldTextValueEntry
     */
    public static function array(FormFieldTextValueEntryArray $array): FormFieldTextValueEntry
    {
        return new FormFieldTextValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param FormFieldTextValueEntryUnsupported $unsupported
     * @return FormFieldTextValueEntry
     */
    public static function unsupported(FormFieldTextValueEntryUnsupported $unsupported): FormFieldTextValueEntry
    {
        return new FormFieldTextValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof FormFieldTextValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return FormFieldTextValueEntryNone
     */
    public function asNone(): FormFieldTextValueEntryNone
    {
        if (!($this->value instanceof FormFieldTextValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof FormFieldTextValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return FormFieldTextValueEntryScalar
     */
    public function asScalar(): FormFieldTextValueEntryScalar
    {
        if (!($this->value instanceof FormFieldTextValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof FormFieldTextValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return FormFieldTextValueEntryArray
     */
    public function asArray(): FormFieldTextValueEntryArray
    {
        if (!($this->value instanceof FormFieldTextValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof FormFieldTextValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return FormFieldTextValueEntryUnsupported
     */
    public function asUnsupported(): FormFieldTextValueEntryUnsupported
    {
        if (!($this->value instanceof FormFieldTextValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = FormFieldTextValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = FormFieldTextValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = FormFieldTextValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = FormFieldTextValueEntryUnsupported::jsonDeserialize($data);
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
