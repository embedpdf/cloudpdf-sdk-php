<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use DateTime;
use Cloudpdf\Core\Types\Date;
use Cloudpdf\Core\Types\ArrayType;

class DocAnnotationsList200ResponseAnnotationsItemFreeText extends JsonSerializableType
{
    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemFreeTextRef $ref
     */
    #[JsonProperty('ref')]
    public DocAnnotationsList200ResponseAnnotationsItemFreeTextRef $ref;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextIdentityQuality> $identityQuality
     */
    #[JsonProperty('identityQuality')]
    public string $identityQuality;

    /**
     * @var ?string $nm
     */
    #[JsonProperty('nm')]
    public ?string $nm;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemFreeTextFlags $flags
     */
    #[JsonProperty('flags')]
    public DocAnnotationsList200ResponseAnnotationsItemFreeTextFlags $flags;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemFreeTextRect $rect
     */
    #[JsonProperty('rect')]
    public DocAnnotationsList200ResponseAnnotationsItemFreeTextRect $rect;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextBlendMode> $blendMode
     */
    #[JsonProperty('blendMode')]
    public string $blendMode;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFreeTextInReplyTo $inReplyTo
     */
    #[JsonProperty('inReplyTo')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFreeTextInReplyTo $inReplyTo;

    /**
     * @var ?value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextReplyType> $replyType
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
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFreeTextActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFreeTextActions $actions;

    /**
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextIntent> $intent
     */
    #[JsonProperty('intent')]
    public string $intent;

    /**
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextFontFamily> $fontFamily
     */
    #[JsonProperty('fontFamily')]
    public string $fontFamily;

    /**
     * @var float $fontSize
     */
    #[JsonProperty('fontSize')]
    public float $fontSize;

    /**
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextTextAlign> $textAlign
     */
    #[JsonProperty('textAlign')]
    public string $textAlign;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemFreeTextColor $color
     */
    #[JsonProperty('color')]
    public DocAnnotationsList200ResponseAnnotationsItemFreeTextColor $color;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFreeTextFontColor $fontColor
     */
    #[JsonProperty('fontColor')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFreeTextFontColor $fontColor;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFreeTextInteriorColor $interiorColor
     */
    #[JsonProperty('interiorColor')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFreeTextInteriorColor $interiorColor;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextBorderStyle> $borderStyle
     */
    #[JsonProperty('borderStyle')]
    public string $borderStyle;

    /**
     * @var ?array<float> $dashArray
     */
    #[JsonProperty('dashArray'), ArrayType(['float'])]
    public ?array $dashArray;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFreeTextRectDifferences $rectDifferences
     */
    #[JsonProperty('rectDifferences')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFreeTextRectDifferences $rectDifferences;

    /**
     * @var ?array<mixed> $calloutLine
     */
    #[JsonProperty('calloutLine'), ArrayType(['mixed'])]
    public ?array $calloutLine;

    /**
     * @var ?value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextLineEnding> $lineEnding
     */
    #[JsonProperty('lineEnding')]
    public ?string $lineEnding;

    /**
     * @var ?float $rotation
     */
    #[JsonProperty('rotation')]
    public ?float $rotation;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemFreeTextUnrotatedRect $unrotatedRect
     */
    #[JsonProperty('unrotatedRect')]
    public ?DocAnnotationsList200ResponseAnnotationsItemFreeTextUnrotatedRect $unrotatedRect;

    /**
     * @param array{
     *   ref: DocAnnotationsList200ResponseAnnotationsItemFreeTextRef,
     *   pageObjectNumber: int,
     *   index: int,
     *   identityQuality: value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextIdentityQuality>,
     *   flags: DocAnnotationsList200ResponseAnnotationsItemFreeTextFlags,
     *   rect: DocAnnotationsList200ResponseAnnotationsItemFreeTextRect,
     *   blendMode: value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextBlendMode>,
     *   intent: value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextIntent>,
     *   fontFamily: value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextFontFamily>,
     *   fontSize: float,
     *   textAlign: value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextTextAlign>,
     *   color: DocAnnotationsList200ResponseAnnotationsItemFreeTextColor,
     *   opacity: float,
     *   strokeWidth: float,
     *   borderStyle: value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextBorderStyle>,
     *   nm?: ?string,
     *   contents?: ?string,
     *   author?: ?string,
     *   created?: ?DateTime,
     *   modified?: ?DateTime,
     *   inReplyTo?: ?DocAnnotationsList200ResponseAnnotationsItemFreeTextInReplyTo,
     *   replyType?: ?value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextReplyType>,
     *   userId?: ?string,
     *   groupId?: ?string,
     *   createdBy?: ?string,
     *   updatedBy?: ?string,
     *   actions?: ?DocAnnotationsList200ResponseAnnotationsItemFreeTextActions,
     *   fontColor?: ?DocAnnotationsList200ResponseAnnotationsItemFreeTextFontColor,
     *   interiorColor?: ?DocAnnotationsList200ResponseAnnotationsItemFreeTextInteriorColor,
     *   dashArray?: ?array<float>,
     *   rectDifferences?: ?DocAnnotationsList200ResponseAnnotationsItemFreeTextRectDifferences,
     *   calloutLine?: ?array<mixed>,
     *   lineEnding?: ?value-of<DocAnnotationsList200ResponseAnnotationsItemFreeTextLineEnding>,
     *   rotation?: ?float,
     *   unrotatedRect?: ?DocAnnotationsList200ResponseAnnotationsItemFreeTextUnrotatedRect,
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
