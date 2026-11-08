<?php

namespace CloudPDF\Types;

enum ChangeOpPagesSetScaleMeasureDistanceItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
