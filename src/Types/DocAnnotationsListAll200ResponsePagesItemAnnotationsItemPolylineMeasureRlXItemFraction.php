<?php

namespace CloudPDF\Types;

enum DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlXItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
