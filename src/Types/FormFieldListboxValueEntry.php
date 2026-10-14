<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormFieldListboxValueEntry extends JsonSerializableType
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
     *    FormFieldListboxValueEntryNone
     *   |FormFieldListboxValueEntryScalar
     *   |FormFieldListboxValueEntryArray
     *   |FormFieldListboxValueEntryUnsupported
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
     *    FormFieldListboxValueEntryNone
     *   |FormFieldListboxValueEntryScalar
     *   |FormFieldListboxValueEntryArray
     *   |FormFieldListboxValueEntryUnsupported
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
     * @param FormFieldListboxValueEntryNone $none
     * @return FormFieldListboxValueEntry
     */
    public static function none(FormFieldListboxValueEntryNone $none): FormFieldListboxValueEntry
    {
        return new FormFieldListboxValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param FormFieldListboxValueEntryScalar $scalar
     * @return FormFieldListboxValueEntry
     */
    public static function scalar(FormFieldListboxValueEntryScalar $scalar): FormFieldListboxValueEntry
    {
        return new FormFieldListboxValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param FormFieldListboxValueEntryArray $array
     * @return FormFieldListboxValueEntry
     */
    public static function array(FormFieldListboxValueEntryArray $array): FormFieldListboxValueEntry
    {
        return new FormFieldListboxValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param FormFieldListboxValueEntryUnsupported $unsupported
     * @return FormFieldListboxValueEntry
     */
    public static function unsupported(FormFieldListboxValueEntryUnsupported $unsupported): FormFieldListboxValueEntry
    {
        return new FormFieldListboxValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof FormFieldListboxValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return FormFieldListboxValueEntryNone
     */
    public function asNone(): FormFieldListboxValueEntryNone
    {
        if (!($this->value instanceof FormFieldListboxValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof FormFieldListboxValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return FormFieldListboxValueEntryScalar
     */
    public function asScalar(): FormFieldListboxValueEntryScalar
    {
        if (!($this->value instanceof FormFieldListboxValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof FormFieldListboxValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return FormFieldListboxValueEntryArray
     */
    public function asArray(): FormFieldListboxValueEntryArray
    {
        if (!($this->value instanceof FormFieldListboxValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof FormFieldListboxValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return FormFieldListboxValueEntryUnsupported
     */
    public function asUnsupported(): FormFieldListboxValueEntryUnsupported
    {
        if (!($this->value instanceof FormFieldListboxValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = FormFieldListboxValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = FormFieldListboxValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = FormFieldListboxValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = FormFieldListboxValueEntryUnsupported::jsonDeserialize($data);
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
