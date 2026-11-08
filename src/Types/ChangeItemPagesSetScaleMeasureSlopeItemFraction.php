<?php

namespace CloudPDF\Types;

enum ChangeItemPagesSetScaleMeasureSlopeItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
