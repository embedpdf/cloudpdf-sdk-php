<?php

namespace CloudPDF\Types;

enum DocFormsList200ResponseFormKind: string
{
    case None = "none";
    case Acroform = "acroform";
    case Xfa = "xfa";
}
