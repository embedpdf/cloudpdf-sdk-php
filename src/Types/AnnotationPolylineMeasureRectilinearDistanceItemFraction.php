<?php

namespace CloudPDF\Types;

enum AnnotationPolylineMeasureRectilinearDistanceItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
