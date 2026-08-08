<?php

namespace Cloudpdf\Types;

enum DocAnnotationsList200ResponseAnnotationsItemUnsupportedActionsPageInvisibleWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
