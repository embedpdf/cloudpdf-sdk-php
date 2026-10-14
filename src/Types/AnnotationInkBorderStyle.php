<?php

namespace CloudPDF\Types;

enum AnnotationInkBorderStyle: string
{
    case Solid = "solid";
    case Dashed = "dashed";
    case Beveled = "beveled";
    case Inset = "inset";
}
