<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemRedactActionsPageVisibleWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
