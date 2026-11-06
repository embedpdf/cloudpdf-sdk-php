<?php

namespace CloudPDF\Types;

enum PdfMeasurementRectilinearXItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
