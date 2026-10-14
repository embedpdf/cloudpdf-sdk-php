<?php

namespace CloudPDF\Types;

enum AnnotationPatchLineMeasureRectilinearAngleItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
