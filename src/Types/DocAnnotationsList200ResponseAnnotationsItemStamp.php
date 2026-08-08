<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use DateTime;
use Cloudpdf\Core\Types\Date;

class DocAnnotationsList200ResponseAnnotationsItemStamp extends JsonSerializableType
{
    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemStampRef $ref
     */
    #[JsonProperty('ref')]
    public DocAnnotationsList200ResponseAnnotationsItemStampRef $ref;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemStampIdentityQuality> $identityQuality
     */
    #[JsonProperty('identityQuality')]
    public string $identityQuality;

    /**
     * @var ?string $nm
     */
    #[JsonProperty('nm')]
    public ?string $nm;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemStampFlags $flags
     */
    #[JsonProperty('flags')]
    public DocAnnotationsList200ResponseAnnotationsItemStampFlags $flags;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemStampRect $rect
     */
    #[JsonProperty('rect')]
    public DocAnnotationsList200ResponseAnnotationsItemStampRect $rect;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemStampBlendMode> $blendMode
     */
    #[JsonProperty('blendMode')]
    public string $blendMode;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemStampInReplyTo $inReplyTo
     */
    #[JsonProperty('inReplyTo')]
    public ?DocAnnotationsList200ResponseAnnotationsItemStampInReplyTo $inReplyTo;

    /**
     * @var ?value-of<DocAnnotationsList200ResponseAnnotationsItemStampReplyType> $replyType
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
     * @var ?DocAnnotationsList200ResponseAnnotationsItemStampActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocAnnotationsList200ResponseAnnotationsItemStampActions $actions;

    /**
     * @var ?string $name
     */
    #[JsonProperty('name')]
    public ?string $name;

    /**
     * @var ?float $rotation
     */
    #[JsonProperty('rotation')]
    public ?float $rotation;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemStampUnrotatedRect $unrotatedRect
     */
    #[JsonProperty('unrotatedRect')]
    public ?DocAnnotationsList200ResponseAnnotationsItemStampUnrotatedRect $unrotatedRect;

    /**
     * @param array{
     *   ref: DocAnnotationsList200ResponseAnnotationsItemStampRef,
     *   pageObjectNumber: int,
     *   index: int,
     *   identityQuality: value-of<DocAnnotationsList200ResponseAnnotationsItemStampIdentityQuality>,
     *   flags: DocAnnotationsList200ResponseAnnotationsItemStampFlags,
     *   rect: DocAnnotationsList200ResponseAnnotationsItemStampRect,
     *   blendMode: value-of<DocAnnotationsList200ResponseAnnotationsItemStampBlendMode>,
     *   nm?: ?string,
     *   contents?: ?string,
     *   author?: ?string,
     *   created?: ?DateTime,
     *   modified?: ?DateTime,
     *   inReplyTo?: ?DocAnnotationsList200ResponseAnnotationsItemStampInReplyTo,
     *   replyType?: ?value-of<DocAnnotationsList200ResponseAnnotationsItemStampReplyType>,
     *   userId?: ?string,
     *   groupId?: ?string,
     *   createdBy?: ?string,
     *   updatedBy?: ?string,
     *   actions?: ?DocAnnotationsList200ResponseAnnotationsItemStampActions,
     *   name?: ?string,
     *   rotation?: ?float,
     *   unrotatedRect?: ?DocAnnotationsList200ResponseAnnotationsItemStampUnrotatedRect,
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
        $this->name = $values['name'] ?? null;
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
