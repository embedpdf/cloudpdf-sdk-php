<?php

namespace CloudPDF\Types;

enum DocPagesFlattenResponseResultsItemStatus: string
{
    case Applied = "applied";
    case Unchanged = "unchanged";
}
