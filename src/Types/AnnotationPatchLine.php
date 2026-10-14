<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\Union;
use CloudPDF\Core\Types\ArrayType;

class AnnotationPatchLine extends JsonSerializableType
{
    /**
     * @var mixed $ref
     */
    #[JsonProperty('ref')]
    public mixed $ref;

    /**
     * @var mixed $page
     */
    #[JsonProperty('page')]
    public mixed $page;

    /**
     * @var mixed $hasAppearance
     */
    #[JsonProperty('hasAppearance')]
    public mixed $hasAppearance;

    /**
     * @var mixed $appearanceState
     */
    #[JsonProperty('appearanceState')]
    public mixed $appearanceState;

    /**
     * @var ?string $nm
     */
    #[JsonProperty('nm')]
    public ?string $nm;

    /**
     * @var ?AnnotationPatchLineRect $rect
     */
    #[JsonProperty('rect')]
    public ?AnnotationPatchLineRect $rect;

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
     * @var ?value-of<AnnotationPatchLineBlendMode> $blendMode
     */
    #[JsonProperty('blendMode')]
    public ?string $blendMode;

    /**
     * @var ?bool $invisible
     */
    #[JsonProperty('invisible')]
    public ?bool $invisible;

    /**
     * @var ?bool $hidden
     */
    #[JsonProperty('hidden')]
    public ?bool $hidden;

    /**
     * @var ?bool $print
     */
    #[JsonProperty('print')]
    public ?bool $print;

    /**
     * @var ?bool $noZoom
     */
    #[JsonProperty('noZoom')]
    public ?bool $noZoom;

    /**
     * @var ?bool $noRotate
     */
    #[JsonProperty('noRotate')]
    public ?bool $noRotate;

    /**
     * @var ?bool $noView
     */
    #[JsonProperty('noView')]
    public ?bool $noView;

    /**
     * @var ?bool $readOnly
     */
    #[JsonProperty('readOnly')]
    public ?bool $readOnly;

    /**
     * @var ?bool $locked
     */
    #[JsonProperty('locked')]
    public ?bool $locked;

    /**
     * @var ?bool $toggleNoView
     */
    #[JsonProperty('toggleNoView')]
    public ?bool $toggleNoView;

    /**
     * @var ?bool $lockedContents
     */
    #[JsonProperty('lockedContents')]
    public ?bool $lockedContents;

    /**
     * @var ?AnnotationPatchLineReply $reply
     */
    #[JsonProperty('reply')]
    public ?AnnotationPatchLineReply $reply;

    /**
     * @var mixed $popup
     */
    #[JsonProperty('popup')]
    public mixed $popup;

    /**
     * @var ?string $groupId
     */
    #[JsonProperty('groupId')]
    public ?string $groupId;

    /**
     * @var mixed $author
     */
    #[JsonProperty('author')]
    public mixed $author;

    /**
     * @var mixed $createdAt
     */
    #[JsonProperty('createdAt')]
    public mixed $createdAt;

    /**
     * @var mixed $modifiedAt
     */
    #[JsonProperty('modifiedAt')]
    public mixed $modifiedAt;

    /**
     * @var mixed $userId
     */
    #[JsonProperty('userId')]
    public mixed $userId;

    /**
     * @var mixed $createdBy
     */
    #[JsonProperty('createdBy')]
    public mixed $createdBy;

    /**
     * @var mixed $modifiedBy
     */
    #[JsonProperty('modifiedBy')]
    public mixed $modifiedBy;

    /**
     * @var mixed $importedBy
     */
    #[JsonProperty('importedBy')]
    public mixed $importedBy;

    /**
     * @var mixed $actions
     */
    #[JsonProperty('actions')]
    public mixed $actions;

    /**
     * @var ?string $color
     */
    #[JsonProperty('color')]
    public ?string $color;

    /**
     * @var ?float $opacity
     */
    #[JsonProperty('opacity')]
    public ?float $opacity;

    /**
     * @var ?float $strokeWidth
     */
    #[JsonProperty('strokeWidth')]
    public ?float $strokeWidth;

    /**
     * @var (
     *    value-of<AnnotationPatchLineBorderStyleZero>
     *   |value-of<AnnotationPatchLineBorderStyleOne>
     * )|null $borderStyle
     */
    #[JsonProperty('borderStyle'), Union('string', 'null')]
    public string|null $borderStyle;

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
     * @var ?AnnotationPatchLineLinePoints $linePoints
     */
    #[JsonProperty('linePoints')]
    public ?AnnotationPatchLineLinePoints $linePoints;

    /**
     * @var ?AnnotationPatchLineLineEndings $lineEndings
     */
    #[JsonProperty('lineEndings')]
    public ?AnnotationPatchLineLineEndings $lineEndings;

    /**
     * @var ?float $rotation
     */
    #[JsonProperty('rotation')]
    public ?float $rotation;

    /**
     * @var ?value-of<AnnotationPatchLineIntent> $intent
     */
    #[JsonProperty('intent')]
    public ?string $intent;

    /**
     * @var ?AnnotationPatchLineMeasure $measure
     */
    #[JsonProperty('measure')]
    public ?AnnotationPatchLineMeasure $measure;

    /**
     * @var ?bool $captionEnabled
     */
    #[JsonProperty('captionEnabled')]
    public ?bool $captionEnabled;

    /**
     * @var ?value-of<AnnotationPatchLineCaptionPosition> $captionPosition
     */
    #[JsonProperty('captionPosition')]
    public ?string $captionPosition;

    /**
     * @var ?AnnotationPatchLineCaptionOffset $captionOffset
     */
    #[JsonProperty('captionOffset')]
    public ?AnnotationPatchLineCaptionOffset $captionOffset;

    /**
     * @var ?AnnotationPatchLineLeader $leader
     */
    #[JsonProperty('leader')]
    public ?AnnotationPatchLineLeader $leader;

    /**
     * @param array{
     *   ref?: mixed,
     *   page?: mixed,
     *   hasAppearance?: mixed,
     *   appearanceState?: mixed,
     *   nm?: ?string,
     *   rect?: ?AnnotationPatchLineRect,
     *   contents?: ?string,
     *   subject?: ?string,
     *   blendMode?: ?value-of<AnnotationPatchLineBlendMode>,
     *   invisible?: ?bool,
     *   hidden?: ?bool,
     *   print?: ?bool,
     *   noZoom?: ?bool,
     *   noRotate?: ?bool,
     *   noView?: ?bool,
     *   readOnly?: ?bool,
     *   locked?: ?bool,
     *   toggleNoView?: ?bool,
     *   lockedContents?: ?bool,
     *   reply?: ?AnnotationPatchLineReply,
     *   popup?: mixed,
     *   groupId?: ?string,
     *   author?: mixed,
     *   createdAt?: mixed,
     *   modifiedAt?: mixed,
     *   userId?: mixed,
     *   createdBy?: mixed,
     *   modifiedBy?: mixed,
     *   importedBy?: mixed,
     *   actions?: mixed,
     *   color?: ?string,
     *   opacity?: ?float,
     *   strokeWidth?: ?float,
     *   borderStyle?: (
     *    value-of<AnnotationPatchLineBorderStyleZero>
     *   |value-of<AnnotationPatchLineBorderStyleOne>
     * )|null,
     *   dashArray?: ?array<float>,
     *   interiorColor?: ?string,
     *   linePoints?: ?AnnotationPatchLineLinePoints,
     *   lineEndings?: ?AnnotationPatchLineLineEndings,
     *   rotation?: ?float,
     *   intent?: ?value-of<AnnotationPatchLineIntent>,
     *   measure?: ?AnnotationPatchLineMeasure,
     *   captionEnabled?: ?bool,
     *   captionPosition?: ?value-of<AnnotationPatchLineCaptionPosition>,
     *   captionOffset?: ?AnnotationPatchLineCaptionOffset,
     *   leader?: ?AnnotationPatchLineLeader,
     * } $values
     */
    public function __construct(
        array $values = [],
    ) {
        $this->ref = $values['ref'] ?? null;
        $this->page = $values['page'] ?? null;
        $this->hasAppearance = $values['hasAppearance'] ?? null;
        $this->appearanceState = $values['appearanceState'] ?? null;
        $this->nm = $values['nm'] ?? null;
        $this->rect = $values['rect'] ?? null;
        $this->contents = $values['contents'] ?? null;
        $this->subject = $values['subject'] ?? null;
        $this->blendMode = $values['blendMode'] ?? null;
        $this->invisible = $values['invisible'] ?? null;
        $this->hidden = $values['hidden'] ?? null;
        $this->print = $values['print'] ?? null;
        $this->noZoom = $values['noZoom'] ?? null;
        $this->noRotate = $values['noRotate'] ?? null;
        $this->noView = $values['noView'] ?? null;
        $this->readOnly = $values['readOnly'] ?? null;
        $this->locked = $values['locked'] ?? null;
        $this->toggleNoView = $values['toggleNoView'] ?? null;
        $this->lockedContents = $values['lockedContents'] ?? null;
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
        $this->color = $values['color'] ?? null;
        $this->opacity = $values['opacity'] ?? null;
        $this->strokeWidth = $values['strokeWidth'] ?? null;
        $this->borderStyle = $values['borderStyle'] ?? null;
        $this->dashArray = $values['dashArray'] ?? null;
        $this->interiorColor = $values['interiorColor'] ?? null;
        $this->linePoints = $values['linePoints'] ?? null;
        $this->lineEndings = $values['lineEndings'] ?? null;
        $this->rotation = $values['rotation'] ?? null;
        $this->intent = $values['intent'] ?? null;
        $this->measure = $values['measure'] ?? null;
        $this->captionEnabled = $values['captionEnabled'] ?? null;
        $this->captionPosition = $values['captionPosition'] ?? null;
        $this->captionOffset = $values['captionOffset'] ?? null;
        $this->leader = $values['leader'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
