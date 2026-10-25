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
    case OutlineCreate = "outline.create";
    case OutlineUpdate = "outline.update";
    case OutlineMove = "outline.move";
    case OutlineDelete = "outline.delete";
    case PagesRotate = "pages.rotate";
    case PagesReorder = "pages.reorder";
    case PagesDelete = "pages.delete";
    case PagesInsertBlank = "pages.insertBlank";
    case PagesInsert = "pages.insert";
    case AttachmentsCreate = "attachments.create";
    case AttachmentsDelete = "attachments.delete";
    case AnnotationsRestore = "annotations.restore";
    case FormsRestore = "forms.restore";
    case FormsRestoreWidget = "forms.restoreWidget";
    case OutlineRestore = "outline.restore";
    case PagesRestore = "pages.restore";
    case AttachmentsRestore = "attachments.restore";
}
