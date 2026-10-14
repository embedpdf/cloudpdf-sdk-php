<?php

namespace CloudPDF\Types;

enum AnnotationPolygonMeasureRectilinearAngleItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
