<?php

namespace CloudPDF\Types;

enum AnnotationPolylineMeasureRectilinearXItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
