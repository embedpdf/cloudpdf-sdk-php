<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormFieldFormatWritable extends JsonSerializableType
{
    /**
     * @var (
     *    'date'
     *   |'time'
     *   |'_unknown'
     * ) $kind
     */
    public readonly string $kind;

    /**
     * @var (
     *    FormFieldFormatWritableDate
     *   |FormFieldFormatWritableTime
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   kind: (
     *    'date'
     *   |'time'
     *   |'_unknown'
     * ),
     *   value: (
     *    FormFieldFormatWritableDate
     *   |FormFieldFormatWritableTime
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
     * @param FormFieldFormatWritableDate $date
     * @return FormFieldFormatWritable
     */
    public static function date(FormFieldFormatWritableDate $date): FormFieldFormatWritable
    {
        return new FormFieldFormatWritable([
            'kind' => 'date',
            'value' => $date,
        ]);
    }

    /**
     * @param FormFieldFormatWritableTime $time
     * @return FormFieldFormatWritable
     */
    public static function time(FormFieldFormatWritableTime $time): FormFieldFormatWritable
    {
        return new FormFieldFormatWritable([
            'kind' => 'time',
            'value' => $time,
        ]);
    }

    /**
     * @return bool
     */
    public function isDate(): bool
    {
        return $this->value instanceof FormFieldFormatWritableDate && $this->kind === 'date';
    }

    /**
     * @return FormFieldFormatWritableDate
     */
    public function asDate(): FormFieldFormatWritableDate
    {
        if (!($this->value instanceof FormFieldFormatWritableDate && $this->kind === 'date')) {
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
        return $this->value instanceof FormFieldFormatWritableTime && $this->kind === 'time';
    }

    /**
     * @return FormFieldFormatWritableTime
     */
    public function asTime(): FormFieldFormatWritableTime
    {
        if (!($this->value instanceof FormFieldFormatWritableTime && $this->kind === 'time')) {
            throw new Exception(
                "Expected time; got " . $this->kind . " with value of type " . get_debug_type($this->value),
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
                $args['value'] = FormFieldFormatWritableDate::jsonDeserialize($data);
                break;
            case 'time':
                $args['value'] = FormFieldFormatWritableTime::jsonDeserialize($data);
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
