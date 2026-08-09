<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;

class DocAnnotationsList200ResponseAnnotationsItemWidget extends JsonSerializableType
{
    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemWidgetRef $ref
     */
    #[JsonProperty('ref')]
    public DocAnnotationsList200ResponseAnnotationsItemWidgetRef $ref;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemWidgetIdentityQuality> $identityQuality
     */
    #[JsonProperty('identityQuality')]
    public string $identityQuality;

    /**
     * @var ?string $nm
     */
    #[JsonProperty('nm')]
    public ?string $nm;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemWidgetFlags $flags
     */
    #[JsonProperty('flags')]
    public DocAnnotationsList200ResponseAnnotationsItemWidgetFlags $flags;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemWidgetRect $rect
     */
    #[JsonProperty('rect')]
    public DocAnnotationsList200ResponseAnnotationsItemWidgetRect $rect;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemWidgetBlendMode> $blendMode
     */
    #[JsonProperty('blendMode')]
    public string $blendMode;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemWidgetInReplyTo $inReplyTo
     */
    #[JsonProperty('inReplyTo')]
    public ?DocAnnotationsList200ResponseAnnotationsItemWidgetInReplyTo $inReplyTo;

    /**
     * @var ?value-of<DocAnnotationsList200ResponseAnnotationsItemWidgetReplyType> $replyType
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
     * @var ?DocAnnotationsList200ResponseAnnotationsItemWidgetActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocAnnotationsList200ResponseAnnotationsItemWidgetActions $actions;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemWidgetColor $color
     */
    #[JsonProperty('color')]
    public ?DocAnnotationsList200ResponseAnnotationsItemWidgetColor $color;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemWidgetInteriorColor $interiorColor
     */
    #[JsonProperty('interiorColor')]
    public ?DocAnnotationsList200ResponseAnnotationsItemWidgetInteriorColor $interiorColor;

    /**
     * @var float $strokeWidth
     */
    #[JsonProperty('strokeWidth')]
    public float $strokeWidth;

    /**
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemWidgetBorderStyle> $borderStyle
     */
    #[JsonProperty('borderStyle')]
    public string $borderStyle;

    /**
     * @var ?value-of<DocAnnotationsList200ResponseAnnotationsItemWidgetFontFamily> $fontFamily
     */
    #[JsonProperty('fontFamily')]
    public ?string $fontFamily;

    /**
     * @var ?float $fontSize
     */
    #[JsonProperty('fontSize')]
    public ?float $fontSize;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemWidgetFontColor $fontColor
     */
    #[JsonProperty('fontColor')]
    public ?DocAnnotationsList200ResponseAnnotationsItemWidgetFontColor $fontColor;

    /**
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemWidgetTextAlign> $textAlign
     */
    #[JsonProperty('textAlign')]
    public string $textAlign;

    /**
     * @var int $fieldObjectNumber
     */
    #[JsonProperty('fieldObjectNumber')]
    public int $fieldObjectNumber;

    /**
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemWidgetFieldFamily> $fieldFamily
     */
    #[JsonProperty('fieldFamily')]
    public string $fieldFamily;

    /**
     * @param array{
     *   ref: DocAnnotationsList200ResponseAnnotationsItemWidgetRef,
     *   pageObjectNumber: int,
     *   index: int,
     *   identityQuality: value-of<DocAnnotationsList200ResponseAnnotationsItemWidgetIdentityQuality>,
     *   flags: DocAnnotationsList200ResponseAnnotationsItemWidgetFlags,
     *   rect: DocAnnotationsList200ResponseAnnotationsItemWidgetRect,
     *   blendMode: value-of<DocAnnotationsList200ResponseAnnotationsItemWidgetBlendMode>,
     *   strokeWidth: float,
     *   borderStyle: value-of<DocAnnotationsList200ResponseAnnotationsItemWidgetBorderStyle>,
     *   textAlign: value-of<DocAnnotationsList200ResponseAnnotationsItemWidgetTextAlign>,
     *   fieldObjectNumber: int,
     *   fieldFamily: value-of<DocAnnotationsList200ResponseAnnotationsItemWidgetFieldFamily>,
     *   nm?: ?string,
     *   contents?: ?string,
     *   author?: ?string,
     *   created?: ?DateTime,
     *   modified?: ?DateTime,
     *   inReplyTo?: ?DocAnnotationsList200ResponseAnnotationsItemWidgetInReplyTo,
     *   replyType?: ?value-of<DocAnnotationsList200ResponseAnnotationsItemWidgetReplyType>,
     *   userId?: ?string,
     *   groupId?: ?string,
     *   createdBy?: ?string,
     *   updatedBy?: ?string,
     *   actions?: ?DocAnnotationsList200ResponseAnnotationsItemWidgetActions,
     *   color?: ?DocAnnotationsList200ResponseAnnotationsItemWidgetColor,
     *   interiorColor?: ?DocAnnotationsList200ResponseAnnotationsItemWidgetInteriorColor,
     *   fontFamily?: ?value-of<DocAnnotationsList200ResponseAnnotationsItemWidgetFontFamily>,
     *   fontSize?: ?float,
     *   fontColor?: ?DocAnnotationsList200ResponseAnnotationsItemWidgetFontColor,
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
