<?php

namespace CloudPDF\Types;

enum AnnotationPolygonMeasureRectilinearDistanceItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
