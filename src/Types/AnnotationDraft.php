<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class AnnotationDraft extends JsonSerializableType
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
     *    AnnotationDraftHighlight
     *   |AnnotationDraftUnderline
     *   |AnnotationDraftSquiggly
     *   |AnnotationDraftStrikeout
     *   |AnnotationDraftCircle
     *   |AnnotationDraftSquare
     *   |AnnotationDraftPolygon
     *   |AnnotationDraftPolyline
     *   |AnnotationDraftLine
     *   |AnnotationDraftLink
     *   |AnnotationDraftInk
     *   |AnnotationDraftFreeText
     *   |AnnotationDraftCaret
     *   |AnnotationDraftText
     *   |AnnotationDraftStamp
     *   |AnnotationDraftFileAttachment
     *   |AnnotationDraftWidget
     *   |AnnotationDraftRedact
     *   |AnnotationDraftPopup
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
     *    AnnotationDraftHighlight
     *   |AnnotationDraftUnderline
     *   |AnnotationDraftSquiggly
     *   |AnnotationDraftStrikeout
     *   |AnnotationDraftCircle
     *   |AnnotationDraftSquare
     *   |AnnotationDraftPolygon
     *   |AnnotationDraftPolyline
     *   |AnnotationDraftLine
     *   |AnnotationDraftLink
     *   |AnnotationDraftInk
     *   |AnnotationDraftFreeText
     *   |AnnotationDraftCaret
     *   |AnnotationDraftText
     *   |AnnotationDraftStamp
     *   |AnnotationDraftFileAttachment
     *   |AnnotationDraftWidget
     *   |AnnotationDraftRedact
     *   |AnnotationDraftPopup
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
     * @param AnnotationDraftHighlight $highlight
     * @return AnnotationDraft
     */
    public static function highlight(AnnotationDraftHighlight $highlight): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'highlight',
            'value' => $highlight,
        ]);
    }

    /**
     * @param AnnotationDraftUnderline $underline
     * @return AnnotationDraft
     */
    public static function underline(AnnotationDraftUnderline $underline): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'underline',
            'value' => $underline,
        ]);
    }

    /**
     * @param AnnotationDraftSquiggly $squiggly
     * @return AnnotationDraft
     */
    public static function squiggly(AnnotationDraftSquiggly $squiggly): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'squiggly',
            'value' => $squiggly,
        ]);
    }

    /**
     * @param AnnotationDraftStrikeout $strikeout
     * @return AnnotationDraft
     */
    public static function strikeout(AnnotationDraftStrikeout $strikeout): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'strikeout',
            'value' => $strikeout,
        ]);
    }

    /**
     * @param AnnotationDraftCircle $circle
     * @return AnnotationDraft
     */
    public static function circle(AnnotationDraftCircle $circle): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'circle',
            'value' => $circle,
        ]);
    }

    /**
     * @param AnnotationDraftSquare $square
     * @return AnnotationDraft
     */
    public static function square(AnnotationDraftSquare $square): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'square',
            'value' => $square,
        ]);
    }

    /**
     * @param AnnotationDraftPolygon $polygon
     * @return AnnotationDraft
     */
    public static function polygon(AnnotationDraftPolygon $polygon): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'polygon',
            'value' => $polygon,
        ]);
    }

    /**
     * @param AnnotationDraftPolyline $polyline
     * @return AnnotationDraft
     */
    public static function polyline(AnnotationDraftPolyline $polyline): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'polyline',
            'value' => $polyline,
        ]);
    }

    /**
     * @param AnnotationDraftLine $line
     * @return AnnotationDraft
     */
    public static function line(AnnotationDraftLine $line): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'line',
            'value' => $line,
        ]);
    }

    /**
     * @param AnnotationDraftLink $link
     * @return AnnotationDraft
     */
    public static function link(AnnotationDraftLink $link): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'link',
            'value' => $link,
        ]);
    }

    /**
     * @param AnnotationDraftInk $ink
     * @return AnnotationDraft
     */
    public static function ink(AnnotationDraftInk $ink): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'ink',
            'value' => $ink,
        ]);
    }

    /**
     * @param AnnotationDraftFreeText $freeText
     * @return AnnotationDraft
     */
    public static function freeText(AnnotationDraftFreeText $freeText): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'free-text',
            'value' => $freeText,
        ]);
    }

    /**
     * @param AnnotationDraftCaret $caret
     * @return AnnotationDraft
     */
    public static function caret(AnnotationDraftCaret $caret): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'caret',
            'value' => $caret,
        ]);
    }

    /**
     * @param AnnotationDraftText $text
     * @return AnnotationDraft
     */
    public static function text(AnnotationDraftText $text): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'text',
            'value' => $text,
        ]);
    }

    /**
     * @param AnnotationDraftStamp $stamp
     * @return AnnotationDraft
     */
    public static function stamp(AnnotationDraftStamp $stamp): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'stamp',
            'value' => $stamp,
        ]);
    }

    /**
     * @param AnnotationDraftFileAttachment $fileAttachment
     * @return AnnotationDraft
     */
    public static function fileAttachment(AnnotationDraftFileAttachment $fileAttachment): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'file-attachment',
            'value' => $fileAttachment,
        ]);
    }

    /**
     * @param AnnotationDraftWidget $widget
     * @return AnnotationDraft
     */
    public static function widget(AnnotationDraftWidget $widget): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'widget',
            'value' => $widget,
        ]);
    }

    /**
     * @param AnnotationDraftRedact $redact
     * @return AnnotationDraft
     */
    public static function redact(AnnotationDraftRedact $redact): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'redact',
            'value' => $redact,
        ]);
    }

    /**
     * @param AnnotationDraftPopup $popup
     * @return AnnotationDraft
     */
    public static function popup(AnnotationDraftPopup $popup): AnnotationDraft
    {
        return new AnnotationDraft([
            'subtype' => 'popup',
            'value' => $popup,
        ]);
    }

    /**
     * @return bool
     */
    public function isHighlight(): bool
    {
        return $this->value instanceof AnnotationDraftHighlight && $this->subtype === 'highlight';
    }

    /**
     * @return AnnotationDraftHighlight
     */
    public function asHighlight(): AnnotationDraftHighlight
    {
        if (!($this->value instanceof AnnotationDraftHighlight && $this->subtype === 'highlight')) {
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
        return $this->value instanceof AnnotationDraftUnderline && $this->subtype === 'underline';
    }

    /**
     * @return AnnotationDraftUnderline
     */
    public function asUnderline(): AnnotationDraftUnderline
    {
        if (!($this->value instanceof AnnotationDraftUnderline && $this->subtype === 'underline')) {
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
        return $this->value instanceof AnnotationDraftSquiggly && $this->subtype === 'squiggly';
    }

    /**
     * @return AnnotationDraftSquiggly
     */
    public function asSquiggly(): AnnotationDraftSquiggly
    {
        if (!($this->value instanceof AnnotationDraftSquiggly && $this->subtype === 'squiggly')) {
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
        return $this->value instanceof AnnotationDraftStrikeout && $this->subtype === 'strikeout';
    }

    /**
     * @return AnnotationDraftStrikeout
     */
    public function asStrikeout(): AnnotationDraftStrikeout
    {
        if (!($this->value instanceof AnnotationDraftStrikeout && $this->subtype === 'strikeout')) {
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
        return $this->value instanceof AnnotationDraftCircle && $this->subtype === 'circle';
    }

    /**
     * @return AnnotationDraftCircle
     */
    public function asCircle(): AnnotationDraftCircle
    {
        if (!($this->value instanceof AnnotationDraftCircle && $this->subtype === 'circle')) {
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
        return $this->value instanceof AnnotationDraftSquare && $this->subtype === 'square';
    }

    /**
     * @return AnnotationDraftSquare
     */
    public function asSquare(): AnnotationDraftSquare
    {
        if (!($this->value instanceof AnnotationDraftSquare && $this->subtype === 'square')) {
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
        return $this->value instanceof AnnotationDraftPolygon && $this->subtype === 'polygon';
    }

    /**
     * @return AnnotationDraftPolygon
     */
    public function asPolygon(): AnnotationDraftPolygon
    {
        if (!($this->value instanceof AnnotationDraftPolygon && $this->subtype === 'polygon')) {
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
        return $this->value instanceof AnnotationDraftPolyline && $this->subtype === 'polyline';
    }

    /**
     * @return AnnotationDraftPolyline
     */
    public function asPolyline(): AnnotationDraftPolyline
    {
        if (!($this->value instanceof AnnotationDraftPolyline && $this->subtype === 'polyline')) {
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
        return $this->value instanceof AnnotationDraftLine && $this->subtype === 'line';
    }

    /**
     * @return AnnotationDraftLine
     */
    public function asLine(): AnnotationDraftLine
    {
        if (!($this->value instanceof AnnotationDraftLine && $this->subtype === 'line')) {
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
        return $this->value instanceof AnnotationDraftLink && $this->subtype === 'link';
    }

    /**
     * @return AnnotationDraftLink
     */
    public function asLink(): AnnotationDraftLink
    {
        if (!($this->value instanceof AnnotationDraftLink && $this->subtype === 'link')) {
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
        return $this->value instanceof AnnotationDraftInk && $this->subtype === 'ink';
    }

    /**
     * @return AnnotationDraftInk
     */
    public function asInk(): AnnotationDraftInk
    {
        if (!($this->value instanceof AnnotationDraftInk && $this->subtype === 'ink')) {
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
        return $this->value instanceof AnnotationDraftFreeText && $this->subtype === 'free-text';
    }

    /**
     * @return AnnotationDraftFreeText
     */
    public function asFreeText(): AnnotationDraftFreeText
    {
        if (!($this->value instanceof AnnotationDraftFreeText && $this->subtype === 'free-text')) {
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
        return $this->value instanceof AnnotationDraftCaret && $this->subtype === 'caret';
    }

    /**
     * @return AnnotationDraftCaret
     */
    public function asCaret(): AnnotationDraftCaret
    {
        if (!($this->value instanceof AnnotationDraftCaret && $this->subtype === 'caret')) {
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
        return $this->value instanceof AnnotationDraftText && $this->subtype === 'text';
    }

    /**
     * @return AnnotationDraftText
     */
    public function asText(): AnnotationDraftText
    {
        if (!($this->value instanceof AnnotationDraftText && $this->subtype === 'text')) {
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
        return $this->value instanceof AnnotationDraftStamp && $this->subtype === 'stamp';
    }

    /**
     * @return AnnotationDraftStamp
     */
    public function asStamp(): AnnotationDraftStamp
    {
        if (!($this->value instanceof AnnotationDraftStamp && $this->subtype === 'stamp')) {
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
        return $this->value instanceof AnnotationDraftFileAttachment && $this->subtype === 'file-attachment';
    }

    /**
     * @return AnnotationDraftFileAttachment
     */
    public function asFileAttachment(): AnnotationDraftFileAttachment
    {
        if (!($this->value instanceof AnnotationDraftFileAttachment && $this->subtype === 'file-attachment')) {
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
        return $this->value instanceof AnnotationDraftWidget && $this->subtype === 'widget';
    }

    /**
     * @return AnnotationDraftWidget
     */
    public function asWidget(): AnnotationDraftWidget
    {
        if (!($this->value instanceof AnnotationDraftWidget && $this->subtype === 'widget')) {
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
        return $this->value instanceof AnnotationDraftRedact && $this->subtype === 'redact';
    }

    /**
     * @return AnnotationDraftRedact
     */
    public function asRedact(): AnnotationDraftRedact
    {
        if (!($this->value instanceof AnnotationDraftRedact && $this->subtype === 'redact')) {
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
        return $this->value instanceof AnnotationDraftPopup && $this->subtype === 'popup';
    }

    /**
     * @return AnnotationDraftPopup
     */
    public function asPopup(): AnnotationDraftPopup
    {
        if (!($this->value instanceof AnnotationDraftPopup && $this->subtype === 'popup')) {
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
                $args['value'] = AnnotationDraftHighlight::jsonDeserialize($data);
                break;
            case 'underline':
                $args['value'] = AnnotationDraftUnderline::jsonDeserialize($data);
                break;
            case 'squiggly':
                $args['value'] = AnnotationDraftSquiggly::jsonDeserialize($data);
                break;
            case 'strikeout':
                $args['value'] = AnnotationDraftStrikeout::jsonDeserialize($data);
                break;
            case 'circle':
                $args['value'] = AnnotationDraftCircle::jsonDeserialize($data);
                break;
            case 'square':
                $args['value'] = AnnotationDraftSquare::jsonDeserialize($data);
                break;
            case 'polygon':
                $args['value'] = AnnotationDraftPolygon::jsonDeserialize($data);
                break;
            case 'polyline':
                $args['value'] = AnnotationDraftPolyline::jsonDeserialize($data);
                break;
            case 'line':
                $args['value'] = AnnotationDraftLine::jsonDeserialize($data);
                break;
            case 'link':
                $args['value'] = AnnotationDraftLink::jsonDeserialize($data);
                break;
            case 'ink':
                $args['value'] = AnnotationDraftInk::jsonDeserialize($data);
                break;
            case 'free-text':
                $args['value'] = AnnotationDraftFreeText::jsonDeserialize($data);
                break;
            case 'caret':
                $args['value'] = AnnotationDraftCaret::jsonDeserialize($data);
                break;
            case 'text':
                $args['value'] = AnnotationDraftText::jsonDeserialize($data);
                break;
            case 'stamp':
                $args['value'] = AnnotationDraftStamp::jsonDeserialize($data);
                break;
            case 'file-attachment':
                $args['value'] = AnnotationDraftFileAttachment::jsonDeserialize($data);
                break;
            case 'widget':
                $args['value'] = AnnotationDraftWidget::jsonDeserialize($data);
                break;
            case 'redact':
                $args['value'] = AnnotationDraftRedact::jsonDeserialize($data);
                break;
            case 'popup':
                $args['value'] = AnnotationDraftPopup::jsonDeserialize($data);
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
