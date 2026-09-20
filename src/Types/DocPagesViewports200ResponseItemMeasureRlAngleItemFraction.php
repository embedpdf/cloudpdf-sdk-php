<?php

namespace CloudPDF\Types;

enum DocPagesViewports200ResponseItemMeasureRlAngleItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
