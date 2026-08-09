<?php

namespace CloudPDF\Types;

enum DocFormsGet200ResponseFieldsItemPushbuttonActionsValidateWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
