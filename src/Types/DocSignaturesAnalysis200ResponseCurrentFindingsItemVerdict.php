<?php

namespace CloudPDF\Types;

enum DocSignaturesAnalysis200ResponseCurrentFindingsItemVerdict: string
{
    case Permitted = "permitted";
    case Forbidden = "forbidden";
    case Incomplete = "incomplete";
}
