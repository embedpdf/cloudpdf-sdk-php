<?php

namespace CloudPDF\Types;

enum DocAnnotationsListAll200ResponsePagesItemAnnotationsItemPolylineMeasureRlSlopeItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
