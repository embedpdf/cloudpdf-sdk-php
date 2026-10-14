<?php

namespace CloudPDF\Types;

enum AnnotationDraftStampFit: string
{
    case Contain = "contain";
    case Cover = "cover";
    case Fill = "fill";
}
