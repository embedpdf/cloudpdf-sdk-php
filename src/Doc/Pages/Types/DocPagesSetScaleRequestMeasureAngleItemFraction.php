<?php

namespace CloudPDF\Doc\Pages\Types;

enum DocPagesSetScaleRequestMeasureAngleItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
