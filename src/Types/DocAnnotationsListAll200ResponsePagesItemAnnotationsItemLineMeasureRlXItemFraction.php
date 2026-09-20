<?php

namespace CloudPDF\Types;

enum DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlXItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
