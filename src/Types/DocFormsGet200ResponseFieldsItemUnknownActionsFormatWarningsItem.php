<?php

namespace Cloudpdf\Types;

enum DocFormsGet200ResponseFieldsItemUnknownActionsFormatWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
