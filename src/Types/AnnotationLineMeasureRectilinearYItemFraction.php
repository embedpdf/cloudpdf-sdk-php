<?php

namespace CloudPDF\Types;

enum AnnotationLineMeasureRectilinearYItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
