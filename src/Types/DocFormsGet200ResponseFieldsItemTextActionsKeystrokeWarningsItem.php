<?php

namespace CloudPDF\Types;

enum DocFormsGet200ResponseFieldsItemTextActionsKeystrokeWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
