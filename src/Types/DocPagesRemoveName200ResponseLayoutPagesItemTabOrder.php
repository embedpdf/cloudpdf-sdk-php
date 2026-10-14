<?php

namespace CloudPDF\Types;

enum DocPagesRemoveName200ResponseLayoutPagesItemTabOrder: string
{
    case Rows = "rows";
    case Columns = "columns";
    case Structure = "structure";
    case Annotations = "annotations";
    case Widgets = "widgets";
}
