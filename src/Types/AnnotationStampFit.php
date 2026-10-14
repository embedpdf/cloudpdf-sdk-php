<?php

namespace CloudPDF\Types;

enum AnnotationStampFit: string
{
    case Contain = "contain";
    case Cover = "cover";
    case Fill = "fill";
}
