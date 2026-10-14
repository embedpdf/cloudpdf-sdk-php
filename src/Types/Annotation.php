<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class Annotation extends JsonSerializableType
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
     *   |'unsupported'
     *   |'_unknown'
     * ) $subtype
     */
    public readonly string $subtype;

    /**
     * @var (
     *    AnnotationHighlight
     *   |AnnotationUnderline
     *   |AnnotationSquiggly
     *   |AnnotationStrikeout
     *   |AnnotationCircle
     *   |AnnotationSquare
     *   |AnnotationPolygon
     *   |AnnotationPolyline
     *   |AnnotationLine
     *   |AnnotationLink
     *   |AnnotationInk
     *   |AnnotationFreeText
     *   |AnnotationCaret
     *   |AnnotationText
     *   |AnnotationStamp
     *   |AnnotationFileAttachment
     *   |WidgetAnnotation
     *   |AnnotationRedact
     *   |AnnotationPopup
     *   |AnnotationUnsupported
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
     *   |'unsupported'
     *   |'_unknown'
     * ),
     *   value: (
     *    AnnotationHighlight
     *   |AnnotationUnderline
     *   |AnnotationSquiggly
     *   |AnnotationStrikeout
     *   |AnnotationCircle
     *   |AnnotationSquare
     *   |AnnotationPolygon
     *   |AnnotationPolyline
     *   |AnnotationLine
     *   |AnnotationLink
     *   |AnnotationInk
     *   |AnnotationFreeText
     *   |AnnotationCaret
     *   |AnnotationText
     *   |AnnotationStamp
     *   |AnnotationFileAttachment
     *   |WidgetAnnotation
     *   |AnnotationRedact
     *   |AnnotationPopup
     *   |AnnotationUnsupported
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
     * @param AnnotationHighlight $highlight
     * @return Annotation
     */
    public static function highlight(AnnotationHighlight $highlight): Annotation
    {
        return new Annotation([
            'subtype' => 'highlight',
            'value' => $highlight,
        ]);
    }

    /**
     * @param AnnotationUnderline $underline
     * @return Annotation
     */
    public static function underline(AnnotationUnderline $underline): Annotation
    {
        return new Annotation([
            'subtype' => 'underline',
            'value' => $underline,
        ]);
    }

    /**
     * @param AnnotationSquiggly $squiggly
     * @return Annotation
     */
    public static function squiggly(AnnotationSquiggly $squiggly): Annotation
    {
        return new Annotation([
            'subtype' => 'squiggly',
            'value' => $squiggly,
        ]);
    }

    /**
     * @param AnnotationStrikeout $strikeout
     * @return Annotation
     */
    public static function strikeout(AnnotationStrikeout $strikeout): Annotation
    {
        return new Annotation([
            'subtype' => 'strikeout',
            'value' => $strikeout,
        ]);
    }

    /**
     * @param AnnotationCircle $circle
     * @return Annotation
     */
    public static function circle(AnnotationCircle $circle): Annotation
    {
        return new Annotation([
            'subtype' => 'circle',
            'value' => $circle,
        ]);
    }

    /**
     * @param AnnotationSquare $square
     * @return Annotation
     */
    public static function square(AnnotationSquare $square): Annotation
    {
        return new Annotation([
            'subtype' => 'square',
            'value' => $square,
        ]);
    }

    /**
     * @param AnnotationPolygon $polygon
     * @return Annotation
     */
    public static function polygon(AnnotationPolygon $polygon): Annotation
    {
        return new Annotation([
            'subtype' => 'polygon',
            'value' => $polygon,
        ]);
    }

    /**
     * @param AnnotationPolyline $polyline
     * @return Annotation
     */
    public static function polyline(AnnotationPolyline $polyline): Annotation
    {
        return new Annotation([
            'subtype' => 'polyline',
            'value' => $polyline,
        ]);
    }

    /**
     * @param AnnotationLine $line
     * @return Annotation
     */
    public static function line(AnnotationLine $line): Annotation
    {
        return new Annotation([
            'subtype' => 'line',
            'value' => $line,
        ]);
    }

    /**
     * @param AnnotationLink $link
     * @return Annotation
     */
    public static function link(AnnotationLink $link): Annotation
    {
        return new Annotation([
            'subtype' => 'link',
            'value' => $link,
        ]);
    }

    /**
     * @param AnnotationInk $ink
     * @return Annotation
     */
    public static function ink(AnnotationInk $ink): Annotation
    {
        return new Annotation([
            'subtype' => 'ink',
            'value' => $ink,
        ]);
    }

    /**
     * @param AnnotationFreeText $freeText
     * @return Annotation
     */
    public static function freeText(AnnotationFreeText $freeText): Annotation
    {
        return new Annotation([
            'subtype' => 'free-text',
            'value' => $freeText,
        ]);
    }

    /**
     * @param AnnotationCaret $caret
     * @return Annotation
     */
    public static function caret(AnnotationCaret $caret): Annotation
    {
        return new Annotation([
            'subtype' => 'caret',
            'value' => $caret,
        ]);
    }

    /**
     * @param AnnotationText $text
     * @return Annotation
     */
    public static function text(AnnotationText $text): Annotation
    {
        return new Annotation([
            'subtype' => 'text',
            'value' => $text,
        ]);
    }

    /**
     * @param AnnotationStamp $stamp
     * @return Annotation
     */
    public static function stamp(AnnotationStamp $stamp): Annotation
    {
        return new Annotation([
            'subtype' => 'stamp',
            'value' => $stamp,
        ]);
    }

    /**
     * @param AnnotationFileAttachment $fileAttachment
     * @return Annotation
     */
    public static function fileAttachment(AnnotationFileAttachment $fileAttachment): Annotation
    {
        return new Annotation([
            'subtype' => 'file-attachment',
            'value' => $fileAttachment,
        ]);
    }

    /**
     * @param WidgetAnnotation $widget
     * @return Annotation
     */
    public static function widget(WidgetAnnotation $widget): Annotation
    {
        return new Annotation([
            'subtype' => 'widget',
            'value' => $widget,
        ]);
    }

    /**
     * @param AnnotationRedact $redact
     * @return Annotation
     */
    public static function redact(AnnotationRedact $redact): Annotation
    {
        return new Annotation([
            'subtype' => 'redact',
            'value' => $redact,
        ]);
    }

    /**
     * @param AnnotationPopup $popup
     * @return Annotation
     */
    public static function popup(AnnotationPopup $popup): Annotation
    {
        return new Annotation([
            'subtype' => 'popup',
            'value' => $popup,
        ]);
    }

    /**
     * @param AnnotationUnsupported $unsupported
     * @return Annotation
     */
    public static function unsupported(AnnotationUnsupported $unsupported): Annotation
    {
        return new Annotation([
            'subtype' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isHighlight(): bool
    {
        return $this->value instanceof AnnotationHighlight && $this->subtype === 'highlight';
    }

    /**
     * @return AnnotationHighlight
     */
    public function asHighlight(): AnnotationHighlight
    {
        if (!($this->value instanceof AnnotationHighlight && $this->subtype === 'highlight')) {
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
        return $this->value instanceof AnnotationUnderline && $this->subtype === 'underline';
    }

    /**
     * @return AnnotationUnderline
     */
    public function asUnderline(): AnnotationUnderline
    {
        if (!($this->value instanceof AnnotationUnderline && $this->subtype === 'underline')) {
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
        return $this->value instanceof AnnotationSquiggly && $this->subtype === 'squiggly';
    }

    /**
     * @return AnnotationSquiggly
     */
    public function asSquiggly(): AnnotationSquiggly
    {
        if (!($this->value instanceof AnnotationSquiggly && $this->subtype === 'squiggly')) {
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
        return $this->value instanceof AnnotationStrikeout && $this->subtype === 'strikeout';
    }

    /**
     * @return AnnotationStrikeout
     */
    public function asStrikeout(): AnnotationStrikeout
    {
        if (!($this->value instanceof AnnotationStrikeout && $this->subtype === 'strikeout')) {
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
        return $this->value instanceof AnnotationCircle && $this->subtype === 'circle';
    }

    /**
     * @return AnnotationCircle
     */
    public function asCircle(): AnnotationCircle
    {
        if (!($this->value instanceof AnnotationCircle && $this->subtype === 'circle')) {
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
        return $this->value instanceof AnnotationSquare && $this->subtype === 'square';
    }

    /**
     * @return AnnotationSquare
     */
    public function asSquare(): AnnotationSquare
    {
        if (!($this->value instanceof AnnotationSquare && $this->subtype === 'square')) {
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
        return $this->value instanceof AnnotationPolygon && $this->subtype === 'polygon';
    }

    /**
     * @return AnnotationPolygon
     */
    public function asPolygon(): AnnotationPolygon
    {
        if (!($this->value instanceof AnnotationPolygon && $this->subtype === 'polygon')) {
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
        return $this->value instanceof AnnotationPolyline && $this->subtype === 'polyline';
    }

    /**
     * @return AnnotationPolyline
     */
    public function asPolyline(): AnnotationPolyline
    {
        if (!($this->value instanceof AnnotationPolyline && $this->subtype === 'polyline')) {
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
        return $this->value instanceof AnnotationLine && $this->subtype === 'line';
    }

    /**
     * @return AnnotationLine
     */
    public function asLine(): AnnotationLine
    {
        if (!($this->value instanceof AnnotationLine && $this->subtype === 'line')) {
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
        return $this->value instanceof AnnotationLink && $this->subtype === 'link';
    }

    /**
     * @return AnnotationLink
     */
    public function asLink(): AnnotationLink
    {
        if (!($this->value instanceof AnnotationLink && $this->subtype === 'link')) {
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
        return $this->value instanceof AnnotationInk && $this->subtype === 'ink';
    }

    /**
     * @return AnnotationInk
     */
    public function asInk(): AnnotationInk
    {
        if (!($this->value instanceof AnnotationInk && $this->subtype === 'ink')) {
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
        return $this->value instanceof AnnotationFreeText && $this->subtype === 'free-text';
    }

    /**
     * @return AnnotationFreeText
     */
    public function asFreeText(): AnnotationFreeText
    {
        if (!($this->value instanceof AnnotationFreeText && $this->subtype === 'free-text')) {
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
        return $this->value instanceof AnnotationCaret && $this->subtype === 'caret';
    }

    /**
     * @return AnnotationCaret
     */
    public function asCaret(): AnnotationCaret
    {
        if (!($this->value instanceof AnnotationCaret && $this->subtype === 'caret')) {
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
        return $this->value instanceof AnnotationText && $this->subtype === 'text';
    }

    /**
     * @return AnnotationText
     */
    public function asText(): AnnotationText
    {
        if (!($this->value instanceof AnnotationText && $this->subtype === 'text')) {
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
        return $this->value instanceof AnnotationStamp && $this->subtype === 'stamp';
    }

    /**
     * @return AnnotationStamp
     */
    public function asStamp(): AnnotationStamp
    {
        if (!($this->value instanceof AnnotationStamp && $this->subtype === 'stamp')) {
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
        return $this->value instanceof AnnotationFileAttachment && $this->subtype === 'file-attachment';
    }

    /**
     * @return AnnotationFileAttachment
     */
    public function asFileAttachment(): AnnotationFileAttachment
    {
        if (!($this->value instanceof AnnotationFileAttachment && $this->subtype === 'file-attachment')) {
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
        return $this->value instanceof WidgetAnnotation && $this->subtype === 'widget';
    }

    /**
     * @return WidgetAnnotation
     */
    public function asWidget(): WidgetAnnotation
    {
        if (!($this->value instanceof WidgetAnnotation && $this->subtype === 'widget')) {
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
        return $this->value instanceof AnnotationRedact && $this->subtype === 'redact';
    }

    /**
     * @return AnnotationRedact
     */
    public function asRedact(): AnnotationRedact
    {
        if (!($this->value instanceof AnnotationRedact && $this->subtype === 'redact')) {
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
        return $this->value instanceof AnnotationPopup && $this->subtype === 'popup';
    }

    /**
     * @return AnnotationPopup
     */
    public function asPopup(): AnnotationPopup
    {
        if (!($this->value instanceof AnnotationPopup && $this->subtype === 'popup')) {
            throw new Exception(
                "Expected popup; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isUnsupported(): bool
    {
        return $this->value instanceof AnnotationUnsupported && $this->subtype === 'unsupported';
    }

    /**
     * @return AnnotationUnsupported
     */
    public function asUnsupported(): AnnotationUnsupported
    {
        if (!($this->value instanceof AnnotationUnsupported && $this->subtype === 'unsupported')) {
            throw new Exception(
                "Expected unsupported; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
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
                $args['value'] = AnnotationHighlight::jsonDeserialize($data);
                break;
            case 'underline':
                $args['value'] = AnnotationUnderline::jsonDeserialize($data);
                break;
            case 'squiggly':
                $args['value'] = AnnotationSquiggly::jsonDeserialize($data);
                break;
            case 'strikeout':
                $args['value'] = AnnotationStrikeout::jsonDeserialize($data);
                break;
            case 'circle':
                $args['value'] = AnnotationCircle::jsonDeserialize($data);
                break;
            case 'square':
                $args['value'] = AnnotationSquare::jsonDeserialize($data);
                break;
            case 'polygon':
                $args['value'] = AnnotationPolygon::jsonDeserialize($data);
                break;
            case 'polyline':
                $args['value'] = AnnotationPolyline::jsonDeserialize($data);
                break;
            case 'line':
                $args['value'] = AnnotationLine::jsonDeserialize($data);
                break;
            case 'link':
                $args['value'] = AnnotationLink::jsonDeserialize($data);
                break;
            case 'ink':
                $args['value'] = AnnotationInk::jsonDeserialize($data);
                break;
            case 'free-text':
                $args['value'] = AnnotationFreeText::jsonDeserialize($data);
                break;
            case 'caret':
                $args['value'] = AnnotationCaret::jsonDeserialize($data);
                break;
            case 'text':
                $args['value'] = AnnotationText::jsonDeserialize($data);
                break;
            case 'stamp':
                $args['value'] = AnnotationStamp::jsonDeserialize($data);
                break;
            case 'file-attachment':
                $args['value'] = AnnotationFileAttachment::jsonDeserialize($data);
                break;
            case 'widget':
                $args['value'] = WidgetAnnotation::jsonDeserialize($data);
                break;
            case 'redact':
                $args['value'] = AnnotationRedact::jsonDeserialize($data);
                break;
            case 'popup':
                $args['value'] = AnnotationPopup::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = AnnotationUnsupported::jsonDeserialize($data);
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
