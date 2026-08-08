<?php

namespace Cloudpdf\Types;

enum DocFormsGet200ResponseFieldsItemTextActionsFormatWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
