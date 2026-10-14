<?php

namespace CloudPDF\Types;

enum DocPagesViewports200ResponseViewportsItemMeasureRectilinearAreaItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
