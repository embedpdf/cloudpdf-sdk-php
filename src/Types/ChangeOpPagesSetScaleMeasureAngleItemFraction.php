<?php

namespace CloudPDF\Types;

enum ChangeOpPagesSetScaleMeasureAngleItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
