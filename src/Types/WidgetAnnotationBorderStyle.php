<?php

namespace CloudPDF\Types;

enum WidgetAnnotationBorderStyle: string
{
    case Solid = "solid";
    case Dashed = "dashed";
    case Beveled = "beveled";
    case Inset = "inset";
    case Underline = "underline";
}
