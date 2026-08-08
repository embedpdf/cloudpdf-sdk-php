<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Exception;

class DocFormsGet200ResponseFieldsItem extends JsonSerializableType
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
     *    DocFormsGet200ResponseFieldsItemText
     *   |DocFormsGet200ResponseFieldsItemCheckbox
     *   |DocFormsGet200ResponseFieldsItemRadio
     *   |DocFormsGet200ResponseFieldsItemCombobox
     *   |DocFormsGet200ResponseFieldsItemListbox
     *   |DocFormsGet200ResponseFieldsItemPushbutton
     *   |DocFormsGet200ResponseFieldsItemSignature
     *   |DocFormsGet200ResponseFieldsItemUnknown
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
     *    DocFormsGet200ResponseFieldsItemText
     *   |DocFormsGet200ResponseFieldsItemCheckbox
     *   |DocFormsGet200ResponseFieldsItemRadio
     *   |DocFormsGet200ResponseFieldsItemCombobox
     *   |DocFormsGet200ResponseFieldsItemListbox
     *   |DocFormsGet200ResponseFieldsItemPushbutton
     *   |DocFormsGet200ResponseFieldsItemSignature
     *   |DocFormsGet200ResponseFieldsItemUnknown
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
     * @param DocFormsGet200ResponseFieldsItemText $text
     * @return DocFormsGet200ResponseFieldsItem
     */
    public static function text(DocFormsGet200ResponseFieldsItemText $text): DocFormsGet200ResponseFieldsItem
    {
        return new DocFormsGet200ResponseFieldsItem([
            'family' => 'text',
            'value' => $text,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemCheckbox $checkbox
     * @return DocFormsGet200ResponseFieldsItem
     */
    public static function checkbox(DocFormsGet200ResponseFieldsItemCheckbox $checkbox): DocFormsGet200ResponseFieldsItem
    {
        return new DocFormsGet200ResponseFieldsItem([
            'family' => 'checkbox',
            'value' => $checkbox,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemRadio $radio
     * @return DocFormsGet200ResponseFieldsItem
     */
    public static function radio(DocFormsGet200ResponseFieldsItemRadio $radio): DocFormsGet200ResponseFieldsItem
    {
        return new DocFormsGet200ResponseFieldsItem([
            'family' => 'radio',
            'value' => $radio,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemCombobox $combobox
     * @return DocFormsGet200ResponseFieldsItem
     */
    public static function combobox(DocFormsGet200ResponseFieldsItemCombobox $combobox): DocFormsGet200ResponseFieldsItem
    {
        return new DocFormsGet200ResponseFieldsItem([
            'family' => 'combobox',
            'value' => $combobox,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemListbox $listbox
     * @return DocFormsGet200ResponseFieldsItem
     */
    public static function listbox(DocFormsGet200ResponseFieldsItemListbox $listbox): DocFormsGet200ResponseFieldsItem
    {
        return new DocFormsGet200ResponseFieldsItem([
            'family' => 'listbox',
            'value' => $listbox,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemPushbutton $pushbutton
     * @return DocFormsGet200ResponseFieldsItem
     */
    public static function pushbutton(DocFormsGet200ResponseFieldsItemPushbutton $pushbutton): DocFormsGet200ResponseFieldsItem
    {
        return new DocFormsGet200ResponseFieldsItem([
            'family' => 'pushbutton',
            'value' => $pushbutton,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemSignature $signature
     * @return DocFormsGet200ResponseFieldsItem
     */
    public static function signature(DocFormsGet200ResponseFieldsItemSignature $signature): DocFormsGet200ResponseFieldsItem
    {
        return new DocFormsGet200ResponseFieldsItem([
            'family' => 'signature',
            'value' => $signature,
        ]);
    }

    /**
     * @param DocFormsGet200ResponseFieldsItemUnknown $unknown
     * @return DocFormsGet200ResponseFieldsItem
     */
    public static function unknown(DocFormsGet200ResponseFieldsItemUnknown $unknown): DocFormsGet200ResponseFieldsItem
    {
        return new DocFormsGet200ResponseFieldsItem([
            'family' => 'unknown',
            'value' => $unknown,
        ]);
    }

    /**
     * @return bool
     */
    public function isText(): bool
    {
        return $this->value instanceof DocFormsGet200ResponseFieldsItemText && $this->family === 'text';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemText
     */
    public function asText(): DocFormsGet200ResponseFieldsItemText
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemText && $this->family === 'text')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemCheckbox && $this->family === 'checkbox';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemCheckbox
     */
    public function asCheckbox(): DocFormsGet200ResponseFieldsItemCheckbox
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemCheckbox && $this->family === 'checkbox')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemRadio && $this->family === 'radio';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemRadio
     */
    public function asRadio(): DocFormsGet200ResponseFieldsItemRadio
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemRadio && $this->family === 'radio')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemCombobox && $this->family === 'combobox';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemCombobox
     */
    public function asCombobox(): DocFormsGet200ResponseFieldsItemCombobox
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemCombobox && $this->family === 'combobox')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemListbox && $this->family === 'listbox';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemListbox
     */
    public function asListbox(): DocFormsGet200ResponseFieldsItemListbox
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemListbox && $this->family === 'listbox')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemPushbutton && $this->family === 'pushbutton';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemPushbutton
     */
    public function asPushbutton(): DocFormsGet200ResponseFieldsItemPushbutton
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemPushbutton && $this->family === 'pushbutton')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemSignature && $this->family === 'signature';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemSignature
     */
    public function asSignature(): DocFormsGet200ResponseFieldsItemSignature
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemSignature && $this->family === 'signature')) {
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
        return $this->value instanceof DocFormsGet200ResponseFieldsItemUnknown && $this->family === 'unknown';
    }

    /**
     * @return DocFormsGet200ResponseFieldsItemUnknown
     */
    public function asUnknown(): DocFormsGet200ResponseFieldsItemUnknown
    {
        if (!($this->value instanceof DocFormsGet200ResponseFieldsItemUnknown && $this->family === 'unknown')) {
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
                $args['value'] = DocFormsGet200ResponseFieldsItemText::jsonDeserialize($data);
                break;
            case 'checkbox':
                $args['value'] = DocFormsGet200ResponseFieldsItemCheckbox::jsonDeserialize($data);
                break;
            case 'radio':
                $args['value'] = DocFormsGet200ResponseFieldsItemRadio::jsonDeserialize($data);
                break;
            case 'combobox':
                $args['value'] = DocFormsGet200ResponseFieldsItemCombobox::jsonDeserialize($data);
                break;
            case 'listbox':
                $args['value'] = DocFormsGet200ResponseFieldsItemListbox::jsonDeserialize($data);
                break;
            case 'pushbutton':
                $args['value'] = DocFormsGet200ResponseFieldsItemPushbutton::jsonDeserialize($data);
                break;
            case 'signature':
                $args['value'] = DocFormsGet200ResponseFieldsItemSignature::jsonDeserialize($data);
                break;
            case 'unknown':
                $args['value'] = DocFormsGet200ResponseFieldsItemUnknown::jsonDeserialize($data);
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
