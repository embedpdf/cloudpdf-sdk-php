<?php

namespace CloudPDF\Types;

enum PdfActionTreeWarningsItem: string
{
    case CycleDropped = "cycle-dropped";
    case MalformedNext = "malformed-next";
    case Incomplete = "incomplete";
    case PayloadDropped = "payload-dropped";
}
