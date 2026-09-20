<?php

namespace CloudPDF\Types;

enum DocAnnotationsListAll200ResponsePagesItemAnnotationsItemLineMeasureRlAngleItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
