<?php

namespace Cloudpdf\Types;

enum DocFormsGet200ResponseFieldsItemCheckboxActionsFormatWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
