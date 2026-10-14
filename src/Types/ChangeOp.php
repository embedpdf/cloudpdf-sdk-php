<?php

namespace CloudPDF\Types;

use CloudPDF\Core\Json\JsonSerializableType;
use Exception;

class ChangeOp extends JsonSerializableType
{
    /**
     * @var (
     *    'annotations.create'
     *   |'annotations.update'
     *   |'annotations.delete'
     *   |'annotations.reorder'
     *   |'forms.setValue'
     *   |'forms.setDisplay'
     *   |'forms.setAppearanceText'
     *   |'forms.reset'
     *   |'forms.create'
     *   |'forms.update'
     *   |'forms.delete'
     *   |'forms.addWidget'
     *   |'forms.removeWidget'
     *   |'forms.deleteWidget'
     *   |'forms.reorderCalculations'
     *   |'forms.reorderWidgets'
     *   |'forms.updateWidget'
     *   |'forms.setSignatureAppearance'
     *   |'metadata.update'
     *   |'metadata.updateCustom'
     *   |'_unknown'
     * ) $type
     */
    public readonly string $type;

    /**
     * @var (
     *    ChangeOpAnnotationsCreate
     *   |ChangeOpAnnotationsUpdate
     *   |ChangeOpAnnotationsDelete
     *   |ChangeOpAnnotationsReorder
     *   |ChangeOpFormsSetValue
     *   |ChangeOpFormsSetDisplay
     *   |ChangeOpFormsSetAppearanceText
     *   |ChangeOpFormsReset
     *   |ChangeOpFormsCreate
     *   |ChangeOpFormsUpdate
     *   |ChangeOpFormsDelete
     *   |ChangeOpFormsAddWidget
     *   |ChangeOpFormsRemoveWidget
     *   |ChangeOpFormsDeleteWidget
     *   |ChangeOpFormsReorderCalculations
     *   |ChangeOpFormsReorderWidgets
     *   |ChangeOpFormsUpdateWidget
     *   |ChangeOpFormsSetSignatureAppearance
     *   |ChangeOpMetadataUpdate
     *   |ChangeOpMetadataUpdateCustom
     *   |mixed
     * ) $value
     */
    public readonly mixed $value;

    /**
     * @param array{
     *   type: (
     *    'annotations.create'
     *   |'annotations.update'
     *   |'annotations.delete'
     *   |'annotations.reorder'
     *   |'forms.setValue'
     *   |'forms.setDisplay'
     *   |'forms.setAppearanceText'
     *   |'forms.reset'
     *   |'forms.create'
     *   |'forms.update'
     *   |'forms.delete'
     *   |'forms.addWidget'
     *   |'forms.removeWidget'
     *   |'forms.deleteWidget'
     *   |'forms.reorderCalculations'
     *   |'forms.reorderWidgets'
     *   |'forms.updateWidget'
     *   |'forms.setSignatureAppearance'
     *   |'metadata.update'
     *   |'metadata.updateCustom'
     *   |'_unknown'
     * ),
     *   value: (
     *    ChangeOpAnnotationsCreate
     *   |ChangeOpAnnotationsUpdate
     *   |ChangeOpAnnotationsDelete
     *   |ChangeOpAnnotationsReorder
     *   |ChangeOpFormsSetValue
     *   |ChangeOpFormsSetDisplay
     *   |ChangeOpFormsSetAppearanceText
     *   |ChangeOpFormsReset
     *   |ChangeOpFormsCreate
     *   |ChangeOpFormsUpdate
     *   |ChangeOpFormsDelete
     *   |ChangeOpFormsAddWidget
     *   |ChangeOpFormsRemoveWidget
     *   |ChangeOpFormsDeleteWidget
     *   |ChangeOpFormsReorderCalculations
     *   |ChangeOpFormsReorderWidgets
     *   |ChangeOpFormsUpdateWidget
     *   |ChangeOpFormsSetSignatureAppearance
     *   |ChangeOpMetadataUpdate
     *   |ChangeOpMetadataUpdateCustom
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
     * @param ChangeOpAnnotationsCreate $annotationsCreate
     * @return ChangeOp
     */
    public static function annotationsCreate(ChangeOpAnnotationsCreate $annotationsCreate): ChangeOp
    {
        return new ChangeOp([
            'type' => 'annotations.create',
            'value' => $annotationsCreate,
        ]);
    }

    /**
     * @param ChangeOpAnnotationsUpdate $annotationsUpdate
     * @return ChangeOp
     */
    public static function annotationsUpdate(ChangeOpAnnotationsUpdate $annotationsUpdate): ChangeOp
    {
        return new ChangeOp([
            'type' => 'annotations.update',
            'value' => $annotationsUpdate,
        ]);
    }

    /**
     * @param ChangeOpAnnotationsDelete $annotationsDelete
     * @return ChangeOp
     */
    public static function annotationsDelete(ChangeOpAnnotationsDelete $annotationsDelete): ChangeOp
    {
        return new ChangeOp([
            'type' => 'annotations.delete',
            'value' => $annotationsDelete,
        ]);
    }

    /**
     * @param ChangeOpAnnotationsReorder $annotationsReorder
     * @return ChangeOp
     */
    public static function annotationsReorder(ChangeOpAnnotationsReorder $annotationsReorder): ChangeOp
    {
        return new ChangeOp([
            'type' => 'annotations.reorder',
            'value' => $annotationsReorder,
        ]);
    }

    /**
     * @param ChangeOpFormsSetValue $formsSetValue
     * @return ChangeOp
     */
    public static function formsSetValue(ChangeOpFormsSetValue $formsSetValue): ChangeOp
    {
        return new ChangeOp([
            'type' => 'forms.setValue',
            'value' => $formsSetValue,
        ]);
    }

    /**
     * @param ChangeOpFormsSetDisplay $formsSetDisplay
     * @return ChangeOp
     */
    public static function formsSetDisplay(ChangeOpFormsSetDisplay $formsSetDisplay): ChangeOp
    {
        return new ChangeOp([
            'type' => 'forms.setDisplay',
            'value' => $formsSetDisplay,
        ]);
    }

    /**
     * @param ChangeOpFormsSetAppearanceText $formsSetAppearanceText
     * @return ChangeOp
     */
    public static function formsSetAppearanceText(ChangeOpFormsSetAppearanceText $formsSetAppearanceText): ChangeOp
    {
        return new ChangeOp([
            'type' => 'forms.setAppearanceText',
            'value' => $formsSetAppearanceText,
        ]);
    }

    /**
     * @param ChangeOpFormsReset $formsReset
     * @return ChangeOp
     */
    public static function formsReset(ChangeOpFormsReset $formsReset): ChangeOp
    {
        return new ChangeOp([
            'type' => 'forms.reset',
            'value' => $formsReset,
        ]);
    }

    /**
     * @param ChangeOpFormsCreate $formsCreate
     * @return ChangeOp
     */
    public static function formsCreate(ChangeOpFormsCreate $formsCreate): ChangeOp
    {
        return new ChangeOp([
            'type' => 'forms.create',
            'value' => $formsCreate,
        ]);
    }

    /**
     * @param ChangeOpFormsUpdate $formsUpdate
     * @return ChangeOp
     */
    public static function formsUpdate(ChangeOpFormsUpdate $formsUpdate): ChangeOp
    {
        return new ChangeOp([
            'type' => 'forms.update',
            'value' => $formsUpdate,
        ]);
    }

    /**
     * @param ChangeOpFormsDelete $formsDelete
     * @return ChangeOp
     */
    public static function formsDelete(ChangeOpFormsDelete $formsDelete): ChangeOp
    {
        return new ChangeOp([
            'type' => 'forms.delete',
            'value' => $formsDelete,
        ]);
    }

    /**
     * @param ChangeOpFormsAddWidget $formsAddWidget
     * @return ChangeOp
     */
    public static function formsAddWidget(ChangeOpFormsAddWidget $formsAddWidget): ChangeOp
    {
        return new ChangeOp([
            'type' => 'forms.addWidget',
            'value' => $formsAddWidget,
        ]);
    }

    /**
     * @param ChangeOpFormsRemoveWidget $formsRemoveWidget
     * @return ChangeOp
     */
    public static function formsRemoveWidget(ChangeOpFormsRemoveWidget $formsRemoveWidget): ChangeOp
    {
        return new ChangeOp([
            'type' => 'forms.removeWidget',
            'value' => $formsRemoveWidget,
        ]);
    }

    /**
     * @param ChangeOpFormsDeleteWidget $formsDeleteWidget
     * @return ChangeOp
     */
    public static function formsDeleteWidget(ChangeOpFormsDeleteWidget $formsDeleteWidget): ChangeOp
    {
        return new ChangeOp([
            'type' => 'forms.deleteWidget',
            'value' => $formsDeleteWidget,
        ]);
    }

    /**
     * @param ChangeOpFormsReorderCalculations $formsReorderCalculations
     * @return ChangeOp
     */
    public static function formsReorderCalculations(ChangeOpFormsReorderCalculations $formsReorderCalculations): ChangeOp
    {
        return new ChangeOp([
            'type' => 'forms.reorderCalculations',
            'value' => $formsReorderCalculations,
        ]);
    }

    /**
     * @param ChangeOpFormsReorderWidgets $formsReorderWidgets
     * @return ChangeOp
     */
    public static function formsReorderWidgets(ChangeOpFormsReorderWidgets $formsReorderWidgets): ChangeOp
    {
        return new ChangeOp([
            'type' => 'forms.reorderWidgets',
            'value' => $formsReorderWidgets,
        ]);
    }

    /**
     * @param ChangeOpFormsUpdateWidget $formsUpdateWidget
     * @return ChangeOp
     */
    public static function formsUpdateWidget(ChangeOpFormsUpdateWidget $formsUpdateWidget): ChangeOp
    {
        return new ChangeOp([
            'type' => 'forms.updateWidget',
            'value' => $formsUpdateWidget,
        ]);
    }

    /**
     * @param ChangeOpFormsSetSignatureAppearance $formsSetSignatureAppearance
     * @return ChangeOp
     */
    public static function formsSetSignatureAppearance(ChangeOpFormsSetSignatureAppearance $formsSetSignatureAppearance): ChangeOp
    {
        return new ChangeOp([
            'type' => 'forms.setSignatureAppearance',
            'value' => $formsSetSignatureAppearance,
        ]);
    }

    /**
     * @param ChangeOpMetadataUpdate $metadataUpdate
     * @return ChangeOp
     */
    public static function metadataUpdate(ChangeOpMetadataUpdate $metadataUpdate): ChangeOp
    {
        return new ChangeOp([
            'type' => 'metadata.update',
            'value' => $metadataUpdate,
        ]);
    }

    /**
     * @param ChangeOpMetadataUpdateCustom $metadataUpdateCustom
     * @return ChangeOp
     */
    public static function metadataUpdateCustom(ChangeOpMetadataUpdateCustom $metadataUpdateCustom): ChangeOp
    {
        return new ChangeOp([
            'type' => 'metadata.updateCustom',
            'value' => $metadataUpdateCustom,
        ]);
    }

    /**
     * @return bool
     */
    public function isAnnotationsCreate(): bool
    {
        return $this->value instanceof ChangeOpAnnotationsCreate && $this->type === 'annotations.create';
    }

    /**
     * @return ChangeOpAnnotationsCreate
     */
    public function asAnnotationsCreate(): ChangeOpAnnotationsCreate
    {
        if (!($this->value instanceof ChangeOpAnnotationsCreate && $this->type === 'annotations.create')) {
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
        return $this->value instanceof ChangeOpAnnotationsUpdate && $this->type === 'annotations.update';
    }

    /**
     * @return ChangeOpAnnotationsUpdate
     */
    public function asAnnotationsUpdate(): ChangeOpAnnotationsUpdate
    {
        if (!($this->value instanceof ChangeOpAnnotationsUpdate && $this->type === 'annotations.update')) {
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
        return $this->value instanceof ChangeOpAnnotationsDelete && $this->type === 'annotations.delete';
    }

    /**
     * @return ChangeOpAnnotationsDelete
     */
    public function asAnnotationsDelete(): ChangeOpAnnotationsDelete
    {
        if (!($this->value instanceof ChangeOpAnnotationsDelete && $this->type === 'annotations.delete')) {
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
        return $this->value instanceof ChangeOpAnnotationsReorder && $this->type === 'annotations.reorder';
    }

    /**
     * @return ChangeOpAnnotationsReorder
     */
    public function asAnnotationsReorder(): ChangeOpAnnotationsReorder
    {
        if (!($this->value instanceof ChangeOpAnnotationsReorder && $this->type === 'annotations.reorder')) {
            throw new Exception(
                "Expected annotations.reorder; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsSetValue(): bool
    {
        return $this->value instanceof ChangeOpFormsSetValue && $this->type === 'forms.setValue';
    }

    /**
     * @return ChangeOpFormsSetValue
     */
    public function asFormsSetValue(): ChangeOpFormsSetValue
    {
        if (!($this->value instanceof ChangeOpFormsSetValue && $this->type === 'forms.setValue')) {
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
        return $this->value instanceof ChangeOpFormsSetDisplay && $this->type === 'forms.setDisplay';
    }

    /**
     * @return ChangeOpFormsSetDisplay
     */
    public function asFormsSetDisplay(): ChangeOpFormsSetDisplay
    {
        if (!($this->value instanceof ChangeOpFormsSetDisplay && $this->type === 'forms.setDisplay')) {
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
        return $this->value instanceof ChangeOpFormsSetAppearanceText && $this->type === 'forms.setAppearanceText';
    }

    /**
     * @return ChangeOpFormsSetAppearanceText
     */
    public function asFormsSetAppearanceText(): ChangeOpFormsSetAppearanceText
    {
        if (!($this->value instanceof ChangeOpFormsSetAppearanceText && $this->type === 'forms.setAppearanceText')) {
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
        return $this->value instanceof ChangeOpFormsReset && $this->type === 'forms.reset';
    }

    /**
     * @return ChangeOpFormsReset
     */
    public function asFormsReset(): ChangeOpFormsReset
    {
        if (!($this->value instanceof ChangeOpFormsReset && $this->type === 'forms.reset')) {
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
        return $this->value instanceof ChangeOpFormsCreate && $this->type === 'forms.create';
    }

    /**
     * @return ChangeOpFormsCreate
     */
    public function asFormsCreate(): ChangeOpFormsCreate
    {
        if (!($this->value instanceof ChangeOpFormsCreate && $this->type === 'forms.create')) {
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
        return $this->value instanceof ChangeOpFormsUpdate && $this->type === 'forms.update';
    }

    /**
     * @return ChangeOpFormsUpdate
     */
    public function asFormsUpdate(): ChangeOpFormsUpdate
    {
        if (!($this->value instanceof ChangeOpFormsUpdate && $this->type === 'forms.update')) {
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
        return $this->value instanceof ChangeOpFormsDelete && $this->type === 'forms.delete';
    }

    /**
     * @return ChangeOpFormsDelete
     */
    public function asFormsDelete(): ChangeOpFormsDelete
    {
        if (!($this->value instanceof ChangeOpFormsDelete && $this->type === 'forms.delete')) {
            throw new Exception(
                "Expected forms.delete; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsAddWidget(): bool
    {
        return $this->value instanceof ChangeOpFormsAddWidget && $this->type === 'forms.addWidget';
    }

    /**
     * @return ChangeOpFormsAddWidget
     */
    public function asFormsAddWidget(): ChangeOpFormsAddWidget
    {
        if (!($this->value instanceof ChangeOpFormsAddWidget && $this->type === 'forms.addWidget')) {
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
        return $this->value instanceof ChangeOpFormsRemoveWidget && $this->type === 'forms.removeWidget';
    }

    /**
     * @return ChangeOpFormsRemoveWidget
     */
    public function asFormsRemoveWidget(): ChangeOpFormsRemoveWidget
    {
        if (!($this->value instanceof ChangeOpFormsRemoveWidget && $this->type === 'forms.removeWidget')) {
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
        return $this->value instanceof ChangeOpFormsDeleteWidget && $this->type === 'forms.deleteWidget';
    }

    /**
     * @return ChangeOpFormsDeleteWidget
     */
    public function asFormsDeleteWidget(): ChangeOpFormsDeleteWidget
    {
        if (!($this->value instanceof ChangeOpFormsDeleteWidget && $this->type === 'forms.deleteWidget')) {
            throw new Exception(
                "Expected forms.deleteWidget; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsReorderCalculations(): bool
    {
        return $this->value instanceof ChangeOpFormsReorderCalculations && $this->type === 'forms.reorderCalculations';
    }

    /**
     * @return ChangeOpFormsReorderCalculations
     */
    public function asFormsReorderCalculations(): ChangeOpFormsReorderCalculations
    {
        if (!($this->value instanceof ChangeOpFormsReorderCalculations && $this->type === 'forms.reorderCalculations')) {
            throw new Exception(
                "Expected forms.reorderCalculations; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsReorderWidgets(): bool
    {
        return $this->value instanceof ChangeOpFormsReorderWidgets && $this->type === 'forms.reorderWidgets';
    }

    /**
     * @return ChangeOpFormsReorderWidgets
     */
    public function asFormsReorderWidgets(): ChangeOpFormsReorderWidgets
    {
        if (!($this->value instanceof ChangeOpFormsReorderWidgets && $this->type === 'forms.reorderWidgets')) {
            throw new Exception(
                "Expected forms.reorderWidgets; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsUpdateWidget(): bool
    {
        return $this->value instanceof ChangeOpFormsUpdateWidget && $this->type === 'forms.updateWidget';
    }

    /**
     * @return ChangeOpFormsUpdateWidget
     */
    public function asFormsUpdateWidget(): ChangeOpFormsUpdateWidget
    {
        if (!($this->value instanceof ChangeOpFormsUpdateWidget && $this->type === 'forms.updateWidget')) {
            throw new Exception(
                "Expected forms.updateWidget; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isFormsSetSignatureAppearance(): bool
    {
        return $this->value instanceof ChangeOpFormsSetSignatureAppearance && $this->type === 'forms.setSignatureAppearance';
    }

    /**
     * @return ChangeOpFormsSetSignatureAppearance
     */
    public function asFormsSetSignatureAppearance(): ChangeOpFormsSetSignatureAppearance
    {
        if (!($this->value instanceof ChangeOpFormsSetSignatureAppearance && $this->type === 'forms.setSignatureAppearance')) {
            throw new Exception(
                "Expected forms.setSignatureAppearance; got " . $this->type . " with value of type " . get_debug_type($this->value),
            );
        }

        return $this->value;
    }

    /**
     * @return bool
     */
    public function isMetadataUpdate(): bool
    {
        return $this->value instanceof ChangeOpMetadataUpdate && $this->type === 'metadata.update';
    }

    /**
     * @return ChangeOpMetadataUpdate
     */
    public function asMetadataUpdate(): ChangeOpMetadataUpdate
    {
        if (!($this->value instanceof ChangeOpMetadataUpdate && $this->type === 'metadata.update')) {
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
        return $this->value instanceof ChangeOpMetadataUpdateCustom && $this->type === 'metadata.updateCustom';
    }

    /**
     * @return ChangeOpMetadataUpdateCustom
     */
    public function asMetadataUpdateCustom(): ChangeOpMetadataUpdateCustom
    {
        if (!($this->value instanceof ChangeOpMetadataUpdateCustom && $this->type === 'metadata.updateCustom')) {
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
            case 'forms.reorderCalculations':
                $value = $this->asFormsReorderCalculations()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.reorderWidgets':
                $value = $this->asFormsReorderWidgets()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.updateWidget':
                $value = $this->asFormsUpdateWidget()->jsonSerialize();
                $result = array_merge($value, $result);
                break;
            case 'forms.setSignatureAppearance':
                $value = $this->asFormsSetSignatureAppearance()->jsonSerialize();
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
            case 'annotations.create':
                $args['value'] = ChangeOpAnnotationsCreate::jsonDeserialize($data);
                break;
            case 'annotations.update':
                $args['value'] = ChangeOpAnnotationsUpdate::jsonDeserialize($data);
                break;
            case 'annotations.delete':
                $args['value'] = ChangeOpAnnotationsDelete::jsonDeserialize($data);
                break;
            case 'annotations.reorder':
                $args['value'] = ChangeOpAnnotationsReorder::jsonDeserialize($data);
                break;
            case 'forms.setValue':
                $args['value'] = ChangeOpFormsSetValue::jsonDeserialize($data);
                break;
            case 'forms.setDisplay':
                $args['value'] = ChangeOpFormsSetDisplay::jsonDeserialize($data);
                break;
            case 'forms.setAppearanceText':
                $args['value'] = ChangeOpFormsSetAppearanceText::jsonDeserialize($data);
                break;
            case 'forms.reset':
                $args['value'] = ChangeOpFormsReset::jsonDeserialize($data);
                break;
            case 'forms.create':
                $args['value'] = ChangeOpFormsCreate::jsonDeserialize($data);
                break;
            case 'forms.update':
                $args['value'] = ChangeOpFormsUpdate::jsonDeserialize($data);
                break;
            case 'forms.delete':
                $args['value'] = ChangeOpFormsDelete::jsonDeserialize($data);
                break;
            case 'forms.addWidget':
                $args['value'] = ChangeOpFormsAddWidget::jsonDeserialize($data);
                break;
            case 'forms.removeWidget':
                $args['value'] = ChangeOpFormsRemoveWidget::jsonDeserialize($data);
                break;
            case 'forms.deleteWidget':
                $args['value'] = ChangeOpFormsDeleteWidget::jsonDeserialize($data);
                break;
            case 'forms.reorderCalculations':
                $args['value'] = ChangeOpFormsReorderCalculations::jsonDeserialize($data);
                break;
            case 'forms.reorderWidgets':
                $args['value'] = ChangeOpFormsReorderWidgets::jsonDeserialize($data);
                break;
            case 'forms.updateWidget':
                $args['value'] = ChangeOpFormsUpdateWidget::jsonDeserialize($data);
                break;
            case 'forms.setSignatureAppearance':
                $args['value'] = ChangeOpFormsSetSignatureAppearance::jsonDeserialize($data);
                break;
            case 'metadata.update':
                $args['value'] = ChangeOpMetadataUpdate::jsonDeserialize($data);
                break;
            case 'metadata.updateCustom':
                $args['value'] = ChangeOpMetadataUpdateCustom::jsonDeserialize($data);
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
