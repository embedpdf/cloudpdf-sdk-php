<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use DateTime;
use CloudPDF\Core\Types\Date;

class DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupported extends JsonSerializableType
{
    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupportedRef $ref
     */
    #[JsonProperty('ref')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupportedRef $ref;

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
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupportedIdentityQuality> $identityQuality
     */
    #[JsonProperty('identityQuality')]
    public string $identityQuality;

    /**
     * @var ?string $nm
     */
    #[JsonProperty('nm')]
    public ?string $nm;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupportedFlags $flags
     */
    #[JsonProperty('flags')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupportedFlags $flags;

    /**
     * @var DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupportedRect $rect
     */
    #[JsonProperty('rect')]
    public DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupportedRect $rect;

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
     * @var value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupportedBlendMode> $blendMode
     */
    #[JsonProperty('blendMode')]
    public string $blendMode;

    /**
     * @var ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupportedInReplyTo $inReplyTo
     */
    #[JsonProperty('inReplyTo')]
    public ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupportedInReplyTo $inReplyTo;

    /**
     * @var ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupportedReplyType> $replyType
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
     * @var ?PdfAnnotationActions $actions
     */
    #[JsonProperty('actions')]
    public ?PdfAnnotationActions $actions;

    /**
     * @var int $rawSubtypeCode
     */
    #[JsonProperty('rawSubtypeCode')]
    public int $rawSubtypeCode;

    /**
     * @var ?string $rawSubtypeName
     */
    #[JsonProperty('rawSubtypeName')]
    public ?string $rawSubtypeName;

    /**
     * @param array{
     *   ref: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupportedRef,
     *   pageObjectNumber: int,
     *   index: int,
     *   identityQuality: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupportedIdentityQuality>,
     *   flags: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupportedFlags,
     *   rect: DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupportedRect,
     *   blendMode: value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupportedBlendMode>,
     *   rawSubtypeCode: int,
     *   nm?: ?string,
     *   contents?: ?string,
     *   subject?: ?string,
     *   author?: ?string,
     *   created?: ?DateTime,
     *   modified?: ?DateTime,
     *   inReplyTo?: ?DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupportedInReplyTo,
     *   replyType?: ?value-of<DocAnnotationsListAll200ResponsePagesItemAnnotationsItemUnsupportedReplyType>,
     *   userId?: ?string,
     *   groupId?: ?string,
     *   createdBy?: ?string,
     *   updatedBy?: ?string,
     *   actions?: ?PdfAnnotationActions,
     *   rawSubtypeName?: ?string,
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
        $this->rawSubtypeCode = $values['rawSubtypeCode'];
        $this->rawSubtypeName = $values['rawSubtypeName'] ?? null;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
