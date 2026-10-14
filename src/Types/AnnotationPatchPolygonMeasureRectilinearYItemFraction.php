<?php

namespace CloudPDF\Types;

enum AnnotationPatchPolygonMeasureRectilinearYItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
