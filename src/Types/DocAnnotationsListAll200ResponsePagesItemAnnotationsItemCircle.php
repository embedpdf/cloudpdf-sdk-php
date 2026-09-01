<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircle extends JsonSerializableType
{
    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleRef $ref
     */
    #[JsonProperty('ref')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleRef $ref;

    /**
     * @var int $pageObjectNumber
     */
    #[JsonProperty('pageObjectNumber')]
    public int $pageObjectNumber;

    /**
     * @var int $index
     */
    #[JsonProperty('index')]
    public int $index;

    /**
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleIdentityQuality> $identityQuality
     */
    #[JsonProperty('identityQuality')]
    public string $identityQuality;

    /**
     * @var ?string $nm
     */
    #[JsonProperty('nm')]
    public ?string $nm;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleFlags $flags
     */
    #[JsonProperty('flags')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleFlags $flags;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleRect $rect
     */
    #[JsonProperty('rect')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleRect $rect;

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
     * @var ?string $author
     */
    #[JsonProperty('author')]
    public ?string $author;

    /**
     * @var ?DateTime $created
     */
    #[JsonProperty('created'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $created;

    /**
     * @var ?DateTime $modified
     */
    #[JsonProperty('modified'), Date(Date::TYPE_DATETIME)]
    public ?DateTime $modified;

    /**
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleBlendMode> $blendMode
     */
    #[JsonProperty('blendMode')]
    public string $blendMode;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleInReplyTo $inReplyTo
     */
    #[JsonProperty('inReplyTo')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleInReplyTo $inReplyTo;

    /**
     * @var ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleReplyType> $replyType
     */
    #[JsonProperty('replyType')]
    public ?string $replyType;

    /**
     * @var ?string $userId
     */
    #[JsonProperty('userId')]
    public ?string $userId;

    /**
     * @var ?string $groupId
     */
    #[JsonProperty('groupId')]
    public ?string $groupId;

    /**
     * @var ?string $createdBy
     */
    #[JsonProperty('createdBy')]
    public ?string $createdBy;

    /**
     * @var ?string $updatedBy
     */
    #[JsonProperty('updatedBy')]
    public ?string $updatedBy;

    /**
     * @var ?PdfAnnotationActions $actions
     */
    #[JsonProperty('actions')]
    public ?PdfAnnotationActions $actions;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleColor $color
     */
    #[JsonProperty('color')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleColor $color;

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
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleBorderStyle> $borderStyle
     */
    #[JsonProperty('borderStyle')]
    public string $borderStyle;

    /**
     * @var ?array<float> $dashArray
     */
    #[JsonProperty('dashArray'), ArrayType(['float'])]
    public ?array $dashArray;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleInteriorColor $interiorColor
     */
    #[JsonProperty('interiorColor')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleInteriorColor $interiorColor;

    /**
     * @var ?float $cloudyIntensity
     */
    #[JsonProperty('cloudyIntensity')]
    public ?float $cloudyIntensity;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleRectDifferences $rectDifferences
     */
    #[JsonProperty('rectDifferences')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleRectDifferences $rectDifferences;

    /**
     * @var ?float $rotation
     */
    #[JsonProperty('rotation')]
    public ?float $rotation;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleUnrotatedRect $unrotatedRect
     */
    #[JsonProperty('unrotatedRect')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleUnrotatedRect $unrotatedRect;

    /**
     * @param array{
     *   ref: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleRef,
     *   pageObjectNumber: int,
     *   index: int,
     *   identityQuality: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleIdentityQuality>,
     *   flags: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleFlags,
     *   rect: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleRect,
     *   blendMode: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleBlendMode>,
     *   color: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleColor,
     *   opacity: float,
     *   strokeWidth: float,
     *   borderStyle: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleBorderStyle>,
     *   nm?: ?string,
     *   contents?: ?string,
     *   subject?: ?string,
     *   author?: ?string,
     *   created?: ?DateTime,
     *   modified?: ?DateTime,
     *   inReplyTo?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleInReplyTo,
     *   replyType?: ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleReplyType>,
     *   userId?: ?string,
     *   groupId?: ?string,
     *   createdBy?: ?string,
     *   updatedBy?: ?string,
     *   actions?: ?PdfAnnotationActions,
     *   dashArray?: ?array<float>,
     *   interiorColor?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleInteriorColor,
     *   cloudyIntensity?: ?float,
     *   rectDifferences?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleRectDifferences,
     *   rotation?: ?float,
     *   unrotatedRect?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemCircleUnrotatedRect,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->ref = $values['ref'];
        $this->pageObjectNumber = $values['pageObjectNumber'];
        $this->index = $values['index'];
        $this->identityQuality = $values['identityQuality'];
        $this->nm = $values['nm'] ?? null;
        $this->flags = $values['flags'];
        $this->rect = $values['rect'];
        $this->contents = $values['contents'] ?? null;
        $this->subject = $values['subject'] ?? null;
        $this->author = $values['author'] ?? null;
        $this->created = $values['created'] ?? null;
        $this->modified = $values['modified'] ?? null;
        $this->blendMode = $values['blendMode'];
        $this->inReplyTo = $values['inReplyTo'] ?? null;
        $this->replyType = $values['replyType'] ?? null;
        $this->userId = $values['userId'] ?? null;
        $this->groupId = $values['groupId'] ?? null;
        $this->createdBy = $values['createdBy'] ?? null;
        $this->updatedBy = $values['updatedBy'] ?? null;
        $this->actions = $values['actions'] ?? null;
        $this->color = $values['color'];
        $this->opacity = $values['opacity'];
        $this->strokeWidth = $values['strokeWidth'];
        $this->borderStyle = $values['borderStyle'];
        $this->dashArray = $values['dashArray'] ?? null;
        $this->interiorColor = $values['interiorColor'] ?? null;
        $this->cloudyIntensity = $values['cloudyIntensity'] ?? null;
        $this->rectDifferences = $values['rectDifferences'] ?? null;
        $this->rotation = $values['rotation'] ?? null;
        $this->unrotatedRect = $values['unrotatedRect'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
