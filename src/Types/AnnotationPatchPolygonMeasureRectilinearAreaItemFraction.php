<?php

namespace CloudPDF\Types;

enum AnnotationPatchPolygonMeasureRectilinearAreaItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
