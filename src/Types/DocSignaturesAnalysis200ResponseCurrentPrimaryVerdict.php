<?php

namespace CloudPDF\Types;

enum DocSignaturesAnalysis200ResponseCurrentPrimaryVerdict: string
{
    case Permitted = "permitted";
    case Forbidden = "forbidden";
    case Incomplete = "incomplete";
}
