<?php

namespace CloudPDF\Types;

enum ChangeItemSkippedOp: string
{
    case AnnotationsCreate = "annotations.create";
    case AnnotationsUpdate = "annotations.update";
    case AnnotationsDelete = "annotations.delete";
    case AnnotationsReorder = "annotations.reorder";
    case FormsSetValue = "forms.setValue";
    case FormsSetDisplay = "forms.setDisplay";
    case FormsSetAppearanceText = "forms.setAppearanceText";
    case FormsReset = "forms.reset";
    case FormsCreate = "forms.create";
    case FormsUpdate = "forms.update";
    case FormsDelete = "forms.delete";
    case FormsAddWidget = "forms.addWidget";
    case FormsRemoveWidget = "forms.removeWidget";
    case FormsDeleteWidget = "forms.deleteWidget";
    case FormsReorderCalculations = "forms.reorderCalculations";
    case FormsReorderWidgets = "forms.reorderWidgets";
    case FormsUpdateWidget = "forms.updateWidget";
    case FormsSetSignatureAppearance = "forms.setSignatureAppearance";
    case MetadataUpdate = "metadata.update";
    case MetadataUpdateCustom = "metadata.updateCustom";
    case AnnotationsRestore = "annotations.restore";
    case FormsRestore = "forms.restore";
}
