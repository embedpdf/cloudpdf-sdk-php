<?php

namespace Cloudpdf\Types;

enum DocFormsGet200ResponseFieldsItemUnknownActionsValidateWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
