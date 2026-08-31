<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlight extends JsonSerializableType
{
    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightRef $ref
     */
    #[JsonProperty('ref')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightRef $ref;

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
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightIdentityQuality> $identityQuality
     */
    #[JsonProperty('identityQuality')]
    public string $identityQuality;

    /**
     * @var ?string $nm
     */
    #[JsonProperty('nm')]
    public ?string $nm;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightFlags $flags
     */
    #[JsonProperty('flags')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightFlags $flags;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightRect $rect
     */
    #[JsonProperty('rect')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightRect $rect;

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
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightBlendMode> $blendMode
     */
    #[JsonProperty('blendMode')]
    public string $blendMode;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightInReplyTo $inReplyTo
     */
    #[JsonProperty('inReplyTo')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightInReplyTo $inReplyTo;

    /**
     * @var ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightReplyType> $replyType
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
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightActions $actions;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightColor $color
     */
    #[JsonProperty('color')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightColor $color;

    /**
     * @var float $opacity
     */
    #[JsonProperty('opacity')]
    public float $opacity;

    /**
     * @var array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightQuadPointsItem> $quadPoints
     */
    #[JsonProperty('quadPoints'), ArrayType([DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightQuadPointsItem::class])]
    public array $quadPoints;

    /**
     * @param array{
     *   ref: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightRef,
     *   pageObjectNumber: int,
     *   index: int,
     *   identityQuality: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightIdentityQuality>,
     *   flags: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightFlags,
     *   rect: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightRect,
     *   blendMode: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightBlendMode>,
     *   color: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightColor,
     *   opacity: float,
     *   quadPoints: array<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightQuadPointsItem>,
     *   nm?: ?string,
     *   contents?: ?string,
     *   subject?: ?string,
     *   author?: ?string,
     *   created?: ?DateTime,
     *   modified?: ?DateTime,
     *   inReplyTo?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightInReplyTo,
     *   replyType?: ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightReplyType>,
     *   userId?: ?string,
     *   groupId?: ?string,
     *   createdBy?: ?string,
     *   updatedBy?: ?string,
     *   actions?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemHighlightActions,
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
        $this->quadPoints = $values['quadPoints'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
