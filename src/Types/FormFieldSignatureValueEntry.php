<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormFieldSignatureValueEntry extends JsonSerializableType
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
     *    FormFieldSignatureValueEntryNone
     *   |FormFieldSignatureValueEntryScalar
     *   |FormFieldSignatureValueEntryArray
     *   |FormFieldSignatureValueEntryUnsupported
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
     *    FormFieldSignatureValueEntryNone
     *   |FormFieldSignatureValueEntryScalar
     *   |FormFieldSignatureValueEntryArray
     *   |FormFieldSignatureValueEntryUnsupported
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
     * @param FormFieldSignatureValueEntryNone $none
     * @return FormFieldSignatureValueEntry
     */
    public static function none(FormFieldSignatureValueEntryNone $none): FormFieldSignatureValueEntry
    {
        return new FormFieldSignatureValueEntry([
            'kind' => 'none',
            'value' => $none,
        ]);
    }

    /**
     * @param FormFieldSignatureValueEntryScalar $scalar
     * @return FormFieldSignatureValueEntry
     */
    public static function scalar(FormFieldSignatureValueEntryScalar $scalar): FormFieldSignatureValueEntry
    {
        return new FormFieldSignatureValueEntry([
            'kind' => 'scalar',
            'value' => $scalar,
        ]);
    }

    /**
     * @param FormFieldSignatureValueEntryArray $array
     * @return FormFieldSignatureValueEntry
     */
    public static function array(FormFieldSignatureValueEntryArray $array): FormFieldSignatureValueEntry
    {
        return new FormFieldSignatureValueEntry([
            'kind' => 'array',
            'value' => $array,
        ]);
    }

    /**
     * @param FormFieldSignatureValueEntryUnsupported $unsupported
     * @return FormFieldSignatureValueEntry
     */
    public static function unsupported(FormFieldSignatureValueEntryUnsupported $unsupported): FormFieldSignatureValueEntry
    {
        return new FormFieldSignatureValueEntry([
            'kind' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isNone(): bool
    {
        return $this->value instanceof FormFieldSignatureValueEntryNone && $this->kind === 'none';
    }

    /**
     * @return FormFieldSignatureValueEntryNone
     */
    public function asNone(): FormFieldSignatureValueEntryNone
    {
        if (!($this->value instanceof FormFieldSignatureValueEntryNone && $this->kind === 'none')) {
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
        return $this->value instanceof FormFieldSignatureValueEntryScalar && $this->kind === 'scalar';
    }

    /**
     * @return FormFieldSignatureValueEntryScalar
     */
    public function asScalar(): FormFieldSignatureValueEntryScalar
    {
        if (!($this->value instanceof FormFieldSignatureValueEntryScalar && $this->kind === 'scalar')) {
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
        return $this->value instanceof FormFieldSignatureValueEntryArray && $this->kind === 'array';
    }

    /**
     * @return FormFieldSignatureValueEntryArray
     */
    public function asArray(): FormFieldSignatureValueEntryArray
    {
        if (!($this->value instanceof FormFieldSignatureValueEntryArray && $this->kind === 'array')) {
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
        return $this->value instanceof FormFieldSignatureValueEntryUnsupported && $this->kind === 'unsupported';
    }

    /**
     * @return FormFieldSignatureValueEntryUnsupported
     */
    public function asUnsupported(): FormFieldSignatureValueEntryUnsupported
    {
        if (!($this->value instanceof FormFieldSignatureValueEntryUnsupported && $this->kind === 'unsupported')) {
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
                $args['value'] = FormFieldSignatureValueEntryNone::jsonDeserialize($data);
                break;
            case 'scalar':
                $args['value'] = FormFieldSignatureValueEntryScalar::jsonDeserialize($data);
                break;
            case 'array':
                $args['value'] = FormFieldSignatureValueEntryArray::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = FormFieldSignatureValueEntryUnsupported::jsonDeserialize($data);
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
