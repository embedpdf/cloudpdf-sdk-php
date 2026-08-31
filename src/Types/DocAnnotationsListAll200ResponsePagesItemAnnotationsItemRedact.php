<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedact extends JsonSerializableType
{
    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactRef $ref
     */
    #[JsonProperty('ref')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactRef $ref;

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
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactIdentityQuality> $identityQuality
     */
    #[JsonProperty('identityQuality')]
    public string $identityQuality;

    /**
     * @var ?string $nm
     */
    #[JsonProperty('nm')]
    public ?string $nm;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactFlags $flags
     */
    #[JsonProperty('flags')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactFlags $flags;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactRect $rect
     */
    #[JsonProperty('rect')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactRect $rect;

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
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactBlendMode> $blendMode
     */
    #[JsonProperty('blendMode')]
    public string $blendMode;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactInReplyTo $inReplyTo
     */
    #[JsonProperty('inReplyTo')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactInReplyTo $inReplyTo;

    /**
     * @var ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactReplyType> $replyType
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
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActions $actions;

    /**
     * @var array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactQuadPointsItem> $quadPoints
     */
    #[JsonProperty('quadPoints'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactQuadPointsItem::class])]
    public array $quadPoints;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactColor $color
     */
    #[JsonProperty('color')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactColor $color;

    /**
     * @var float $opacity
     */
    #[JsonProperty('opacity')]
    public float $opacity;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactInteriorColor $interiorColor
     */
    #[JsonProperty('interiorColor')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactInteriorColor $interiorColor;

    /**
     * @var ?string $overlayText
     */
    #[JsonProperty('overlayText')]
    public ?string $overlayText;

    /**
     * @var bool $repeat
     */
    #[JsonProperty('repeat')]
    public bool $repeat;

    /**
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactFontFamily> $fontFamily
     */
    #[JsonProperty('fontFamily')]
    public string $fontFamily;

    /**
     * @var float $fontSize
     */
    #[JsonProperty('fontSize')]
    public float $fontSize;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactFontColor $fontColor
     */
    #[JsonProperty('fontColor')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactFontColor $fontColor;

    /**
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactTextAlign> $textAlign
     */
    #[JsonProperty('textAlign')]
    public string $textAlign;

    /**
     * @param array{
     *   ref: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactRef,
     *   pageObjectNumber: int,
     *   index: int,
     *   identityQuality: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactIdentityQuality>,
     *   flags: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactFlags,
     *   rect: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactRect,
     *   blendMode: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactBlendMode>,
     *   quadPoints: array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactQuadPointsItem>,
     *   color: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactColor,
     *   opacity: float,
     *   repeat: bool,
     *   fontFamily: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactFontFamily>,
     *   fontSize: float,
     *   fontColor: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactFontColor,
     *   textAlign: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactTextAlign>,
     *   nm?: ?string,
     *   contents?: ?string,
     *   subject?: ?string,
     *   author?: ?string,
     *   created?: ?DateTime,
     *   modified?: ?DateTime,
     *   inReplyTo?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactInReplyTo,
     *   replyType?: ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactReplyType>,
     *   userId?: ?string,
     *   groupId?: ?string,
     *   createdBy?: ?string,
     *   updatedBy?: ?string,
     *   actions?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactActions,
     *   interiorColor?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemRedactInteriorColor,
     *   overlayText?: ?string,
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
        $this->quadPoints = $values['quadPoints'];
        $this->color = $values['color'];
        $this->opacity = $values['opacity'];
        $this->interiorColor = $values['interiorColor'] ?? null;
        $this->overlayText = $values['overlayText'] ?? null;
        $this->repeat = $values['repeat'];
        $this->fontFamily = $values['fontFamily'];
        $this->fontSize = $values['fontSize'];
        $this->fontColor = $values['fontColor'];
        $this->textAlign = $values['textAlign'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
