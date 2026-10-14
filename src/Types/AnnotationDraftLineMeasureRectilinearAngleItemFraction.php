<?php

namespace CloudPDF\Types;

enum AnnotationDraftLineMeasureRectilinearAngleItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
