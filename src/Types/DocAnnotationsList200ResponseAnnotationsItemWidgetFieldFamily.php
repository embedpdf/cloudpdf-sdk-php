<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemWidgetFieldFamily: string
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
