<?php

namespace CloudPDF\Types;

enum AnnotationLineBorderStyle: string
{
    case Solid = "solid";
    case Dashed = "dashed";
    case Beveled = "beveled";
    case Inset = "inset";
}
