<?php

namespace CloudPDF\Types;

enum DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlYItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
