<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

/**
 * The shape a text field's or a dropdown's value has, by its `kind`: a date or a time with the pattern it is shown in, or `other` for a format script the engine does not recognise. A newer server can add kinds: read one your client doesn't know as `other`.
 */
class FormFieldFormat extends JsonSerializableType
{
    /**
     * @var (
     *    'date'
     *   |'time'
     *   |'other'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    FormFieldFormatDate
     *   |FormFieldFormatTime
     *   |FormFieldFormatOther
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'date'
     *   |'time'
     *   |'other'
     *   |'_unknown'
     * ),
     *   value: (
     *    FormFieldFormatDate
     *   |FormFieldFormatTime
     *   |FormFieldFormatOther
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
     * @param FormFieldFormatDate $date
     * @return FormFieldFormat
     */
    public static function date(FormFieldFormatDate $date): FormFieldFormat
    {
        return new FormFieldFormat([
            'kind' => 'date',
            'value' => $date,
        ]);
    }

    /**
     * @param FormFieldFormatTime $time
     * @return FormFieldFormat
     */
    public static function time(FormFieldFormatTime $time): FormFieldFormat
    {
        return new FormFieldFormat([
            'kind' => 'time',
            'value' => $time,
        ]);
    }

    /**
     * @param FormFieldFormatOther $other
     * @return FormFieldFormat
     */
    public static function other(FormFieldFormatOther $other): FormFieldFormat
    {
        return new FormFieldFormat([
            'kind' => 'other',
            'value' => $other,
        ]);
    }

    /**
     * @return bool
     */
    public function isDate(): bool
    {
        return $this->value instanceof FormFieldFormatDate && $this->kind === 'date';
    }

    /**
     * @return FormFieldFormatDate
     */
    public function asDate(): FormFieldFormatDate
    {
        if (!($this->value instanceof FormFieldFormatDate && $this->kind === 'date')) {
            throw new Exception(
                "Expected date; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isTime(): bool
    {
        return $this->value instanceof FormFieldFormatTime && $this->kind === 'time';
    }

    /**
     * @return FormFieldFormatTime
     */
    public function asTime(): FormFieldFormatTime
    {
        if (!($this->value instanceof FormFieldFormatTime && $this->kind === 'time')) {
            throw new Exception(
                "Expected time; got " . $this->kind . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOther(): bool
    {
        return $this->value instanceof FormFieldFormatOther && $this->kind === 'other';
    }

    /**
     * @return FormFieldFormatOther
     */
    public function asOther(): FormFieldFormatOther
    {
        if (!($this->value instanceof FormFieldFormatOther && $this->kind === 'other')) {
            throw new Exception(
                "Expected other; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
            case 'date':
                $value = $this->asDate()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'time':
                $value = $this->asTime()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'other':
                $value = $this->asOther()->jsonSerialize();
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
            case 'date':
                $args['value'] = FormFieldFormatDate::jsonDeserialize($data);
                break;
            case 'time':
                $args['value'] = FormFieldFormatTime::jsonDeserialize($data);
                break;
            case 'other':
                $args['value'] = FormFieldFormatOther::jsonDeserialize($data);
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
