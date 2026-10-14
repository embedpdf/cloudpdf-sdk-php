<?php

namespace CloudPDF\Types;

enum AnnotationDraftPolygonMeasureRectilinearYItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
