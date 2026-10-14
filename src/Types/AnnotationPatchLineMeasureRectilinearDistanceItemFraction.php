<?php

namespace CloudPDF\Types;

enum AnnotationPatchLineMeasureRectilinearDistanceItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
