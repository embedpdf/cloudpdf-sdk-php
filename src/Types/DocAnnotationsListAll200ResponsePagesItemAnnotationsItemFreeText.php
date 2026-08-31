<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;
use CloudPDF\Core\Types\ArrayType;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeText extends JsonSerializableType
{
    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRef $ref
     */
    #[JsonProperty('ref')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRef $ref;

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
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextIdentityQuality> $identityQuality
     */
    #[JsonProperty('identityQuality')]
    public string $identityQuality;

    /**
     * @var ?string $nm
     */
    #[JsonProperty('nm')]
    public ?string $nm;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextFlags $flags
     */
    #[JsonProperty('flags')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextFlags $flags;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRect $rect
     */
    #[JsonProperty('rect')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRect $rect;

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
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextBlendMode> $blendMode
     */
    #[JsonProperty('blendMode')]
    public string $blendMode;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextInReplyTo $inReplyTo
     */
    #[JsonProperty('inReplyTo')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextInReplyTo $inReplyTo;

    /**
     * @var ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextReplyType> $replyType
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
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextActions $actions;

    /**
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextIntent> $intent
     */
    #[JsonProperty('intent')]
    public string $intent;

    /**
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextFontFamily> $fontFamily
     */
    #[JsonProperty('fontFamily')]
    public string $fontFamily;

    /**
     * @var float $fontSize
     */
    #[JsonProperty('fontSize')]
    public float $fontSize;

    /**
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextTextAlign> $textAlign
     */
    #[JsonProperty('textAlign')]
    public string $textAlign;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextColor $color
     */
    #[JsonProperty('color')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextColor $color;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextFontColor $fontColor
     */
    #[JsonProperty('fontColor')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextFontColor $fontColor;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextInteriorColor $interiorColor
     */
    #[JsonProperty('interiorColor')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextInteriorColor $interiorColor;

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
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextBorderStyle> $borderStyle
     */
    #[JsonProperty('borderStyle')]
    public string $borderStyle;

    /**
     * @var ?array<float> $dashArray
     */
    #[JsonProperty('dashArray'), ArrayType(['float'])]
    public ?array $dashArray;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRectDifferences $rectDifferences
     */
    #[JsonProperty('rectDifferences')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRectDifferences $rectDifferences;

    /**
     * @var ?array<mixed> $calloutLine
     */
    #[JsonProperty('calloutLine'), ArrayType(['mixed'])]
    public ?array $calloutLine;

    /**
     * @var ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextLineEnding> $lineEnding
     */
    #[JsonProperty('lineEnding')]
    public ?string $lineEnding;

    /**
     * @var ?float $rotation
     */
    #[JsonProperty('rotation')]
    public ?float $rotation;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextUnrotatedRect $unrotatedRect
     */
    #[JsonProperty('unrotatedRect')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextUnrotatedRect $unrotatedRect;

    /**
     * @param array{
     *   ref: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRef,
     *   pageObjectNumber: int,
     *   index: int,
     *   identityQuality: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextIdentityQuality>,
     *   flags: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextFlags,
     *   rect: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRect,
     *   blendMode: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextBlendMode>,
     *   intent: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextIntent>,
     *   fontFamily: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextFontFamily>,
     *   fontSize: float,
     *   textAlign: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextTextAlign>,
     *   color: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextColor,
     *   opacity: float,
     *   strokeWidth: float,
     *   borderStyle: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextBorderStyle>,
     *   nm?: ?string,
     *   contents?: ?string,
     *   subject?: ?string,
     *   author?: ?string,
     *   created?: ?DateTime,
     *   modified?: ?DateTime,
     *   inReplyTo?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextInReplyTo,
     *   replyType?: ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextReplyType>,
     *   userId?: ?string,
     *   groupId?: ?string,
     *   createdBy?: ?string,
     *   updatedBy?: ?string,
     *   actions?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextActions,
     *   fontColor?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextFontColor,
     *   interiorColor?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextInteriorColor,
     *   dashArray?: ?array<float>,
     *   rectDifferences?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextRectDifferences,
     *   calloutLine?: ?array<mixed>,
     *   lineEnding?: ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextLineEnding>,
     *   rotation?: ?float,
     *   unrotatedRect?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemFreeTextUnrotatedRect,
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
        $this->intent = $values['intent'];
        $this->fontFamily = $values['fontFamily'];
        $this->fontSize = $values['fontSize'];
        $this->textAlign = $values['textAlign'];
        $this->color = $values['color'];
        $this->fontColor = $values['fontColor'] ?? null;
        $this->interiorColor = $values['interiorColor'] ?? null;
        $this->opacity = $values['opacity'];
        $this->strokeWidth = $values['strokeWidth'];
        $this->borderStyle = $values['borderStyle'];
        $this->dashArray = $values['dashArray'] ?? null;
        $this->rectDifferences = $values['rectDifferences'] ?? null;
        $this->calloutLine = $values['calloutLine'] ?? null;
        $this->lineEnding = $values['lineEnding'] ?? null;
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
