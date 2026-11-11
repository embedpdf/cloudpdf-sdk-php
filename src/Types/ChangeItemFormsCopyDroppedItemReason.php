<?php

namespace CloudPDF\Types;

enum ChangeItemFormsCopyDroppedItemReason: string
{
    case NameConflict = "name-conflict";
    case NoField = "no-field";
    case UnsupportedKind = "unsupported-kind";
    case ScriptNotAllowed = "script-not-allowed";
    case UnsupportedAction = "unsupported-action";
}
