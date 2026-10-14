<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;
use CloudPDF\Core\Types\ArrayType;

class WidgetAnnotation extends JsonSerializableType
{
    /**
     * @var value-of<WidgetAnnotationSubtype> $subtype
     */
    #[JsonProperty('subtype')]
    public string $subtype;

    /**
     * @var AnnotationRef $ref
     */
    #[JsonProperty('ref')]
    public AnnotationRef $ref;

    /**
     * @var PageRef $page
     */
    #[JsonProperty('page')]
    public PageRef $page;

    /**
     * @var bool $hasAppearance
     */
    #[JsonProperty('hasAppearance')]
    public bool $hasAppearance;

    /**
     * @var ?string $appearanceState
     */
    #[JsonProperty('appearanceState')]
    public ?string $appearanceState;

    /**
     * @var ?string $nm
     */
    #[JsonProperty('nm')]
    public ?string $nm;

    /**
     * @var WidgetAnnotationRect $rect
     */
    #[JsonProperty('rect')]
    public WidgetAnnotationRect $rect;

    /**
     * @var ?string $contents
     */
    #[JsonProperty('contents')]
    public ?string $contents;

    /**
     * @var ?string $subject
     */
    #[JsonProperty('subject')]
    public ?string $subject;

    /**
     * @var value-of<WidgetAnnotationBlendMode> $blendMode
     */
    #[JsonProperty('blendMode')]
    public string $blendMode;

    /**
     * @var bool $invisible
     */
    #[JsonProperty('invisible')]
    public bool $invisible;

    /**
     * @var bool $hidden
     */
    #[JsonProperty('hidden')]
    public bool $hidden;

    /**
     * @var bool $print
     */
    #[JsonProperty('print')]
    public bool $print;

    /**
     * @var bool $noZoom
     */
    #[JsonProperty('noZoom')]
    public bool $noZoom;

    /**
     * @var bool $noRotate
     */
    #[JsonProperty('noRotate')]
    public bool $noRotate;

    /**
     * @var bool $noView
     */
    #[JsonProperty('noView')]
    public bool $noView;

    /**
     * @var bool $readOnly
     */
    #[JsonProperty('readOnly')]
    public bool $readOnly;

    /**
     * @var bool $locked
     */
    #[JsonProperty('locked')]
    public bool $locked;

    /**
     * @var bool $toggleNoView
     */
    #[JsonProperty('toggleNoView')]
    public bool $toggleNoView;

    /**
     * @var bool $lockedContents
     */
    #[JsonProperty('lockedContents')]
    public bool $lockedContents;

    /**
     * @var ?WidgetAnnotationReply $reply
     */
    #[JsonProperty('reply')]
    public ?WidgetAnnotationReply $reply;

    /**
     * @var ?AnnotationRef $popup
     */
    #[JsonProperty('popup')]
    public ?AnnotationRef $popup;

    /**
     * @var ?string $groupId
     */
    #[JsonProperty('groupId')]
    public ?string $groupId;

    /**
     * @var ?string $author
     */
    #[JsonProperty('author')]
    public ?string $author;

    /**
     * @var ?DateTime $createdAt
     */
    #[JsonProperty('createdAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $createdAt;

    /**
     * @var ?DateTime $modifiedAt
     */
    #[JsonProperty('modifiedAt'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $modifiedAt;

    /**
     * @var ?string $userId
     */
    #[JsonProperty('userId')]
    public ?string $userId;

    /**
     * @var ?string $createdBy
     */
    #[JsonProperty('createdBy')]
    public ?string $createdBy;

    /**
     * @var ?string $modifiedBy
     */
    #[JsonProperty('modifiedBy')]
    public ?string $modifiedBy;

    /**
     * @var ?string $importedBy
     */
    #[JsonProperty('importedBy')]
    public ?string $importedBy;

    /**
     * @var ?PdfAnnotationActions $actions
     */
    #[JsonProperty('actions')]
    public ?PdfAnnotationActions $actions;

    /**
     * @var WidgetAnnotationBox $box
     */
    #[JsonProperty('box')]
    public WidgetAnnotationBox $box;

    /**
     * @var ?float $rotation
     */
    #[JsonProperty('rotation')]
    public ?float $rotation;

    /**
     * @var ?string $color
     */
    #[JsonProperty('color')]
    public ?string $color;

    /**
     * @var ?string $interiorColor
     */
    #[JsonProperty('interiorColor')]
    public ?string $interiorColor;

    /**
     * @var float $strokeWidth
     */
    #[JsonProperty('strokeWidth')]
    public float $strokeWidth;

    /**
     * @var value-of<WidgetAnnotationBorderStyle> $borderStyle
     */
    #[JsonProperty('borderStyle')]
    public string $borderStyle;

    /**
     * @var ?array<float> $dashArray
     */
    #[JsonProperty('dashArray'), ArrayType(['float'])]
    public ?array $dashArray;

    /**
     * @var ?string $fontFamily
     */
    #[JsonProperty('fontFamily')]
    public ?string $fontFamily;

    /**
     * @var ?float $fontSize
     */
    #[JsonProperty('fontSize')]
    public ?float $fontSize;

    /**
     * @var ?string $fontColor
     */
    #[JsonProperty('fontColor')]
    public ?string $fontColor;

    /**
     * @var value-of<WidgetAnnotationTextAlign> $textAlign
     */
    #[JsonProperty('textAlign')]
    public string $textAlign;

    /**
     * @var ?string $caption
     */
    #[JsonProperty('caption')]
    public ?string $caption;

    /**
     * @var ?value-of<WidgetAnnotationCheckStyle> $checkStyle
     */
    #[JsonProperty('checkStyle')]
    public ?string $checkStyle;

    /**
     * @var ?FormFieldRef $field
     */
    #[JsonProperty('field')]
    public ?FormFieldRef $field;

    /**
     * @var value-of<WidgetAnnotationFieldFamily> $fieldFamily
     */
    #[JsonProperty('fieldFamily')]
    public string $fieldFamily;

    /**
     * @param array{
     *   subtype: value-of<WidgetAnnotationSubtype>,
     *   ref: AnnotationRef,
     *   page: PageRef,
     *   hasAppearance: bool,
     *   rect: WidgetAnnotationRect,
     *   blendMode: value-of<WidgetAnnotationBlendMode>,
     *   invisible: bool,
     *   hidden: bool,
     *   print: bool,
     *   noZoom: bool,
     *   noRotate: bool,
     *   noView: bool,
     *   readOnly: bool,
     *   locked: bool,
     *   toggleNoView: bool,
     *   lockedContents: bool,
     *   box: WidgetAnnotationBox,
     *   strokeWidth: float,
     *   borderStyle: value-of<WidgetAnnotationBorderStyle>,
     *   textAlign: value-of<WidgetAnnotationTextAlign>,
     *   fieldFamily: value-of<WidgetAnnotationFieldFamily>,
     *   appearanceState?: ?string,
     *   nm?: ?string,
     *   contents?: ?string,
     *   subject?: ?string,
     *   reply?: ?WidgetAnnotationReply,
     *   popup?: ?AnnotationRef,
     *   groupId?: ?string,
     *   author?: ?string,
     *   createdAt?: ?DateTime,
     *   modifiedAt?: ?DateTime,
     *   userId?: ?string,
     *   createdBy?: ?string,
     *   modifiedBy?: ?string,
     *   importedBy?: ?string,
     *   actions?: ?PdfAnnotationActions,
     *   rotation?: ?float,
     *   color?: ?string,
     *   interiorColor?: ?string,
     *   dashArray?: ?array<float>,
     *   fontFamily?: ?string,
     *   fontSize?: ?float,
     *   fontColor?: ?string,
     *   caption?: ?string,
     *   checkStyle?: ?value-of<WidgetAnnotationCheckStyle>,
     *   field?: ?FormFieldRef,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->subtype = $values['subtype'];
        $this->ref = $values['ref'];
        $this->page = $values['page'];
        $this->hasAppearance = $values['hasAppearance'];
        $this->appearanceState = $values['appearanceState'] ?? null;
        $this->nm = $values['nm'] ?? null;
        $this->rect = $values['rect'];
        $this->contents = $values['contents'] ?? null;
        $this->subject = $values['subject'] ?? null;
        $this->blendMode = $values['blendMode'];
        $this->invisible = $values['invisible'];
        $this->hidden = $values['hidden'];
        $this->print = $values['print'];
        $this->noZoom = $values['noZoom'];
        $this->noRotate = $values['noRotate'];
        $this->noView = $values['noView'];
        $this->readOnly = $values['readOnly'];
        $this->locked = $values['locked'];
        $this->toggleNoView = $values['toggleNoView'];
        $this->lockedContents = $values['lockedContents'];
        $this->reply = $values['reply'] ?? null;
        $this->popup = $values['popup'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->author = $values['author'] ?? null;
        $this->createdAt = $values['createdAt'] ?? null;
        $this->modifiedAt = $values['modifiedAt'] ?? null;
        $this->userId = $values['userId'] ?? null;
        $this->createdBy = $values['createdBy'] ?? null;
        $this->modifiedBy = $values['modifiedBy'] ?? null;
        $this->importedBy = $values['importedBy'] ?? null;
        $this->actions = $values['actions'] ?? null;
        $this->box = $values['box'];
        $this->rotation = $values['rotation'] ?? null;
        $this->color = $values['color'] ?? null;
        $this->interiorColor = $values['interiorColor'] ?? null;
        $this->strokeWidth = $values['strokeWidth'];
        $this->borderStyle = $values['borderStyle'];
        $this->dashArray = $values['dashArray'] ?? null;
        $this->fontFamily = $values['fontFamily'] ?? null;
        $this->fontSize = $values['fontSize'] ?? null;
        $this->fontColor = $values['fontColor'] ?? null;
        $this->textAlign = $values['textAlign'];
        $this->caption = $values['caption'] ?? null;
        $this->checkStyle = $values['checkStyle'] ?? null;
        $this->field = $values['field'] ?? null;
        $this->fieldFamily = $values['fieldFamily'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
