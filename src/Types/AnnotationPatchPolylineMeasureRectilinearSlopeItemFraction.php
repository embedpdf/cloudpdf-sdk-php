<?php

namespace CloudPDF\Types;

enum AnnotationPatchPolylineMeasureRectilinearSlopeItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
