<?php

namespace CloudPDF\Types;

enum AnnotationPatchStampFit: string
{
    case Contain = "contain";
    case Cover = "cover";
    case Fill = "fill";
}
