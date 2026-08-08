<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use DateTime;
use Cloudpdf\Core\Types\Date;
use Cloudpdf\Core\Types\ArrayType;

class DocAnnotationsList200ResponseAnnotationsItemStrikeout extends JsonSerializableType
{
    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemStrikeoutRef $ref
     */
    #[JsonProperty('ref')]
    public DocAnnotationsList200ResponseAnnotationsItemStrikeoutRef $ref;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemStrikeoutIdentityQuality> $identityQuality
     */
    #[JsonProperty('identityQuality')]
    public string $identityQuality;

    /**
     * @var ?string $nm
     */
    #[JsonProperty('nm')]
    public ?string $nm;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemStrikeoutFlags $flags
     */
    #[JsonProperty('flags')]
    public DocAnnotationsList200ResponseAnnotationsItemStrikeoutFlags $flags;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemStrikeoutRect $rect
     */
    #[JsonProperty('rect')]
    public DocAnnotationsList200ResponseAnnotationsItemStrikeoutRect $rect;

    /**
     * @var ?string $contents
     */
    #[JsonProperty('contents')]
    public ?string $contents;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemStrikeoutBlendMode> $blendMode
     */
    #[JsonProperty('blendMode')]
    public string $blendMode;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutInReplyTo $inReplyTo
     */
    #[JsonProperty('inReplyTo')]
    public ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutInReplyTo $inReplyTo;

    /**
     * @var ?value-of<DocAnnotationsList200ResponseAnnotationsItemStrikeoutReplyType> $replyType
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
     * @var ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActions $actions;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemStrikeoutColor $color
     */
    #[JsonProperty('color')]
    public DocAnnotationsList200ResponseAnnotationsItemStrikeoutColor $color;

    /**
     * @var float $opacity
     */
    #[JsonProperty('opacity')]
    public float $opacity;

    /**
     * @var array<DocAnnotationsList200ResponseAnnotationsItemStrikeoutQuadPointsItem> $quadPoints
     */
    #[JsonProperty('quadPoints'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemStrikeoutQuadPointsItem::class])]
    public array $quadPoints;

    /**
     * @var ?value-of<DocAnnotationsList200ResponseAnnotationsItemStrikeoutIntent> $intent
     */
    #[JsonProperty('intent')]
    public ?string $intent;

    /**
     * @param array{
     *   ref: DocAnnotationsList200ResponseAnnotationsItemStrikeoutRef,
     *   pageObjectNumber: int,
     *   index: int,
     *   identityQuality: value-of<DocAnnotationsList200ResponseAnnotationsItemStrikeoutIdentityQuality>,
     *   flags: DocAnnotationsList200ResponseAnnotationsItemStrikeoutFlags,
     *   rect: DocAnnotationsList200ResponseAnnotationsItemStrikeoutRect,
     *   blendMode: value-of<DocAnnotationsList200ResponseAnnotationsItemStrikeoutBlendMode>,
     *   color: DocAnnotationsList200ResponseAnnotationsItemStrikeoutColor,
     *   opacity: float,
     *   quadPoints: array<DocAnnotationsList200ResponseAnnotationsItemStrikeoutQuadPointsItem>,
     *   nm?: ?string,
     *   contents?: ?string,
     *   author?: ?string,
     *   created?: ?DateTime,
     *   modified?: ?DateTime,
     *   inReplyTo?: ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutInReplyTo,
     *   replyType?: ?value-of<DocAnnotationsList200ResponseAnnotationsItemStrikeoutReplyType>,
     *   userId?: ?string,
     *   groupId?: ?string,
     *   createdBy?: ?string,
     *   updatedBy?: ?string,
     *   actions?: ?DocAnnotationsList200ResponseAnnotationsItemStrikeoutActions,
     *   intent?: ?value-of<DocAnnotationsList200ResponseAnnotationsItemStrikeoutIntent>,
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
        $this->intent = $values['intent'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
