<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class ChangeItem extends JsonSerializableType
{
    /**
     * @var (
     *    'skipped'
     *   |'annotations.create'
     *   |'annotations.update'
     *   |'annotations.delete'
     *   |'annotations.reorder'
     *   |'annotations.restore'
     *   |'forms.setValue'
     *   |'forms.setDisplay'
     *   |'forms.setAppearanceText'
     *   |'forms.reset'
     *   |'forms.create'
     *   |'forms.update'
     *   |'forms.delete'
     *   |'forms.restore'
     *   |'forms.setSignatureAppearance'
     *   |'forms.addWidget'
     *   |'forms.removeWidget'
     *   |'forms.deleteWidget'
     *   |'forms.restoreWidget'
     *   |'forms.reorderWidgets'
     *   |'forms.reorderCalculations'
     *   |'forms.updateWidget'
     *   |'metadata.update'
     *   |'metadata.updateCustom'
     *   |'outline.create'
     *   |'outline.update'
     *   |'outline.move'
     *   |'outline.delete'
     *   |'outline.restore'
     *   |'pages.rotate'
     *   |'pages.reorder'
     *   |'pages.delete'
     *   |'pages.insertBlank'
     *   |'pages.insert'
     *   |'pages.restore'
     *   |'attachments.create'
     *   |'attachments.delete'
     *   |'attachments.restore'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    ChangeItemSkipped
     *   |ChangeItemAnnotationsCreate
     *   |ChangeItemAnnotationsUpdate
     *   |ChangeItemAnnotationsDelete
     *   |ChangeItemAnnotationsReorder
     *   |ChangeItemAnnotationsRestore
     *   |ChangeItemFormsSetValue
     *   |ChangeItemFormsSetDisplay
     *   |ChangeItemFormsSetAppearanceText
     *   |ChangeItemFormsReset
     *   |ChangeItemFormsCreate
     *   |ChangeItemFormsUpdate
     *   |ChangeItemFormsDelete
     *   |ChangeItemFormsRestore
     *   |ChangeItemFormsSetSignatureAppearance
     *   |ChangeItemFormsAddWidget
     *   |ChangeItemFormsRemoveWidget
     *   |ChangeItemFormsDeleteWidget
     *   |ChangeItemFormsRestoreWidget
     *   |ChangeItemFormsReorderWidgets
     *   |ChangeItemFormsReorderCalculations
     *   |ChangeItemFormsUpdateWidget
     *   |ChangeItemMetadataUpdate
     *   |ChangeItemMetadataUpdateCustom
     *   |ChangeItemOutlineCreate
     *   |ChangeItemOutlineUpdate
     *   |ChangeItemOutlineMove
     *   |ChangeItemOutlineDelete
     *   |ChangeItemOutlineRestore
     *   |ChangeItemPagesRotate
     *   |ChangeItemPagesReorder
     *   |ChangeItemPagesDelete
     *   |ChangeItemPagesInsertBlank
     *   |ChangeItemPagesInsert
     *   |ChangeItemPagesRestore
     *   |ChangeItemAttachmentsCreate
     *   |ChangeItemAttachmentsDelete
     *   |ChangeItemAttachmentsRestore
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'skipped'
     *   |'annotations.create'
     *   |'annotations.update'
     *   |'annotations.delete'
     *   |'annotations.reorder'
     *   |'annotations.restore'
     *   |'forms.setValue'
     *   |'forms.setDisplay'
     *   |'forms.setAppearanceText'
     *   |'forms.reset'
     *   |'forms.create'
     *   |'forms.update'
     *   |'forms.delete'
     *   |'forms.restore'
     *   |'forms.setSignatureAppearance'
     *   |'forms.addWidget'
     *   |'forms.removeWidget'
     *   |'forms.deleteWidget'
     *   |'forms.restoreWidget'
     *   |'forms.reorderWidgets'
     *   |'forms.reorderCalculations'
     *   |'forms.updateWidget'
     *   |'metadata.update'
     *   |'metadata.updateCustom'
     *   |'outline.create'
     *   |'outline.update'
     *   |'outline.move'
     *   |'outline.delete'
     *   |'outline.restore'
     *   |'pages.rotate'
     *   |'pages.reorder'
     *   |'pages.delete'
     *   |'pages.insertBlank'
     *   |'pages.insert'
     *   |'pages.restore'
     *   |'attachments.create'
     *   |'attachments.delete'
     *   |'attachments.restore'
     *   |'_unknown'
     * ),
     *   value: (
     *    ChangeItemSkipped
     *   |ChangeItemAnnotationsCreate
     *   |ChangeItemAnnotationsUpdate
     *   |ChangeItemAnnotationsDelete
     *   |ChangeItemAnnotationsReorder
     *   |ChangeItemAnnotationsRestore
     *   |ChangeItemFormsSetValue
     *   |ChangeItemFormsSetDisplay
     *   |ChangeItemFormsSetAppearanceText
     *   |ChangeItemFormsReset
     *   |ChangeItemFormsCreate
     *   |ChangeItemFormsUpdate
     *   |ChangeItemFormsDelete
     *   |ChangeItemFormsRestore
     *   |ChangeItemFormsSetSignatureAppearance
     *   |ChangeItemFormsAddWidget
     *   |ChangeItemFormsRemoveWidget
     *   |ChangeItemFormsDeleteWidget
     *   |ChangeItemFormsRestoreWidget
     *   |ChangeItemFormsReorderWidgets
     *   |ChangeItemFormsReorderCalculations
     *   |ChangeItemFormsUpdateWidget
     *   |ChangeItemMetadataUpdate
     *   |ChangeItemMetadataUpdateCustom
     *   |ChangeItemOutlineCreate
     *   |ChangeItemOutlineUpdate
     *   |ChangeItemOutlineMove
     *   |ChangeItemOutlineDelete
     *   |ChangeItemOutlineRestore
     *   |ChangeItemPagesRotate
     *   |ChangeItemPagesReorder
     *   |ChangeItemPagesDelete
     *   |ChangeItemPagesInsertBlank
     *   |ChangeItemPagesInsert
     *   |ChangeItemPagesRestore
     *   |ChangeItemAttachmentsCreate
     *   |ChangeItemAttachmentsDelete
     *   |ChangeItemAttachmentsRestore
     *   |mixed
     * ),
     * } $values
     */
    private function __construct(
        array $values,
    ) {
        $this->type = $values['type'];
        $this->value = $values['value'];
    }

    /**
     * @param ChangeItemSkipped $skipped
     * @return ChangeItem
     */
    public static function skipped(ChangeItemSkipped $skipped): ChangeItem
    {
        return new ChangeItem([
            'type' => 'skipped',
            'value' => $skipped,
        ]);
    }

    /**
     * @param ChangeItemAnnotationsCreate $annotationsCreate
     * @return ChangeItem
     */
    public static function annotationsCreate(ChangeItemAnnotationsCreate $annotationsCreate): ChangeItem
    {
        return new ChangeItem([
            'type' => 'annotations.create',
            'value' => $annotationsCreate,
        ]);
    }

    /**
     * @param ChangeItemAnnotationsUpdate $annotationsUpdate
     * @return ChangeItem
     */
    public static function annotationsUpdate(ChangeItemAnnotationsUpdate $annotationsUpdate): ChangeItem
    {
        return new ChangeItem([
            'type' => 'annotations.update',
            'value' => $annotationsUpdate,
        ]);
    }

    /**
     * @param ChangeItemAnnotationsDelete $annotationsDelete
     * @return ChangeItem
     */
    public static function annotationsDelete(ChangeItemAnnotationsDelete $annotationsDelete): ChangeItem
    {
        return new ChangeItem([
            'type' => 'annotations.delete',
            'value' => $annotationsDelete,
        ]);
    }

    /**
     * @param ChangeItemAnnotationsReorder $annotationsReorder
     * @return ChangeItem
     */
    public static function annotationsReorder(ChangeItemAnnotationsReorder $annotationsReorder): ChangeItem
    {
        return new ChangeItem([
            'type' => 'annotations.reorder',
            'value' => $annotationsReorder,
        ]);
    }

    /**
     * @param ChangeItemAnnotationsRestore $annotationsRestore
     * @return ChangeItem
     */
    public static function annotationsRestore(ChangeItemAnnotationsRestore $annotationsRestore): ChangeItem
    {
        return new ChangeItem([
            'type' => 'annotations.restore',
            'value' => $annotationsRestore,
        ]);
    }

    /**
     * @param ChangeItemFormsSetValue $formsSetValue
     * @return ChangeItem
     */
    public static function formsSetValue(ChangeItemFormsSetValue $formsSetValue): ChangeItem
    {
        return new ChangeItem([
            'type' => 'forms.setValue',
            'value' => $formsSetValue,
        ]);
    }

    /**
     * @param ChangeItemFormsSetDisplay $formsSetDisplay
     * @return ChangeItem
     */
    public static function formsSetDisplay(ChangeItemFormsSetDisplay $formsSetDisplay): ChangeItem
    {
        return new ChangeItem([
            'type' => 'forms.setDisplay',
            'value' => $formsSetDisplay,
        ]);
    }

    /**
     * @param ChangeItemFormsSetAppearanceText $formsSetAppearanceText
     * @return ChangeItem
     */
    public static function formsSetAppearanceText(ChangeItemFormsSetAppearanceText $formsSetAppearanceText): ChangeItem
    {
        return new ChangeItem([
            'type' => 'forms.setAppearanceText',
            'value' => $formsSetAppearanceText,
        ]);
    }

    /**
     * @param ChangeItemFormsReset $formsReset
     * @return ChangeItem
     */
    public static function formsReset(ChangeItemFormsReset $formsReset): ChangeItem
    {
        return new ChangeItem([
            'type' => 'forms.reset',
            'value' => $formsReset,
        ]);
    }

    /**
     * @param ChangeItemFormsCreate $formsCreate
     * @return ChangeItem
     */
    public static function formsCreate(ChangeItemFormsCreate $formsCreate): ChangeItem
    {
        return new ChangeItem([
            'type' => 'forms.create',
            'value' => $formsCreate,
        ]);
    }

    /**
     * @param ChangeItemFormsUpdate $formsUpdate
     * @return ChangeItem
     */
    public static function formsUpdate(ChangeItemFormsUpdate $formsUpdate): ChangeItem
    {
        return new ChangeItem([
            'type' => 'forms.update',
            'value' => $formsUpdate,
        ]);
    }

    /**
     * @param ChangeItemFormsDelete $formsDelete
     * @return ChangeItem
     */
    public static function formsDelete(ChangeItemFormsDelete $formsDelete): ChangeItem
    {
        return new ChangeItem([
            'type' => 'forms.delete',
            'value' => $formsDelete,
        ]);
    }

    /**
     * @param ChangeItemFormsRestore $formsRestore
     * @return ChangeItem
     */
    public static function formsRestore(ChangeItemFormsRestore $formsRestore): ChangeItem
    {
        return new ChangeItem([
            'type' => 'forms.restore',
            'value' => $formsRestore,
        ]);
    }

    /**
     * @param ChangeItemFormsSetSignatureAppearance $formsSetSignatureAppearance
     * @return ChangeItem
     */
    public static function formsSetSignatureAppearance(ChangeItemFormsSetSignatureAppearance $formsSetSignatureAppearance): ChangeItem
    {
        return new ChangeItem([
            'type' => 'forms.setSignatureAppearance',
            'value' => $formsSetSignatureAppearance,
        ]);
    }

    /**
     * @param ChangeItemFormsAddWidget $formsAddWidget
     * @return ChangeItem
     */
    public static function formsAddWidget(ChangeItemFormsAddWidget $formsAddWidget): ChangeItem
    {
        return new ChangeItem([
            'type' => 'forms.addWidget',
            'value' => $formsAddWidget,
        ]);
    }

    /**
     * @param ChangeItemFormsRemoveWidget $formsRemoveWidget
     * @return ChangeItem
     */
    public static function formsRemoveWidget(ChangeItemFormsRemoveWidget $formsRemoveWidget): ChangeItem
    {
        return new ChangeItem([
            'type' => 'forms.removeWidget',
            'value' => $formsRemoveWidget,
        ]);
    }

    /**
     * @param ChangeItemFormsDeleteWidget $formsDeleteWidget
     * @return ChangeItem
     */
    public static function formsDeleteWidget(ChangeItemFormsDeleteWidget $formsDeleteWidget): ChangeItem
    {
        return new ChangeItem([
            'type' => 'forms.deleteWidget',
            'value' => $formsDeleteWidget,
        ]);
    }

    /**
     * @param ChangeItemFormsRestoreWidget $formsRestoreWidget
     * @return ChangeItem
     */
    public static function formsRestoreWidget(ChangeItemFormsRestoreWidget $formsRestoreWidget): ChangeItem
    {
        return new ChangeItem([
            'type' => 'forms.restoreWidget',
            'value' => $formsRestoreWidget,
        ]);
    }

    /**
     * @param ChangeItemFormsReorderWidgets $formsReorderWidgets
     * @return ChangeItem
     */
    public static function formsReorderWidgets(ChangeItemFormsReorderWidgets $formsReorderWidgets): ChangeItem
    {
        return new ChangeItem([
            'type' => 'forms.reorderWidgets',
            'value' => $formsReorderWidgets,
        ]);
    }

    /**
     * @param ChangeItemFormsReorderCalculations $formsReorderCalculations
     * @return ChangeItem
     */
    public static function formsReorderCalculations(ChangeItemFormsReorderCalculations $formsReorderCalculations): ChangeItem
    {
        return new ChangeItem([
            'type' => 'forms.reorderCalculations',
            'value' => $formsReorderCalculations,
        ]);
    }

    /**
     * @param ChangeItemFormsUpdateWidget $formsUpdateWidget
     * @return ChangeItem
     */
    public static function formsUpdateWidget(ChangeItemFormsUpdateWidget $formsUpdateWidget): ChangeItem
    {
        return new ChangeItem([
            'type' => 'forms.updateWidget',
            'value' => $formsUpdateWidget,
        ]);
    }

    /**
     * @param ChangeItemMetadataUpdate $metadataUpdate
     * @return ChangeItem
     */
    public static function metadataUpdate(ChangeItemMetadataUpdate $metadataUpdate): ChangeItem
    {
        return new ChangeItem([
            'type' => 'metadata.update',
            'value' => $metadataUpdate,
        ]);
    }

    /**
     * @param ChangeItemMetadataUpdateCustom $metadataUpdateCustom
     * @return ChangeItem
     */
    public static function metadataUpdateCustom(ChangeItemMetadataUpdateCustom $metadataUpdateCustom): ChangeItem
    {
        return new ChangeItem([
            'type' => 'metadata.updateCustom',
            'value' => $metadataUpdateCustom,
        ]);
    }

    /**
     * @param ChangeItemOutlineCreate $outlineCreate
     * @return ChangeItem
     */
    public static function outlineCreate(ChangeItemOutlineCreate $outlineCreate): ChangeItem
    {
        return new ChangeItem([
            'type' => 'outline.create',
            'value' => $outlineCreate,
        ]);
    }

    /**
     * @param ChangeItemOutlineUpdate $outlineUpdate
     * @return ChangeItem
     */
    public static function outlineUpdate(ChangeItemOutlineUpdate $outlineUpdate): ChangeItem
    {
        return new ChangeItem([
            'type' => 'outline.update',
            'value' => $outlineUpdate,
        ]);
    }

    /**
     * @param ChangeItemOutlineMove $outlineMove
     * @return ChangeItem
     */
    public static function outlineMove(ChangeItemOutlineMove $outlineMove): ChangeItem
    {
        return new ChangeItem([
            'type' => 'outline.move',
            'value' => $outlineMove,
        ]);
    }

    /**
     * @param ChangeItemOutlineDelete $outlineDelete
     * @return ChangeItem
     */
    public static function outlineDelete(ChangeItemOutlineDelete $outlineDelete): ChangeItem
    {
        return new ChangeItem([
            'type' => 'outline.delete',
            'value' => $outlineDelete,
        ]);
    }

    /**
     * @param ChangeItemOutlineRestore $outlineRestore
     * @return ChangeItem
     */
    public static function outlineRestore(ChangeItemOutlineRestore $outlineRestore): ChangeItem
    {
        return new ChangeItem([
            'type' => 'outline.restore',
            'value' => $outlineRestore,
        ]);
    }

    /**
     * @param ChangeItemPagesRotate $pagesRotate
     * @return ChangeItem
     */
    public static function pagesRotate(ChangeItemPagesRotate $pagesRotate): ChangeItem
    {
        return new ChangeItem([
            'type' => 'pages.rotate',
            'value' => $pagesRotate,
        ]);
    }

    /**
     * @param ChangeItemPagesReorder $pagesReorder
     * @return ChangeItem
     */
    public static function pagesReorder(ChangeItemPagesReorder $pagesReorder): ChangeItem
    {
        return new ChangeItem([
            'type' => 'pages.reorder',
            'value' => $pagesReorder,
        ]);
    }

    /**
     * @param ChangeItemPagesDelete $pagesDelete
     * @return ChangeItem
     */
    public static function pagesDelete(ChangeItemPagesDelete $pagesDelete): ChangeItem
    {
        return new ChangeItem([
            'type' => 'pages.delete',
            'value' => $pagesDelete,
        ]);
    }

    /**
     * @param ChangeItemPagesInsertBlank $pagesInsertBlank
     * @return ChangeItem
     */
    public static function pagesInsertBlank(ChangeItemPagesInsertBlank $pagesInsertBlank): ChangeItem
    {
        return new ChangeItem([
            'type' => 'pages.insertBlank',
            'value' => $pagesInsertBlank,
        ]);
    }

    /**
     * @param ChangeItemPagesInsert $pagesInsert
     * @return ChangeItem
     */
    public static function pagesInsert(ChangeItemPagesInsert $pagesInsert): ChangeItem
    {
        return new ChangeItem([
            'type' => 'pages.insert',
            'value' => $pagesInsert,
        ]);
    }

    /**
     * @param ChangeItemPagesRestore $pagesRestore
     * @return ChangeItem
     */
    public static function pagesRestore(ChangeItemPagesRestore $pagesRestore): ChangeItem
    {
        return new ChangeItem([
            'type' => 'pages.restore',
            'value' => $pagesRestore,
        ]);
    }

    /**
     * @param ChangeItemAttachmentsCreate $attachmentsCreate
     * @return ChangeItem
     */
    public static function attachmentsCreate(ChangeItemAttachmentsCreate $attachmentsCreate): ChangeItem
    {
        return new ChangeItem([
            'type' => 'attachments.create',
            'value' => $attachmentsCreate,
        ]);
    }

    /**
     * @param ChangeItemAttachmentsDelete $attachmentsDelete
     * @return ChangeItem
     */
    public static function attachmentsDelete(ChangeItemAttachmentsDelete $attachmentsDelete): ChangeItem
    {
        return new ChangeItem([
            'type' => 'attachments.delete',
            'value' => $attachmentsDelete,
        ]);
    }

    /**
     * @param ChangeItemAttachmentsRestore $attachmentsRestore
     * @return ChangeItem
     */
    public static function attachmentsRestore(ChangeItemAttachmentsRestore $attachmentsRestore): ChangeItem
    {
        return new ChangeItem([
            'type' => 'attachments.restore',
            'value' => $attachmentsRestore,
        ]);
    }

    /**
     * @return bool
     */
    public function isSkipped(): bool
    {
        return $this->value instanceof ChangeItemSkipped && $this->type === 'skipped';
    }

    /**
     * @return ChangeItemSkipped
     */
    public function asSkipped(): ChangeItemSkipped
    {
        if (!($this->value instanceof ChangeItemSkipped && $this->type === 'skipped')) {
            throw new Exception(
                "Expected skipped; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAnnotationsCreate(): bool
    {
        return $this->value instanceof ChangeItemAnnotationsCreate && $this->type === 'annotations.create';
    }

    /**
     * @return ChangeItemAnnotationsCreate
     */
    public function asAnnotationsCreate(): ChangeItemAnnotationsCreate
    {
        if (!($this->value instanceof ChangeItemAnnotationsCreate && $this->type === 'annotations.create')) {
            throw new Exception(
                "Expected annotations.create; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAnnotationsUpdate(): bool
    {
        return $this->value instanceof ChangeItemAnnotationsUpdate && $this->type === 'annotations.update';
    }

    /**
     * @return ChangeItemAnnotationsUpdate
     */
    public function asAnnotationsUpdate(): ChangeItemAnnotationsUpdate
    {
        if (!($this->value instanceof ChangeItemAnnotationsUpdate && $this->type === 'annotations.update')) {
            throw new Exception(
                "Expected annotations.update; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAnnotationsDelete(): bool
    {
        return $this->value instanceof ChangeItemAnnotationsDelete && $this->type === 'annotations.delete';
    }

    /**
     * @return ChangeItemAnnotationsDelete
     */
    public function asAnnotationsDelete(): ChangeItemAnnotationsDelete
    {
        if (!($this->value instanceof ChangeItemAnnotationsDelete && $this->type === 'annotations.delete')) {
            throw new Exception(
                "Expected annotations.delete; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAnnotationsReorder(): bool
    {
        return $this->value instanceof ChangeItemAnnotationsReorder && $this->type === 'annotations.reorder';
    }

    /**
     * @return ChangeItemAnnotationsReorder
     */
    public function asAnnotationsReorder(): ChangeItemAnnotationsReorder
    {
        if (!($this->value instanceof ChangeItemAnnotationsReorder && $this->type === 'annotations.reorder')) {
            throw new Exception(
                "Expected annotations.reorder; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAnnotationsRestore(): bool
    {
        return $this->value instanceof ChangeItemAnnotationsRestore && $this->type === 'annotations.restore';
    }

    /**
     * @return ChangeItemAnnotationsRestore
     */
    public function asAnnotationsRestore(): ChangeItemAnnotationsRestore
    {
        if (!($this->value instanceof ChangeItemAnnotationsRestore && $this->type === 'annotations.restore')) {
            throw new Exception(
                "Expected annotations.restore; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsSetValue(): bool
    {
        return $this->value instanceof ChangeItemFormsSetValue && $this->type === 'forms.setValue';
    }

    /**
     * @return ChangeItemFormsSetValue
     */
    public function asFormsSetValue(): ChangeItemFormsSetValue
    {
        if (!($this->value instanceof ChangeItemFormsSetValue && $this->type === 'forms.setValue')) {
            throw new Exception(
                "Expected forms.setValue; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsSetDisplay(): bool
    {
        return $this->value instanceof ChangeItemFormsSetDisplay && $this->type === 'forms.setDisplay';
    }

    /**
     * @return ChangeItemFormsSetDisplay
     */
    public function asFormsSetDisplay(): ChangeItemFormsSetDisplay
    {
        if (!($this->value instanceof ChangeItemFormsSetDisplay && $this->type === 'forms.setDisplay')) {
            throw new Exception(
                "Expected forms.setDisplay; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsSetAppearanceText(): bool
    {
        return $this->value instanceof ChangeItemFormsSetAppearanceText && $this->type === 'forms.setAppearanceText';
    }

    /**
     * @return ChangeItemFormsSetAppearanceText
     */
    public function asFormsSetAppearanceText(): ChangeItemFormsSetAppearanceText
    {
        if (!($this->value instanceof ChangeItemFormsSetAppearanceText && $this->type === 'forms.setAppearanceText')) {
            throw new Exception(
                "Expected forms.setAppearanceText; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsReset(): bool
    {
        return $this->value instanceof ChangeItemFormsReset && $this->type === 'forms.reset';
    }

    /**
     * @return ChangeItemFormsReset
     */
    public function asFormsReset(): ChangeItemFormsReset
    {
        if (!($this->value instanceof ChangeItemFormsReset && $this->type === 'forms.reset')) {
            throw new Exception(
                "Expected forms.reset; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsCreate(): bool
    {
        return $this->value instanceof ChangeItemFormsCreate && $this->type === 'forms.create';
    }

    /**
     * @return ChangeItemFormsCreate
     */
    public function asFormsCreate(): ChangeItemFormsCreate
    {
        if (!($this->value instanceof ChangeItemFormsCreate && $this->type === 'forms.create')) {
            throw new Exception(
                "Expected forms.create; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsUpdate(): bool
    {
        return $this->value instanceof ChangeItemFormsUpdate && $this->type === 'forms.update';
    }

    /**
     * @return ChangeItemFormsUpdate
     */
    public function asFormsUpdate(): ChangeItemFormsUpdate
    {
        if (!($this->value instanceof ChangeItemFormsUpdate && $this->type === 'forms.update')) {
            throw new Exception(
                "Expected forms.update; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsDelete(): bool
    {
        return $this->value instanceof ChangeItemFormsDelete && $this->type === 'forms.delete';
    }

    /**
     * @return ChangeItemFormsDelete
     */
    public function asFormsDelete(): ChangeItemFormsDelete
    {
        if (!($this->value instanceof ChangeItemFormsDelete && $this->type === 'forms.delete')) {
            throw new Exception(
                "Expected forms.delete; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsRestore(): bool
    {
        return $this->value instanceof ChangeItemFormsRestore && $this->type === 'forms.restore';
    }

    /**
     * @return ChangeItemFormsRestore
     */
    public function asFormsRestore(): ChangeItemFormsRestore
    {
        if (!($this->value instanceof ChangeItemFormsRestore && $this->type === 'forms.restore')) {
            throw new Exception(
                "Expected forms.restore; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsSetSignatureAppearance(): bool
    {
        return $this->value instanceof ChangeItemFormsSetSignatureAppearance && $this->type === 'forms.setSignatureAppearance';
    }

    /**
     * @return ChangeItemFormsSetSignatureAppearance
     */
    public function asFormsSetSignatureAppearance(): ChangeItemFormsSetSignatureAppearance
    {
        if (!($this->value instanceof ChangeItemFormsSetSignatureAppearance && $this->type === 'forms.setSignatureAppearance')) {
            throw new Exception(
                "Expected forms.setSignatureAppearance; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsAddWidget(): bool
    {
        return $this->value instanceof ChangeItemFormsAddWidget && $this->type === 'forms.addWidget';
    }

    /**
     * @return ChangeItemFormsAddWidget
     */
    public function asFormsAddWidget(): ChangeItemFormsAddWidget
    {
        if (!($this->value instanceof ChangeItemFormsAddWidget && $this->type === 'forms.addWidget')) {
            throw new Exception(
                "Expected forms.addWidget; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsRemoveWidget(): bool
    {
        return $this->value instanceof ChangeItemFormsRemoveWidget && $this->type === 'forms.removeWidget';
    }

    /**
     * @return ChangeItemFormsRemoveWidget
     */
    public function asFormsRemoveWidget(): ChangeItemFormsRemoveWidget
    {
        if (!($this->value instanceof ChangeItemFormsRemoveWidget && $this->type === 'forms.removeWidget')) {
            throw new Exception(
                "Expected forms.removeWidget; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsDeleteWidget(): bool
    {
        return $this->value instanceof ChangeItemFormsDeleteWidget && $this->type === 'forms.deleteWidget';
    }

    /**
     * @return ChangeItemFormsDeleteWidget
     */
    public function asFormsDeleteWidget(): ChangeItemFormsDeleteWidget
    {
        if (!($this->value instanceof ChangeItemFormsDeleteWidget && $this->type === 'forms.deleteWidget')) {
            throw new Exception(
                "Expected forms.deleteWidget; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsRestoreWidget(): bool
    {
        return $this->value instanceof ChangeItemFormsRestoreWidget && $this->type === 'forms.restoreWidget';
    }

    /**
     * @return ChangeItemFormsRestoreWidget
     */
    public function asFormsRestoreWidget(): ChangeItemFormsRestoreWidget
    {
        if (!($this->value instanceof ChangeItemFormsRestoreWidget && $this->type === 'forms.restoreWidget')) {
            throw new Exception(
                "Expected forms.restoreWidget; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsReorderWidgets(): bool
    {
        return $this->value instanceof ChangeItemFormsReorderWidgets && $this->type === 'forms.reorderWidgets';
    }

    /**
     * @return ChangeItemFormsReorderWidgets
     */
    public function asFormsReorderWidgets(): ChangeItemFormsReorderWidgets
    {
        if (!($this->value instanceof ChangeItemFormsReorderWidgets && $this->type === 'forms.reorderWidgets')) {
            throw new Exception(
                "Expected forms.reorderWidgets; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsReorderCalculations(): bool
    {
        return $this->value instanceof ChangeItemFormsReorderCalculations && $this->type === 'forms.reorderCalculations';
    }

    /**
     * @return ChangeItemFormsReorderCalculations
     */
    public function asFormsReorderCalculations(): ChangeItemFormsReorderCalculations
    {
        if (!($this->value instanceof ChangeItemFormsReorderCalculations && $this->type === 'forms.reorderCalculations')) {
            throw new Exception(
                "Expected forms.reorderCalculations; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsUpdateWidget(): bool
    {
        return $this->value instanceof ChangeItemFormsUpdateWidget && $this->type === 'forms.updateWidget';
    }

    /**
     * @return ChangeItemFormsUpdateWidget
     */
    public function asFormsUpdateWidget(): ChangeItemFormsUpdateWidget
    {
        if (!($this->value instanceof ChangeItemFormsUpdateWidget && $this->type === 'forms.updateWidget')) {
            throw new Exception(
                "Expected forms.updateWidget; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isMetadataUpdate(): bool
    {
        return $this->value instanceof ChangeItemMetadataUpdate && $this->type === 'metadata.update';
    }

    /**
     * @return ChangeItemMetadataUpdate
     */
    public function asMetadataUpdate(): ChangeItemMetadataUpdate
    {
        if (!($this->value instanceof ChangeItemMetadataUpdate && $this->type === 'metadata.update')) {
            throw new Exception(
                "Expected metadata.update; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isMetadataUpdateCustom(): bool
    {
        return $this->value instanceof ChangeItemMetadataUpdateCustom && $this->type === 'metadata.updateCustom';
    }

    /**
     * @return ChangeItemMetadataUpdateCustom
     */
    public function asMetadataUpdateCustom(): ChangeItemMetadataUpdateCustom
    {
        if (!($this->value instanceof ChangeItemMetadataUpdateCustom && $this->type === 'metadata.updateCustom')) {
            throw new Exception(
                "Expected metadata.updateCustom; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOutlineCreate(): bool
    {
        return $this->value instanceof ChangeItemOutlineCreate && $this->type === 'outline.create';
    }

    /**
     * @return ChangeItemOutlineCreate
     */
    public function asOutlineCreate(): ChangeItemOutlineCreate
    {
        if (!($this->value instanceof ChangeItemOutlineCreate && $this->type === 'outline.create')) {
            throw new Exception(
                "Expected outline.create; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOutlineUpdate(): bool
    {
        return $this->value instanceof ChangeItemOutlineUpdate && $this->type === 'outline.update';
    }

    /**
     * @return ChangeItemOutlineUpdate
     */
    public function asOutlineUpdate(): ChangeItemOutlineUpdate
    {
        if (!($this->value instanceof ChangeItemOutlineUpdate && $this->type === 'outline.update')) {
            throw new Exception(
                "Expected outline.update; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOutlineMove(): bool
    {
        return $this->value instanceof ChangeItemOutlineMove && $this->type === 'outline.move';
    }

    /**
     * @return ChangeItemOutlineMove
     */
    public function asOutlineMove(): ChangeItemOutlineMove
    {
        if (!($this->value instanceof ChangeItemOutlineMove && $this->type === 'outline.move')) {
            throw new Exception(
                "Expected outline.move; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOutlineDelete(): bool
    {
        return $this->value instanceof ChangeItemOutlineDelete && $this->type === 'outline.delete';
    }

    /**
     * @return ChangeItemOutlineDelete
     */
    public function asOutlineDelete(): ChangeItemOutlineDelete
    {
        if (!($this->value instanceof ChangeItemOutlineDelete && $this->type === 'outline.delete')) {
            throw new Exception(
                "Expected outline.delete; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isOutlineRestore(): bool
    {
        return $this->value instanceof ChangeItemOutlineRestore && $this->type === 'outline.restore';
    }

    /**
     * @return ChangeItemOutlineRestore
     */
    public function asOutlineRestore(): ChangeItemOutlineRestore
    {
        if (!($this->value instanceof ChangeItemOutlineRestore && $this->type === 'outline.restore')) {
            throw new Exception(
                "Expected outline.restore; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isPagesRotate(): bool
    {
        return $this->value instanceof ChangeItemPagesRotate && $this->type === 'pages.rotate';
    }

    /**
     * @return ChangeItemPagesRotate
     */
    public function asPagesRotate(): ChangeItemPagesRotate
    {
        if (!($this->value instanceof ChangeItemPagesRotate && $this->type === 'pages.rotate')) {
            throw new Exception(
                "Expected pages.rotate; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isPagesReorder(): bool
    {
        return $this->value instanceof ChangeItemPagesReorder && $this->type === 'pages.reorder';
    }

    /**
     * @return ChangeItemPagesReorder
     */
    public function asPagesReorder(): ChangeItemPagesReorder
    {
        if (!($this->value instanceof ChangeItemPagesReorder && $this->type === 'pages.reorder')) {
            throw new Exception(
                "Expected pages.reorder; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isPagesDelete(): bool
    {
        return $this->value instanceof ChangeItemPagesDelete && $this->type === 'pages.delete';
    }

    /**
     * @return ChangeItemPagesDelete
     */
    public function asPagesDelete(): ChangeItemPagesDelete
    {
        if (!($this->value instanceof ChangeItemPagesDelete && $this->type === 'pages.delete')) {
            throw new Exception(
                "Expected pages.delete; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isPagesInsertBlank(): bool
    {
        return $this->value instanceof ChangeItemPagesInsertBlank && $this->type === 'pages.insertBlank';
    }

    /**
     * @return ChangeItemPagesInsertBlank
     */
    public function asPagesInsertBlank(): ChangeItemPagesInsertBlank
    {
        if (!($this->value instanceof ChangeItemPagesInsertBlank && $this->type === 'pages.insertBlank')) {
            throw new Exception(
                "Expected pages.insertBlank; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isPagesInsert(): bool
    {
        return $this->value instanceof ChangeItemPagesInsert && $this->type === 'pages.insert';
    }

    /**
     * @return ChangeItemPagesInsert
     */
    public function asPagesInsert(): ChangeItemPagesInsert
    {
        if (!($this->value instanceof ChangeItemPagesInsert && $this->type === 'pages.insert')) {
            throw new Exception(
                "Expected pages.insert; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isPagesRestore(): bool
    {
        return $this->value instanceof ChangeItemPagesRestore && $this->type === 'pages.restore';
    }

    /**
     * @return ChangeItemPagesRestore
     */
    public function asPagesRestore(): ChangeItemPagesRestore
    {
        if (!($this->value instanceof ChangeItemPagesRestore && $this->type === 'pages.restore')) {
            throw new Exception(
                "Expected pages.restore; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAttachmentsCreate(): bool
    {
        return $this->value instanceof ChangeItemAttachmentsCreate && $this->type === 'attachments.create';
    }

    /**
     * @return ChangeItemAttachmentsCreate
     */
    public function asAttachmentsCreate(): ChangeItemAttachmentsCreate
    {
        if (!($this->value instanceof ChangeItemAttachmentsCreate && $this->type === 'attachments.create')) {
            throw new Exception(
                "Expected attachments.create; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAttachmentsDelete(): bool
    {
        return $this->value instanceof ChangeItemAttachmentsDelete && $this->type === 'attachments.delete';
    }

    /**
     * @return ChangeItemAttachmentsDelete
     */
    public function asAttachmentsDelete(): ChangeItemAttachmentsDelete
    {
        if (!($this->value instanceof ChangeItemAttachmentsDelete && $this->type === 'attachments.delete')) {
            throw new Exception(
                "Expected attachments.delete; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isAttachmentsRestore(): bool
    {
        return $this->value instanceof ChangeItemAttachmentsRestore && $this->type === 'attachments.restore';
    }

    /**
     * @return ChangeItemAttachmentsRestore
     */
    public function asAttachmentsRestore(): ChangeItemAttachmentsRestore
    {
        if (!($this->value instanceof ChangeItemAttachmentsRestore && $this->type === 'attachments.restore')) {
            throw new Exception(
                "Expected attachments.restore; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->toJson();
    }

    /**
     * @return array<mixed>
     */
    public function jsonSerialize(): array
    {
        $result = [];
        $result['type'] = $this->type;

        $base = parent::jsonSerialize();
        $result = array_merge($base, $result);

        switch ($this->type) {
            case 'skipped':
                $value = $this->asSkipped()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'annotations.create':
                $value = $this->asAnnotationsCreate()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'annotations.update':
                $value = $this->asAnnotationsUpdate()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'annotations.delete':
                $value = $this->asAnnotationsDelete()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'annotations.reorder':
                $value = $this->asAnnotationsReorder()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'annotations.restore':
                $value = $this->asAnnotationsRestore()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.setValue':
                $value = $this->asFormsSetValue()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.setDisplay':
                $value = $this->asFormsSetDisplay()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.setAppearanceText':
                $value = $this->asFormsSetAppearanceText()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.reset':
                $value = $this->asFormsReset()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.create':
                $value = $this->asFormsCreate()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.update':
                $value = $this->asFormsUpdate()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.delete':
                $value = $this->asFormsDelete()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.restore':
                $value = $this->asFormsRestore()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.setSignatureAppearance':
                $value = $this->asFormsSetSignatureAppearance()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.addWidget':
                $value = $this->asFormsAddWidget()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.removeWidget':
                $value = $this->asFormsRemoveWidget()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.deleteWidget':
                $value = $this->asFormsDeleteWidget()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.restoreWidget':
                $value = $this->asFormsRestoreWidget()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.reorderWidgets':
                $value = $this->asFormsReorderWidgets()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.reorderCalculations':
                $value = $this->asFormsReorderCalculations()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.updateWidget':
                $value = $this->asFormsUpdateWidget()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'metadata.update':
                $value = $this->asMetadataUpdate()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'metadata.updateCustom':
                $value = $this->asMetadataUpdateCustom()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'outline.create':
                $value = $this->asOutlineCreate()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'outline.update':
                $value = $this->asOutlineUpdate()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'outline.move':
                $value = $this->asOutlineMove()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'outline.delete':
                $value = $this->asOutlineDelete()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'outline.restore':
                $value = $this->asOutlineRestore()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'pages.rotate':
                $value = $this->asPagesRotate()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'pages.reorder':
                $value = $this->asPagesReorder()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'pages.delete':
                $value = $this->asPagesDelete()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'pages.insertBlank':
                $value = $this->asPagesInsertBlank()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'pages.insert':
                $value = $this->asPagesInsert()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'pages.restore':
                $value = $this->asPagesRestore()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'attachments.create':
                $value = $this->asAttachmentsCreate()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'attachments.delete':
                $value = $this->asAttachmentsDelete()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'attachments.restore':
                $value = $this->asAttachmentsRestore()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case '_unknown':
            default:
                if (is_null($this->value)) {
                    break;
                }
                if ($this->value instanceof JsonSerializableType) {
                    $value = $this->value->jsonSerialize();
                    $result = array_merge($value, $result);
                } elseif (is_array($this->value)) {
                    $result = array_merge($this->value, $result);
                }
        }

        return $result;
    }

    /**
     * @param array<string, mixed> $data
     */
    public static function jsonDeserialize(array $data): static
    {
        $args = [];
        if (!array_key_exists('type', $data)) {
            throw new Exception(
                "JSON data is missing property 'type'",
            );
        }
        $type = $data['type'];
        if (!(is_string($type))) {
            throw new Exception(
                "Expected property 'type' in JSON data to be string, instead received " . get_debug_type($data['type']),
            );
        }

        $args['type'] = $type;
        switch ($type) {
            case 'skipped':
                $args['value'] = ChangeItemSkipped::jsonDeserialize($data);
                break;
            case 'annotations.create':
                $args['value'] = ChangeItemAnnotationsCreate::jsonDeserialize($data);
                break;
            case 'annotations.update':
                $args['value'] = ChangeItemAnnotationsUpdate::jsonDeserialize($data);
                break;
            case 'annotations.delete':
                $args['value'] = ChangeItemAnnotationsDelete::jsonDeserialize($data);
                break;
            case 'annotations.reorder':
                $args['value'] = ChangeItemAnnotationsReorder::jsonDeserialize($data);
                break;
            case 'annotations.restore':
                $args['value'] = ChangeItemAnnotationsRestore::jsonDeserialize($data);
                break;
            case 'forms.setValue':
                $args['value'] = ChangeItemFormsSetValue::jsonDeserialize($data);
                break;
            case 'forms.setDisplay':
                $args['value'] = ChangeItemFormsSetDisplay::jsonDeserialize($data);
                break;
            case 'forms.setAppearanceText':
                $args['value'] = ChangeItemFormsSetAppearanceText::jsonDeserialize($data);
                break;
            case 'forms.reset':
                $args['value'] = ChangeItemFormsReset::jsonDeserialize($data);
                break;
            case 'forms.create':
                $args['value'] = ChangeItemFormsCreate::jsonDeserialize($data);
                break;
            case 'forms.update':
                $args['value'] = ChangeItemFormsUpdate::jsonDeserialize($data);
                break;
            case 'forms.delete':
                $args['value'] = ChangeItemFormsDelete::jsonDeserialize($data);
                break;
            case 'forms.restore':
                $args['value'] = ChangeItemFormsRestore::jsonDeserialize($data);
                break;
            case 'forms.setSignatureAppearance':
                $args['value'] = ChangeItemFormsSetSignatureAppearance::jsonDeserialize($data);
                break;
            case 'forms.addWidget':
                $args['value'] = ChangeItemFormsAddWidget::jsonDeserialize($data);
                break;
            case 'forms.removeWidget':
                $args['value'] = ChangeItemFormsRemoveWidget::jsonDeserialize($data);
                break;
            case 'forms.deleteWidget':
                $args['value'] = ChangeItemFormsDeleteWidget::jsonDeserialize($data);
                break;
            case 'forms.restoreWidget':
                $args['value'] = ChangeItemFormsRestoreWidget::jsonDeserialize($data);
                break;
            case 'forms.reorderWidgets':
                $args['value'] = ChangeItemFormsReorderWidgets::jsonDeserialize($data);
                break;
            case 'forms.reorderCalculations':
                $args['value'] = ChangeItemFormsReorderCalculations::jsonDeserialize($data);
                break;
            case 'forms.updateWidget':
                $args['value'] = ChangeItemFormsUpdateWidget::jsonDeserialize($data);
                break;
            case 'metadata.update':
                $args['value'] = ChangeItemMetadataUpdate::jsonDeserialize($data);
                break;
            case 'metadata.updateCustom':
                $args['value'] = ChangeItemMetadataUpdateCustom::jsonDeserialize($data);
                break;
            case 'outline.create':
                $args['value'] = ChangeItemOutlineCreate::jsonDeserialize($data);
                break;
            case 'outline.update':
                $args['value'] = ChangeItemOutlineUpdate::jsonDeserialize($data);
                break;
            case 'outline.move':
                $args['value'] = ChangeItemOutlineMove::jsonDeserialize($data);
                break;
            case 'outline.delete':
                $args['value'] = ChangeItemOutlineDelete::jsonDeserialize($data);
                break;
            case 'outline.restore':
                $args['value'] = ChangeItemOutlineRestore::jsonDeserialize($data);
                break;
            case 'pages.rotate':
                $args['value'] = ChangeItemPagesRotate::jsonDeserialize($data);
                break;
            case 'pages.reorder':
                $args['value'] = ChangeItemPagesReorder::jsonDeserialize($data);
                break;
            case 'pages.delete':
                $args['value'] = ChangeItemPagesDelete::jsonDeserialize($data);
                break;
            case 'pages.insertBlank':
                $args['value'] = ChangeItemPagesInsertBlank::jsonDeserialize($data);
                break;
            case 'pages.insert':
                $args['value'] = ChangeItemPagesInsert::jsonDeserialize($data);
                break;
            case 'pages.restore':
                $args['value'] = ChangeItemPagesRestore::jsonDeserialize($data);
                break;
            case 'attachments.create':
                $args['value'] = ChangeItemAttachmentsCreate::jsonDeserialize($data);
                break;
            case 'attachments.delete':
                $args['value'] = ChangeItemAttachmentsDelete::jsonDeserialize($data);
                break;
            case 'attachments.restore':
                $args['value'] = ChangeItemAttachmentsRestore::jsonDeserialize($data);
                break;
            case '_unknown':
            default:
                $args['type'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
