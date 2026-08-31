<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidget extends JsonSerializableType
{
    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetRef $ref
     */
    #[JsonProperty('ref')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetRef $ref;

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
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetIdentityQuality> $identityQuality
     */
    #[JsonProperty('identityQuality')]
    public string $identityQuality;

    /**
     * @var ?string $nm
     */
    #[JsonProperty('nm')]
    public ?string $nm;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetFlags $flags
     */
    #[JsonProperty('flags')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetFlags $flags;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetRect $rect
     */
    #[JsonProperty('rect')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetRect $rect;

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
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetBlendMode> $blendMode
     */
    #[JsonProperty('blendMode')]
    public string $blendMode;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetInReplyTo $inReplyTo
     */
    #[JsonProperty('inReplyTo')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetInReplyTo $inReplyTo;

    /**
     * @var ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetReplyType> $replyType
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
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetActions $actions;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetColor $color
     */
    #[JsonProperty('color')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetColor $color;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetInteriorColor $interiorColor
     */
    #[JsonProperty('interiorColor')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetInteriorColor $interiorColor;

    /**
     * @var float $strokeWidth
     */
    #[JsonProperty('strokeWidth')]
    public float $strokeWidth;

    /**
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetBorderStyle> $borderStyle
     */
    #[JsonProperty('borderStyle')]
    public string $borderStyle;

    /**
     * @var ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetFontFamily> $fontFamily
     */
    #[JsonProperty('fontFamily')]
    public ?string $fontFamily;

    /**
     * @var ?float $fontSize
     */
    #[JsonProperty('fontSize')]
    public ?float $fontSize;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetFontColor $fontColor
     */
    #[JsonProperty('fontColor')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetFontColor $fontColor;

    /**
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetTextAlign> $textAlign
     */
    #[JsonProperty('textAlign')]
    public string $textAlign;

    /**
     * @var int $fieldObjectNumber
     */
    #[JsonProperty('fieldObjectNumber')]
    public int $fieldObjectNumber;

    /**
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetFieldFamily> $fieldFamily
     */
    #[JsonProperty('fieldFamily')]
    public string $fieldFamily;

    /**
     * @param array{
     *   ref: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetRef,
     *   pageObjectNumber: int,
     *   index: int,
     *   identityQuality: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetIdentityQuality>,
     *   flags: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetFlags,
     *   rect: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetRect,
     *   blendMode: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetBlendMode>,
     *   strokeWidth: float,
     *   borderStyle: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetBorderStyle>,
     *   textAlign: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetTextAlign>,
     *   fieldObjectNumber: int,
     *   fieldFamily: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetFieldFamily>,
     *   nm?: ?string,
     *   contents?: ?string,
     *   subject?: ?string,
     *   author?: ?string,
     *   created?: ?DateTime,
     *   modified?: ?DateTime,
     *   inReplyTo?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetInReplyTo,
     *   replyType?: ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetReplyType>,
     *   userId?: ?string,
     *   groupId?: ?string,
     *   createdBy?: ?string,
     *   updatedBy?: ?string,
     *   actions?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetActions,
     *   color?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetColor,
     *   interiorColor?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetInteriorColor,
     *   fontFamily?: ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetFontFamily>,
     *   fontSize?: ?float,
     *   fontColor?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemWidgetFontColor,
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
        $this->color = $values['color'] ?? null;
        $this->interiorColor = $values['interiorColor'] ?? null;
        $this->strokeWidth = $values['strokeWidth'];
        $this->borderStyle = $values['borderStyle'];
        $this->fontFamily = $values['fontFamily'] ?? null;
        $this->fontSize = $values['fontSize'] ?? null;
        $this->fontColor = $values['fontColor'] ?? null;
        $this->textAlign = $values['textAlign'];
        $this->fieldObjectNumber = $values['fieldObjectNumber'];
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
