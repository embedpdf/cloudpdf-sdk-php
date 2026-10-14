<?php

namespace CloudPDF\Types;

enum AnnotationPolylineMeasureRectilinearSlopeItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
