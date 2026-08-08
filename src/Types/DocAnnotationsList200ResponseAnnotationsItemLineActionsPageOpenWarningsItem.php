<?php

namespace Cloudpdf\Types;

enum DocAnnotationsList200ResponseAnnotationsItemLineActionsPageOpenWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
