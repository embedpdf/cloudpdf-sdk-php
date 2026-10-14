<?php

namespace CloudPDF\Types;

enum AnnotationLineMeasureRectilinearAngleItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
