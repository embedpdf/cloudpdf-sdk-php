<?php

namespace CloudPDF\Types;

enum AnnotationDraftPolylineMeasureRectilinearDistanceItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
