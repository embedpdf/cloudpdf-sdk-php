<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormFieldSignatureDefaultValueEntry extends JsonSerializableType
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
     *    FormFieldSignatureDefaultValueEntryNone
     *   |FormFieldSignatureDefaultValueEntryScalar
     *   |FormFieldSignatureDefaultValueEntryArray
     *   |FormFieldSignatureDefaultValueEntryUnsupported
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
     *    FormFieldSignatureDefaultValueEntryNone
     *   |FormFieldSignatureDefaultValueEntryScalar
     *   |FormFieldSignatureDefaultValueEntryArray
     *   |FormFieldSignatureDefaultValueEntryUnsupported
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
     * @param FormFieldSignatureDefaultValueEntryNone $none
     * @return FormFieldSignatureDefaultValueEntry
     */
    public static function none(FormFieldSignatureDefaultValueEntryNone $none): FormFieldSignatureDefaultValueEntry
    {
        return new FormFieldSignatureDefaultValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param FormFieldSignatureDefaultValueEntryScalar $scalar
     * @return FormFieldSignatureDefaultValueEntry
     */
    public static function scalar(FormFieldSignatureDefaultValueEntryScalar $scalar): FormFieldSignatureDefaultValueEntry
    {
        return new FormFieldSignatureDefaultValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param FormFieldSignatureDefaultValueEntryArray $array
     * @return FormFieldSignatureDefaultValueEntry
     */
    public static function array(FormFieldSignatureDefaultValueEntryArray $array): FormFieldSignatureDefaultValueEntry
    {
        return new FormFieldSignatureDefaultValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param FormFieldSignatureDefaultValueEntryUnsupported $unsupported
     * @return FormFieldSignatureDefaultValueEntry
     */
    public static function unsupported(FormFieldSignatureDefaultValueEntryUnsupported $unsupported): FormFieldSignatureDefaultValueEntry
    {
        return new FormFieldSignatureDefaultValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof FormFieldSignatureDefaultValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return FormFieldSignatureDefaultValueEntryNone
     */
    public function asNone(): FormFieldSignatureDefaultValueEntryNone
    {
        if (!($this->value instanceof FormFieldSignatureDefaultValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof FormFieldSignatureDefaultValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return FormFieldSignatureDefaultValueEntryScalar
     */
    public function asScalar(): FormFieldSignatureDefaultValueEntryScalar
    {
        if (!($this->value instanceof FormFieldSignatureDefaultValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof FormFieldSignatureDefaultValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return FormFieldSignatureDefaultValueEntryArray
     */
    public function asArray(): FormFieldSignatureDefaultValueEntryArray
    {
        if (!($this->value instanceof FormFieldSignatureDefaultValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof FormFieldSignatureDefaultValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return FormFieldSignatureDefaultValueEntryUnsupported
     */
    public function asUnsupported(): FormFieldSignatureDefaultValueEntryUnsupported
    {
        if (!($this->value instanceof FormFieldSignatureDefaultValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = FormFieldSignatureDefaultValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = FormFieldSignatureDefaultValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = FormFieldSignatureDefaultValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = FormFieldSignatureDefaultValueEntryUnsupported::jsonDeserialize($data);
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
