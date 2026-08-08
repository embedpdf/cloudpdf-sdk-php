<?php

namespace Cloudpdf\Types;

use Cloudpdf\Core\Json\JsonSerializableType;
use Cloudpdf\Core\Json\JsonProperty;

class DocManifest200ResponseScopes extends JsonSerializableType
{
    /**
     * @var value-of<DocManifest200ResponseScopesContent> $content
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @var value-of<DocManifest200ResponseScopesAnnotations> $annotations
     */
    #[JsonProperty('annotations')]
    public string $annotations;

    /**
     * @var value-of<DocManifest200ResponseScopesLayout> $layout
     */
    #[JsonProperty('layout')]
    public string $layout;

    /**
     * @var value-of<DocManifest200ResponseScopesAttachments> $attachments
     */
    #[JsonProperty('attachments')]
    public string $attachments;

    /**
     * @var value-of<DocManifest200ResponseScopesMetadata> $metadata
     */
    #[JsonProperty('metadata')]
    public string $metadata;

    /**
     * @var value-of<DocManifest200ResponseScopesActions> $actions
     */
    #[JsonProperty('actions')]
    public string $actions;

    /**
     * @param array{
     *   content: value-of<DocManifest200ResponseScopesContent>,
     *   annotations: value-of<DocManifest200ResponseScopesAnnotations>,
     *   layout: value-of<DocManifest200ResponseScopesLayout>,
     *   attachments: value-of<DocManifest200ResponseScopesAttachments>,
     *   metadata: value-of<DocManifest200ResponseScopesMetadata>,
     *   actions: value-of<DocManifest200ResponseScopesActions>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->content = $values['content'];
        $this->annotations = $values['annotations'];
        $this->layout = $values['layout'];
        $this->attachments = $values['attachments'];
        $this->metadata = $values['metadata'];
        $this->actions = $values['actions'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
