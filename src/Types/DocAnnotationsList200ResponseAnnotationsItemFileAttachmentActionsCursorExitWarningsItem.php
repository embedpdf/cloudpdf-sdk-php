<?php

namespace Cloudpdf\Types;

enum DocAnnotationsList200ResponseAnnotationsItemFileAttachmentActionsCursorExitWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
}
