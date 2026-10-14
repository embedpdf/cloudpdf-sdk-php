<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;
use CloudPDF\Core\Types\ArrayType;

class AnnotationPolyline extends JsonSerializableType
{
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
     * @var AnnotationPolylineRect $rect
     */
    #[JsonProperty('rect')]
    public AnnotationPolylineRect $rect;

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
     * @var value-of<AnnotationPolylineBlendMode> $blendMode
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
     * @var ?AnnotationPolylineReply $reply
     */
    #[JsonProperty('reply')]
    public ?AnnotationPolylineReply $reply;

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
     * @var string $color
     */
    #[JsonProperty('color')]
    public string $color;

    /**
     * @var float $opacity
     */
    #[JsonProperty('opacity')]
    public float $opacity;

    /**
     * @var float $strokeWidth
     */
    #[JsonProperty('strokeWidth')]
    public float $strokeWidth;

    /**
     * @var value-of<AnnotationPolylineBorderStyle> $borderStyle
     */
    #[JsonProperty('borderStyle')]
    public string $borderStyle;

    /**
     * @var ?array<float> $dashArray
     */
    #[JsonProperty('dashArray'), ArrayType(['float'])]
    public ?array $dashArray;

    /**
     * @var ?string $interiorColor
     */
    #[JsonProperty('interiorColor')]
    public ?string $interiorColor;

    /**
     * @var array<AnnotationPolylineVerticesItem> $vertices
     */
    #[JsonProperty('vertices'), ArrayType([AnnotationPolylineVerticesItem::class])]
    public array $vertices;

    /**
     * @var ?float $rotation
     */
    #[JsonProperty('rotation')]
    public ?float $rotation;

    /**
     * @var ?bool $captionEnabled
     */
    #[JsonProperty('captionEnabled')]
    public ?bool $captionEnabled;

    /**
     * @var ?AnnotationPolylineCaptionCenter $captionCenter
     */
    #[JsonProperty('captionCenter')]
    public ?AnnotationPolylineCaptionCenter $captionCenter;

    /**
     * @var ?value-of<AnnotationPolylineIntent> $intent
     */
    #[JsonProperty('intent')]
    public ?string $intent;

    /**
     * @var ?AnnotationPolylineMeasure $measure
     */
    #[JsonProperty('measure')]
    public ?AnnotationPolylineMeasure $measure;

    /**
     * @var AnnotationPolylineLineEndings $lineEndings
     */
    #[JsonProperty('lineEndings')]
    public AnnotationPolylineLineEndings $lineEndings;

    /**
     * @param array{
     *   ref: AnnotationRef,
     *   page: PageRef,
     *   hasAppearance: bool,
     *   rect: AnnotationPolylineRect,
     *   blendMode: value-of<AnnotationPolylineBlendMode>,
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
     *   color: string,
     *   opacity: float,
     *   strokeWidth: float,
     *   borderStyle: value-of<AnnotationPolylineBorderStyle>,
     *   vertices: array<AnnotationPolylineVerticesItem>,
     *   lineEndings: AnnotationPolylineLineEndings,
     *   appearanceState?: ?string,
     *   nm?: ?string,
     *   contents?: ?string,
     *   subject?: ?string,
     *   reply?: ?AnnotationPolylineReply,
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
     *   dashArray?: ?array<float>,
     *   interiorColor?: ?string,
     *   rotation?: ?float,
     *   captionEnabled?: ?bool,
     *   captionCenter?: ?AnnotationPolylineCaptionCenter,
     *   intent?: ?value-of<AnnotationPolylineIntent>,
     *   measure?: ?AnnotationPolylineMeasure,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
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
        $this->color = $values['color'];
        $this->opacity = $values['opacity'];
        $this->strokeWidth = $values['strokeWidth'];
        $this->borderStyle = $values['borderStyle'];
        $this->dashArray = $values['dashArray'] ?? null;
        $this->interiorColor = $values['interiorColor'] ?? null;
        $this->vertices = $values['vertices'];
        $this->rotation = $values['rotation'] ?? null;
        $this->captionEnabled = $values['captionEnabled'] ?? null;
        $this->captionCenter = $values['captionCenter'] ?? null;
        $this->intent = $values['intent'] ?? null;
        $this->measure = $values['measure'] ?? null;
        $this->lineEndings = $values['lineEndings'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
