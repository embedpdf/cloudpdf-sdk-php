<?php

namespace CloudPDF\Types;

enum DocAnnotationsFlattenResponseResultsItemStatus: string
{
    case Applied = "applied";
    case Unchanged = "unchanged";
}
