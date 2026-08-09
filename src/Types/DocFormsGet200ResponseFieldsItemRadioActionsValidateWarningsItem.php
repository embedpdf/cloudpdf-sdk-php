<?php

namespace CloudPDF\Types;

enum DocFormsGet200ResponseFieldsItemRadioActionsValidateWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
