<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormFieldPushbuttonDefaultValueEntry extends JsonSerializableType
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
     *    FormFieldPushbuttonDefaultValueEntryNone
     *   |FormFieldPushbuttonDefaultValueEntryScalar
     *   |FormFieldPushbuttonDefaultValueEntryArray
     *   |FormFieldPushbuttonDefaultValueEntryUnsupported
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
     *    FormFieldPushbuttonDefaultValueEntryNone
     *   |FormFieldPushbuttonDefaultValueEntryScalar
     *   |FormFieldPushbuttonDefaultValueEntryArray
     *   |FormFieldPushbuttonDefaultValueEntryUnsupported
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
     * @param FormFieldPushbuttonDefaultValueEntryNone $none
     * @return FormFieldPushbuttonDefaultValueEntry
     */
    public static function none(FormFieldPushbuttonDefaultValueEntryNone $none): FormFieldPushbuttonDefaultValueEntry
    {
        return new FormFieldPushbuttonDefaultValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param FormFieldPushbuttonDefaultValueEntryScalar $scalar
     * @return FormFieldPushbuttonDefaultValueEntry
     */
    public static function scalar(FormFieldPushbuttonDefaultValueEntryScalar $scalar): FormFieldPushbuttonDefaultValueEntry
    {
        return new FormFieldPushbuttonDefaultValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param FormFieldPushbuttonDefaultValueEntryArray $array
     * @return FormFieldPushbuttonDefaultValueEntry
     */
    public static function array(FormFieldPushbuttonDefaultValueEntryArray $array): FormFieldPushbuttonDefaultValueEntry
    {
        return new FormFieldPushbuttonDefaultValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param FormFieldPushbuttonDefaultValueEntryUnsupported $unsupported
     * @return FormFieldPushbuttonDefaultValueEntry
     */
    public static function unsupported(FormFieldPushbuttonDefaultValueEntryUnsupported $unsupported): FormFieldPushbuttonDefaultValueEntry
    {
        return new FormFieldPushbuttonDefaultValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof FormFieldPushbuttonDefaultValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return FormFieldPushbuttonDefaultValueEntryNone
     */
    public function asNone(): FormFieldPushbuttonDefaultValueEntryNone
    {
        if (!($this->value instanceof FormFieldPushbuttonDefaultValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof FormFieldPushbuttonDefaultValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return FormFieldPushbuttonDefaultValueEntryScalar
     */
    public function asScalar(): FormFieldPushbuttonDefaultValueEntryScalar
    {
        if (!($this->value instanceof FormFieldPushbuttonDefaultValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof FormFieldPushbuttonDefaultValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return FormFieldPushbuttonDefaultValueEntryArray
     */
    public function asArray(): FormFieldPushbuttonDefaultValueEntryArray
    {
        if (!($this->value instanceof FormFieldPushbuttonDefaultValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof FormFieldPushbuttonDefaultValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return FormFieldPushbuttonDefaultValueEntryUnsupported
     */
    public function asUnsupported(): FormFieldPushbuttonDefaultValueEntryUnsupported
    {
        if (!($this->value instanceof FormFieldPushbuttonDefaultValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = FormFieldPushbuttonDefaultValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = FormFieldPushbuttonDefaultValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = FormFieldPushbuttonDefaultValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = FormFieldPushbuttonDefaultValueEntryUnsupported::jsonDeserialize($data);
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
