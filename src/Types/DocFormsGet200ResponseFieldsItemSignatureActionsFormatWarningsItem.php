<?php

namespace CloudPDF\Types;

enum DocFormsGet200ResponseFieldsItemSignatureActionsFormatWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
