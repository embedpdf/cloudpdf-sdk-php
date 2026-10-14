<?php

namespace CloudPDF\Types;

enum AnnotationPatchLineMeasureRectilinearAreaItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
