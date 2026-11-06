<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;

class DocManifestResponseScopes extends JsonSerializableType
{
    /**
     * @var value-of<DocManifestResponseScopesContent> $content
     */
    #[JsonProperty('content')]
    public string $content;

    /**
     * @var value-of<DocManifestResponseScopesAnnotations> $annotations
     */
    #[JsonProperty('annotations')]
    public string $annotations;

    /**
     * @var value-of<DocManifestResponseScopesForms> $forms
     */
    #[JsonProperty('forms')]
    public string $forms;

    /**
     * @var value-of<DocManifestResponseScopesLayout> $layout
     */
    #[JsonProperty('layout')]
    public string $layout;

    /**
     * @var value-of<DocManifestResponseScopesAttachments> $attachments
     */
    #[JsonProperty('attachments')]
    public string $attachments;

    /**
     * @var value-of<DocManifestResponseScopesMetadata> $metadata
     */
    #[JsonProperty('metadata')]
    public string $metadata;

    /**
     * @var value-of<DocManifestResponseScopesActions> $actions
     */
    #[JsonProperty('actions')]
    public string $actions;

    /**
     * @var value-of<DocManifestResponseScopesOutline> $outline
     */
    #[JsonProperty('outline')]
    public string $outline;

    /**
     * @param array{
     *   content: value-of<DocManifestResponseScopesContent>,
     *   annotations: value-of<DocManifestResponseScopesAnnotations>,
     *   forms: value-of<DocManifestResponseScopesForms>,
     *   layout: value-of<DocManifestResponseScopesLayout>,
     *   attachments: value-of<DocManifestResponseScopesAttachments>,
     *   metadata: value-of<DocManifestResponseScopesMetadata>,
     *   actions: value-of<DocManifestResponseScopesActions>,
     *   outline: value-of<DocManifestResponseScopesOutline>,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->content = $values['content'];
        $this->annotations = $values['annotations'];
        $this->forms = $values['forms'];
        $this->layout = $values['layout'];
        $this->attachments = $values['attachments'];
        $this->metadata = $values['metadata'];
        $this->actions = $values['actions'];
        $this->outline = $values['outline'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
