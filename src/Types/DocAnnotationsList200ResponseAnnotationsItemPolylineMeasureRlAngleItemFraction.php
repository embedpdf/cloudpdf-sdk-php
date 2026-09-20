<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemPolylineMeasureRlAngleItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
