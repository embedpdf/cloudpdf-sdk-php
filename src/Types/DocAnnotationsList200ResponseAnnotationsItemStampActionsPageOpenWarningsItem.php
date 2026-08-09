<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemStampActionsPageOpenWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
