<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemLineMeasureRlSlopeItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
