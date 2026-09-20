<?php

namespace CloudPDF\Doc\Pages\Types;

enum DocPagesSetScaleRequestMeasureXItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
