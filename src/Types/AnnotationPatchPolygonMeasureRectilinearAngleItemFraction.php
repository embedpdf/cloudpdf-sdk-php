<?php

namespace CloudPDF\Types;

enum AnnotationPatchPolygonMeasureRectilinearAngleItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
