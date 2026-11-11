<?php

namespace CloudPDF\Types;

enum ChangeItemAnnotationsCopyDroppedItemReason: string
{
    case UnsupportedKind = "unsupported-kind";
    case Widget = "widget";
    case Geospatial = "geospatial";
    case UnknownMeasure = "unknown-measure";
    case UnsupportedAction = "unsupported-action";
    case UnsupportedValue = "unsupported-value";
    case NameConflict = "name-conflict";
    case ParentDropped = "parent-dropped";
    case ParentMissing = "parent-missing";
    case PopupTaken = "popup-taken";
}
