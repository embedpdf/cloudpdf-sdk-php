<?php

namespace CloudPDF\Types;

enum AnnotationLineMeasureRectilinearXItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
