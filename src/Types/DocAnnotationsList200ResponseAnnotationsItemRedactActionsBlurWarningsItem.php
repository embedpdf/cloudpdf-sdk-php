<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemRedactActionsBlurWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
