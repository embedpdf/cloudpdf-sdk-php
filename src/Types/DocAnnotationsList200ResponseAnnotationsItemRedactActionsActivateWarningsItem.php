<?php

namespace Cloudpdf\Types;

enum DocAnnotationsList200ResponseAnnotationsItemRedactActionsActivateWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
