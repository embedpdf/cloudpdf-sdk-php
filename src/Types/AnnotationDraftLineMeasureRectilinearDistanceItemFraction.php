<?php

namespace CloudPDF\Types;

enum AnnotationDraftLineMeasureRectilinearDistanceItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
