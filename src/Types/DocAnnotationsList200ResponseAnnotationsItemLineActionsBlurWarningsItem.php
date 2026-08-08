<?php

namespace Cloudpdf\Types;

enum DocAnnotationsList200ResponseAnnotationsItemLineActionsBlurWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
