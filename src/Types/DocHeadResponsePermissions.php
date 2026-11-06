<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocHeadResponsePermissions extends JsonSerializableType
{
    /**
     * @var bool $known
     */
    #[JsonProperty('known')]
    public bool $known;

    /**
     * @var ?PdfPermissionFlags $flags
     */
    #[JsonProperty('flags')]
    public ?PdfPermissionFlags $flags;

    /**
     * @var ?bool $allAllowed
     */
    #[JsonProperty('allAllowed')]
    public ?bool $allAllowed;

    /**
     * @var ?value-of<DocHeadResponsePermissionsOpenedAs> $openedAs
     */
    #[JsonProperty('openedAs')]
    public ?string $openedAs;

    /**
     * @var ?int $securityHandlerRevision
     */
    #[JsonProperty('securityHandlerRevision')]
    public ?int $securityHandlerRevision;

    /**
     * @var bool $canUpgradeToOwner
     */
    #[JsonProperty('canUpgradeToOwner')]
    public bool $canUpgradeToOwner;

    /**
     * @param array{
     *   known: bool,
     *   canUpgradeToOwner: bool,
     *   flags?: ?PdfPermissionFlags,
     *   allAllowed?: ?bool,
     *   openedAs?: ?value-of<DocHeadResponsePermissionsOpenedAs>,
     *   securityHandlerRevision?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->known = $values['known'];
        $this->flags = $values['flags'] ?? null;
        $this->allAllowed = $values['allAllowed'] ?? null;
        $this->openedAs = $values['openedAs'] ?? null;
        $this->securityHandlerRevision = $values['securityHandlerRevision'] ?? null;
        $this->canUpgradeToOwner = $values['canUpgradeToOwner'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
