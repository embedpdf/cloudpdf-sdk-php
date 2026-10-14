<?php

namespace CloudPDF\Types;

enum AnnotationPatchLineMeasureRectilinearSlopeItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
