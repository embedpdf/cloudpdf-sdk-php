<?php

namespace CloudPDF\Types;

enum ChangeItemPagesSetScaleMeasureDistanceItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
