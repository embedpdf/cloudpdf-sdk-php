<?php

namespace CloudPDF\Types;

enum PdfMeasurementRectilinearSlopeItemFraction: string
{
    case Decimal = "decimal";
    case Fraction = "fraction";
    case Round = "round";
    case Truncate = "truncate";
}
