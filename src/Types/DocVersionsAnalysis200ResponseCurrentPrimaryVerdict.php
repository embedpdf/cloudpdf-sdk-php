<?php

namespace CloudPDF\Types;

enum DocVersionsAnalysis200ResponseCurrentPrimaryVerdict: string
{
    case Permitted = "permitted";
    case Forbidden = "forbidden";
    case Incomplete = "incomplete";
}
