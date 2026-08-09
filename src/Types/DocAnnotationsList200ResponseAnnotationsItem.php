<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsList200ResponseAnnotationsItem extends JsonSerializableType
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
     *   |'unsupported'
     *   |'_unknown'
     * ) $subtype
     */
    public readonly string $subtype;

    /**
     * @var (
     *    DocAnnotationsList200ResponseAnnotationsItemHighlight
     *   |DocAnnotationsList200ResponseAnnotationsItemUnderline
     *   |DocAnnotationsList200ResponseAnnotationsItemSquiggly
     *   |DocAnnotationsList200ResponseAnnotationsItemStrikeout
     *   |DocAnnotationsList200ResponseAnnotationsItemCircle
     *   |DocAnnotationsList200ResponseAnnotationsItemSquare
     *   |DocAnnotationsList200ResponseAnnotationsItemPolygon
     *   |DocAnnotationsList200ResponseAnnotationsItemPolyline
     *   |DocAnnotationsList200ResponseAnnotationsItemLine
     *   |DocAnnotationsList200ResponseAnnotationsItemLink
     *   |DocAnnotationsList200ResponseAnnotationsItemInk
     *   |DocAnnotationsList200ResponseAnnotationsItemFreeText
     *   |DocAnnotationsList200ResponseAnnotationsItemCaret
     *   |DocAnnotationsList200ResponseAnnotationsItemText
     *   |DocAnnotationsList200ResponseAnnotationsItemStamp
     *   |DocAnnotationsList200ResponseAnnotationsItemFileAttachment
     *   |DocAnnotationsList200ResponseAnnotationsItemWidget
     *   |DocAnnotationsList200ResponseAnnotationsItemRedact
     *   |DocAnnotationsList200ResponseAnnotationsItemUnsupported
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
     *   |'unsupported'
     *   |'_unknown'
     * ),
     *   value: (
     *    DocAnnotationsList200ResponseAnnotationsItemHighlight
     *   |DocAnnotationsList200ResponseAnnotationsItemUnderline
     *   |DocAnnotationsList200ResponseAnnotationsItemSquiggly
     *   |DocAnnotationsList200ResponseAnnotationsItemStrikeout
     *   |DocAnnotationsList200ResponseAnnotationsItemCircle
     *   |DocAnnotationsList200ResponseAnnotationsItemSquare
     *   |DocAnnotationsList200ResponseAnnotationsItemPolygon
     *   |DocAnnotationsList200ResponseAnnotationsItemPolyline
     *   |DocAnnotationsList200ResponseAnnotationsItemLine
     *   |DocAnnotationsList200ResponseAnnotationsItemLink
     *   |DocAnnotationsList200ResponseAnnotationsItemInk
     *   |DocAnnotationsList200ResponseAnnotationsItemFreeText
     *   |DocAnnotationsList200ResponseAnnotationsItemCaret
     *   |DocAnnotationsList200ResponseAnnotationsItemText
     *   |DocAnnotationsList200ResponseAnnotationsItemStamp
     *   |DocAnnotationsList200ResponseAnnotationsItemFileAttachment
     *   |DocAnnotationsList200ResponseAnnotationsItemWidget
     *   |DocAnnotationsList200ResponseAnnotationsItemRedact
     *   |DocAnnotationsList200ResponseAnnotationsItemUnsupported
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
     * @param DocAnnotationsList200ResponseAnnotationsItemHighlight $highlight
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function highlight(DocAnnotationsList200ResponseAnnotationsItemHighlight $highlight): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'highlight',
            'value' => $highlight,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemUnderline $underline
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function underline(DocAnnotationsList200ResponseAnnotationsItemUnderline $underline): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'underline',
            'value' => $underline,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemSquiggly $squiggly
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function squiggly(DocAnnotationsList200ResponseAnnotationsItemSquiggly $squiggly): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'squiggly',
            'value' => $squiggly,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemStrikeout $strikeout
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function strikeout(DocAnnotationsList200ResponseAnnotationsItemStrikeout $strikeout): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'strikeout',
            'value' => $strikeout,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemCircle $circle
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function circle(DocAnnotationsList200ResponseAnnotationsItemCircle $circle): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'circle',
            'value' => $circle,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemSquare $square
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function square(DocAnnotationsList200ResponseAnnotationsItemSquare $square): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'square',
            'value' => $square,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemPolygon $polygon
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function polygon(DocAnnotationsList200ResponseAnnotationsItemPolygon $polygon): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'polygon',
            'value' => $polygon,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemPolyline $polyline
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function polyline(DocAnnotationsList200ResponseAnnotationsItemPolyline $polyline): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'polyline',
            'value' => $polyline,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLine $line
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function line(DocAnnotationsList200ResponseAnnotationsItemLine $line): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'line',
            'value' => $line,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemLink $link
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function link(DocAnnotationsList200ResponseAnnotationsItemLink $link): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'link',
            'value' => $link,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemInk $ink
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function ink(DocAnnotationsList200ResponseAnnotationsItemInk $ink): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'ink',
            'value' => $ink,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemFreeText $freeText
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function freeText(DocAnnotationsList200ResponseAnnotationsItemFreeText $freeText): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'free-text',
            'value' => $freeText,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemCaret $caret
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function caret(DocAnnotationsList200ResponseAnnotationsItemCaret $caret): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'caret',
            'value' => $caret,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemText $text
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function text(DocAnnotationsList200ResponseAnnotationsItemText $text): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'text',
            'value' => $text,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemStamp $stamp
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function stamp(DocAnnotationsList200ResponseAnnotationsItemStamp $stamp): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'stamp',
            'value' => $stamp,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemFileAttachment $fileAttachment
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function fileAttachment(DocAnnotationsList200ResponseAnnotationsItemFileAttachment $fileAttachment): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'file-attachment',
            'value' => $fileAttachment,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemWidget $widget
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function widget(DocAnnotationsList200ResponseAnnotationsItemWidget $widget): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'widget',
            'value' => $widget,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemRedact $redact
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function redact(DocAnnotationsList200ResponseAnnotationsItemRedact $redact): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'redact',
            'value' => $redact,
        ]);
    }

    /**
     * @param DocAnnotationsList200ResponseAnnotationsItemUnsupported $unsupported
     * @return DocAnnotationsList200ResponseAnnotationsItem
     */
    public static function unsupported(DocAnnotationsList200ResponseAnnotationsItemUnsupported $unsupported): DocAnnotationsList200ResponseAnnotationsItem
    {
        return new DocAnnotationsList200ResponseAnnotationsItem([
            'subtype' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isHighlight(): bool
    {
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemHighlight && $this->subtype === 'highlight';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemHighlight
     */
    public function asHighlight(): DocAnnotationsList200ResponseAnnotationsItemHighlight
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemHighlight && $this->subtype === 'highlight')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemUnderline && $this->subtype === 'underline';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemUnderline
     */
    public function asUnderline(): DocAnnotationsList200ResponseAnnotationsItemUnderline
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemUnderline && $this->subtype === 'underline')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemSquiggly && $this->subtype === 'squiggly';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemSquiggly
     */
    public function asSquiggly(): DocAnnotationsList200ResponseAnnotationsItemSquiggly
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemSquiggly && $this->subtype === 'squiggly')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemStrikeout && $this->subtype === 'strikeout';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemStrikeout
     */
    public function asStrikeout(): DocAnnotationsList200ResponseAnnotationsItemStrikeout
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemStrikeout && $this->subtype === 'strikeout')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemCircle && $this->subtype === 'circle';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemCircle
     */
    public function asCircle(): DocAnnotationsList200ResponseAnnotationsItemCircle
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemCircle && $this->subtype === 'circle')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemSquare && $this->subtype === 'square';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemSquare
     */
    public function asSquare(): DocAnnotationsList200ResponseAnnotationsItemSquare
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemSquare && $this->subtype === 'square')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemPolygon && $this->subtype === 'polygon';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemPolygon
     */
    public function asPolygon(): DocAnnotationsList200ResponseAnnotationsItemPolygon
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemPolygon && $this->subtype === 'polygon')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemPolyline && $this->subtype === 'polyline';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemPolyline
     */
    public function asPolyline(): DocAnnotationsList200ResponseAnnotationsItemPolyline
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemPolyline && $this->subtype === 'polyline')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLine && $this->subtype === 'line';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLine
     */
    public function asLine(): DocAnnotationsList200ResponseAnnotationsItemLine
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLine && $this->subtype === 'line')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLink && $this->subtype === 'link';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemLink
     */
    public function asLink(): DocAnnotationsList200ResponseAnnotationsItemLink
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemLink && $this->subtype === 'link')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemInk && $this->subtype === 'ink';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemInk
     */
    public function asInk(): DocAnnotationsList200ResponseAnnotationsItemInk
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemInk && $this->subtype === 'ink')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemFreeText && $this->subtype === 'free-text';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemFreeText
     */
    public function asFreeText(): DocAnnotationsList200ResponseAnnotationsItemFreeText
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemFreeText && $this->subtype === 'free-text')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemCaret && $this->subtype === 'caret';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemCaret
     */
    public function asCaret(): DocAnnotationsList200ResponseAnnotationsItemCaret
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemCaret && $this->subtype === 'caret')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemText && $this->subtype === 'text';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemText
     */
    public function asText(): DocAnnotationsList200ResponseAnnotationsItemText
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemText && $this->subtype === 'text')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemStamp && $this->subtype === 'stamp';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemStamp
     */
    public function asStamp(): DocAnnotationsList200ResponseAnnotationsItemStamp
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemStamp && $this->subtype === 'stamp')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemFileAttachment && $this->subtype === 'file-attachment';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemFileAttachment
     */
    public function asFileAttachment(): DocAnnotationsList200ResponseAnnotationsItemFileAttachment
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemFileAttachment && $this->subtype === 'file-attachment')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemWidget && $this->subtype === 'widget';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemWidget
     */
    public function asWidget(): DocAnnotationsList200ResponseAnnotationsItemWidget
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemWidget && $this->subtype === 'widget')) {
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
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemRedact && $this->subtype === 'redact';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemRedact
     */
    public function asRedact(): DocAnnotationsList200ResponseAnnotationsItemRedact
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemRedact && $this->subtype === 'redact')) {
            throw new Exception(
                "Expected redact; got " . $this->subtype . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isUnsupported(): bool
    {
        return $this->value instanceof DocAnnotationsList200ResponseAnnotationsItemUnsupported && $this->subtype === 'unsupported';
    }

    /**
     * @return DocAnnotationsList200ResponseAnnotationsItemUnsupported
     */
    public function asUnsupported(): DocAnnotationsList200ResponseAnnotationsItemUnsupported
    {
        if (!($this->value instanceof DocAnnotationsList200ResponseAnnotationsItemUnsupported && $this->subtype === 'unsupported')) {
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
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemHighlight::jsonDeserialize($data);
                break;
            case 'underline':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemUnderline::jsonDeserialize($data);
                break;
            case 'squiggly':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemSquiggly::jsonDeserialize($data);
                break;
            case 'strikeout':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemStrikeout::jsonDeserialize($data);
                break;
            case 'circle':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemCircle::jsonDeserialize($data);
                break;
            case 'square':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemSquare::jsonDeserialize($data);
                break;
            case 'polygon':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemPolygon::jsonDeserialize($data);
                break;
            case 'polyline':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemPolyline::jsonDeserialize($data);
                break;
            case 'line':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLine::jsonDeserialize($data);
                break;
            case 'link':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemLink::jsonDeserialize($data);
                break;
            case 'ink':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemInk::jsonDeserialize($data);
                break;
            case 'free-text':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemFreeText::jsonDeserialize($data);
                break;
            case 'caret':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemCaret::jsonDeserialize($data);
                break;
            case 'text':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemText::jsonDeserialize($data);
                break;
            case 'stamp':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemStamp::jsonDeserialize($data);
                break;
            case 'file-attachment':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemFileAttachment::jsonDeserialize($data);
                break;
            case 'widget':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemWidget::jsonDeserialize($data);
                break;
            case 'redact':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemRedact::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = DocAnnotationsList200ResponseAnnotationsItemUnsupported::jsonDeserialize($data);
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
