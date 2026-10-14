<?php

namespace CloudPDF\Types;

enum AnnotationPatchLineMeasureRectilinearYItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
