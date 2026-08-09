<?php

namespace CloudPDF\Types;

enum DocFormsGet200ResponseFieldsItemSignatureActionsCalculateWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
