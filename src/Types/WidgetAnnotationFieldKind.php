<?php

namespace CloudPDF\Types;

enum WidgetAnnotationFieldKind: string
{
    case Text = "text";
    case Checkbox = "checkbox";
    case Radio = "radio";
    case Combobox = "combobox";
    case Listbox = "listbox";
    case Pushbutton = "pushbutton";
    case Signature = "signature";
    case Unknown = "unknown";
}
