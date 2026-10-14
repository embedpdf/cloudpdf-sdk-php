<?php

namespace CloudPDF\Types;

enum AnnotationPatchPolylineMeasureRectilinearYItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
