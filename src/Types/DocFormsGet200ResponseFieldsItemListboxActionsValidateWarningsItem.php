<?php

namespace Cloudpdf\Types;

enum DocFormsGet200ResponseFieldsItemListboxActionsValidateWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
