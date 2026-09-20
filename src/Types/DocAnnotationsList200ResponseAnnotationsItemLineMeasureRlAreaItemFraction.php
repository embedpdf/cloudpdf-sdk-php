<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlAreaItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
