<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormField extends JsonSerializableType
{
    /**
     * @var (
     *    'text'
     *   |'checkbox'
     *   |'radio'
     *   |'combobox'
     *   |'listbox'
     *   |'pushbutton'
     *   |'signature'
     *   |'unknown'
     *   |'_unknown'
     * ) $family
     */
    public readonly string $family;

    /**
     * @var (
     *    FormFieldText
     *   |FormFieldCheckbox
     *   |FormFieldRadio
     *   |FormFieldCombobox
     *   |FormFieldListbox
     *   |FormFieldPushbutton
     *   |FormFieldSignature
     *   |FormFieldUnknown
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   family: (
     *    'text'
     *   |'checkbox'
     *   |'radio'
     *   |'combobox'
     *   |'listbox'
     *   |'pushbutton'
     *   |'signature'
     *   |'unknown'
     *   |'_unknown'
     * ),
     *   value: (
     *    FormFieldText
     *   |FormFieldCheckbox
     *   |FormFieldRadio
     *   |FormFieldCombobox
     *   |FormFieldListbox
     *   |FormFieldPushbutton
     *   |FormFieldSignature
     *   |FormFieldUnknown
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->family = $values['family'];
        $this->value = $values['value'];
    }

    /**
     * @param FormFieldText $text
     * @return FormField
     */
    public static function text(FormFieldText $text): FormField
    {
        return new FormField([
            'family' => 'text',
            'value' => $text,
        ]);
    }

    /**
     * @param FormFieldCheckbox $checkbox
     * @return FormField
     */
    public static function checkbox(FormFieldCheckbox $checkbox): FormField
    {
        return new FormField([
            'family' => 'checkbox',
            'value' => $checkbox,
        ]);
    }

    /**
     * @param FormFieldRadio $radio
     * @return FormField
     */
    public static function radio(FormFieldRadio $radio): FormField
    {
        return new FormField([
            'family' => 'radio',
            'value' => $radio,
        ]);
    }

    /**
     * @param FormFieldCombobox $combobox
     * @return FormField
     */
    public static function combobox(FormFieldCombobox $combobox): FormField
    {
        return new FormField([
            'family' => 'combobox',
            'value' => $combobox,
        ]);
    }

    /**
     * @param FormFieldListbox $listbox
     * @return FormField
     */
    public static function listbox(FormFieldListbox $listbox): FormField
    {
        return new FormField([
            'family' => 'listbox',
            'value' => $listbox,
        ]);
    }

    /**
     * @param FormFieldPushbutton $pushbutton
     * @return FormField
     */
    public static function pushbutton(FormFieldPushbutton $pushbutton): FormField
    {
        return new FormField([
            'family' => 'pushbutton',
            'value' => $pushbutton,
        ]);
    }

    /**
     * @param FormFieldSignature $signature
     * @return FormField
     */
    public static function signature(FormFieldSignature $signature): FormField
    {
        return new FormField([
            'family' => 'signature',
            'value' => $signature,
        ]);
    }

    /**
     * @param FormFieldUnknown $unknown
     * @return FormField
     */
    public static function unknown(FormFieldUnknown $unknown): FormField
    {
        return new FormField([
            'family' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @return bool
     */
    public function isText(): bool
    {
        return $this->value instanceof FormFieldText && $this->family === 'text';
    }

    /**
     * @return FormFieldText
     */
    public function asText(): FormFieldText
    {
        if (!($this->value instanceof FormFieldText && $this->family === 'text')) {
            throw new Exception(
                "Expected text; got " . $this->family . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCheckbox(): bool
    {
        return $this->value instanceof FormFieldCheckbox && $this->family === 'checkbox';
    }

    /**
     * @return FormFieldCheckbox
     */
    public function asCheckbox(): FormFieldCheckbox
    {
        if (!($this->value instanceof FormFieldCheckbox && $this->family === 'checkbox')) {
            throw new Exception(
                "Expected checkbox; got " . $this->family . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isRadio(): bool
    {
        return $this->value instanceof FormFieldRadio && $this->family === 'radio';
    }

    /**
     * @return FormFieldRadio
     */
    public function asRadio(): FormFieldRadio
    {
        if (!($this->value instanceof FormFieldRadio && $this->family === 'radio')) {
            throw new Exception(
                "Expected radio; got " . $this->family . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCombobox(): bool
    {
        return $this->value instanceof FormFieldCombobox && $this->family === 'combobox';
    }

    /**
     * @return FormFieldCombobox
     */
    public function asCombobox(): FormFieldCombobox
    {
        if (!($this->value instanceof FormFieldCombobox && $this->family === 'combobox')) {
            throw new Exception(
                "Expected combobox; got " . $this->family . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isListbox(): bool
    {
        return $this->value instanceof FormFieldListbox && $this->family === 'listbox';
    }

    /**
     * @return FormFieldListbox
     */
    public function asListbox(): FormFieldListbox
    {
        if (!($this->value instanceof FormFieldListbox && $this->family === 'listbox')) {
            throw new Exception(
                "Expected listbox; got " . $this->family . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isPushbutton(): bool
    {
        return $this->value instanceof FormFieldPushbutton && $this->family === 'pushbutton';
    }

    /**
     * @return FormFieldPushbutton
     */
    public function asPushbutton(): FormFieldPushbutton
    {
        if (!($this->value instanceof FormFieldPushbutton && $this->family === 'pushbutton')) {
            throw new Exception(
                "Expected pushbutton; got " . $this->family . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSignature(): bool
    {
        return $this->value instanceof FormFieldSignature && $this->family === 'signature';
    }

    /**
     * @return FormFieldSignature
     */
    public function asSignature(): FormFieldSignature
    {
        if (!($this->value instanceof FormFieldSignature && $this->family === 'signature')) {
            throw new Exception(
                "Expected signature; got " . $this->family . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isUnknown(): bool
    {
        return $this->value instanceof FormFieldUnknown && $this->family === 'unknown';
    }

    /**
     * @return FormFieldUnknown
     */
    public function asUnknown(): FormFieldUnknown
    {
        if (!($this->value instanceof FormFieldUnknown && $this->family === 'unknown')) {
            throw new Exception(
                "Expected unknown; got " . $this->family . " with value of type " . get_debug_type($this->value),
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
        $result['family'] = $this->family;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->family) {
            case 'text':
                $value = $this->asText()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'checkbox':
                $value = $this->asCheckbox()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'radio':
                $value = $this->asRadio()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'combobox':
                $value = $this->asCombobox()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'listbox':
                $value = $this->asListbox()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'pushbutton':
                $value = $this->asPushbutton()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'signature':
                $value = $this->asSignature()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'unknown':
                $value = $this->asUnknown()->jsonSerialize();
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
        if (!array_key_exists('family', $data)) {
            throw new Exception(
                "JSON data is missing property 'family'",
            );
        }
        $family = $data['family'];
        if (!(is_string($family))) {
            throw new Exception(
                "Expected property 'family' in JSON data to be string, instead received " . get_debug_type($data['family']),
            );
        }

        $args['family'] = $family;
        switch ($family) {
            case 'text':
                $args['value'] = FormFieldText::jsonDeserialize($data);
                break;
            case 'checkbox':
                $args['value'] = FormFieldCheckbox::jsonDeserialize($data);
                break;
            case 'radio':
                $args['value'] = FormFieldRadio::jsonDeserialize($data);
                break;
            case 'combobox':
                $args['value'] = FormFieldCombobox::jsonDeserialize($data);
                break;
            case 'listbox':
                $args['value'] = FormFieldListbox::jsonDeserialize($data);
                break;
            case 'pushbutton':
                $args['value'] = FormFieldPushbutton::jsonDeserialize($data);
                break;
            case 'signature':
                $args['value'] = FormFieldSignature::jsonDeserialize($data);
                break;
            case 'unknown':
                $args['value'] = FormFieldUnknown::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['family'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
