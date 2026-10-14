<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormFieldPushbuttonValueEntry extends JsonSerializableType
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
     *    FormFieldPushbuttonValueEntryNone
     *   |FormFieldPushbuttonValueEntryScalar
     *   |FormFieldPushbuttonValueEntryArray
     *   |FormFieldPushbuttonValueEntryUnsupported
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
     *    FormFieldPushbuttonValueEntryNone
     *   |FormFieldPushbuttonValueEntryScalar
     *   |FormFieldPushbuttonValueEntryArray
     *   |FormFieldPushbuttonValueEntryUnsupported
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
     * @param FormFieldPushbuttonValueEntryNone $none
     * @return FormFieldPushbuttonValueEntry
     */
    public static function none(FormFieldPushbuttonValueEntryNone $none): FormFieldPushbuttonValueEntry
    {
        return new FormFieldPushbuttonValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param FormFieldPushbuttonValueEntryScalar $scalar
     * @return FormFieldPushbuttonValueEntry
     */
    public static function scalar(FormFieldPushbuttonValueEntryScalar $scalar): FormFieldPushbuttonValueEntry
    {
        return new FormFieldPushbuttonValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param FormFieldPushbuttonValueEntryArray $array
     * @return FormFieldPushbuttonValueEntry
     */
    public static function array(FormFieldPushbuttonValueEntryArray $array): FormFieldPushbuttonValueEntry
    {
        return new FormFieldPushbuttonValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param FormFieldPushbuttonValueEntryUnsupported $unsupported
     * @return FormFieldPushbuttonValueEntry
     */
    public static function unsupported(FormFieldPushbuttonValueEntryUnsupported $unsupported): FormFieldPushbuttonValueEntry
    {
        return new FormFieldPushbuttonValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof FormFieldPushbuttonValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return FormFieldPushbuttonValueEntryNone
     */
    public function asNone(): FormFieldPushbuttonValueEntryNone
    {
        if (!($this->value instanceof FormFieldPushbuttonValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof FormFieldPushbuttonValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return FormFieldPushbuttonValueEntryScalar
     */
    public function asScalar(): FormFieldPushbuttonValueEntryScalar
    {
        if (!($this->value instanceof FormFieldPushbuttonValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof FormFieldPushbuttonValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return FormFieldPushbuttonValueEntryArray
     */
    public function asArray(): FormFieldPushbuttonValueEntryArray
    {
        if (!($this->value instanceof FormFieldPushbuttonValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof FormFieldPushbuttonValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return FormFieldPushbuttonValueEntryUnsupported
     */
    public function asUnsupported(): FormFieldPushbuttonValueEntryUnsupported
    {
        if (!($this->value instanceof FormFieldPushbuttonValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = FormFieldPushbuttonValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = FormFieldPushbuttonValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = FormFieldPushbuttonValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = FormFieldPushbuttonValueEntryUnsupported::jsonDeserialize($data);
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
