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
            case '_unknown':
            default:
                $args['type'] = '_unknown';
                $args['value'] = $data;
        }

        // @phpstan-ignore-next-line
        return new static($args);
    }
}
