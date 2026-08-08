<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use DateTime;
use Cloudpdf\Core\Types\Date;
use Cloudpdf\Core\Types\ArrayType;

class DocAnnotationsList200ResponseAnnotationsItemRedact extends JsonSerializableType
{
    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemRedactRef $ref
     */
    #[JsonProperty('ref')]
    public DocAnnotationsList200ResponseAnnotationsItemRedactRef $ref;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemRedactIdentityQuality> $identityQuality
     */
    #[JsonProperty('identityQuality')]
    public string $identityQuality;

    /**
     * @var ?string $nm
     */
    #[JsonProperty('nm')]
    public ?string $nm;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemRedactFlags $flags
     */
    #[JsonProperty('flags')]
    public DocAnnotationsList200ResponseAnnotationsItemRedactFlags $flags;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemRedactRect $rect
     */
    #[JsonProperty('rect')]
    public DocAnnotationsList200ResponseAnnotationsItemRedactRect $rect;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemRedactBlendMode> $blendMode
     */
    #[JsonProperty('blendMode')]
    public string $blendMode;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemRedactInReplyTo $inReplyTo
     */
    #[JsonProperty('inReplyTo')]
    public ?DocAnnotationsList200ResponseAnnotationsItemRedactInReplyTo $inReplyTo;

    /**
     * @var ?value-of<DocAnnotationsList200ResponseAnnotationsItemRedactReplyType> $replyType
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
     * @var ?DocAnnotationsList200ResponseAnnotationsItemRedactActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocAnnotationsList200ResponseAnnotationsItemRedactActions $actions;

    /**
     * @var array<DocAnnotationsList200ResponseAnnotationsItemRedactQuadPointsItem> $quadPoints
     */
    #[JsonProperty('quadPoints'), ArrayType([DocAnnotationsList200ResponseAnnotationsItemRedactQuadPointsItem::class])]
    public array $quadPoints;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemRedactColor $color
     */
    #[JsonProperty('color')]
    public DocAnnotationsList200ResponseAnnotationsItemRedactColor $color;

    /**
     * @var float $opacity
     */
    #[JsonProperty('opacity')]
    public float $opacity;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemRedactInteriorColor $interiorColor
     */
    #[JsonProperty('interiorColor')]
    public ?DocAnnotationsList200ResponseAnnotationsItemRedactInteriorColor $interiorColor;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemRedactFontFamily> $fontFamily
     */
    #[JsonProperty('fontFamily')]
    public string $fontFamily;

    /**
     * @var float $fontSize
     */
    #[JsonProperty('fontSize')]
    public float $fontSize;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemRedactFontColor $fontColor
     */
    #[JsonProperty('fontColor')]
    public DocAnnotationsList200ResponseAnnotationsItemRedactFontColor $fontColor;

    /**
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemRedactTextAlign> $textAlign
     */
    #[JsonProperty('textAlign')]
    public string $textAlign;

    /**
     * @param array{
     *   ref: DocAnnotationsList200ResponseAnnotationsItemRedactRef,
     *   pageObjectNumber: int,
     *   index: int,
     *   identityQuality: value-of<DocAnnotationsList200ResponseAnnotationsItemRedactIdentityQuality>,
     *   flags: DocAnnotationsList200ResponseAnnotationsItemRedactFlags,
     *   rect: DocAnnotationsList200ResponseAnnotationsItemRedactRect,
     *   blendMode: value-of<DocAnnotationsList200ResponseAnnotationsItemRedactBlendMode>,
     *   quadPoints: array<DocAnnotationsList200ResponseAnnotationsItemRedactQuadPointsItem>,
     *   color: DocAnnotationsList200ResponseAnnotationsItemRedactColor,
     *   opacity: float,
     *   repeat: bool,
     *   fontFamily: value-of<DocAnnotationsList200ResponseAnnotationsItemRedactFontFamily>,
     *   fontSize: float,
     *   fontColor: DocAnnotationsList200ResponseAnnotationsItemRedactFontColor,
     *   textAlign: value-of<DocAnnotationsList200ResponseAnnotationsItemRedactTextAlign>,
     *   nm?: ?string,
     *   contents?: ?string,
     *   author?: ?string,
     *   created?: ?DateTime,
     *   modified?: ?DateTime,
     *   inReplyTo?: ?DocAnnotationsList200ResponseAnnotationsItemRedactInReplyTo,
     *   replyType?: ?value-of<DocAnnotationsList200ResponseAnnotationsItemRedactReplyType>,
     *   userId?: ?string,
     *   groupId?: ?string,
     *   createdBy?: ?string,
     *   updatedBy?: ?string,
     *   actions?: ?DocAnnotationsList200ResponseAnnotationsItemRedactActions,
     *   interiorColor?: ?DocAnnotationsList200ResponseAnnotationsItemRedactInteriorColor,
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
