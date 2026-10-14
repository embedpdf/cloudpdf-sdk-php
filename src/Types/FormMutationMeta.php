<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use CloudPDF\Core\Json\JsonProperty;
use CloudPDF\Core\Types\ArrayType;

class FormMutationMeta extends JsonSerializableType
{
    /**
     * @var array<PageRef> $affectedPages
     */
    #[JsonProperty('affectedPages'), ArrayType([PageRef::class])]
    public array $affectedPages;

    /**
     * @var ?CacheDelta $cacheDelta
     */
    #[JsonProperty('cacheDelta')]
    public ?CacheDelta $cacheDelta;

    /**
     * @var string $opId
     */
    #[JsonProperty('opId')]
    public string $opId;

    /**
     * @var bool $undoable
     */
    #[JsonProperty('undoable')]
    public bool $undoable;

    /**
     * @var array<FormFieldRef> $changedFields
     */
    #[JsonProperty('changedFields'), ArrayType([FormFieldRef::class])]
    public array $changedFields;

    /**
     * @var array<FormWidget> $changedWidgets
     */
    #[JsonProperty('changedWidgets'), ArrayType([FormWidget::class])]
    public array $changedWidgets;

    /**
     * @var array<FormWidget> $redrawnWidgets
     */
    #[JsonProperty('redrawnWidgets'), ArrayType([FormWidget::class])]
    public array $redrawnWidgets;

    /**
     * @param array{
     *   affectedPages: array<PageRef>,
     *   opId: string,
     *   undoable: bool,
     *   changedFields: array<FormFieldRef>,
     *   changedWidgets: array<FormWidget>,
     *   redrawnWidgets: array<FormWidget>,
     *   cacheDelta?: ?CacheDelta,
     * } $values
     */
    public function __construct(
        array $values,
    ) {
        $this->affectedPages = $values['affectedPages'];
        $this->cacheDelta = $values['cacheDelta'] ?? null;
        $this->opId = $values['opId'];
        $this->undoable = $values['undoable'];
        $this->changedFields = $values['changedFields'];
        $this->changedWidgets = $values['changedWidgets'];
        $this->redrawnWidgets = $values['redrawnWidgets'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }
}
