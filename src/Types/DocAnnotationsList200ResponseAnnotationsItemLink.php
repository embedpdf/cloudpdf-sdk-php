<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;
use DateTime;
use Cloudpdf\Core\Types\Date;

class DocAnnotationsList200ResponseAnnotationsItemLink extends JsonSerializableType
{
    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemLinkRef $ref
     */
    #[JsonProperty('ref')]
    public DocAnnotationsList200ResponseAnnotationsItemLinkRef $ref;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemLinkIdentityQuality> $identityQuality
     */
    #[JsonProperty('identityQuality')]
    public string $identityQuality;

    /**
     * @var ?string $nm
     */
    #[JsonProperty('nm')]
    public ?string $nm;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemLinkFlags $flags
     */
    #[JsonProperty('flags')]
    public DocAnnotationsList200ResponseAnnotationsItemLinkFlags $flags;

    /**
     * @var DocAnnotationsList200ResponseAnnotationsItemLinkRect $rect
     */
    #[JsonProperty('rect')]
    public DocAnnotationsList200ResponseAnnotationsItemLinkRect $rect;

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
     * @var value-of<DocAnnotationsList200ResponseAnnotationsItemLinkBlendMode> $blendMode
     */
    #[JsonProperty('blendMode')]
    public string $blendMode;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLinkInReplyTo $inReplyTo
     */
    #[JsonProperty('inReplyTo')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLinkInReplyTo $inReplyTo;

    /**
     * @var ?value-of<DocAnnotationsList200ResponseAnnotationsItemLinkReplyType> $replyType
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
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLinkActions $actions
     */
    #[JsonProperty('actions')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLinkActions $actions;

    /**
     * @var ?DocAnnotationsList200ResponseAnnotationsItemLinkTarget $target
     */
    #[JsonProperty('target')]
    public ?DocAnnotationsList200ResponseAnnotationsItemLinkTarget $target;

    /**
     * @param array{
     *   ref: DocAnnotationsList200ResponseAnnotationsItemLinkRef,
     *   pageObjectNumber: int,
     *   index: int,
     *   identityQuality: value-of<DocAnnotationsList200ResponseAnnotationsItemLinkIdentityQuality>,
     *   flags: DocAnnotationsList200ResponseAnnotationsItemLinkFlags,
     *   rect: DocAnnotationsList200ResponseAnnotationsItemLinkRect,
     *   blendMode: value-of<DocAnnotationsList200ResponseAnnotationsItemLinkBlendMode>,
     *   nm?: ?string,
     *   contents?: ?string,
     *   author?: ?string,
     *   created?: ?DateTime,
     *   modified?: ?DateTime,
     *   inReplyTo?: ?DocAnnotationsList200ResponseAnnotationsItemLinkInReplyTo,
     *   replyType?: ?value-of<DocAnnotationsList200ResponseAnnotationsItemLinkReplyType>,
     *   userId?: ?string,
     *   groupId?: ?string,
     *   createdBy?: ?string,
     *   updatedBy?: ?string,
     *   actions?: ?DocAnnotationsList200ResponseAnnotationsItemLinkActions,
     *   target?: ?DocAnnotationsList200ResponseAnnotationsItemLinkTarget,
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
        $this->target = $values['target'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
