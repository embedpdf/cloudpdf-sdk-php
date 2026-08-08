<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocHead200ResponsePermissions extends JsonSerializableType
{
    /**
     * @var bool $known
     */
    #[JsonProperty('known')]
    public bool $known;

    /**
     * @var ?int $bits
     */
    #[JsonProperty('bits')]
    public ?int $bits;

    /**
     * @var ?bool $allAllowed
     */
    #[JsonProperty('allAllowed')]
    public ?bool $allAllowed;

    /**
     * @var ?value-of<DocHead200ResponsePermissionsOpenedAs> $openedAs
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
     *   bits?: ?int,
     *   allAllowed?: ?bool,
     *   openedAs?: ?value-of<DocHead200ResponsePermissionsOpenedAs>,
     *   securityHandlerRevision?: ?int,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->known = $values['known'];
        $this->bits = $values['bits'] ?? null;
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
