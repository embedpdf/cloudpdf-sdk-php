<?php

namespace CloudPDF\Types;

enum DocVersionsAnalysis200ResponseVerdict: string
{
    case Unchanged = "unchanged";
    case Permitted = "permitted";
    case Forbidden = "forbidden";
    case Indeterminate = "indeterminate";
}
