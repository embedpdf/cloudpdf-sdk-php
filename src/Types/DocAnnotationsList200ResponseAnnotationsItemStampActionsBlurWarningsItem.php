<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemStampActionsBlurWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
