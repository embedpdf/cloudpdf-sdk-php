<?php

namespace CloudPDF\Types;

enum DocRedactionsApplyResponseResultsItemStatus: string
{
    case Applied = "applied";
    case Unchanged = "unchanged";
}
