<?php

namespace Cloudpdf\Types;

enum DocAnnotationsList200ResponseAnnotationsItemTextActionsBlurWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
