<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class PdfActionWrite extends JsonSerializableType
{
    /**
     * @var (
     *    'javascript'
     *   |'goto'
     *   |'uri'
     *   |'named'
     *   |'hide'
     *   |'reset-form'
     *   |'submit-form'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    PdfActionWriteJavascript
     *   |PdfActionWriteGoto
     *   |PdfActionWriteUri
     *   |PdfActionWriteNamed
     *   |PdfActionWriteHide
     *   |PdfActionWriteResetForm
     *   |PdfActionWriteSubmitForm
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'javascript'
     *   |'goto'
     *   |'uri'
     *   |'named'
     *   |'hide'
     *   |'reset-form'
     *   |'submit-form'
     *   |'_unknown'
     * ),
     *   value: (
     *    PdfActionWriteJavascript
     *   |PdfActionWriteGoto
     *   |PdfActionWriteUri
     *   |PdfActionWriteNamed
     *   |PdfActionWriteHide
     *   |PdfActionWriteResetForm
     *   |PdfActionWriteSubmitForm
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->value = $values['value'];
    }

    /**
     * @param PdfActionWriteJavascript $javascript
     * @return PdfActionWrite
     */
    public static function javascript(PdfActionWriteJavascript $javascript): PdfActionWrite
    {
        return new PdfActionWrite([
            'type' => 'javascript',
            'value' => $javascript,
        ]);
    }

    /**
     * @param PdfActionWriteGoto $goto
     * @return PdfActionWrite
     */
    public static function goto(PdfActionWriteGoto $goto): PdfActionWrite
    {
        return new PdfActionWrite([
            'type' => 'goto',
            'value' => $goto,
        ]);
    }

    /**
     * @param PdfActionWriteUri $uri
     * @return PdfActionWrite
     */
    public static function uri(PdfActionWriteUri $uri): PdfActionWrite
    {
        return new PdfActionWrite([
            'type' => 'uri',
            'value' => $uri,
        ]);
    }

    /**
     * @param PdfActionWriteNamed $named
     * @return PdfActionWrite
     */
    public static function named(PdfActionWriteNamed $named): PdfActionWrite
    {
        return new PdfActionWrite([
            'type' => 'named',
            'value' => $named,
        ]);
    }

    /**
     * @param PdfActionWriteHide $hide
     * @return PdfActionWrite
     */
    public static function hide(PdfActionWriteHide $hide): PdfActionWrite
    {
        return new PdfActionWrite([
            'type' => 'hide',
            'value' => $hide,
        ]);
    }

    /**
     * @param PdfActionWriteResetForm $resetForm
     * @return PdfActionWrite
     */
    public static function resetForm(PdfActionWriteResetForm $resetForm): PdfActionWrite
    {
        return new PdfActionWrite([
            'type' => 'reset-form',
            'value' => $resetForm,
        ]);
    }

    /**
     * @param PdfActionWriteSubmitForm $submitForm
     * @return PdfActionWrite
     */
    public static function submitForm(PdfActionWriteSubmitForm $submitForm): PdfActionWrite
    {
        return new PdfActionWrite([
            'type' => 'submit-form',
            'value' => $submitForm,
        ]);
    }

    /**
     * @return bool
     */
    public function isJavascript(): bool
    {
        return $this->value instanceof PdfActionWriteJavascript && $this->type === 'javascript';
    }

    /**
     * @return PdfActionWriteJavascript
     */
    public function asJavascript(): PdfActionWriteJavascript
    {
        if (!($this->value instanceof PdfActionWriteJavascript && $this->type === 'javascript')) {
            throw new Exception(
                "Expected javascript; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isGoto_(): bool
    {
        return $this->value instanceof PdfActionWriteGoto && $this->type === 'goto';
    }

    /**
     * @return PdfActionWriteGoto
     */
    public function asGoto_(): PdfActionWriteGoto
    {
        if (!($this->value instanceof PdfActionWriteGoto && $this->type === 'goto')) {
            throw new Exception(
                "Expected goto; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isUri(): bool
    {
        return $this->value instanceof PdfActionWriteUri && $this->type === 'uri';
    }

    /**
     * @return PdfActionWriteUri
     */
    public function asUri(): PdfActionWriteUri
    {
        if (!($this->value instanceof PdfActionWriteUri && $this->type === 'uri')) {
            throw new Exception(
                "Expected uri; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isNamed(): bool
    {
        return $this->value instanceof PdfActionWriteNamed && $this->type === 'named';
    }

    /**
     * @return PdfActionWriteNamed
     */
    public function asNamed(): PdfActionWriteNamed
    {
        if (!($this->value instanceof PdfActionWriteNamed && $this->type === 'named')) {
            throw new Exception(
                "Expected named; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isHide(): bool
    {
        return $this->value instanceof PdfActionWriteHide && $this->type === 'hide';
    }

    /**
     * @return PdfActionWriteHide
     */
    public function asHide(): PdfActionWriteHide
    {
        if (!($this->value instanceof PdfActionWriteHide && $this->type === 'hide')) {
            throw new Exception(
                "Expected hide; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isResetForm(): bool
    {
        return $this->value instanceof PdfActionWriteResetForm && $this->type === 'reset-form';
    }

    /**
     * @return PdfActionWriteResetForm
     */
    public function asResetForm(): PdfActionWriteResetForm
    {
        if (!($this->value instanceof PdfActionWriteResetForm && $this->type === 'reset-form')) {
            throw new Exception(
                "Expected reset-form; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSubmitForm(): bool
    {
        return $this->value instanceof PdfActionWriteSubmitForm && $this->type === 'submit-form';
    }

    /**
     * @return PdfActionWriteSubmitForm
     */
    public function asSubmitForm(): PdfActionWriteSubmitForm
    {
        if (!($this->value instanceof PdfActionWriteSubmitForm && $this->type === 'submit-form')) {
            throw new Exception(
                "Expected submit-form; got " . $this->type . " with value of type " . get_debug_type($this->value),
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
        $result['type'] = $this->type;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->type) {
            case 'javascript':
                $value = $this->asJavascript()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'goto':
                $value = $this->asGoto_()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'uri':
                $value = $this->asUri()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'named':
                $value = $this->asNamed()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'hide':
                $value = $this->asHide()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'reset-form':
                $value = $this->asResetForm()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'submit-form':
                $value = $this->asSubmitForm()->jsonSerialize();
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
        if (!array_key_exists('type', $data)) {
            throw new Exception(
                "JSON data is missing property 'type'",
            );
        }
        $type = $data['type'];
        if (!(is_string($type))) {
            throw new Exception(
                "Expected property 'type' in JSON data to be string, instead received " . get_debug_type($data['type']),
            );
        }

        $args['type'] = $type;
        switch ($type) {
            case 'javascript':
                $args['value'] = PdfActionWriteJavascript::jsonDeserialize($data);
                break;
            case 'goto':
                $args['value'] = PdfActionWriteGoto::jsonDeserialize($data);
                break;
            case 'uri':
                $args['value'] = PdfActionWriteUri::jsonDeserialize($data);
                break;
            case 'named':
                $args['value'] = PdfActionWriteNamed::jsonDeserialize($data);
                break;
            case 'hide':
                $args['value'] = PdfActionWriteHide::jsonDeserialize($data);
                break;
            case 'reset-form':
                $args['value'] = PdfActionWriteResetForm::jsonDeserialize($data);
                break;
            case 'submit-form':
                $args['value'] = PdfActionWriteSubmitForm::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['type'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
