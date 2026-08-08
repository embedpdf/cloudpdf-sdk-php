<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use DateTime;
use Cloudpdf\Core\Types\Date;
use Cloudpdf\Core\Types\ArrayType;

class DocAnnotationsList200ResponseAnnotationsItemLine extends JsonSerializableType
{
    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemLineRef $ref
     */
    #[JsonProperty('ref')]
    public DocAnnotationsList200ResponseAnnotationsItemLineRef $ref;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemLineIdentityQuality> $identityQuality
     */
    #[JsonProperty('identityQuality')]
    public string $identityQuality;

    /**
     * @var ?string $nm
     */
    #[JsonProperty('nm')]
    public ?string $nm;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemLineFlags $flags
     */
    #[JsonProperty('flags')]
    public DocAnnotationsList200ResponseAnnotationsItemLineFlags $flags;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemLineRect $rect
     */
    #[JsonProperty('rect')]
    public DocAnnotationsList200ResponseAnnotationsItemLineRect $rect;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemLineBlendMode> $blendMode
     */
    #[JsonProperty('blendMode')]
    public string $blendMode;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLineInReplyTo $inReplyTo
     */
    #[JsonProperty('inReplyTo')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLineInReplyTo $inReplyTo;

    /**
     * @var ?value-of<DocAnnotationsList200ResponseAnnotationsItemLineReplyType> $replyType
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
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLineActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLineActions $actions;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemLineColor $color
     */
    #[JsonProperty('color')]
    public DocAnnotationsList200ResponseAnnotationsItemLineColor $color;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemLineBorderStyle> $borderStyle
     */
    #[JsonProperty('borderStyle')]
    public string $borderStyle;

    /**
     * @var ?array<float> $dashArray
     */
    #[JsonProperty('dashArray'), ArrayType(['float'])]
    public ?array $dashArray;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLineInteriorColor $interiorColor
     */
    #[JsonProperty('interiorColor')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLineInteriorColor $interiorColor;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemLineLinePoints $linePoints
     */
    #[JsonProperty('linePoints')]
    public DocAnnotationsList200ResponseAnnotationsItemLineLinePoints $linePoints;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemLineLineEndings $lineEndings
     */
    #[JsonProperty('lineEndings')]
    public DocAnnotationsList200ResponseAnnotationsItemLineLineEndings $lineEndings;

    /**
     * @var ?float $rotation
     */
    #[JsonProperty('rotation')]
    public ?float $rotation;

    /**
     * @param array{
     *   ref: DocAnnotationsList200ResponseAnnotationsItemLineRef,
     *   pageObjectNumber: int,
     *   index: int,
     *   identityQuality: value-of<DocAnnotationsList200ResponseAnnotationsItemLineIdentityQuality>,
     *   flags: DocAnnotationsList200ResponseAnnotationsItemLineFlags,
     *   rect: DocAnnotationsList200ResponseAnnotationsItemLineRect,
     *   blendMode: value-of<DocAnnotationsList200ResponseAnnotationsItemLineBlendMode>,
     *   color: DocAnnotationsList200ResponseAnnotationsItemLineColor,
     *   opacity: float,
     *   strokeWidth: float,
     *   borderStyle: value-of<DocAnnotationsList200ResponseAnnotationsItemLineBorderStyle>,
     *   linePoints: DocAnnotationsList200ResponseAnnotationsItemLineLinePoints,
     *   lineEndings: DocAnnotationsList200ResponseAnnotationsItemLineLineEndings,
     *   nm?: ?string,
     *   contents?: ?string,
     *   author?: ?string,
     *   created?: ?DateTime,
     *   modified?: ?DateTime,
     *   inReplyTo?: ?DocAnnotationsList200ResponseAnnotationsItemLineInReplyTo,
     *   replyType?: ?value-of<DocAnnotationsList200ResponseAnnotationsItemLineReplyType>,
     *   userId?: ?string,
     *   groupId?: ?string,
     *   createdBy?: ?string,
     *   updatedBy?: ?string,
     *   actions?: ?DocAnnotationsList200ResponseAnnotationsItemLineActions,
     *   dashArray?: ?array<float>,
     *   interiorColor?: ?DocAnnotationsList200ResponseAnnotationsItemLineInteriorColor,
     *   rotation?: ?float,
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
        $this->strokeWidth = $values['strokeWidth'];
        $this->borderStyle = $values['borderStyle'];
        $this->dashArray = $values['dashArray'] ?? null;
        $this->interiorColor = $values['interiorColor'] ?? null;
        $this->linePoints = $values['linePoints'];
        $this->lineEndings = $values['lineEndings'];
        $this->rotation = $values['rotation'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
