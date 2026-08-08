<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use DateTime;
use Cloudpdf\Core\Types\Date;
use Cloudpdf\Core\Types\ArrayType;

class DocAnnotationsList200ResponseAnnotationsItemSquare extends JsonSerializableType
{
    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemSquareRef $ref
     */
    #[JsonProperty('ref')]
    public DocAnnotationsList200ResponseAnnotationsItemSquareRef $ref;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemSquareIdentityQuality> $identityQuality
     */
    #[JsonProperty('identityQuality')]
    public string $identityQuality;

    /**
     * @var ?string $nm
     */
    #[JsonProperty('nm')]
    public ?string $nm;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemSquareFlags $flags
     */
    #[JsonProperty('flags')]
    public DocAnnotationsList200ResponseAnnotationsItemSquareFlags $flags;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemSquareRect $rect
     */
    #[JsonProperty('rect')]
    public DocAnnotationsList200ResponseAnnotationsItemSquareRect $rect;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemSquareBlendMode> $blendMode
     */
    #[JsonProperty('blendMode')]
    public string $blendMode;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemSquareInReplyTo $inReplyTo
     */
    #[JsonProperty('inReplyTo')]
    public ?DocAnnotationsList200ResponseAnnotationsItemSquareInReplyTo $inReplyTo;

    /**
     * @var ?value-of<DocAnnotationsList200ResponseAnnotationsItemSquareReplyType> $replyType
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
     * @var ?DocAnnotationsList200ResponseAnnotationsItemSquareActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocAnnotationsList200ResponseAnnotationsItemSquareActions $actions;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemSquareColor $color
     */
    #[JsonProperty('color')]
    public DocAnnotationsList200ResponseAnnotationsItemSquareColor $color;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemSquareBorderStyle> $borderStyle
     */
    #[JsonProperty('borderStyle')]
    public string $borderStyle;

    /**
     * @var ?array<float> $dashArray
     */
    #[JsonProperty('dashArray'), ArrayType(['float'])]
    public ?array $dashArray;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemSquareInteriorColor $interiorColor
     */
    #[JsonProperty('interiorColor')]
    public ?DocAnnotationsList200ResponseAnnotationsItemSquareInteriorColor $interiorColor;

    /**
     * @var ?float $cloudyIntensity
     */
    #[JsonProperty('cloudyIntensity')]
    public ?float $cloudyIntensity;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemSquareRectDifferences $rectDifferences
     */
    #[JsonProperty('rectDifferences')]
    public ?DocAnnotationsList200ResponseAnnotationsItemSquareRectDifferences $rectDifferences;

    /**
     * @var ?float $rotation
     */
    #[JsonProperty('rotation')]
    public ?float $rotation;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemSquareUnrotatedRect $unrotatedRect
     */
    #[JsonProperty('unrotatedRect')]
    public ?DocAnnotationsList200ResponseAnnotationsItemSquareUnrotatedRect $unrotatedRect;

    /**
     * @param array{
     *   ref: DocAnnotationsList200ResponseAnnotationsItemSquareRef,
     *   pageObjectNumber: int,
     *   index: int,
     *   identityQuality: value-of<DocAnnotationsList200ResponseAnnotationsItemSquareIdentityQuality>,
     *   flags: DocAnnotationsList200ResponseAnnotationsItemSquareFlags,
     *   rect: DocAnnotationsList200ResponseAnnotationsItemSquareRect,
     *   blendMode: value-of<DocAnnotationsList200ResponseAnnotationsItemSquareBlendMode>,
     *   color: DocAnnotationsList200ResponseAnnotationsItemSquareColor,
     *   opacity: float,
     *   strokeWidth: float,
     *   borderStyle: value-of<DocAnnotationsList200ResponseAnnotationsItemSquareBorderStyle>,
     *   nm?: ?string,
     *   contents?: ?string,
     *   author?: ?string,
     *   created?: ?DateTime,
     *   modified?: ?DateTime,
     *   inReplyTo?: ?DocAnnotationsList200ResponseAnnotationsItemSquareInReplyTo,
     *   replyType?: ?value-of<DocAnnotationsList200ResponseAnnotationsItemSquareReplyType>,
     *   userId?: ?string,
     *   groupId?: ?string,
     *   createdBy?: ?string,
     *   updatedBy?: ?string,
     *   actions?: ?DocAnnotationsList200ResponseAnnotationsItemSquareActions,
     *   dashArray?: ?array<float>,
     *   interiorColor?: ?DocAnnotationsList200ResponseAnnotationsItemSquareInteriorColor,
     *   cloudyIntensity?: ?float,
     *   rectDifferences?: ?DocAnnotationsList200ResponseAnnotationsItemSquareRectDifferences,
     *   rotation?: ?float,
     *   unrotatedRect?: ?DocAnnotationsList200ResponseAnnotationsItemSquareUnrotatedRect,
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
