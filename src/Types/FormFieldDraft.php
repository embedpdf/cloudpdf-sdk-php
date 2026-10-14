<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class FormFieldDraft extends JsonSerializableType
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
     *   |'_unknown'
     * ) $family
     */
    public readonly string $family;

    /**
     * @var (
     *    FormFieldDraftText
     *   |FormFieldDraftCheckbox
     *   |FormFieldDraftRadio
     *   |FormFieldDraftCombobox
     *   |FormFieldDraftListbox
     *   |FormFieldDraftPushbutton
     *   |FormFieldDraftSignature
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
     *   |'_unknown'
     * ),
     *   value: (
     *    FormFieldDraftText
     *   |FormFieldDraftCheckbox
     *   |FormFieldDraftRadio
     *   |FormFieldDraftCombobox
     *   |FormFieldDraftListbox
     *   |FormFieldDraftPushbutton
     *   |FormFieldDraftSignature
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
     * @param FormFieldDraftText $text
     * @return FormFieldDraft
     */
    public static function text(FormFieldDraftText $text): FormFieldDraft
    {
        return new FormFieldDraft([
            'family' => 'text',
            'value' => $text,
        ]);
    }

    /**
     * @param FormFieldDraftCheckbox $checkbox
     * @return FormFieldDraft
     */
    public static function checkbox(FormFieldDraftCheckbox $checkbox): FormFieldDraft
    {
        return new FormFieldDraft([
            'family' => 'checkbox',
            'value' => $checkbox,
        ]);
    }

    /**
     * @param FormFieldDraftRadio $radio
     * @return FormFieldDraft
     */
    public static function radio(FormFieldDraftRadio $radio): FormFieldDraft
    {
        return new FormFieldDraft([
            'family' => 'radio',
            'value' => $radio,
        ]);
    }

    /**
     * @param FormFieldDraftCombobox $combobox
     * @return FormFieldDraft
     */
    public static function combobox(FormFieldDraftCombobox $combobox): FormFieldDraft
    {
        return new FormFieldDraft([
            'family' => 'combobox',
            'value' => $combobox,
        ]);
    }

    /**
     * @param FormFieldDraftListbox $listbox
     * @return FormFieldDraft
     */
    public static function listbox(FormFieldDraftListbox $listbox): FormFieldDraft
    {
        return new FormFieldDraft([
            'family' => 'listbox',
            'value' => $listbox,
        ]);
    }

    /**
     * @param FormFieldDraftPushbutton $pushbutton
     * @return FormFieldDraft
     */
    public static function pushbutton(FormFieldDraftPushbutton $pushbutton): FormFieldDraft
    {
        return new FormFieldDraft([
            'family' => 'pushbutton',
            'value' => $pushbutton,
        ]);
    }

    /**
     * @param FormFieldDraftSignature $signature
     * @return FormFieldDraft
     */
    public static function signature(FormFieldDraftSignature $signature): FormFieldDraft
    {
        return new FormFieldDraft([
            'family' => 'signature',
            'value' => $signature,
        ]);
    }

    /**
     * @return bool
     */
    public function isText(): bool
    {
        return $this->value instanceof FormFieldDraftText && $this->family === 'text';
    }

    /**
     * @return FormFieldDraftText
     */
    public function asText(): FormFieldDraftText
    {
        if (!($this->value instanceof FormFieldDraftText && $this->family === 'text')) {
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
        return $this->value instanceof FormFieldDraftCheckbox && $this->family === 'checkbox';
    }

    /**
     * @return FormFieldDraftCheckbox
     */
    public function asCheckbox(): FormFieldDraftCheckbox
    {
        if (!($this->value instanceof FormFieldDraftCheckbox && $this->family === 'checkbox')) {
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
        return $this->value instanceof FormFieldDraftRadio && $this->family === 'radio';
    }

    /**
     * @return FormFieldDraftRadio
     */
    public function asRadio(): FormFieldDraftRadio
    {
        if (!($this->value instanceof FormFieldDraftRadio && $this->family === 'radio')) {
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
        return $this->value instanceof FormFieldDraftCombobox && $this->family === 'combobox';
    }

    /**
     * @return FormFieldDraftCombobox
     */
    public function asCombobox(): FormFieldDraftCombobox
    {
        if (!($this->value instanceof FormFieldDraftCombobox && $this->family === 'combobox')) {
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
        return $this->value instanceof FormFieldDraftListbox && $this->family === 'listbox';
    }

    /**
     * @return FormFieldDraftListbox
     */
    public function asListbox(): FormFieldDraftListbox
    {
        if (!($this->value instanceof FormFieldDraftListbox && $this->family === 'listbox')) {
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
        return $this->value instanceof FormFieldDraftPushbutton && $this->family === 'pushbutton';
    }

    /**
     * @return FormFieldDraftPushbutton
     */
    public function asPushbutton(): FormFieldDraftPushbutton
    {
        if (!($this->value instanceof FormFieldDraftPushbutton && $this->family === 'pushbutton')) {
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
        return $this->value instanceof FormFieldDraftSignature && $this->family === 'signature';
    }

    /**
     * @return FormFieldDraftSignature
     */
    public function asSignature(): FormFieldDraftSignature
    {
        if (!($this->value instanceof FormFieldDraftSignature && $this->family === 'signature')) {
            throw new Exception(
                "Expected signature; got " . $this->family . " with value of type " . get_debug_type($this->value),
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
                $args['value'] = FormFieldDraftText::jsonDeserialize($data);
                break;
            case 'checkbox':
                $args['value'] = FormFieldDraftCheckbox::jsonDeserialize($data);
                break;
            case 'radio':
                $args['value'] = FormFieldDraftRadio::jsonDeserialize($data);
                break;
            case 'combobox':
                $args['value'] = FormFieldDraftCombobox::jsonDeserialize($data);
                break;
            case 'listbox':
                $args['value'] = FormFieldDraftListbox::jsonDeserialize($data);
                break;
            case 'pushbutton':
                $args['value'] = FormFieldDraftPushbutton::jsonDeserialize($data);
                break;
            case 'signature':
                $args['value'] = FormFieldDraftSignature::jsonDeserialize($data);
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
