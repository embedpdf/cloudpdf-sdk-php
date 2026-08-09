<?php

namespace CloudPDF\Types;

enum DocFormsGet200ResponseFieldsItemRadioActionsFormatWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
