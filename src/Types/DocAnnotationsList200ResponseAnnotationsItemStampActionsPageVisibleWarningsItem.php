<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemStampActionsPageVisibleWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
