<?php

namespace CloudPDF\Types;

enum DocPagesSetNameResponseLayoutPagesItemTabOrder: string
{
    case Rows = "rows";
    case Columns = "columns";
    case Structure = "structure";
    case Annotations = "annotations";
    case Widgets = "widgets";
}
