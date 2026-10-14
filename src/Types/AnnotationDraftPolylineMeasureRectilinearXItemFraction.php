<?php

namespace CloudPDF\Types;

enum AnnotationDraftPolylineMeasureRectilinearXItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
