<?php

namespace CloudPDF\Types;

enum ChangeOpPagesSetScaleMeasureXItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
