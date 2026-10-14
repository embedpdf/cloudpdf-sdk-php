<?php

namespace CloudPDF\Types;

enum AnnotationPatchInkBorderStyleOne: string
{
    case Solid = "solid";
    case Dashed = "dashed";
    case Beveled = "beveled";
    case Inset = "inset";
}
