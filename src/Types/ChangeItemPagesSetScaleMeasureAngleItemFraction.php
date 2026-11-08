<?php

namespace CloudPDF\Types;

enum ChangeItemPagesSetScaleMeasureAngleItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
