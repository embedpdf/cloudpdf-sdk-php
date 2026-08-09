<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemSquigglyActionsPageVisibleWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
