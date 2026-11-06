<?php

namespace CloudPDF\Types;

enum DocFormsListResponseFormKind: string
{
    case None = "none";
    case Acroform = "acroform";
    case Xfa = "xfa";
}
