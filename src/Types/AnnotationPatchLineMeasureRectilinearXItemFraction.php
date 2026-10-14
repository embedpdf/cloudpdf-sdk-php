<?php

namespace CloudPDF\Types;

enum AnnotationPatchLineMeasureRectilinearXItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
