<?php

namespace CloudPDF\Types;

enum AnnotationDraftLineMeasureRectilinearAreaItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
