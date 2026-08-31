<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItem extends JsonSerializableType
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
     *    DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlight
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderline
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquiggly
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemStrikeout
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircle
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquare
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygon
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolyline
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLine
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLink
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemInk
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeText
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCaret
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemText
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemStamp
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFileAttachment
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidget
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedact
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupported
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
     *    DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlight
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderline
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquiggly
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemStrikeout
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircle
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquare
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygon
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolyline
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLine
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLink
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemInk
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeText
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCaret
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemText
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemStamp
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFileAttachment
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidget
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedact
     *   |DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupported
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
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlight $highlight
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function highlight(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlight $highlight): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'highlight',
            'value' => $highlight,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderline $underline
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function underline(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderline $underline): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'underline',
            'value' => $underline,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquiggly $squiggly
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function squiggly(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquiggly $squiggly): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'squiggly',
            'value' => $squiggly,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemStrikeout $strikeout
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function strikeout(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemStrikeout $strikeout): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'strikeout',
            'value' => $strikeout,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircle $circle
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function circle(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircle $circle): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'circle',
            'value' => $circle,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquare $square
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function square(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquare $square): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'square',
            'value' => $square,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygon $polygon
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function polygon(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygon $polygon): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'polygon',
            'value' => $polygon,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolyline $polyline
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function polyline(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolyline $polyline): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'polyline',
            'value' => $polyline,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLine $line
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function line(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLine $line): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'line',
            'value' => $line,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLink $link
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function link(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLink $link): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'link',
            'value' => $link,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemInk $ink
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function ink(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemInk $ink): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'ink',
            'value' => $ink,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeText $freeText
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function freeText(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeText $freeText): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'free-text',
            'value' => $freeText,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCaret $caret
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function caret(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCaret $caret): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'caret',
            'value' => $caret,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemText $text
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function text(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemText $text): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'text',
            'value' => $text,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemStamp $stamp
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function stamp(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemStamp $stamp): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'stamp',
            'value' => $stamp,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFileAttachment $fileAttachment
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function fileAttachment(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFileAttachment $fileAttachment): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'file-attachment',
            'value' => $fileAttachment,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidget $widget
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function widget(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidget $widget): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'widget',
            'value' => $widget,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedact $redact
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function redact(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedact $redact): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'redact',
            'value' => $redact,
        ]);
    }

    /**
     * @param DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupported $unsupported
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
     */
    public static function unsupported(DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupported $unsupported): DocAnnotationsListAll200ResponsePagesItemAnnotationsItem
    {
        return new DocAnnotationsListAll200ResponsePagesItemAnnotationsItem([
            'subtype' => 'unsupported',
            'value' => $unsupported,
        ]);
    }

    /**
     * @return bool
     */
    public function isHighlight(): bool
    {
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlight && $this->subtype === 'highlight';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlight
     */
    public function asHighlight(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlight
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlight && $this->subtype === 'highlight')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderline && $this->subtype === 'underline';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderline
     */
    public function asUnderline(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderline
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderline && $this->subtype === 'underline')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquiggly && $this->subtype === 'squiggly';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquiggly
     */
    public function asSquiggly(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquiggly
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquiggly && $this->subtype === 'squiggly')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemStrikeout && $this->subtype === 'strikeout';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemStrikeout
     */
    public function asStrikeout(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemStrikeout
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemStrikeout && $this->subtype === 'strikeout')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircle && $this->subtype === 'circle';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircle
     */
    public function asCircle(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircle
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircle && $this->subtype === 'circle')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquare && $this->subtype === 'square';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquare
     */
    public function asSquare(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquare
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquare && $this->subtype === 'square')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygon && $this->subtype === 'polygon';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygon
     */
    public function asPolygon(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygon
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygon && $this->subtype === 'polygon')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolyline && $this->subtype === 'polyline';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolyline
     */
    public function asPolyline(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolyline
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolyline && $this->subtype === 'polyline')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLine && $this->subtype === 'line';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLine
     */
    public function asLine(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLine
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLine && $this->subtype === 'line')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLink && $this->subtype === 'link';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLink
     */
    public function asLink(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLink
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLink && $this->subtype === 'link')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemInk && $this->subtype === 'ink';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemInk
     */
    public function asInk(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemInk
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemInk && $this->subtype === 'ink')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeText && $this->subtype === 'free-text';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeText
     */
    public function asFreeText(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeText
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeText && $this->subtype === 'free-text')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCaret && $this->subtype === 'caret';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCaret
     */
    public function asCaret(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCaret
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCaret && $this->subtype === 'caret')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemText && $this->subtype === 'text';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemText
     */
    public function asText(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemText
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemText && $this->subtype === 'text')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemStamp && $this->subtype === 'stamp';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemStamp
     */
    public function asStamp(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemStamp
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemStamp && $this->subtype === 'stamp')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFileAttachment && $this->subtype === 'file-attachment';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFileAttachment
     */
    public function asFileAttachment(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFileAttachment
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFileAttachment && $this->subtype === 'file-attachment')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidget && $this->subtype === 'widget';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidget
     */
    public function asWidget(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidget
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidget && $this->subtype === 'widget')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedact && $this->subtype === 'redact';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedact
     */
    public function asRedact(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedact
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedact && $this->subtype === 'redact')) {
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
        return $this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupported && $this->subtype === 'unsupported';
    }

    /**
     * @return DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupported
     */
    public function asUnsupported(): DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupported
    {
        if (!($this->value instanceof DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupported && $this->subtype === 'unsupported')) {
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
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlight::jsonDeserialize($data);
                break;
            case 'underline':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnderline::jsonDeserialize($data);
                break;
            case 'squiggly':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquiggly::jsonDeserialize($data);
                break;
            case 'strikeout':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemStrikeout::jsonDeserialize($data);
                break;
            case 'circle':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircle::jsonDeserialize($data);
                break;
            case 'square':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemSquare::jsonDeserialize($data);
                break;
            case 'polygon':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolygon::jsonDeserialize($data);
                break;
            case 'polyline':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolyline::jsonDeserialize($data);
                break;
            case 'line':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLine::jsonDeserialize($data);
                break;
            case 'link':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLink::jsonDeserialize($data);
                break;
            case 'ink':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemInk::jsonDeserialize($data);
                break;
            case 'free-text':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeText::jsonDeserialize($data);
                break;
            case 'caret':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCaret::jsonDeserialize($data);
                break;
            case 'text':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemText::jsonDeserialize($data);
                break;
            case 'stamp':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemStamp::jsonDeserialize($data);
                break;
            case 'file-attachment':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFileAttachment::jsonDeserialize($data);
                break;
            case 'widget':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidget::jsonDeserialize($data);
                break;
            case 'redact':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedact::jsonDeserialize($data);
                break;
            case 'unsupported':
                $args['value'] = DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupported::jsonDeserialize($data);
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
