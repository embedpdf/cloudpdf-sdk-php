<?php

namespace Cloudpdf\Types;

enum DocFormsGet200ResponseFieldsItemTextActionsValidateWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
