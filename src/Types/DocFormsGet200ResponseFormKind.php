<?php

namespace CloudPDF\Types;

enum DocFormsGet200ResponseFormKind: string
{
    case None = "none";
    case Acroform = "acroform";
    case Xfa = "xfa";
}
