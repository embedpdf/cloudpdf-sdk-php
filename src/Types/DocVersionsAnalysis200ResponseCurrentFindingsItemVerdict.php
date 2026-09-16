<?php

namespace CloudPDF\Types;

enum DocVersionsAnalysis200ResponseCurrentFindingsItemVerdict: string
{
    case Permitted = "permitted";
    case Forbidden = "forbidden";
    case Incomplete = "incomplete";
}
