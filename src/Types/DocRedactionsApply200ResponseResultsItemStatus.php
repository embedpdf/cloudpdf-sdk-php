<?php

namespace CloudPDF\Types;

enum DocRedactionsApply200ResponseResultsItemStatus: string
{
    case Applied = "applied";
    case Unchanged = "unchanged";
}
