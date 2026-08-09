<?php

namespace CloudPDF\Types;

enum DocFormsGet200ResponseFieldsItemComboboxActionsValidateWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
