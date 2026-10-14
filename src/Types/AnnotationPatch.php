<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class AnnotationPatch extends JsonSerializableType
{
    /**
     * @var (
     *    'highlight'
     *   |'underline'
     *   |'squiggly'
     *   |'strikeout'
     *   |'circle'
     *   |'square'
     *   |'polygon'
     *   |'polyline'
     *   |'line'
     *   |'link'
     *   |'ink'
     *   |'free-text'
     *   |'caret'
     *   |'text'
     *   |'stamp'
     *   |'file-attachment'
     *   |'widget'
     *   |'redact'
     *   |'popup'
     *   |'_unknown'
     * ) $subtype
     */
    public readonly string $subtype;

    /**
     * @var (
     *    AnnotationPatchHighlight
     *   |AnnotationPatchUnderline
     *   |AnnotationPatchSquiggly
     *   |AnnotationPatchStrikeout
     *   |AnnotationPatchCircle
     *   |AnnotationPatchSquare
     *   |AnnotationPatchPolygon
     *   |AnnotationPatchPolyline
     *   |AnnotationPatchLine
     *   |AnnotationPatchLink
     *   |AnnotationPatchInk
     *   |AnnotationPatchFreeText
     *   |AnnotationPatchCaret
     *   |AnnotationPatchText
     *   |AnnotationPatchStamp
     *   |AnnotationPatchFileAttachment
     *   |WidgetPatch
     *   |AnnotationPatchRedact
     *   |AnnotationPatchPopup
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   subtype: (
     *    'highlight'
     *   |'underline'
     *   |'squiggly'
     *   |'strikeout'
     *   |'circle'
     *   |'square'
     *   |'polygon'
     *   |'polyline'
     *   |'line'
     *   |'link'
     *   |'ink'
     *   |'free-text'
     *   |'caret'
     *   |'text'
     *   |'stamp'
     *   |'file-attachment'
     *   |'widget'
     *   |'redact'
     *   |'popup'
     *   |'_unknown'
     * ),
     *   value: (
     *    AnnotationPatchHighlight
     *   |AnnotationPatchUnderline
     *   |AnnotationPatchSquiggly
     *   |AnnotationPatchStrikeout
     *   |AnnotationPatchCircle
     *   |AnnotationPatchSquare
     *   |AnnotationPatchPolygon
     *   |AnnotationPatchPolyline
     *   |AnnotationPatchLine
     *   |AnnotationPatchLink
     *   |AnnotationPatchInk
     *   |AnnotationPatchFreeText
     *   |AnnotationPatchCaret
     *   |AnnotationPatchText
     *   |AnnotationPatchStamp
     *   |AnnotationPatchFileAttachment
     *   |WidgetPatch
     *   |AnnotationPatchRedact
     *   |AnnotationPatchPopup
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->subtype = $values['subtype'];
        $this->value = $values['value'];
    }

    /**
     * @param AnnotationPatchHighlight $highlight
     * @return AnnotationPatch
     */
    public static function highlight(AnnotationPatchHighlight $highlight): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'highlight',
            'value' => $highlight,
        ]);
    }

    /**
     * @param AnnotationPatchUnderline $underline
     * @return AnnotationPatch
     */
    public static function underline(AnnotationPatchUnderline $underline): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'underline',
            'value' => $underline,
        ]);
    }

    /**
     * @param AnnotationPatchSquiggly $squiggly
     * @return AnnotationPatch
     */
    public static function squiggly(AnnotationPatchSquiggly $squiggly): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'squiggly',
            'value' => $squiggly,
        ]);
    }

    /**
     * @param AnnotationPatchStrikeout $strikeout
     * @return AnnotationPatch
     */
    public static function strikeout(AnnotationPatchStrikeout $strikeout): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'strikeout',
            'value' => $strikeout,
        ]);
    }

    /**
     * @param AnnotationPatchCircle $circle
     * @return AnnotationPatch
     */
    public static function circle(AnnotationPatchCircle $circle): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'circle',
            'value' => $circle,
        ]);
    }

    /**
     * @param AnnotationPatchSquare $square
     * @return AnnotationPatch
     */
    public static function square(AnnotationPatchSquare $square): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'square',
            'value' => $square,
        ]);
    }

    /**
     * @param AnnotationPatchPolygon $polygon
     * @return AnnotationPatch
     */
    public static function polygon(AnnotationPatchPolygon $polygon): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'polygon',
            'value' => $polygon,
        ]);
    }

    /**
     * @param AnnotationPatchPolyline $polyline
     * @return AnnotationPatch
     */
    public static function polyline(AnnotationPatchPolyline $polyline): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'polyline',
            'value' => $polyline,
        ]);
    }

    /**
     * @param AnnotationPatchLine $line
     * @return AnnotationPatch
     */
    public static function line(AnnotationPatchLine $line): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'line',
            'value' => $line,
        ]);
    }

    /**
     * @param AnnotationPatchLink $link
     * @return AnnotationPatch
     */
    public static function link(AnnotationPatchLink $link): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'link',
            'value' => $link,
        ]);
    }

    /**
     * @param AnnotationPatchInk $ink
     * @return AnnotationPatch
     */
    public static function ink(AnnotationPatchInk $ink): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'ink',
            'value' => $ink,
        ]);
    }

    /**
     * @param AnnotationPatchFreeText $freeText
     * @return AnnotationPatch
     */
    public static function freeText(AnnotationPatchFreeText $freeText): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'free-text',
            'value' => $freeText,
        ]);
    }

    /**
     * @param AnnotationPatchCaret $caret
     * @return AnnotationPatch
     */
    public static function caret(AnnotationPatchCaret $caret): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'caret',
            'value' => $caret,
        ]);
    }

    /**
     * @param AnnotationPatchText $text
     * @return AnnotationPatch
     */
    public static function text(AnnotationPatchText $text): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'text',
            'value' => $text,
        ]);
    }

    /**
     * @param AnnotationPatchStamp $stamp
     * @return AnnotationPatch
     */
    public static function stamp(AnnotationPatchStamp $stamp): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'stamp',
            'value' => $stamp,
        ]);
    }

    /**
     * @param AnnotationPatchFileAttachment $fileAttachment
     * @return AnnotationPatch
     */
    public static function fileAttachment(AnnotationPatchFileAttachment $fileAttachment): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'file-attachment',
            'value' => $fileAttachment,
        ]);
    }

    /**
     * @param WidgetPatch $widget
     * @return AnnotationPatch
     */
    public static function widget(WidgetPatch $widget): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'widget',
            'value' => $widget,
        ]);
    }

    /**
     * @param AnnotationPatchRedact $redact
     * @return AnnotationPatch
     */
    public static function redact(AnnotationPatchRedact $redact): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'redact',
            'value' => $redact,
        ]);
    }

    /**
     * @param AnnotationPatchPopup $popup
     * @return AnnotationPatch
     */
    public static function popup(AnnotationPatchPopup $popup): AnnotationPatch
    {
        return new AnnotationPatch([
            'subtype' => 'popup',
            'value' => $popup,
        ]);
    }

    /**
     * @return bool
     */
    public function isHighlight(): bool
    {
        return $this->value instanceof AnnotationPatchHighlight && $this->subtype === 'highlight';
    }

    /**
     * @return AnnotationPatchHighlight
     */
    public function asHighlight(): AnnotationPatchHighlight
    {
        if (!($this->value instanceof AnnotationPatchHighlight && $this->subtype === 'highlight')) {
            throw new Exception(
                "Expected highlight; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isUnderline(): bool
    {
        return $this->value instanceof AnnotationPatchUnderline && $this->subtype === 'underline';
    }

    /**
     * @return AnnotationPatchUnderline
     */
    public function asUnderline(): AnnotationPatchUnderline
    {
        if (!($this->value instanceof AnnotationPatchUnderline && $this->subtype === 'underline')) {
            throw new Exception(
                "Expected underline; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSquiggly(): bool
    {
        return $this->value instanceof AnnotationPatchSquiggly && $this->subtype === 'squiggly';
    }

    /**
     * @return AnnotationPatchSquiggly
     */
    public function asSquiggly(): AnnotationPatchSquiggly
    {
        if (!($this->value instanceof AnnotationPatchSquiggly && $this->subtype === 'squiggly')) {
            throw new Exception(
                "Expected squiggly; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isStrikeout(): bool
    {
        return $this->value instanceof AnnotationPatchStrikeout && $this->subtype === 'strikeout';
    }

    /**
     * @return AnnotationPatchStrikeout
     */
    public function asStrikeout(): AnnotationPatchStrikeout
    {
        if (!($this->value instanceof AnnotationPatchStrikeout && $this->subtype === 'strikeout')) {
            throw new Exception(
                "Expected strikeout; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCircle(): bool
    {
        return $this->value instanceof AnnotationPatchCircle && $this->subtype === 'circle';
    }

    /**
     * @return AnnotationPatchCircle
     */
    public function asCircle(): AnnotationPatchCircle
    {
        if (!($this->value instanceof AnnotationPatchCircle && $this->subtype === 'circle')) {
            throw new Exception(
                "Expected circle; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isSquare(): bool
    {
        return $this->value instanceof AnnotationPatchSquare && $this->subtype === 'square';
    }

    /**
     * @return AnnotationPatchSquare
     */
    public function asSquare(): AnnotationPatchSquare
    {
        if (!($this->value instanceof AnnotationPatchSquare && $this->subtype === 'square')) {
            throw new Exception(
                "Expected square; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isPolygon(): bool
    {
        return $this->value instanceof AnnotationPatchPolygon && $this->subtype === 'polygon';
    }

    /**
     * @return AnnotationPatchPolygon
     */
    public function asPolygon(): AnnotationPatchPolygon
    {
        if (!($this->value instanceof AnnotationPatchPolygon && $this->subtype === 'polygon')) {
            throw new Exception(
                "Expected polygon; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isPolyline(): bool
    {
        return $this->value instanceof AnnotationPatchPolyline && $this->subtype === 'polyline';
    }

    /**
     * @return AnnotationPatchPolyline
     */
    public function asPolyline(): AnnotationPatchPolyline
    {
        if (!($this->value instanceof AnnotationPatchPolyline && $this->subtype === 'polyline')) {
            throw new Exception(
                "Expected polyline; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isLine(): bool
    {
        return $this->value instanceof AnnotationPatchLine && $this->subtype === 'line';
    }

    /**
     * @return AnnotationPatchLine
     */
    public function asLine(): AnnotationPatchLine
    {
        if (!($this->value instanceof AnnotationPatchLine && $this->subtype === 'line')) {
            throw new Exception(
                "Expected line; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isLink(): bool
    {
        return $this->value instanceof AnnotationPatchLink && $this->subtype === 'link';
    }

    /**
     * @return AnnotationPatchLink
     */
    public function asLink(): AnnotationPatchLink
    {
        if (!($this->value instanceof AnnotationPatchLink && $this->subtype === 'link')) {
            throw new Exception(
                "Expected link; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isInk(): bool
    {
        return $this->value instanceof AnnotationPatchInk && $this->subtype === 'ink';
    }

    /**
     * @return AnnotationPatchInk
     */
    public function asInk(): AnnotationPatchInk
    {
        if (!($this->value instanceof AnnotationPatchInk && $this->subtype === 'ink')) {
            throw new Exception(
                "Expected ink; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFreeText(): bool
    {
        return $this->value instanceof AnnotationPatchFreeText && $this->subtype === 'free-text';
    }

    /**
     * @return AnnotationPatchFreeText
     */
    public function asFreeText(): AnnotationPatchFreeText
    {
        if (!($this->value instanceof AnnotationPatchFreeText && $this->subtype === 'free-text')) {
            throw new Exception(
                "Expected free-text; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isCaret(): bool
    {
        return $this->value instanceof AnnotationPatchCaret && $this->subtype === 'caret';
    }

    /**
     * @return AnnotationPatchCaret
     */
    public function asCaret(): AnnotationPatchCaret
    {
        if (!($this->value instanceof AnnotationPatchCaret && $this->subtype === 'caret')) {
            throw new Exception(
                "Expected caret; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isText(): bool
    {
        return $this->value instanceof AnnotationPatchText && $this->subtype === 'text';
    }

    /**
     * @return AnnotationPatchText
     */
    public function asText(): AnnotationPatchText
    {
        if (!($this->value instanceof AnnotationPatchText && $this->subtype === 'text')) {
            throw new Exception(
                "Expected text; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isStamp(): bool
    {
        return $this->value instanceof AnnotationPatchStamp && $this->subtype === 'stamp';
    }

    /**
     * @return AnnotationPatchStamp
     */
    public function asStamp(): AnnotationPatchStamp
    {
        if (!($this->value instanceof AnnotationPatchStamp && $this->subtype === 'stamp')) {
            throw new Exception(
                "Expected stamp; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFileAttachment(): bool
    {
        return $this->value instanceof AnnotationPatchFileAttachment && $this->subtype === 'file-attachment';
    }

    /**
     * @return AnnotationPatchFileAttachment
     */
    public function asFileAttachment(): AnnotationPatchFileAttachment
    {
        if (!($this->value instanceof AnnotationPatchFileAttachment && $this->subtype === 'file-attachment')) {
            throw new Exception(
                "Expected file-attachment; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isWidget(): bool
    {
        return $this->value instanceof WidgetPatch && $this->subtype === 'widget';
    }

    /**
     * @return WidgetPatch
     */
    public function asWidget(): WidgetPatch
    {
        if (!($this->value instanceof WidgetPatch && $this->subtype === 'widget')) {
            throw new Exception(
                "Expected widget; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isRedact(): bool
    {
        return $this->value instanceof AnnotationPatchRedact && $this->subtype === 'redact';
    }

    /**
     * @return AnnotationPatchRedact
     */
    public function asRedact(): AnnotationPatchRedact
    {
        if (!($this->value instanceof AnnotationPatchRedact && $this->subtype === 'redact')) {
            throw new Exception(
                "Expected redact; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isPopup(): bool
    {
        return $this->value instanceof AnnotationPatchPopup && $this->subtype === 'popup';
    }

    /**
     * @return AnnotationPatchPopup
     */
    public function asPopup(): AnnotationPatchPopup
    {
        if (!($this->value instanceof AnnotationPatchPopup && $this->subtype === 'popup')) {
            throw new Exception(
                "Expected popup; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
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
        $result['subtype'] = $this->subtype;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->subtype) {
            case 'highlight':
                $value = $this->asHighlight()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'underline':
                $value = $this->asUnderline()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'squiggly':
                $value = $this->asSquiggly()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'strikeout':
                $value = $this->asStrikeout()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'circle':
                $value = $this->asCircle()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'square':
                $value = $this->asSquare()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'polygon':
                $value = $this->asPolygon()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'polyline':
                $value = $this->asPolyline()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'line':
                $value = $this->asLine()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'link':
                $value = $this->asLink()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'ink':
                $value = $this->asInk()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'free-text':
                $value = $this->asFreeText()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'caret':
                $value = $this->asCaret()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'text':
                $value = $this->asText()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'stamp':
                $value = $this->asStamp()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'file-attachment':
                $value = $this->asFileAttachment()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'widget':
                $value = $this->asWidget()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'redact':
                $value = $this->asRedact()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'popup':
                $value = $this->asPopup()->jsonSerialize();
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
        if (!array_key_exists('subtype', $data)) {
            throw new Exception(
                "JSON data is missing property 'subtype'",
            );
        }
        $subtype = $data['subtype'];
        if (!(is_string($subtype))) {
            throw new Exception(
                "Expected property 'subtype' in JSON data to be string, instead received " . get_debug_type($data['subtype']),
            );
        }

        $args['subtype'] = $subtype;
        switch ($subtype) {
            case 'highlight':
                $args['value'] = AnnotationPatchHighlight::jsonDeserialize($data);
                break;
            case 'underline':
                $args['value'] = AnnotationPatchUnderline::jsonDeserialize($data);
                break;
            case 'squiggly':
                $args['value'] = AnnotationPatchSquiggly::jsonDeserialize($data);
                break;
            case 'strikeout':
                $args['value'] = AnnotationPatchStrikeout::jsonDeserialize($data);
                break;
            case 'circle':
                $args['value'] = AnnotationPatchCircle::jsonDeserialize($data);
                break;
            case 'square':
                $args['value'] = AnnotationPatchSquare::jsonDeserialize($data);
                break;
            case 'polygon':
                $args['value'] = AnnotationPatchPolygon::jsonDeserialize($data);
                break;
            case 'polyline':
                $args['value'] = AnnotationPatchPolyline::jsonDeserialize($data);
                break;
            case 'line':
                $args['value'] = AnnotationPatchLine::jsonDeserialize($data);
                break;
            case 'link':
                $args['value'] = AnnotationPatchLink::jsonDeserialize($data);
                break;
            case 'ink':
                $args['value'] = AnnotationPatchInk::jsonDeserialize($data);
                break;
            case 'free-text':
                $args['value'] = AnnotationPatchFreeText::jsonDeserialize($data);
                break;
            case 'caret':
                $args['value'] = AnnotationPatchCaret::jsonDeserialize($data);
                break;
            case 'text':
                $args['value'] = AnnotationPatchText::jsonDeserialize($data);
                break;
            case 'stamp':
                $args['value'] = AnnotationPatchStamp::jsonDeserialize($data);
                break;
            case 'file-attachment':
                $args['value'] = AnnotationPatchFileAttachment::jsonDeserialize($data);
                break;
            case 'widget':
                $args['value'] = WidgetPatch::jsonDeserialize($data);
                break;
            case 'redact':
                $args['value'] = AnnotationPatchRedact::jsonDeserialize($data);
                break;
            case 'popup':
                $args['value'] = AnnotationPatchPopup::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['subtype'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
