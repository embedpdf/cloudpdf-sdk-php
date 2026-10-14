<?php

namespace CloudPDF\Types;

enum AnnotationPolygonMeasureRectilinearAreaItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
