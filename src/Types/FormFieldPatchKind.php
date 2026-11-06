<?php

namespace CloudPDF\Types;

enum FormFieldPatchKind: string
{
    case Text = "text";
    case Checkbox = "checkbox";
    case Radio = "radio";
    case Combobox = "combobox";
    case Listbox = "listbox";
    case Pushbutton = "pushbutton";
    case Signature = "signature";
}
