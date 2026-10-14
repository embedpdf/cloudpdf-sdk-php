<?php

namespace CloudPDF\Types;

enum AnnotationPolygonMeasureRectilinearSlopeItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
